<?php

class UsersGroupesAttributesValuesQuery extends AbstractQuery 
{

	protected $_table = '_users_groupes_attributes_values';
    
    protected $_className = 'UsersGroupesAttributesValues';

    public function __construct(&$doorGets = null) {
        parent::__construct($doorGets);
    }

	protected $_pk = 'id';

	public function _getPk() {
		return $this->_pk;
	} 

	public function findByPK($Id)
	{
		$this->_findBy['Id'] =  $Id;

		$this->_load();
		return $this;
	} 
		
	public function findById($Id)
	{
		$this->_findBy['Id'] =  $Id;

		$this->_load();
		return $this;
	} 
		
	public function findRangeById($from,$to)
	{
		$this->_findRangeBy['Id'] =  array(
			'from' => $from,
			'to'   => $to
		);

		$this->_load();
		return $this;
	} 


	public function findGreaterThanById($int)
	{
		$this->_findGreaterThanBy['Id'] = $int;

		$this->_load();
		return $this;
	} 


	public function findLessThanById($int)
	{
		$this->_findLessThanBy['Id'] = $int;

		$this->_load();
		return $this;
	} 
		
	public function findByIdUser($IdUser)
	{
		$this->_findBy['IdUser'] =  $IdUser;

		$this->_load();
		return $this;
	} 
		
	public function findRangeByIdUser($from,$to)
	{
		$this->_findRangeBy['IdUser'] =  array(
			'from' => $from,
			'to'   => $to
		);

		$this->_load();
		return $this;
	} 


	public function findGreaterThanByIdUser($int)
	{
		$this->_findGreaterThanBy['IdUser'] = $int;

		$this->_load();
		return $this;
	} 


	public function findLessThanByIdUser($int)
	{
		$this->_findLessThanBy['IdUser'] = $int;

		$this->_load();
		return $this;
	} 
		
	public function findByIdAttribute($IdAttribute)
	{
		$this->_findBy['IdAttribute'] =  $IdAttribute;

		$this->_load();
		return $this;
	} 
		
	public function findRangeByIdAttribute($from,$to)
	{
		$this->_findRangeBy['IdAttribute'] =  array(
			'from' => $from,
			'to'   => $to
		);

		$this->_load();
		return $this;
	} 


	public function findGreaterThanByIdAttribute($int)
	{
		$this->_findGreaterThanBy['IdAttribute'] = $int;

		$this->_load();
		return $this;
	} 


	public function findLessThanByIdAttribute($int)
	{
		$this->_findLessThanBy['IdAttribute'] = $int;

		$this->_load();
		return $this;
	} 
		
	public function findByValue($Value)
	{
		$this->_findBy['Value'] =  $Value;

		$this->_load();
		return $this;
	} 
		
	public function findByDateCreation($DateCreation)
	{
		$this->_findBy['DateCreation'] =  $DateCreation;

		$this->_load();
		return $this;
	} 
		
	public function findRangeByDateCreation($from,$to)
	{
		$this->_findRangeBy['DateCreation'] =  array(
			'from' => $from,
			'to'   => $to
		);

		$this->_load();
		return $this;
	} 


	public function findGreaterThanByDateCreation($int)
	{
		$this->_findGreaterThanBy['DateCreation'] = $int;

		$this->_load();
		return $this;
	} 


	public function findLessThanByDateCreation($int)
	{
		$this->_findLessThanBy['DateCreation'] = $int;

		$this->_load();
		return $this;
	} 
		
	public function findByDateModification($DateModification)
	{
		$this->_findBy['DateModification'] =  $DateModification;

		$this->_load();
		return $this;
	} 
		
	public function findRangeByDateModification($from,$to)
	{
		$this->_findRangeBy['DateModification'] =  array(
			'from' => $from,
			'to'   => $to
		);

		$this->_load();
		return $this;
	} 


	public function findGreaterThanByDateModification($int)
	{
		$this->_findGreaterThanBy['DateModification'] = $int;

		$this->_load();
		return $this;
	} 


	public function findLessThanByDateModification($int)
	{
		$this->_findLessThanBy['DateModification'] = $int;

		$this->_load();
		return $this;
	} 

		
	public function findOneById($Id)
	{
		$this->_findOneBy['Id'] =  $Id;

		$this->_load();
		return $this->_result;
	} 
		
	public function findOneByIdUser($IdUser)
	{
		$this->_findOneBy['IdUser'] =  $IdUser;

		$this->_load();
		return $this->_result;
	} 
		
	public function findOneByIdAttribute($IdAttribute)
	{
		$this->_findOneBy['IdAttribute'] =  $IdAttribute;

		$this->_load();
		return $this->_result;
	} 
		
	public function findOneByValue($Value)
	{
		$this->_findOneBy['Value'] =  $Value;

		$this->_load();
		return $this->_result;
	} 
		
	public function findOneByDateCreation($DateCreation)
	{
		$this->_findOneBy['DateCreation'] =  $DateCreation;

		$this->_load();
		return $this->_result;
	} 
		
	public function findOneByDateModification($DateModification)
	{
		$this->_findOneBy['DateModification'] =  $DateModification;

		$this->_load();
		return $this->_result;
	} 

		
	public function findByLikeId($Id)
	{
		$this->_findByLike['Id'] =  $Id;

		$this->_load();
		return $this;
	} 
		
	public function findByLikeIdUser($IdUser)
	{
		$this->_findByLike['IdUser'] =  $IdUser;

		$this->_load();
		return $this;
	} 
		
	public function findByLikeIdAttribute($IdAttribute)
	{
		$this->_findByLike['IdAttribute'] =  $IdAttribute;

		$this->_load();
		return $this;
	} 
		
	public function findByLikeValue($Value)
	{
		$this->_findByLike['Value'] =  $Value;

		$this->_load();
		return $this;
	} 
		
	public function findByLikeDateCreation($DateCreation)
	{
		$this->_findByLike['DateCreation'] =  $DateCreation;

		$this->_load();
		return $this;
	} 
		
	public function findByLikeDateModification($DateModification)
	{
		$this->_findByLike['DateModification'] =  $DateModification;

		$this->_load();
		return $this;
	} 

		
	public function filterById($Id, $condition = 'AND')
	{
		
		$_condition = $this->isAndOr($condition);
		$this->loadFilterBy('Id',$Id,$_condition);

		$this->_load();
		return $this;
	} 
		
	public function filterRangeById($from,$to)
	{
		$this->_filterRangeBy['Id'] =  array(
			'from' => $from,
			'to'   => $to
		);

		$this->_load();
		return $this;
	} 


	public function filterGreaterThanById($int)
	{
		$this->_filterGreaterThanBy['Id'] = $int;

		$this->_load();
		return $this;
	} 


	public function filterLessThanById($int)
	{
		$this->_filterLessThanBy['Id'] = $int;

		$this->_load();
		return $this;
	} 
		
	public function filterByIdUser($IdUser, $condition = 'AND')
	{
		
		$_condition = $this->isAndOr($condition);
		$this->loadFilterBy('IdUser',$IdUser,$_condition);

		$this->_load();
		return $this;
	} 
		
	public function filterRangeByIdUser($from,$to)
	{
		$this->_filterRangeBy['IdUser'] =  array(
			'from' => $from,
			'to'   => $to
		);

		$this->_load();
		return $this;
	} 


	public function filterGreaterThanByIdUser($int)
	{
		$this->_filterGreaterThanBy['IdUser'] = $int;

		$this->_load();
		return $this;
	} 


	public function filterLessThanByIdUser($int)
	{
		$this->_filterLessThanBy['IdUser'] = $int;

		$this->_load();
		return $this;
	} 
		
	public function filterByIdAttribute($IdAttribute, $condition = 'AND')
	{
		
		$_condition = $this->isAndOr($condition);
		$this->loadFilterBy('IdAttribute',$IdAttribute,$_condition);

		$this->_load();
		return $this;
	} 
		
	public function filterRangeByIdAttribute($from,$to)
	{
		$this->_filterRangeBy['IdAttribute'] =  array(
			'from' => $from,
			'to'   => $to
		);

		$this->_load();
		return $this;
	} 


	public function filterGreaterThanByIdAttribute($int)
	{
		$this->_filterGreaterThanBy['IdAttribute'] = $int;

		$this->_load();
		return $this;
	} 


	public function filterLessThanByIdAttribute($int)
	{
		$this->_filterLessThanBy['IdAttribute'] = $int;

		$this->_load();
		return $this;
	} 
		
	public function filterByValue($Value, $condition = 'AND')
	{
		
		$_condition = $this->isAndOr($condition);
		$this->loadFilterBy('Value',$Value,$_condition);

		$this->_load();
		return $this;
	} 
		
	public function filterByDateCreation($DateCreation, $condition = 'AND')
	{
		
		$_condition = $this->isAndOr($condition);
		$this->loadFilterBy('DateCreation',$DateCreation,$_condition);

		$this->_load();
		return $this;
	} 
		
	public function filterRangeByDateCreation($from,$to)
	{
		$this->_filterRangeBy['DateCreation'] =  array(
			'from' => $from,
			'to'   => $to
		);

		$this->_load();
		return $this;
	} 


	public function filterGreaterThanByDateCreation($int)
	{
		$this->_filterGreaterThanBy['DateCreation'] = $int;

		$this->_load();
		return $this;
	} 


	public function filterLessThanByDateCreation($int)
	{
		$this->_filterLessThanBy['DateCreation'] = $int;

		$this->_load();
		return $this;
	} 
		
	public function filterByDateModification($DateModification, $condition = 'AND')
	{
		
		$_condition = $this->isAndOr($condition);
		$this->loadFilterBy('DateModification',$DateModification,$_condition);

		$this->_load();
		return $this;
	} 
		
	public function filterRangeByDateModification($from,$to)
	{
		$this->_filterRangeBy['DateModification'] =  array(
			'from' => $from,
			'to'   => $to
		);

		$this->_load();
		return $this;
	} 


	public function filterGreaterThanByDateModification($int)
	{
		$this->_filterGreaterThanBy['DateModification'] = $int;

		$this->_load();
		return $this;
	} 


	public function filterLessThanByDateModification($int)
	{
		$this->_filterLessThanBy['DateModification'] = $int;

		$this->_load();
		return $this;
	} 

		
	public function filterLikeById($Id)
	{
		$this->_filterLikeBy['Id'] =  $Id;

		$this->_load();
		return $this;
	} 
		
	public function filterLikeByIdUser($IdUser)
	{
		$this->_filterLikeBy['IdUser'] =  $IdUser;

		$this->_load();
		return $this;
	} 
		
	public function filterLikeByIdAttribute($IdAttribute)
	{
		$this->_filterLikeBy['IdAttribute'] =  $IdAttribute;

		$this->_load();
		return $this;
	} 
		
	public function filterLikeByValue($Value)
	{
		$this->_filterLikeBy['Value'] =  $Value;

		$this->_load();
		return $this;
	} 
		
	public function filterLikeByDateCreation($DateCreation)
	{
		$this->_filterLikeBy['DateCreation'] =  $DateCreation;

		$this->_load();
		return $this;
	} 
		
	public function filterLikeByDateModification($DateModification)
	{
		$this->_filterLikeBy['DateModification'] =  $DateModification;

		$this->_load();
		return $this;
	} 

		
	public function orderById($direction = 'ASC')
	{
		$this->loadDirection('id',$direction);
		
		return $this;
	} 
		
	public function orderByIdUser($direction = 'ASC')
	{
		$this->loadDirection('id_user',$direction);
		
		return $this;
	} 
		
	public function orderByIdAttribute($direction = 'ASC')
	{
		$this->loadDirection('id_attribute',$direction);
		
		return $this;
	} 
		
	public function orderByValue($direction = 'ASC')
	{
		$this->loadDirection('value',$direction);
		
		return $this;
	} 
		
	public function orderByDateCreation($direction = 'ASC')
	{
		$this->loadDirection('date_creation',$direction);
		
		return $this;
	} 
		
	public function orderByDateModification($direction = 'ASC')
	{
		$this->loadDirection('date_modification',$direction);
		
		return $this;
	} 

	

	public function _getMap() { 

		
		$parentMap = parent::_getMap();

		return array_merge($parentMap, array(            
		    'Id' =>  'id',            
		    'IdUser' =>  'id_user',            
		    'IdAttribute' =>  'id_attribute',            
		    'Value' =>  'value',            
		    'DateCreation' =>  'date_creation',            
		    'DateModification' =>  'date_modification',		
		)); 

	} 


}