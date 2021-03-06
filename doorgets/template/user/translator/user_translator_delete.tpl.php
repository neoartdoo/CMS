<?php if (!defined(DOORGETS)) { header('Location:../'); exit(); }

/*******************************************************************************
/*******************************************************************************
    doorGets 7.0 - 31, August 2015
    doorGets it's free PHP Open Source CMS PHP & MySQL
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

 
?>
<div class="doorGets-rubrique-center">
    <div class="doorGets-rubrique-center-content">
        <div class="doorGets-rubrique-left-center-title page-header">

        </div>
        
        <legend>
            <span class="create" ><a class="doorGets-comebackform" href="[{!$this->doorGets->goBackUrl()!}]"><img src="[{!BASE_IMG!}]retour.png" class="Retour-img"> [{!$this->doorGets->__('Retour')!}]</a></span>
            <b class="glyphicon glyphicon-flag"></b> <a href="?controller=translator&lg=[{!$lgActuel!}]">[{!$this->doorGets->__('Traduction')!}]</a>  
             / [{!$isContent['sentence']!}]
        </legend>
        [{?($is_modules_modo):}]
            <div class="title-box alert alert-danger text-center">
                [{!$this->doorGets->__("Voulez vous supprimer cette phrase définitivement")!}] ?
            </div>
            [{!$this->doorGets->Form->open('post')!}]
            [{!$this->doorGets->Form->input('','id','hidden',$isContent['id_translator'])!}]
            
            <div class="separateur-tb"></div>
            <div class="text-center">
                [{!$this->doorGets->Form->submit($this->doorGets->__("Oui"),'','btn btn-success btn-lg')!}]
                <a href="[{!$this->doorGets->goBackUrl()!}]" class="btn btn-danger bnt-lg">[{!$this->doorGets->__("Non")!}]</a>     
            </div>
            
            [{!$this->doorGets->Form->close()!}]
        [??] 
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger text-center">
                        [{!$this->doorGets->__("Vous n'avez pas le droit de supprimer ce contenu")!}]. 
                    </div>
                    <div class="text-center">
                        <a class="btn btn-default" href="?controller=translator&lg=[{!$lgActuel!}]"><img src="[{!BASE_IMG!}]retour.png" class="Retour-img"> [{!$this->doorGets->__("Retour")!}]</a>
                    </div>      
                </div>
            </div>
        [?]
    </div>
</div>