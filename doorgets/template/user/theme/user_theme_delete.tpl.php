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
            <span class="create" ><a class="doorGets-comebackform" href="?controller=theme"><img src="[{!BASE_IMG!}]retour.png" class="Retour-img"> [{!$this->doorGets->__('Retour')!}]</a></span>
            <img src="[{!BASE_IMG!}]icone_theme.png" > <a href="?controller=theme">[{!$this->doorGets->__('Thème')!}] </a> 
             / [{!$this->doorGets->__('Supprimer')!}] / [{!$theme!}] [{?($nameTheme === $theme):}]<img src="[{!BASE_IMG.'activer.png'!}]"  />[?]
        </legend>
        
        [{?($countTheme > 1 && $nameTheme !== $theme):}]
        <div class="title-box alert alert-danger text-center">
            [{!$this->doorGets->__("Voulez vous supprimer le thème définitivement")!}] ?
        </div>
            [{!$this->doorGets->Form->open('post')!}]
            [{!$this->doorGets->Form->input('','theme','hidden',$theme)!}]
            <div class="text-center">
                [{!$this->doorGets->Form->submit($this->doorGets->__("Oui"),'','btn btn-success btn-lg')!}]
                <a href="[{!$this->doorGets->goBackUrl()!}]" class="btn btn-danger bnt-lg">[{!$this->doorGets->__("Non")!}]</a>     
            </div>
            [{!$this->doorGets->Form->close()!}]
        [??]
            <div class="alert alert-info">
                [{!$this->doorGets->__('Vous ne pouvez pas supprimer ce thème')!}].
            </div>
        [?]
    </div>
</div>
