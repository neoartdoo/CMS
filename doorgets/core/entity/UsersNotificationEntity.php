<?php

class UsersNotificationEntity extends AbstractEntity
{

	

	/**
	* @type  : int
	* @size  : 11 
	* @key   : PRIMARY KEY 
	* @extra : AUTO INCREMENT
	*/
	protected $Id; 
	

	/**
	* @type  : int
	* @size  : 11  
	*/
	protected $IdUser; 
	

	/**
	* @type  : int
	* @size  : 11  
	*/
	protected $IdGroupe; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $IdSession; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $IpSession; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $UrlPage; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $UrlReferer; 
	

	/**
	* @type  : int
	* @size  : 11  
	*/
	protected $Date; 
 
	

	public function setId($Id)
	{
		
		$this->Id = $Id;

		return $this;
	} 
	

	public function setIdUser($IdUser)
	{
		
		$this->IdUser = $IdUser;

		return $this;
	} 
	

	public function setIdGroupe($IdGroupe)
	{
		
		$this->IdGroupe = $IdGroupe;

		return $this;
	} 
	

	public function setIdSession($IdSession)
	{
		
		$this->IdSession = $IdSession;

		return $this;
	} 
	

	public function setIpSession($IpSession)
	{
		
		$this->IpSession = $IpSession;

		return $this;
	} 
	

	public function setUrlPage($UrlPage)
	{
		
		$this->UrlPage = $UrlPage;

		return $this;
	} 
	

	public function setUrlReferer($UrlReferer)
	{
		
		$this->UrlReferer = $UrlReferer;

		return $this;
	} 
	

	public function setDate($Date)
	{
		
		$this->Date = $Date;

		return $this;
	} 

		
	public function getId()
	{
		return $this->Id ;
	} 
		
	public function getIdUser()
	{
		return $this->IdUser ;
	} 
		
	public function getIdGroupe()
	{
		return $this->IdGroupe ;
	} 
		
	public function getIdSession()
	{
		return $this->IdSession ;
	} 
		
	public function getIpSession()
	{
		return $this->IpSession ;
	} 
		
	public function getUrlPage()
	{
		return $this->UrlPage ;
	} 
		
	public function getUrlReferer()
	{
		return $this->UrlReferer ;
	} 
		
	public function getDate()
	{
		return $this->Date ;
	} 

		
	public function getValidationId()
	{
		return array(
			'type'	         => 'int', 
			'size'			 => 11, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => true,
			'auto_increment' => true
		);
	} 
		
	public function getValidationIdUser()
	{
		return array(
			'type'	         => 'int', 
			'size'			 => 11, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 
		
	public function getValidationIdGroupe()
	{
		return array(
			'type'	         => 'int', 
			'size'			 => 11, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 
		
	public function getValidationIdSession()
	{
		return array(
			'type'	         => 'varchar', 
			'size'			 => 255, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 
		
	public function getValidationIpSession()
	{
		return array(
			'type'	         => 'varchar', 
			'size'			 => 255, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 
		
	public function getValidationUrlPage()
	{
		return array(
			'type'	         => 'varchar', 
			'size'			 => 255, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 
		
	public function getValidationUrlReferer()
	{
		return array(
			'type'	         => 'varchar', 
			'size'			 => 255, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 
		
	public function getValidationDate()
	{
		return array(
			'type'	         => 'int', 
			'size'			 => 11, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 

	

	public function _getMap() { 

		
		$parentMap = parent::_getMap();

		return array_merge($parentMap, array(            
		    'Id' =>  'id',            
		    'IdUser' =>  'id_user',            
		    'IdGroupe' =>  'id_groupe',            
		    'IdSession' =>  'id_session',            
		    'IpSession' =>  'ip_session',            
		    'UrlPage' =>  'url_page',            
		    'UrlReferer' =>  'url_referer',            
		    'Date' =>  'date',		
		)); 

	} 


    public function __construct($data = array(),&$doorGets = null, $joinMaps = array()) {
        parent::__construct($data,$doorGets,$joinMaps);
    }
}