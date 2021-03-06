<?php

/*******************************************************************************
/*******************************************************************************
    doorGets 7.0 - 31, August 2015
    doorgets it's free PHP Open Source CMS PHP & MySQL
    Copyright (C) 2012 - 2015 By Mounir R'Quiba -> Crazy PHP Lover
    
/*******************************************************************************

    Website : http://www.doorgets.com
    Contact : http://www.doorgets.com/t/en/?contact
    
/*******************************************************************************
    -= One life, One code =-
/*******************************************************************************
    
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
    
******************************************************************************
******************************************************************************/


class DashboardView extends doorGetsUserView{
    
    public function __construct(&$doorgets) {
        
        parent::__construct($doorgets);
    }
    
    public function getContent() {
        
        $out = '';
        $User               = $this->doorGets->user;

        $lgActuel           = $this->doorGets->getLangueTradution();
        $_modules = array();
        $modules = $allModules = $this->doorGets->loadModules(true,true);

        $modulesBlocks      = $this->doorGets->loadModulesBlocks(true);
        $modulesGenforms    = $this->doorGets->loadModulesGenforms(true);

        $canAddType = array('blog','news','multipage','video','faq','image','partner','genform','translator','sharedlinks');
        $iCountContents = 0;
        
        foreach($modulesGenforms as $k => $v) {
            $modulesGenforms[$k]['count']    = $this->doorGets->getCountTable('_m_'.$v['uri']);
        }
        
        foreach($modules as $k => $v) {
            
            $_modules[$v['uri']] = $v;

            $allModules[$k]['url_edit'] = "?controller=modules&action=edit".$v['type']."&id=".$v['id'];
            
            if (!in_array($v['type'],$canAddType)) {
                
                unset($modules[$k]);
                $allModules[$k]['count']    = '';
                $allModules[$k]['url']      = "?controller=module".$v['type']."&uri=".$v['uri'];
                
                
            }else{
                
                $moduleInfos    = $this->doorGets->moduleInfos($this->doorGets->Uri,$lgActuel);
        
                (in_array($moduleInfos['id'], $User['liste_module_modo'])) ? $is_modo = true : $is_modo = false;
                (
                    in_array('module', $User['liste_module_interne'])  
                    && in_array('module_'.$moduleInfos['type'],  $User['liste_module_interne'])

                ) ? $is_modules_modo = true : $is_modules_modo = false;

                if (!$is_modo) {
                    $arrForCountSearchQuery = array();
                    $arrForCountSearchQuery[] = array('key'=>"id_user",'type'=>'=','value'=>$User['id']);
                }

                $allModules[$k]['count']    = $this->doorGets->getCountTable('_m_'.$v['uri'],$arrForCountSearchQuery);
                $allModules[$k]['url']      = "?controller=module".$v['type']."&uri=".$v['uri'];
                
            }
            
            if ($v['type'] === 'inbox') {
                
                $allModules[$k]['count']    = $this->doorGets->getCountTable('_dg_inbox',array(array('key'=>'uri_module','type'=>'=','value'=>$v['uri'])));
                $allModules[$k]['url']      = "?controller=inbox&q_uri_module=".$v['uri'];
            }
            
            
            $iCountContents += $allModules[$k]['count'];
        }
        
        $Rubriques = array(
            
            'index'         => $this->doorGets->__('Index de la page'),
            
        );
        
        // include config/modules.php 
        include CONFIG.'modules.php';
        
        $lastComments = $lastInbox = array();
        $iComments = $iInbox = 0;

        $is_inbox_modo = false;
        if (!empty($User) && in_array('inbox', $User['liste_module_interne'])) {
            $is_inbox_modo = true;
        }

        $is_comment_modo = false;
        if (!empty($User) && in_array('comment', $User['liste_module_interne'])) {
            $is_comment_modo = true;
        }
        
        if (array_key_exists($this->Action,$Rubriques) )
        {
            switch($this->Action) {
                
                case 'index':
                    
                    $urlHistory = URL.'ajax/?controller=history&action=getMyHistory';

                    $filterModules = array(
                        array('key'=>'type','type'=>'!=','value'=>'block'),
                    );
                    $filterValidation = array(
                        array('key'=>'validation','type'=>'=','value'=>'3'),
                    );
                    $filterActive = array(
                        array('key'=>'active','type'=>'=','value'=>'2'),
                    );
                    
                    if ($is_comment_modo) {
                        $iComments = $this->doorGets->getCountTable('_dg_comments');
                    }

                    if ($is_inbox_modo) {
                        $iInbox = $this->doorGets->getCountTable('_dg_inbox');
                    }

                    $iModules = count($allModules);
                    $iModulesBlocks = count($modulesBlocks);
                    $iModulesGenforms = count($modulesGenforms);

                    if ($is_comment_modo) {
                        $lastComments = $this->doorGets->dbQ("SELECT * FROM _dg_comments ORDER BY date_creation DESC LIMIT 10");
                    }
                    
                    if ($is_inbox_modo) {
                        $lastInbox = $this->doorGets->dbQ("SELECT * FROM _dg_inbox ORDER BY date_creation DESC LIMIT 10");
                    }

                    $UsersTrackQuery = new UsersTrackQuery($this->doorGets);
                    $UsersTrackQuery->filterByIdUser($this->doorGets->user['id'],'OR');

                    if (!empty($this->doorGets->user['liste_enfant_modo'])) {
                    
                        foreach ($this->doorGets->user['liste_enfant_modo'] as $idGroup) {
                    
                            $UsersTrackQuery->filterByIdGroupe($this->doorGets->user['liste_enfant_modo'],'OR');
                        }
                    }
                    
                    $UsersTrackQuery->orderByDate('desc')
                        ->limit(500)
                        ->find();

                    $history = array();
                    $usersTrackColletion = $UsersTrackQuery->_getEntities('array');
                    // echo '<pre>';
                    // var_dump($usersTrackColletion);
                    if( !empty($usersTrackColletion)) {

                        $_userInfos = array();
                        foreach ($usersTrackColletion as $k => $userTrack) {

                            if (array_key_exists($userTrack['uri_module'],$_modules)) {
                                
                                $typeModule = 'module'.$_modules[$userTrack['uri_module']]['type'];
                                if (!array_key_exists($userTrack['id_user'],$_userInfos)) {

                                    $userProfile = $this->doorGets->getProfileLight($userTrack['id_user']);

                                    if (empty($userProfile)) continue;
                                    $_userInfos[$userTrack['id_user']] = $userProfile;

                                }
                                
                                if (!empty($userProfile)) {
                                    $history[$k] = $userTrack;

                                    $history[$k]['user_infos'] = $_userInfos[$userTrack['id_user']];
                                    $editAction = '';
                                    if ($typeModule !== 'modulepage') {
                                        $editAction = '&action=edit&id='.$userTrack['id_content'];
                                    }
                                    $history[$k]['urlToGo'] = './?controller='.$typeModule.'&uri='.$userTrack['uri_module'].$editAction.'&lg='.$userTrack['langue'];
                                    $history[$k]['date'] = GetDate::before($userTrack['date'],$this->doorGets);
                                    //$history[$k]['date'] = GetDate::in($userTrack['date'],1,$this->doorGets->user['langue']);
                                    $history[$k]['title'] = html_entity_decode($history[$k]['title']);
                                    switch ($userTrack['action']) {
                                        
                                        case 'edit':
                                            $history[$k]['history'] = '<b>'.$userProfile['pseudo'].'</b> '.$this->doorGets->__('a modifié').' <a href="'.$history[$k]['urlToGo'].'"><b><em>'.$history[$k]['title'].'</em></b></a> '.$this->doorGets->__('dans').' <a href="./?controller='.$typeModule.'&uri='.$userTrack['uri_module'].'">'.$_modules[$userTrack['uri_module']]['label'].'</a>';
                                            break;
                                        
                                        case 'add':
                                            $history[$k]['history'] = '<b>'.$userProfile['pseudo'].'</b> '.$this->doorGets->__('a ajouté').' <a href="'.$history[$k]['urlToGo'].'"><b><em>'.$history[$k]['title'].'</em></b></a> '.$this->doorGets->__('dans').' <a href="./?controller='.$typeModule.'&uri='.$userTrack['uri_module'].'">'.$_modules[$userTrack['uri_module']]['label'].'</a>';
                                            break;
                                        
                                        case 'delete':
                                            $history[$k]['urlToGo'] = '';
                                            $history[$k]['history'] = '<b>'.$userProfile['pseudo'].'</b> '.$this->doorGets->__('a supprimé').' <b><em><del>'.$history[$k]['title'].'</del></em></b> '.$this->doorGets->__('dans').' <a href="./?controller='.$typeModule.'&uri='.$userTrack['uri_module'].'">'.$_modules[$userTrack['uri_module']]['label'].'</a>';
                                            break;
                                    } 
                                }
                                

                            } elseif (in_array($userTrack['uri_module'],array('translator'))) {

                                $typeModule = $userTrack['uri_module'];

                                if (!array_key_exists($userTrack['id_user'],$_userInfos)) {

                                    $userProfile = $this->doorGets->getProfileLight($userTrack['id_user']);
                                    if (empty($userProfile)) continue;
                                    $_userInfos[$userTrack['id_user']] = $userProfile;

                                }
                                
                                $history[$k] = $userTrack;

                                $history[$k]['user_infos'] = $_userInfos[$userTrack['id_user']];
                                $editAction = '';
                                if ($typeModule !== 'modulepage') {
                                    $editAction = '&action=edit&id='.$userTrack['id_content'];
                                }
                                $history[$k]['urlToGo'] = './?controller='.$typeModule.'&lg='.$userTrack['langue'].$editAction;
                                $history[$k]['date'] = GetDate::before($userTrack['date'],$this->doorGets);
                                //$history[$k]['date'] = GetDate::in($userTrack['date'],1,$this->doorGets->user['langue']);
                                $history[$k]['title'] = html_entity_decode($history[$k]['title']);
                                switch ($userTrack['action']) {
                                    
                                    case 'edit':
                                        $history[$k]['history'] = '<b>'.$userProfile['pseudo'].'</b> '.$this->doorGets->__('a modifié').' <a href="'.$history[$k]['urlToGo'].'"><b><em>'.$history[$k]['title'].'</em></b></a> '.$this->doorGets->__('dans').' <a href="./?controller='.$userTrack['uri_module'].'">'.$userTrack['uri_module'].'</a>';
                                        break;
                                    
                                    case 'add':
                                        $history[$k]['history'] = '<b>'.$userProfile['pseudo'].'</b> '.$this->doorGets->__('a ajouté').'<a href="'.$history[$k]['urlToGo'].'"><b><em>'.$history[$k]['title'].'</em></b></a> '.$this->doorGets->__('dans').' <a href="./?controller='.$userTrack['uri_module'].'">'.$userTrack['uri_module'].'</a>';
                                        break;
                                    
                                    case 'delete':
                                        $history[$k]['urlToGo'] = '';
                                        $history[$k]['history'] = '<b>'.$userProfile['pseudo'].'</b> '.$this->doorGets->__('a supprimé').' <b><em><del>'.$history[$k]['title'].'</del></em></b> '.$this->doorGets->__('dans').' <a href="./?controller='.$userTrack['uri_module'].'">'.$userTrack['uri_module'].'</a>';
                                        break;
                                }
                            }
                        }
                    }

                    break;
            }
            
            $ActionFile = 'user/dashboard/user_dashboard_'.$this->Action;
            
            $tpl = Template::getView($ActionFile);
            ob_start(); if (is_file($tpl)) { include $tpl; } $out .= ob_get_clean();
            
        }
        
        return $out;
        
    }
    
}
