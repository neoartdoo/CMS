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
            <span class="create" > <a href="?controller=emailing&action=add"class="violet" ><b class="glyphicon glyphicon-plus"></b>  [{!$this->doorGets->__('Créer un contact')!}]</a></span>
            <span class="create">
                [{!$this->doorGets->Form['_tocsv']->open('post',$urlPageGo,'')!}]
                    <b class="glyphicon glyphicon-download-alt"></b>
                    [{!$this->doorGets->Form['_tocsv']->input('','i','hidden')!}]
                    [{!$this->doorGets->Form['_tocsv']->submit($this->doorGets->__('Exporter au format CSV'),'','btn doorGets-export-csv-bt')!}]
                [{!$this->doorGets->Form['_tocsv']->close('post')!}]
            </span>
            <b class="glyphicon violet glyphicon-send "></b> [{!$this->doorGets->__('Inscription à la newsletter')!}]
        </legend>
        <div class="width-listing">
            
                <div style="overflow: hidden;">
                    <div style="float: left;padding: 7px 0 ">
                        <i>
                            [{?(!empty($cAll)):}] [{!($ini+1)!}] [{!$this->doorGets->__("à")!}] [{!$finalPer!}] [{!$this->doorGets->__("sur")!}] [?]
                            <b>[{!$cResultsInt.' '!}] [{?( $cResultsInt > 1 ):}][{!$this->doorGets->__('Contacts')!}] [??] [{!$this->doorGets->__('Contact')!}] [?]</b>
                            [{?(!empty($q)):}] [{!$this->doorGets->__('pour la recherche : ').' <b>'.$q.'</b>'!}] [?]
                        </i>
                        <span id="doorGets-sort-count">
                            [{!$this->doorGets->__('Par')!}]
                            <a href="[{!$urlPagePosition!}]&gby=10" [{?($per=='10'):}] class="active" [?]>10</a>
                            <a href="[{!$urlPagePosition!}]&gby=20" [{?($per=='20'):}] class="active" [?]>20</a>
                            <a href="[{!$urlPagePosition!}]&gby=50" [{?($per=='50'):}] class="active" [?]>50</a>
                            <a href="[{!$urlPagePosition!}]&gby=100" [{?($per=='100'):}] class="active" [?]>100</a>
                        </span>
                         
                    </div>
                    <div  class="doorGets-box-search-module">
                        [{!$this->doorGets->Form['_search_filter']->open('post',$urlPageGo,'')!}]
                        [{!$this->doorGets->Form['_search_filter']->submit($this->doorGets->__('Chercher'),'','btn btn-success')!}]
                    <a href="?controller=[{!$this->doorGets->controllerNameNow()!}]&lg=[{!$lgActuel!}]" class="btn btn-danger doorGets-filter-bt" >[{!$this->doorGets->__('Reset')!}]</a>
                    </div>
                </div>
                <div class="separateur-tb"></div>
                [{!$block->getHtml()!}]
                [{!$this->doorGets->Form['_search']->close()!}]
                
            [{?(!empty($cAll)):}]

                [{!$formMassDelete!}]
                <div class="separateur-tb"></div>
                [{!$valPage!}]
                
            [??]
               
                [{?(!empty($aGroupeFilter)):}]
                    <div class="alert alert-danger">
                        [{!$this->doorGets->__("Aucun contact trouvé pour votre recherche");}]
                    </div>
                [??]
                    <div class="alert alert-danger">
                        [{!$this->doorGets->__("Il n'y a actuellement aucun contact")!}]
                    </div>
                [?]
                
            [?] 
        </div>

        
    </div>
</div>
