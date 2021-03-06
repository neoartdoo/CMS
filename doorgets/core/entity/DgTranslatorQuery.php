<?php

class DgTranslatorQuery extends AbstractQuery 
{

	protected $_table = '_dg_translator';
    
    protected $_className = 'DgTranslator';

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
		
	public function findByIdGroupe($IdGroupe)
	{
		$this->_findBy['IdGroupe'] =  $IdGroupe;

		$this->_load();
		return $this;
	} 
		
	public function findRangeByIdGroupe($from,$to)
	{
		$this->_findRangeBy['IdGroupe'] =  array(
			'from' => $from,
			'to'   => $to
		);

		$this->_load();
		return $this;
	} 


	public function findGreaterThanByIdGroupe($int)
	{
		$this->_findGreaterThanBy['IdGroupe'] = $int;

		$this->_load();
		return $this;
	} 


	public function findLessThanByIdGroupe($int)
	{
		$this->_findLessThanBy['IdGroupe'] = $int;

		$this->_load();
		return $this;
	} 
		
	public function findBySentence($Sentence)
	{
		$this->_findBy['Sentence'] =  $Sentence;

		$this->_load();
		return $this;
	} 
		
	public function findByGroupeTraduction($GroupeTraduction)
	{
		$this->_findBy['GroupeTraduction'] =  $GroupeTraduction;

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
		
	public function findOneByIdGroupe($IdGroupe)
	{
		$this->_findOneBy['IdGroupe'] =  $IdGroupe;

		$this->_load();
		return $this->_result;
	} 
		
	public function findOneBySentence($Sentence)
	{
		$this->_findOneBy['Sentence'] =  $Sentence;

		$this->_load();
		return $this->_result;
	} 
		
	public function findOneByGroupeTraduction($GroupeTraduction)
	{
		$this->_findOneBy['GroupeTraduction'] =  $GroupeTraduction;

		$this->_load();
		return $this->_result;
	} 
		
	public function findOneByDateCreation($DateCreation)
	{
		$this->_findOneBy['DateCreation'] =  $DateCreation;

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
		
	public function findByLikeIdGroupe($IdGroupe)
	{
		$this->_findByLike['IdGroupe'] =  $IdGroupe;

		$this->_load();
		return $this;
	} 
		
	public function findByLikeSentence($Sentence)
	{
		$this->_findByLike['Sentence'] =  $Sentence;

		$this->_load();
		return $this;
	} 
		
	public function findByLikeGroupeTraduction($GroupeTraduction)
	{
		$this->_findByLike['GroupeTraduction'] =  $GroupeTraduction;

		$this->_load();
		return $this;
	} 
		
	public function findByLikeDateCreation($DateCreation)
	{
		$this->_findByLike['DateCreation'] =  $DateCreation;

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
		
	public function filterByIdGroupe($IdGroupe, $condition = 'AND')
	{
		
		$_condition = $this->isAndOr($condition);
		$this->loadFilterBy('IdGroupe',$IdGroupe,$_condition);

		$this->_load();
		return $this;
	} 
		
	public function filterRangeByIdGroupe($from,$to)
	{
		$this->_filterRangeBy['IdGroupe'] =  array(
			'from' => $from,
			'to'   => $to
		);

		$this->_load();
		return $this;
	} 


	public function filterGreaterThanByIdGroupe($int)
	{
		$this->_filterGreaterThanBy['IdGroupe'] = $int;

		$this->_load();
		return $this;
	} 


	public function filterLessThanByIdGroupe($int)
	{
		$this->_filterLessThanBy['IdGroupe'] = $int;

		$this->_load();
		return $this;
	} 
		
	public function filterBySentence($Sentence, $condition = 'AND')
	{
		
		$_condition = $this->isAndOr($condition);
		$this->loadFilterBy('Sentence',$Sentence,$_condition);

		$this->_load();
		return $this;
	} 
		
	public function filterByGroupeTraduction($GroupeTraduction, $condition = 'AND')
	{
		
		$_condition = $this->isAndOr($condition);
		$this->loadFilterBy('GroupeTraduction',$GroupeTraduction,$_condition);

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
		
	public function filterLikeByIdGroupe($IdGroupe)
	{
		$this->_filterLikeBy['IdGroupe'] =  $IdGroupe;

		$this->_load();
		return $this;
	} 
		
	public function filterLikeBySentence($Sentence)
	{
		$this->_filterLikeBy['Sentence'] =  $Sentence;

		$this->_load();
		return $this;
	} 
		
	public function filterLikeByGroupeTraduction($GroupeTraduction)
	{
		$this->_filterLikeBy['GroupeTraduction'] =  $GroupeTraduction;

		$this->_load();
		return $this;
	} 
		
	public function filterLikeByDateCreation($DateCreation)
	{
		$this->_filterLikeBy['DateCreation'] =  $DateCreation;

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
		
	public function orderByIdGroupe($direction = 'ASC')
	{
		$this->loadDirection('id_groupe',$direction);
		
		return $this;
	} 
		
	public function orderBySentence($direction = 'ASC')
	{
		$this->loadDirection('sentence',$direction);
		
		return $this;
	} 
		
	public function orderByGroupeTraduction($direction = 'ASC')
	{
		$this->loadDirection('groupe_traduction',$direction);
		
		return $this;
	} 
		
	public function orderByDateCreation($direction = 'ASC')
	{
		$this->loadDirection('date_creation',$direction);
		
		return $this;
	} 

	

	public function _getMap() { 

		
		$parentMap = parent::_getMap();

		return array_merge($parentMap, array(            
		    'Id' =>  'id',            
		    'IdUser' =>  'id_user',            
		    'IdGroupe' =>  'id_groupe',            
		    'Sentence' =>  'sentence',            
		    'GroupeTraduction' =>  'groupe_traduction',            
		    'DateCreation' =>  'date_creation',		
		)); 

	} 


}