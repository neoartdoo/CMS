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


class Cache{
    
    public $dir;
    public $duree;
    public $name;
    public $statut = 0;
    public $get = array();
    
    public function __construct($name,$duree= 30) {
        
        $this->dir = CACHE_DB;
        
        if (!is_dir($this->dir)) {
            
            @mkdir($this->dir, 0777, true);
            
        }
        
        $this->name = $this->dir.$name;
        $this->duree = $duree;
        
        
        if (file_exists($this->name)) {
            
            $this->statut = 1;
            $this->get = $this->lire();
            
        }
        
    }
    
    public function ecrire($content) {
        
        if (!empty($content)) {
            $contentOut = serialize($content);
            return file_put_contents($this->name,$contentOut);
        }
    }
    
    public function lire() {
        
        $fileContent = file_get_contents($this->name);
        return unserialize($fileContent);
        
    }
    
    public function clear() {
        
        if (file_exists($this->name)) {
            
            unlink($this->name);
            return true;
        
        }
        
        return false;
    }
    
    
    
}