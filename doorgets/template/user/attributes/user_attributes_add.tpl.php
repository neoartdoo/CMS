<?php if (!defined(DOORGETS)) { header('Location:../'); exit(); }

/*******************************************************************************
/*******************************************************************************
    doorGets 7.0 - 20, February 2014
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


$cGroupes = count($groupes) - 1;
unset($yesno[0]);

?>
<div class="doorGets-rubrique-center">
    <div class="doorGets-rubrique-center-content">
        <div class="doorGets-rubrique-left-center-title page-header">

        </div>
        <legend>
            <span class="create" ><a class="doorGets-comebackform" href="?controller=attributes"><img src="[{!BASE_IMG!}]retour.png" class="Retour-img"> [{!$this->doorGets->__('Retour');}]</a></span>
            <b class="glyphicon glyphicon-pushpin"></b> <a href="?controller=attributes">[{!$this->doorGets->__('Attributs')!}] </a> 
             / [{!$this->doorGets->__('Créer un attribut')!}] 
        </legend>
        [{?(!empty($cGroupes)):}]
    
            [{!$this->doorGets->Form->open('post','','');}]
            <div >
                <ul class="nav nav-tabs">
                    <li class="active" role="presentation" ><a data-toggle="tab" href="#tabs-1">[{!$this->doorGets->__('Information')!}]</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tabs-1">
                        [{!$this->doorGets->Form->select($this->doorGets->__('Actif').' <span class="cp-obli">*</span>','active',$yesno,2);}]
                        <div class="separateur-tb"></div>
                        [{!$this->doorGets->Form->select($this->doorGets->__("Champ obligatoire").' <span class="cp-obli">*</span>','required',$yesno);}]
                        <div class="separateur-tb"></div>
                        [{!$this->doorGets->Form->input($this->doorGets->__("Titre").' <span class="cp-obli">*</span>','title');}]
                        <div class="separateur-tb"></div>
                        [{!$this->doorGets->Form->input($this->doorGets->__("Clé").' <span class="cp-obli">*</span> <small style="font-weight:100;">('.$this->doorGets->__("Caractères alpha numérique seulement").')</small><br />','uri');}]
                        <div class="separateur-tb"></div> 
                        [{!$this->doorGets->Form->input($this->doorGets->__('Description'),'description');}]
                        <div class="separateur-tb"></div>
                        [{!$this->doorGets->Form->select($this->doorGets->__("Type").' <span class="cp-obli">*</span>','type',$typeField);}]
                        <div class="separateur-tb"></div>
                        <div class="filter-input-select-show">
                        [{!$this->doorGets->Form->input($this->doorGets->__('Saisir la liste des choix séparé par une virgule ').' <span class="cp-obli">*</span>','filter_select');}]
                        </div>
                        <div class="filter-input-text-show">
                        [{!$this->doorGets->Form->select($this->doorGets->__("Choisir un filtre").' <span class="cp-obli">*</span>',"filter",$this->doorGets->getArrayForms('input_filter'));}]
                        </div>
                        <div class="filter-input-file-show" style="display:none;">
                        [{/($this->doorGets->getArrayForms('input_file') as $format):}]
                            [{!$this->doorGets->Form->checkbox($format,"filter_file_$format",'1','checked')!}]
                        [/]
                        </div>
                    </div>
                </div>
            </div>
            <div class="separateur-tb"></div>
            <div class="text-center">
                [{!$this->doorGets->Form->submit($this->doorGets->__('Sauvegarder'))!}]
            </div>
            [{!$this->doorGets->Form->close();}]
            
        [??]
            <div class="alert alert-info">
                [{!$this->doorGets->__("Vous devez créer un groupe pour ajouter un attribut")!}]
            </div>
        [?]
    </div>
    <script type="text/javascript">
        $("#attributes_add_type").change(function() {

            if ($(this).val() !== 'text') {
                $('.filter-input-text-show').hide();
            }else{
                $('.filter-input-text-show').show();
            }

            if ($(this).val() !== 'file') {
                $('.filter-input-file-show').hide();
            }else{
                $('.filter-input-file-show').show();
            }

            if ($(this).val() === 'file' ||  $(this).val() === 'text') {
                $('.filter-input-select-show').hide();
            }else{
                $('.filter-input-select-show').show();
            }            

        });

        if ($("#attributes_add_type").val() === 'text') {
            $('.filter-input-file-show').hide();
            $('.filter-input-text-show').show();
        }

        if ($("#attributes_add_type").val() === 'file') {
            $('.filter-input-*').hide();
            $('.filter-input-file-show').show();
        }

        if ($("#attributes_add_type").val() === 'file' ||  $("#attributes_add_type").val() === 'text') {
            $('.filter-input-select-show').hide();
        }else{
            $('.filter-input-select-show').show();
        }            

    </script>
</div>