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
[{!$this->doorGets->Form['_massdelete']->open('post','./?controller=emailing&action=massdelete','')!}]
[{!$this->doorGets->Form['_massdelete']->input('','groupe_delete','hidden')!}]
[{!$this->doorGets->Form['_massdelete']->submit($this->doorGets->__("Supprimer la séléction"),'','btn btn-danger btn-lg')!}] 
[{!$this->doorGets->Form['_massdelete']->close()!}]
    
    <script type="text/javascript">
        
        
        $("input.check-me-mass").click(function() {
            
            if ($(this).is(':checked')) {
                
                var valeur_hold = $("#emailing_massdelete_groupe_delete").val();
                var currentId = $(this).attr('id');
                var valeur_new = valeur_hold +  currentId + ",";
                $("#emailing_massdelete_groupe_delete").val(valeur_new);
                
            }else{
                
                var valeur_hold = $("#emailing_massdelete_groupe_delete").val();
                var currentId = $(this).attr('id');
                var replaceString =  currentId + ",";
                replaceString.toString();
                var valeur_new = valeur_hold.replace( replaceString , '' );
                $("#emailing_massdelete_groupe_delete").val(valeur_new);
                
            }
            
            if ($("input.check-me-mass").is(':checked')) { $("#emailing_massdelete_submit").fadeIn(); }
            else{ $("#emailing_massdelete_submit").hide(); }
            
        });
        
        if ($("input.check-me-mass").is(':checked')) { $("#emailing_massdelete_submit").fadeIn(); }
        else{ $("#emailing_massdelete_submit").hide(); }
        
    </script>