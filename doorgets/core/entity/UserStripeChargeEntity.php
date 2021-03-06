<?php

class UserStripeChargeEntity extends AbstractEntity
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
	* @type  : varchar
	* @size  : 255  
	*/
	protected $IdStripe; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $IdCharge; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $IdOrder; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $Status; 
	

	/**
	* @type  : int
	* @size  : 11  
	*/
	protected $Amount; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $Currency; 
	

	/**
	* @type  : text
	* @size  : 0  
	*/
	protected $Data; 
	

	/**
	* @type  : int
	* @size  : 11  
	*/
	protected $DateCreation; 
	

	/**
	* @type  : int
	* @size  : 11  
	*/
	protected $DateModification; 
 
	

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
	

	public function setIdStripe($IdStripe)
	{
		
		$this->IdStripe = $IdStripe;

		return $this;
	} 
	

	public function setIdCharge($IdCharge)
	{
		
		$this->IdCharge = $IdCharge;

		return $this;
	} 
	

	public function setIdOrder($IdOrder)
	{
		
		$this->IdOrder = $IdOrder;

		return $this;
	} 
	

	public function setStatus($Status)
	{
		
		$this->Status = $Status;

		return $this;
	} 
	

	public function setAmount($Amount)
	{
		
		$this->Amount = $Amount;

		return $this;
	} 
	

	public function setCurrency($Currency)
	{
		
		$this->Currency = $Currency;

		return $this;
	} 
	

	public function setData($Data)
	{
		
		$this->Data = $Data;

		return $this;
	} 
	

	public function setDateCreation($DateCreation)
	{
		
		$this->DateCreation = $DateCreation;

		return $this;
	} 
	

	public function setDateModification($DateModification)
	{
		
		$this->DateModification = $DateModification;

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
		
	public function getIdStripe()
	{
		return $this->IdStripe ;
	} 
		
	public function getIdCharge()
	{
		return $this->IdCharge ;
	} 
		
	public function getIdOrder()
	{
		return $this->IdOrder ;
	} 
		
	public function getStatus()
	{
		return $this->Status ;
	} 
		
	public function getAmount()
	{
		return $this->Amount ;
	} 
		
	public function getCurrency()
	{
		return $this->Currency ;
	} 
		
	public function getData()
	{
		return $this->Data ;
	} 
		
	public function getDateCreation()
	{
		return $this->DateCreation ;
	} 
		
	public function getDateModification()
	{
		return $this->DateModification ;
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
		
	public function getValidationIdStripe()
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
		
	public function getValidationIdCharge()
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
		
	public function getValidationIdOrder()
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
		
	public function getValidationStatus()
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
		
	public function getValidationAmount()
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
		
	public function getValidationCurrency()
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
		
	public function getValidationData()
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
		
	public function getValidationDateModification()
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
		    'IdStripe' =>  'id_stripe',            
		    'IdCharge' =>  'id_charge',            
		    'IdOrder' =>  'id_order',            
		    'Status' =>  'status',            
		    'Amount' =>  'amount',            
		    'Currency' =>  'currency',            
		    'Data' =>  'data',            
		    'DateCreation' =>  'date_creation',            
		    'DateModification' =>  'date_modification',		
		)); 

	} 


    public function __construct($data = array(),&$doorGets = null, $joinMaps = array()) {
        parent::__construct($data,$doorGets,$joinMaps);
    }
}