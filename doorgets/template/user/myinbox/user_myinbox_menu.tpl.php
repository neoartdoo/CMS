<?php if (!defined(DOORGETS)) { header('Location:../'); exit(); }

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



?>
        <legend>
            <span class="create ">
                <a href="?controller=myinbox&action=sent" [{?($this->Action == 'sent'):}]class="active"[?] ><b class="glyphicon glyphicon-send"></b> [{!$this->doorGets->__('Messages envoyés')!}]</a>
            </span>
            <span class="create">
                <a href="?controller=myinbox" [{?($this->Action == 'index'):}]class="active"[?]><b class="glyphicon glyphicon-inbox"></b> [{!$this->doorGets->__('Messages reçus')!}]</a>
            </span>
            <b class="glyphicon glyphicon-inbox"></b> [{!$this->doorGets->__('Boîte de réception')!}] 
        </legend>