<?php

/*******************************************************************************
/*******************************************************************************
    doorGets 7.0 - 20, February 2014
    doorGets it's free PHP Open Source CMS PHP & MySQL
    Copyright (C) 2012 - 2013 By Mounir R'Quiba -> Crazy PHP Lover
    
/*******************************************************************************

    Website : http://www.doorgets.com
    Contact : http://www.doorgets.com/t/en/?contact
    
/*******************************************************************************
    -= One life for One code =-
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



class TranslatorView extends doorGetsUserView{
    
    
    public function __construct(&$doorGets) {
        
        parent::__construct($doorGets);
        
    }
    
    public function getContent() {
        
        $out                = '';
        $User               = $this->doorGets->user;
        $lgActuel           = $this->doorGets->getLangueTradution(true);
        $allLanguages       = $this->doorGets->getAllLanguages();
        $isVersionActive    = false;
        $version_id         = 0;
        
        $lgToOther = $lgActuel;
        if (array_key_exists('lgother', $_GET) && array_key_exists($_GET['lgother'], $allLanguages)) {
            $lgToOther = filter_input(INPUT_GET, 'lgother', FILTER_SANITIZE_SPECIAL_CHARS);
        }

        // Check if is content modo
        (in_array('traduction', $User['liste_module_interne'])) ? $is_modo = true : $is_modo = false;

        // Check if is module modo
        (
            in_array('traduction', $User['liste_module_interne'])  
            && in_array('traduction_modo',  $User['liste_module_interne'])

        ) ? $is_modules_modo = true : $is_modules_modo = false;
        
        $Rubriques = array(
            
            'index'         => $this->doorGets->__('Media'),
            'add'           => $this->doorGets->__('Ajouter'),
            'tofile'        => '',
            'tobase'        => '',
            'edit'          => $this->doorGets->__('Editer'),
            'delete'        => $this->doorGets->__('Supprimer'),
            
        );
        
        // get Content for edit / delete
        $params = $this->doorGets->Params();
        if (array_key_exists('id',$params['GET'])) {
            
            $id = $params['GET']['id'];
            $isContent = $this->doorGets->dbQS($id,$this->doorGets->Table);
            if (!empty($isContent)) {
                
                if ($lgGroupe = @unserialize($isContent['groupe_traduction'])) {
                    
                    $idLgGroupe = $lgGroupe[$lgActuel];
                    
                    $isContentTraduction = $this->doorGets->dbQS($idLgGroupe,$this->doorGets->Table.'_traduction');
                      
                    if (!empty($isContentTraduction)) {
                        $isContent = array_merge($isContent,$isContentTraduction);
                        $this->isContent = $isContent;
                    }

                    $field = 'sentence';

                    $idNextContent      = $this->doorGets->getContentPaginatePosition($field,$isContent['sentence']);
                    $idPreviousContent  = $this->doorGets->getContentPaginatePosition($field,$isContent['sentence'],'prev');
                    
                    $urlPrevious = '';
                    if (!empty($idPreviousContent)) {
                        $urlPrevious = '?controller='.$this->doorGets->controllerNameNow().'&action=edit&lg='.$lgActuel.'&id='.$idPreviousContent;
                    }
                    $urlNext = '';
                    if (!empty($idNextContent)) {
                        $urlNext = '?controller='.$this->doorGets->controllerNameNow().'&action=edit&lg='.$lgActuel.'&id='.$idNextContent;
                    }

                    $arrForCountSearchQuery = array();
                    $arrForCountSearchQuery[] = array('key'=>$this->doorGets->Table.'.id','type'=>'!=!','value'=>$this->doorGets->Table.'_traduction.id_translator');
                    $arrForCountSearchQuery[] = array('key'=>$this->doorGets->Table.'_traduction.langue','type'=>'=','value'=>$lgActuel);
                    
                    $tAll = $this->doorGets->Table.', '.$this->doorGets->Table.'_traduction';
                    $countTotal = $this->doorGets->getCountTable($tAll,$arrForCountSearchQuery);

                    $position = $this->doorGets->getContentPosition($field,$isContent['sentence']);
                }
                
            }
            
        }

        if (array_key_exists('version',$params['GET']) && $is_modo) {

            $version_id = $params['GET']['version'];
            $isContentVesion = $this->getVersionById($version_id,$isContent);

            if (!empty($isContentVesion)) {

                $this->isConten = $isContent = array_merge($isContent,$isContentVesion);
                $isVersionActive    = true;
                
            }
            
        }
        
        $yesno = $this->doorGets->getArrayForms();
        
        if (array_key_exists($this->Action,$Rubriques) )
        {
            switch($this->Action) {
                
                case 'index':
                    
                    $q = '';
                    $urlSearchQuery = '';
                    
                    $p = 1;
                    $ini = 0;
                    $per = 50;
                    
                    $isFieldArray       = array(
                        
                        "sentence"=>$this->doorGets->__('Phrase'),
                        "translated_sentence"=>$this->doorGets->__('Traduction'),
                        "is_translated"=>$this->doorGets->__('Traduit'),
                    );
                    
                    $isFieldArraySort   = array('sentence','translated_sentence','is_translated');
                    $isInClassicTable   = array('sentence');
                    $isFieldArraySearch = array('sentence','translated_sentence','is_translated');
                    $isFieldArraySearchType = array(
                        
                        'sentence'              => array('type' =>'text','value'=>''),
                        'translated_sentence'   => array('type' =>'text','value'=>''),
                        'is_translated'         => array('type' =>'select','value'=>$yesno),
                    );
                    
                    $isFieldArrayDate   = array('date_creation');
                    
                    $urlOrderby         = '&orderby='.$isFieldArraySort[0];
                    $urlSearchQuery     = '';
                    $urlSort            = '&asc';
                    $urlLg              = '&lg='.$lgActuel.'&lgother='.$lgToOther;
                    $urlCategorie       = '';
                    $urlGroupBy         = '&gby='.$per;
                    
                    // Init table query
                    $tAll = $this->doorGets->Table.', '.$this->doorGets->Table.'_traduction'; 
                    
                    // Create query search for mysql
                    $sqlLabelSearch = '';
                    $arrForCountSearchQuery = array();
                    $arrForCountSearchQuery[] = array('key'=>$this->doorGets->Table.'.id','type'=>'!=!','value'=>$this->doorGets->Table.'_traduction.id_translator');
                    $arrForCountSearchQuery[] = array('key'=>$this->doorGets->Table.'_traduction.langue','type'=>'=','value'=>$lgActuel);
                    
                    // Init Query Search
                    $aGroupeFilter = array();
                    if (!empty($isFieldArraySearch)) {

                        // Récupére les paramêtres du get et post pour la recherche par filtre
                        foreach($isFieldArraySearch as $v)
                        {
                            $valueQP = '';
                            if (
                                array_key_exists('doorGets_search_filter_q_'.$v,$params['GET'])
                                && !empty($params['GET']['doorGets_search_filter_q_'.$v])
                            ) {
                                $valueQP = trim($params['GET']['doorGets_search_filter_q_'.$v]);
                                $aGroupeFilter['doorGets_search_filter_q_'.$v] = $valueQP;
                                
                            }
                            
                            if (
                                array_key_exists('doorGets_search_filter_q_'.$v,$params['POST'])
                                && !array_key_exists('doorGets_search_filter_q_'.$v,$params['GET'])
                                && !empty($params['POST']['doorGets_search_filter_q_'.$v])
                            ) {
                                
                                $valueQP = trim($params['POST']['doorGets_search_filter_q_'.$v]);
                                $aGroupeFilter['doorGets_search_filter_q_'.$v] = $valueQP;
                                
                            }
                            
                            if (
                                ( array_key_exists('doorGets_search_filter_q_'.$v,$params['GET'])
                                    && !empty($params['GET']['doorGets_search_filter_q_'.$v])
                                )
                                ||
                                ( array_key_exists('doorGets_search_filter_q_'.$v,$params['POST'])
                                    && !array_key_exists('doorGets_search_filter_q_'.$v,$params['GET'])
                                    && !empty($params['POST']['doorGets_search_filter_q_'.$v])
                                )
                            ) {
                                
                                
                                if (!empty($valueQP)) {
                                    
                                    $valEnd = str_replace('_start','',$v);
                                    $valEnd = str_replace('_end','',$v);
                                    
                                    if (in_array($valEnd,$isFieldArrayDate)) {
                                        if (
                                            array_key_exists('doorGets_search_filter_q_'.$v,$params['GET'])
                                            && !empty($params['GET']['doorGets_search_filter_q_'.$v])
                                       ) {
                                            $fromFormat = trim($params['GET']['doorGets_search_filter_q_'.$valEnd.'_start']);
                                            $toFormat = trim($params['GET']['doorGets_search_filter_q_'.$valEnd.'_end']);
                                            
                                        }else{
                                            $fromFormat = trim($params['POST']['doorGets_search_filter_q_'.$valEnd.'_start']);
                                            $toFormat = trim($params['POST']['doorGets_search_filter_q_'.$valEnd.'_end']);
                                        }
                                        
                                        
                                        if (!empty($fromFormat))
                                        { $from = strtotime($fromFormat);  }
                                        
                                        if (!empty($toFormat))
                                        {  $to = strtotime($toFormat); $to = $to + ( 60 * 60 * 24 ); }
                                        
                                        if (strlen(str_replace('_end','',$v)) !== strlen($v)) {
                                            
                                            $nameTable = $this->doorGets->Table.".".$valEnd;
                                            
                                            $sqlLabelSearch .= $nameTable." >= $from AND ";
                                            $sqlLabelSearch .= $nameTable." <= $to AND ";
                                            
                                            $arrForCountSearchQuery[] = array('key'=>$nameTable,'type'=>'>','value'=>$from);
                                            $arrForCountSearchQuery[] = array('key'=>$nameTable,'type'=>'<','value'=>$to);
                                            
                                            $urlSearchQuery .= '&doorGets_search_filter_q_'.$valEnd.'_end='.$toFormat;
                                        }
                                        
                                    }else{
                                        
                                        if (in_array($v,$isFieldArraySort)) {
                                            
                                            if (!in_array($v, $isInClassicTable)) {
                                                
                                                $sqlLabelSearch .= $this->doorGets->Table."_traduction.".$v." LIKE '%".$valueQP."%' AND ";
                                                $arrForCountSearchQuery[] = array('key'=>$this->doorGets->Table."_traduction.".$v,'type'=>'like','value'=>$valueQP);
                                            
                                            }else{
                                                
                                                $sqlLabelSearch .= $this->doorGets->Table.".".$v." LIKE '%".$valueQP."%' AND ";
                                                $arrForCountSearchQuery[] = array('key'=>$this->doorGets->Table.".".$v,'type'=>'like','value'=>$valueQP);
                                            
                                            }
                                            
                                        }
                                        
                                        $urlSearchQuery .= '&doorGets_search_filter_q_'.$valEnd.'='.$valueQP;
                                        
                                    }
                                }
                            }
                        }

                        // préparation de la requête mysql
                        if (!empty($sqlLabelSearch)) {
                            
                            $sqlLabelSearch = substr($sqlLabelSearch,0,-4);
                            $sqlLabelSearch = " AND ( $sqlLabelSearch ) ";
                            
                        }
                        
                    }
                    
                    // Init Group By
                    if (
                        array_key_exists('gby',$params['GET'])
                        && is_numeric($params['GET']['gby'])
                        && $params['GET']['gby'] < 300
                   ) {
                        
                        $per        = $params['GET']['gby'];
                        $urlGroupBy = '&gby='.$per;
                    }
                    // Init count total fields
                    $cResultsInt = $this->doorGets->getCountTable($tAll,$arrForCountSearchQuery);
                    
                    // Init categorie
                    $sqlCategorie = '';
                    
                    // Init sort 
                    $getDesc = 'ASC';
                    $getSort = '&desc';
                    if (isset($_GET['desc']))
                    {
                        $getDesc = 'DESC';
                        $getSort = '&asc';
                        $urlSort = '&desc';
                    }
                    
                    // Init filter for order by 
                    $outFilterORDER = $this->doorGets->Table.'.sentence  '.$getDesc;
                    
                    $getFilter = '';
                    if (
                        array_key_exists('orderby',$params['GET'])
                        && !empty($params['GET']['orderby'])
                        && in_array($params['GET']['orderby'],$isFieldArraySort)
                    ) {
                        
                        $getFilter      = $params['GET']['orderby'];
                        
                        $outFilterORDER = $this->doorGets->Table.'_traduction.'.$getFilter.'  '.$getDesc;
                            
                        // Execption for field that not in traduction table
                        if (in_array($getFilter,$isInClassicTable) )
                        {
                            $outFilterORDER = $this->doorGets->Table.'.'.$getFilter.'  '.$getDesc;
                        }

                        $urlOrderby     = '&orderby='.$getFilter;
                        
                    }
                    
                    // Init page position
                    if (
                        array_key_exists('page',$params['GET'])
                        && is_numeric($params['GET']['page'])
                        && $params['GET']['page'] <= (ceil($cResultsInt / $per))
                   ) {
                        
                        $p = $params['GET']['page'];
                        $ini = $p * $per - $per;
                    }
                    
                    $finalPer = $ini+$per;
                    if ($finalPer >  $cResultsInt) {
                        $finalPer = $cResultsInt;
                    }
                    
                    // Create sql query for transaction
                    $outSqlGroupe = " WHERE ".$this->doorGets->Table.".id = ".$this->doorGets->Table."_traduction.id_translator AND ".$this->doorGets->Table."_traduction.langue ='$lgActuel' ".$sqlLabelSearch;
                    $sqlLimit = " $outSqlGroupe ORDER BY $outFilterORDER  LIMIT ".$ini.",".$per;
                    
                    // Create url to go for pagination
                    $urlPage = "./?controller=".$this->doorGets->controllerNameNow().$urlCategorie.$urlOrderby.$urlSearchQuery.$urlSort.$urlGroupBy.$urlLg.'&page=';
                    $urlPagePosition = "./?controller=".$this->doorGets->controllerNameNow().$urlCategorie.$urlOrderby.$urlSearchQuery.$urlSort.$urlLg.'&page='.$p;
                    // Generate the pagination system
                    $valPage = '';
                    if ($cResultsInt > $per) {
                        
                        $valPage = Pagination::page($cResultsInt,$p,$per,$urlPage);
                        
                    }
                    
                    // Select all contents / Query SQL
                    $all = $this->doorGets->dbQA($tAll,$sqlLimit);
                    $cAll = count($all);
                    
                    /**********
                     *
                     *  Start block creation for listing fields
                     * 
                     **********/
                    
                    $block = new BlockTable();
                    
                    $imgTop = '<div class="d-top"></div>';
                    $imgBottom= '<div class="d-bottom"></div>';
                    $block->setClassCss('doorgets-listing');
                    
                    $iPos = 0;
                    $dgSelMass = '';
                    $urlPage = "./?controller=".$this->doorGets->controllerNameNow().'&lg='.$lgActuel."&page=";
                    $urlPageGo = './?controller='.$this->doorGets->controllerNameNow().'&lg='.$lgActuel;
                    
                    foreach($isFieldArray as $fieldName=>$fieldNameLabel) {
                        
                        $_css   = '_css_'.$fieldName;
                        $_img   = '_img_'.$fieldName;
                        $_desc  = '_desc_'.$fieldName;
                        
                        $$_css = $$_img = $$_desc = $leftFirst = '';
                        
                        if (
                            $getFilter === $fieldName
                            || ( empty($getFilter) && $fieldName === $isFieldArraySort[0] )
                       ) {
                            $$_css = ' class="green" ';
                            $$_img = $imgTop;
                            $$_desc = $getSort;
                            if ($getDesc === 'ASC') {
                                $$_img = $imgBottom;
                                $$_desc = '';
                            }
                        }
                        
                        if ($iPos === 0) {
                            $leftFirst = 'first-title left';
                        }
                        
                        $dgLabel = $fieldNameLabel;

                        if (in_array($fieldName,$isFieldArraySort))
                        {
                            
                            $dgLabel = '<a href="'.$urlPageGo.'&orderby='.$fieldName.$urlSearchQuery.'&gby='.$per.$$_desc.'" '.$$_css.'  >'.$$_img.$fieldNameLabel.'</a>';
                        }
                        
                        if ($fieldName === 'translated_sentence') {

                            //$dgLabel .= $this->doorGets->genLangueMenuAdminTraduction();
                            $dgLabelOther = $fieldNameLabel.$this->doorGets->genLangueMenuAdminOtherTraduction();
                            $helpLabel = ' <small>('.$this->doorGets->__('Autre').')</small>';
                            $block->addTitle($dgLabel,$fieldName,"$leftFirst td-title center");
                            $block->addTitle($dgLabelOther.$helpLabel,'translated_sentence_other','td-title');
                        
                        } else {
                        
                            $block->addTitle($dgLabel,$fieldName,"$leftFirst td-title center");
                        }

                        
                        $iPos++;
                        
                    }
                    
                    $block->addTitle('','edit','td-title');
                    if ($is_modules_modo) {
                        $block->addTitle('','delete','td-title');
                    }
                    
                    // Search
                    
                    $outFilter = '';
                    foreach($isFieldArraySearchType as $nameField => $value) {
                        
                        $nameFieldVal   = 'valFilter'.ucfirst($nameField);
                        $sNameFieldVar  = 'sFilter'.ucfirst($nameField);
                        
                        $keyNameField   = 'q_'.$nameField;
                        $keyNameFieldVal   = 'q_'.$nameField;
                        
                        $$nameFieldVal  = '';
                        
                        if (array_key_exists($keyNameField,$aGroupeFilter)) {
                            $$nameFieldVal = $aGroupeFilter[$keyNameField];
                        }
                        
                        switch($value['type']) {
                            
                            case 'text':
                                
                                $$sNameFieldVar = $this->doorGets->Form['_search_filter']->input('',$keyNameFieldVal,'text',$$nameFieldVal);
                                
                                break;
                            case 'select':
                                
                                $$sNameFieldVar  = $this->doorGets->Form['_search_filter']->select('',$keyNameFieldVal,$value['value'],$$nameFieldVal);
                                
                                break;
                            
                        }
                        
                        if ($nameField === 'translated_sentence') {

                            $block->addContent($nameField,$$sNameFieldVar);
                            $block->addContent('translated_sentence_other','');

                        } else {

                            $block->addContent($nameField,$$sNameFieldVar);
                        }
                    }
                    
                    $block->addContent('edit','--','center');
                    if ($is_modules_modo) {
                        $block->addContent('delete','--','center');
                    }
                    
                    // end Seach
                    
                    if (empty($cAll)) {
                        
                        foreach($isFieldArraySearchType as $nameField => $value) {
                            $block->addContent($nameField,'' );
                        }

                        $block->addContent('edit','','text-center');
                        if ($is_modules_modo) {
                            $block->addContent('delete','','text-center');
                        }
                    }
                    
                    for($i=0;$i<$cAll;$i++) {
                        
                        $urlId  = $all[$i]["id_translator"];
                        $gourpeLg = unserialize($all[$i]['groupe_traduction']);

                        $idOtherLg = $gourpeLg[$lgToOther];

                        $isOtherContentTraduction = $this->doorGets->dbQS($idOtherLg,$this->doorGets->Table.'_traduction');
                        if (empty($isOtherContentTraduction)) {
                            $isOtherContentTraduction["translated_sentence"] = '';
                        }

                        $urlDelete      = '<a title="'.$this->doorGets->__('Supprimer').'" href="./?controller='.$this->doorGets->controllerNameNow().'&action=delete&id='.$all[$i]['id_translator'].'&lg='.$lgActuel.'&lgother='.$lgToOther.'"><b class="glyphicon glyphicon-remove red"></b></a>';
                        $urlEdit        = '<a title="'.$this->doorGets->__('Modifier').'" href="./?controller='.$this->doorGets->controllerNameNow().'&action=edit&id='.$all[$i]['id_translator'].'&lg='.$lgActuel.'&lgother='.$lgToOther.'"><b class="glyphicon glyphicon-pencil green-font"></b></a>';
                        
                        foreach($isFieldArraySearchType as $nameField => $value) {
                            
                            $css = '';
                            
                            if ($nameField === 'is_translated') {
                                $css = 'tb-30 text-center';
                                if (array_key_exists($all[$i][$nameField], $yesno)) {
                                    $all[$i][$nameField] = $yesno[$all[$i][$nameField]]; 
                                }
                                
                                $block->addContent($nameField, $all[$i][$nameField],$css);

                            } elseif ($nameField === 'translated_sentence') {

                                $block->addContent($nameField, $all[$i][$nameField],$css);
                                $block->addContent('translated_sentence_other', $isOtherContentTraduction["translated_sentence"],$css);
                            
                            } else {

                                //$all[$i][$nameField] = $this->doorGets->_truncate($all[$i][$nameField],'50');
                                //$all[$i][$nameField] = '<a title="'.$this->doorGets->__('Modifier').'" href="./?controller='.$this->doorGets->controllerNameNow().'&action=edit&id='.$all[$i]['id_translator'].'&lg='.$lgActuel.'">'.$all[$i][$nameField].'</a>'; 
                                $block->addContent($nameField, $all[$i][$nameField],$css);
                            }

                        }
                        
                        $block->addContent('edit',$urlEdit,'tb-30 text-center');
                        if ($is_modules_modo) {
                            $block->addContent('delete',$urlDelete,'tb-30 text-center');
                        }
                    }
                    
                    $formMassDelete = '';
                    
                    $fileFormMassDelete = 'user/'.$this->doorGets->controllerNameNow().'/user_'.$this->doorGets->controllerNameNow().'_massdelete_form';
                    $tplFormMassDelete = Template::getView($fileFormMassDelete);
                    ob_start(); if (is_file($tplFormMassDelete)) { include $tplFormMassDelete;} $formMassDelete = ob_get_clean();
                    
                    /**********
                     *
                     *  End block creation for listing fields
                     * 
                     */
                    
                    
                    break;

                case 'delete':

                    $htmlCanotDelete = '';
                    $fileCanotDelete = 'modules/'.$this->doorGets->zoneArea().'_canot_delete';
                    $tplCanotDelete = Template::getView($fileCanotDelete);
                    ob_start(); if (is_file($tplCanotDelete)) { include $tplCanotDelete;} $htmlCanotDelete = ob_get_clean();

                    break;
                
                case 'edit': 

                    $cVersion = $this->getCountVersion();
                    $versions = $this->getAllVersion();

                    $url = "?controller=translator&action=edit&id=".$isContent['id_translator']."&lg=".$lgActuel;

                    $yesno = $this->doorGets->getArrayForms();
                    unset($yesno[0]);

                    $lgToTranslate = $lgActuel;
                    if ($lgToTranslate === 'tu') { $lgToTranslate = 'tr'; }
                    if ($lgToTranslate === 'po') { $lgToTranslate = 'pt'; }
                    if ($lgToTranslate === 'su') { $lgToTranslate = 'sv'; }
                    if ($lgToTranslate === 'cn') { $lgToTranslate = 'zh-CN'; }
                    
                    $googleTranslateUrl = '<a href="https://translate.google.com/#fr/'.$lgToTranslate.'/'.urlencode($isContent['sentence']).'" target="blank">'.$isContent['sentence'].' <b class="glyphicon glyphicon-share-alt"></b></a>';

                    break;

                case 'tofile':
                    $urlPageGo = './?controller='.$this->doorGets->controllerNameNow().'&action=tofile';
                    break;
                case 'tobase':
                    $urlPageGo = './?controller='.$this->doorGets->controllerNameNow().'&action=tobase';
                    break;
            }

            $ActionFile = 'user/'.$this->doorGets->controllerNameNow().'/user_'.$this->doorGets->controllerNameNow().'_'.$this->Action;
            
            $tpl = Template::getView($ActionFile);
            ob_start(); if (is_file($tpl)) { include $tpl; } $out .= ob_get_clean();
            
        }
        
        return $out;
        
    }
    
    public function getCountVersion() {

        $lgActuel = $this->doorGets->getLangueTradution();

        $filter = array(
            array('key'=>'id_content','type'=>'=','value'=>$this->isContent['id_translator']),
            array('key'=>'langue','type'=>'=','value'=>$lgActuel),
        );

        
        return $this->doorGets->getCountTable($this->doorGets->Table.'_version',$filter);

    }

    public function getAllVersion() {

        $lgActuel   = $this->doorGets->getLangueTradution();
        $filter     = " WHERE id_content = '".$this->isContent['id_translator']."' AND langue='".$lgActuel."' ORDER BY id DESC LIMIT 500";

        return $this->doorGets->dbQA($this->doorGets->Table.'_version',$filter);

    }

    public function getVersionById($version_id,$content= array()) {

        $lgActuel   = $this->doorGets->getLangueTradution();
        $isContentVesion = $this->doorGets->dbQS($version_id,$this->doorGets->Table.'_version');

        if (!empty($isContentVesion) && $isContentVesion['langue'] === $lgActuel) {
            foreach ($isContentVesion as $key => $value) {
                if (array_key_exists($key, $content)) {
                    $content[$key] = $isContentVesion[$key];
                }
            }
            return $isContentVesion;
        }

        return array();

    }
    
}
