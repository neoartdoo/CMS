<?php

class DgNewsletterEntity extends AbstractEntity
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
	protected $Nom; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $Email; 
	

	/**
	* @type  : text
	* @size  : 0  
	*/
	protected $Description; 
	

	/**
	* @type  : int
	* @size  : 11  
	*/
	protected $Newsletter; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $ClientIp; 
	

	/**
	* @type  : int
	* @size  : 11  
	*/
	protected $DateCreation; 
 
	

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
	

	public function setNom($Nom)
	{
		
		$this->Nom = $Nom;

		return $this;
	} 
	

	public function setEmail($Email)
	{
		
		$this->Email = $Email;

		return $this;
	} 
	

	public function setDescription($Description)
	{
		
		$this->Description = $Description;

		return $this;
	} 
	

	public function setNewsletter($Newsletter)
	{
		
		$this->Newsletter = $Newsletter;

		return $this;
	} 
	

	public function setClientIp($ClientIp)
	{
		
		$this->ClientIp = $ClientIp;

		return $this;
	} 
	

	public function setDateCreation($DateCreation)
	{
		
		$this->DateCreation = $DateCreation;

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
		
	public function getNom()
	{
		return $this->Nom ;
	} 
		
	public function getEmail()
	{
		return $this->Email ;
	} 
		
	public function getDescription()
	{
		return $this->Description ;
	} 
		
	public function getNewsletter()
	{
		return $this->Newsletter ;
	} 
		
	public function getClientIp()
	{
		return $this->ClientIp ;
	} 
		
	public function getDateCreation()
	{
		return $this->DateCreation ;
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
		
	public function getValidationNom()
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
		
	public function getValidationEmail()
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
		
	public function getValidationDescription()
	{
		return array(
			'type'	         => 'text', 
			'size'			 => 0, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 
		
	public function getValidationNewsletter()
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
		
	public function getValidationClientIp()
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
		
	public function getValidationDateCreation()
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
		    'Nom' =>  'nom',            
		    'Email' =>  'email',            
		    'Description' =>  'description',            
		    'Newsletter' =>  'newsletter',            
		    'ClientIp' =>  'client_ip',            
		    'DateCreation' =>  'date_creation',		
		)); 

	} 


    public function __construct($data = array(),&$doorGets = null, $joinMaps = array()) {
        parent::__construct($data,$doorGets,$joinMaps);
    }
}