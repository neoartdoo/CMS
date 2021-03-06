<?php

class DgPageVersionQuery extends AbstractQuery 
{

	protected $_table = '_dg_page_version';
    
    protected $_className = 'DgPageVersion';

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
		
	public function findByIdContent($IdContent)
	{
		$this->_findBy['IdContent'] =  $IdContent;

		$this->_load();
		return $this;
	} 
		
	public function findRangeByIdContent($from,$to)
	{
		$this->_findRangeBy['IdContent'] =  array(
			'from' => $from,
			'to'   => $to
		);

		$this->_load();
		return $this;
	} 


	public function findGreaterThanByIdContent($int)
	{
		$this->_findGreaterThanBy['IdContent'] = $int;

		$this->_load();
		return $this;
	} 


	public function findLessThanByIdContent($int)
	{
		$this->_findLessThanBy['IdContent'] = $int;

		$this->_load();
		return $this;
	} 
		
	public function findByPseudo($Pseudo)
	{
		$this->_findBy['Pseudo'] =  $Pseudo;

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
		
	public function findByLangue($Langue)
	{
		$this->_findBy['Langue'] =  $Langue;

		$this->_load();
		return $this;
	} 
		
	public function findByTitre($Titre)
	{
		$this->_findBy['Titre'] =  $Titre;

		$this->_load();
		return $this;
	} 
		
	public function findByDescription($Description)
	{
		$this->_findBy['Description'] =  $Description;

		$this->_load();
		return $this;
	} 
		
	public function findByArticleTinymce($ArticleTinymce)
	{
		$this->_findBy['ArticleTinymce'] =  $ArticleTinymce;

		$this->_load();
		return $this;
	} 
		
	public function findByUri($Uri)
	{
		$this->_findBy['Uri'] =  $Uri;

		$this->_load();
		return $this;
	} 
		
	public function findByUriModule($UriModule)
	{
		$this->_findBy['UriModule'] =  $UriModule;

		$this->_load();
		return $this;
	} 
		
	public function findByMetaTitre($MetaTitre)
	{
		$this->_findBy['MetaTitre'] =  $MetaTitre;

		$this->_load();
		return $this;
	} 
		
	public function findByMetaDescription($MetaDescription)
	{
		$this->_findBy['MetaDescription'] =  $MetaDescription;

		$this->_load();
		return $this;
	} 
		
	public function findByMetaKeys($MetaKeys)
	{
		$this->_findBy['MetaKeys'] =  $MetaKeys;

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
		
	public function findOneByIdContent($IdContent)
	{
		$this->_findOneBy['IdContent'] =  $IdContent;

		$this->_load();
		return $this->_result;
	} 
		
	public function findOneByPseudo($Pseudo)
	{
		$this->_findOneBy['Pseudo'] =  $Pseudo;

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
		
	public function findOneByLangue($Langue)
	{
		$this->_findOneBy['Langue'] =  $Langue;

		$this->_load();
		return $this->_result;
	} 
		
	public function findOneByTitre($Titre)
	{
		$this->_findOneBy['Titre'] =  $Titre;

		$this->_load();
		return $this->_result;
	} 
		
	public function findOneByDescription($Description)
	{
		$this->_findOneBy['Description'] =  $Description;

		$this->_load();
		return $this->_result;
	} 
		
	public function findOneByArticleTinymce($ArticleTinymce)
	{
		$this->_findOneBy['ArticleTinymce'] =  $ArticleTinymce;

		$this->_load();
		return $this->_result;
	} 
		
	public function findOneByUri($Uri)
	{
		$this->_findOneBy['Uri'] =  $Uri;

		$this->_load();
		return $this->_result;
	} 
		
	public function findOneByUriModule($UriModule)
	{
		$this->_findOneBy['UriModule'] =  $UriModule;

		$this->_load();
		return $this->_result;
	} 
		
	public function findOneByMetaTitre($MetaTitre)
	{
		$this->_findOneBy['MetaTitre'] =  $MetaTitre;

		$this->_load();
		return $this->_result;
	} 
		
	public function findOneByMetaDescription($MetaDescription)
	{
		$this->_findOneBy['MetaDescription'] =  $MetaDescription;

		$this->_load();
		return $this->_result;
	} 
		
	public function findOneByMetaKeys($MetaKeys)
	{
		$this->_findOneBy['MetaKeys'] =  $MetaKeys;

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
		
	public function findByLikeIdContent($IdContent)
	{
		$this->_findByLike['IdContent'] =  $IdContent;

		$this->_load();
		return $this;
	} 
		
	public function findByLikePseudo($Pseudo)
	{
		$this->_findByLike['Pseudo'] =  $Pseudo;

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
		
	public function findByLikeLangue($Langue)
	{
		$this->_findByLike['Langue'] =  $Langue;

		$this->_load();
		return $this;
	} 
		
	public function findByLikeTitre($Titre)
	{
		$this->_findByLike['Titre'] =  $Titre;

		$this->_load();
		return $this;
	} 
		
	public function findByLikeDescription($Description)
	{
		$this->_findByLike['Description'] =  $Description;

		$this->_load();
		return $this;
	} 
		
	public function findByLikeArticleTinymce($ArticleTinymce)
	{
		$this->_findByLike['ArticleTinymce'] =  $ArticleTinymce;

		$this->_load();
		return $this;
	} 
		
	public function findByLikeUri($Uri)
	{
		$this->_findByLike['Uri'] =  $Uri;

		$this->_load();
		return $this;
	} 
		
	public function findByLikeUriModule($UriModule)
	{
		$this->_findByLike['UriModule'] =  $UriModule;

		$this->_load();
		return $this;
	} 
		
	public function findByLikeMetaTitre($MetaTitre)
	{
		$this->_findByLike['MetaTitre'] =  $MetaTitre;

		$this->_load();
		return $this;
	} 
		
	public function findByLikeMetaDescription($MetaDescription)
	{
		$this->_findByLike['MetaDescription'] =  $MetaDescription;

		$this->_load();
		return $this;
	} 
		
	public function findByLikeMetaKeys($MetaKeys)
	{
		$this->_findByLike['MetaKeys'] =  $MetaKeys;

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
		
	public function filterByIdContent($IdContent, $condition = 'AND')
	{
		
		$_condition = $this->isAndOr($condition);
		$this->loadFilterBy('IdContent',$IdContent,$_condition);

		$this->_load();
		return $this;
	} 
		
	public function filterRangeByIdContent($from,$to)
	{
		$this->_filterRangeBy['IdContent'] =  array(
			'from' => $from,
			'to'   => $to
		);

		$this->_load();
		return $this;
	} 


	public function filterGreaterThanByIdContent($int)
	{
		$this->_filterGreaterThanBy['IdContent'] = $int;

		$this->_load();
		return $this;
	} 


	public function filterLessThanByIdContent($int)
	{
		$this->_filterLessThanBy['IdContent'] = $int;

		$this->_load();
		return $this;
	} 
		
	public function filterByPseudo($Pseudo, $condition = 'AND')
	{
		
		$_condition = $this->isAndOr($condition);
		$this->loadFilterBy('Pseudo',$Pseudo,$_condition);

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
		
	public function filterByLangue($Langue, $condition = 'AND')
	{
		
		$_condition = $this->isAndOr($condition);
		$this->loadFilterBy('Langue',$Langue,$_condition);

		$this->_load();
		return $this;
	} 
		
	public function filterByTitre($Titre, $condition = 'AND')
	{
		
		$_condition = $this->isAndOr($condition);
		$this->loadFilterBy('Titre',$Titre,$_condition);

		$this->_load();
		return $this;
	} 
		
	public function filterByDescription($Description, $condition = 'AND')
	{
		
		$_condition = $this->isAndOr($condition);
		$this->loadFilterBy('Description',$Description,$_condition);

		$this->_load();
		return $this;
	} 
		
	public function filterByArticleTinymce($ArticleTinymce, $condition = 'AND')
	{
		
		$_condition = $this->isAndOr($condition);
		$this->loadFilterBy('ArticleTinymce',$ArticleTinymce,$_condition);

		$this->_load();
		return $this;
	} 
		
	public function filterByUri($Uri, $condition = 'AND')
	{
		
		$_condition = $this->isAndOr($condition);
		$this->loadFilterBy('Uri',$Uri,$_condition);

		$this->_load();
		return $this;
	} 
		
	public function filterByUriModule($UriModule, $condition = 'AND')
	{
		
		$_condition = $this->isAndOr($condition);
		$this->loadFilterBy('UriModule',$UriModule,$_condition);

		$this->_load();
		return $this;
	} 
		
	public function filterByMetaTitre($MetaTitre, $condition = 'AND')
	{
		
		$_condition = $this->isAndOr($condition);
		$this->loadFilterBy('MetaTitre',$MetaTitre,$_condition);

		$this->_load();
		return $this;
	} 
		
	public function filterByMetaDescription($MetaDescription, $condition = 'AND')
	{
		
		$_condition = $this->isAndOr($condition);
		$this->loadFilterBy('MetaDescription',$MetaDescription,$_condition);

		$this->_load();
		return $this;
	} 
		
	public function filterByMetaKeys($MetaKeys, $condition = 'AND')
	{
		
		$_condition = $this->isAndOr($condition);
		$this->loadFilterBy('MetaKeys',$MetaKeys,$_condition);

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
		
	public function filterLikeByIdContent($IdContent)
	{
		$this->_filterLikeBy['IdContent'] =  $IdContent;

		$this->_load();
		return $this;
	} 
		
	public function filterLikeByPseudo($Pseudo)
	{
		$this->_filterLikeBy['Pseudo'] =  $Pseudo;

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
		
	public function filterLikeByLangue($Langue)
	{
		$this->_filterLikeBy['Langue'] =  $Langue;

		$this->_load();
		return $this;
	} 
		
	public function filterLikeByTitre($Titre)
	{
		$this->_filterLikeBy['Titre'] =  $Titre;

		$this->_load();
		return $this;
	} 
		
	public function filterLikeByDescription($Description)
	{
		$this->_filterLikeBy['Description'] =  $Description;

		$this->_load();
		return $this;
	} 
		
	public function filterLikeByArticleTinymce($ArticleTinymce)
	{
		$this->_filterLikeBy['ArticleTinymce'] =  $ArticleTinymce;

		$this->_load();
		return $this;
	} 
		
	public function filterLikeByUri($Uri)
	{
		$this->_filterLikeBy['Uri'] =  $Uri;

		$this->_load();
		return $this;
	} 
		
	public function filterLikeByUriModule($UriModule)
	{
		$this->_filterLikeBy['UriModule'] =  $UriModule;

		$this->_load();
		return $this;
	} 
		
	public function filterLikeByMetaTitre($MetaTitre)
	{
		$this->_filterLikeBy['MetaTitre'] =  $MetaTitre;

		$this->_load();
		return $this;
	} 
		
	public function filterLikeByMetaDescription($MetaDescription)
	{
		$this->_filterLikeBy['MetaDescription'] =  $MetaDescription;

		$this->_load();
		return $this;
	} 
		
	public function filterLikeByMetaKeys($MetaKeys)
	{
		$this->_filterLikeBy['MetaKeys'] =  $MetaKeys;

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
		
	public function orderByIdContent($direction = 'ASC')
	{
		$this->loadDirection('id_content',$direction);
		
		return $this;
	} 
		
	public function orderByPseudo($direction = 'ASC')
	{
		$this->loadDirection('pseudo',$direction);
		
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
		
	public function orderByLangue($direction = 'ASC')
	{
		$this->loadDirection('langue',$direction);
		
		return $this;
	} 
		
	public function orderByTitre($direction = 'ASC')
	{
		$this->loadDirection('titre',$direction);
		
		return $this;
	} 
		
	public function orderByDescription($direction = 'ASC')
	{
		$this->loadDirection('description',$direction);
		
		return $this;
	} 
		
	public function orderByArticleTinymce($direction = 'ASC')
	{
		$this->loadDirection('article_tinymce',$direction);
		
		return $this;
	} 
		
	public function orderByUri($direction = 'ASC')
	{
		$this->loadDirection('uri',$direction);
		
		return $this;
	} 
		
	public function orderByUriModule($direction = 'ASC')
	{
		$this->loadDirection('uri_module',$direction);
		
		return $this;
	} 
		
	public function orderByMetaTitre($direction = 'ASC')
	{
		$this->loadDirection('meta_titre',$direction);
		
		return $this;
	} 
		
	public function orderByMetaDescription($direction = 'ASC')
	{
		$this->loadDirection('meta_description',$direction);
		
		return $this;
	} 
		
	public function orderByMetaKeys($direction = 'ASC')
	{
		$this->loadDirection('meta_keys',$direction);
		
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
		    'IdContent' =>  'id_content',            
		    'Pseudo' =>  'pseudo',            
		    'IdUser' =>  'id_user',            
		    'IdGroupe' =>  'id_groupe',            
		    'Langue' =>  'langue',            
		    'Titre' =>  'titre',            
		    'Description' =>  'description',            
		    'ArticleTinymce' =>  'article_tinymce',            
		    'Uri' =>  'uri',            
		    'UriModule' =>  'uri_module',            
		    'MetaTitre' =>  'meta_titre',            
		    'MetaDescription' =>  'meta_description',            
		    'MetaKeys' =>  'meta_keys',            
		    'DateCreation' =>  'date_creation',		
		)); 

	} 


}