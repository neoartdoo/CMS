<?php

class WebsiteEntity extends AbstractEntity
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
	protected $Statut; 
	

	/**
	* @type  : int
	* @size  : 11  
	*/
	protected $StatutVersion; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $StatutIp; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $VersionDoorgets; 
	

	/**
	* @type  : varchar
	* @size  : 220  
	*/
	protected $Title; 
	

	/**
	* @type  : varchar
	* @size  : 180  
	*/
	protected $Slogan; 
	

	/**
	* @type  : varchar
	* @size  : 100  
	*/
	protected $Copyright; 
	

	/**
	* @type  : varchar
	* @size  : 10  
	*/
	protected $Year; 
	

	/**
	* @type  : varchar
	* @size  : 220  
	*/
	protected $Description; 
	

	/**
	* @type  : varchar
	* @size  : 220  
	*/
	protected $Keywords; 
	

	/**
	* @type  : varchar
	* @size  : 80  
	*/
	protected $Email; 
	

	/**
	* @type  : varchar
	* @size  : 180  
	*/
	protected $Pays; 
	

	/**
	* @type  : varchar
	* @size  : 180  
	*/
	protected $Ville; 
	

	/**
	* @type  : varchar
	* @size  : 220  
	*/
	protected $Adresse; 
	

	/**
	* @type  : varchar
	* @size  : 25  
	*/
	protected $Codepostal; 
	

	/**
	* @type  : varchar
	* @size  : 30  
	*/
	protected $TelFix; 
	

	/**
	* @type  : varchar
	* @size  : 30  
	*/
	protected $TelMobil; 
	

	/**
	* @type  : varchar
	* @size  : 30  
	*/
	protected $TelFax; 
	

	/**
	* @type  : varchar
	* @size  : 120  
	*/
	protected $Facebook; 
	

	/**
	* @type  : varchar
	* @size  : 120  
	*/
	protected $Twitter; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $Pinterest; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $Myspace; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $Linkedin; 
	

	/**
	* @type  : varchar
	* @size  : 120  
	*/
	protected $Youtube; 
	

	/**
	* @type  : varchar
	* @size  : 250  
	*/
	protected $Google; 
	

	/**
	* @type  : varchar
	* @size  : 50  
	*/
	protected $Analytics; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $Langue; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $LangueFront; 
	

	/**
	* @type  : text
	* @size  : 0  
	*/
	protected $LangueGroupe; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $Horaire; 
	

	/**
	* @type  : int
	* @size  : 11  
	*/
	protected $Mentions; 
	

	/**
	* @type  : int
	* @size  : 11  
	*/
	protected $Cgu; 
	

	/**
	* @type  : int
	* @size  : 1  
	*/
	protected $MNewsletter; 
	

	/**
	* @type  : int
	* @size  : 11  
	*/
	protected $MComment; 
	

	/**
	* @type  : int
	* @size  : 11  
	*/
	protected $MCommentFacebook; 
	

	/**
	* @type  : int
	* @size  : 11  
	*/
	protected $MCommentDisqus; 
	

	/**
	* @type  : int
	* @size  : 11  
	*/
	protected $MSharethis; 
	

	/**
	* @type  : int
	* @size  : 11  
	*/
	protected $MSitemap; 
	

	/**
	* @type  : int
	* @size  : 11  
	*/
	protected $MRss; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $IdFacebook; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $IdDisqus; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $Theme; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $ModuleHomepage; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $OauthGoogleId; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $OauthGoogleSecret; 
	

	/**
	* @type  : int
	* @size  : 11  
	*/
	protected $OauthGoogleActive; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $OauthFacebookId; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $OauthFacebookSecret; 
	

	/**
	* @type  : int
	* @size  : 11  
	*/
	protected $OauthFacebookActive; 
	

	/**
	* @type  : int
	* @size  : 11  
	*/
	protected $SmtpMandrillActive; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $SmtpMandrillHost; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $SmtpMandrillPort; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $SmtpMandrillUsername; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $SmtpMandrillPassword; 
	

	/**
	* @type  : int
	* @size  : 11  
	*/
	protected $StripeActive; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $StripeSecretKey; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $StripePublishableKey; 
	

	/**
	* @type  : varchar
	* @size  : 255  
	*/
	protected $Currency; 
	

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
	

	public function setStatut($Statut)
	{
		
		$this->Statut = $Statut;

		return $this;
	} 
	

	public function setStatutVersion($StatutVersion)
	{
		
		$this->StatutVersion = $StatutVersion;

		return $this;
	} 
	

	public function setStatutIp($StatutIp)
	{
		
		$this->StatutIp = $StatutIp;

		return $this;
	} 
	

	public function setVersionDoorgets($VersionDoorgets)
	{
		
		$this->VersionDoorgets = $VersionDoorgets;

		return $this;
	} 
	

	public function setTitle($Title)
	{
		
		$this->Title = $Title;

		return $this;
	} 
	

	public function setSlogan($Slogan)
	{
		
		$this->Slogan = $Slogan;

		return $this;
	} 
	

	public function setCopyright($Copyright)
	{
		
		$this->Copyright = $Copyright;

		return $this;
	} 
	

	public function setYear($Year)
	{
		
		$this->Year = $Year;

		return $this;
	} 
	

	public function setDescription($Description)
	{
		
		$this->Description = $Description;

		return $this;
	} 
	

	public function setKeywords($Keywords)
	{
		
		$this->Keywords = $Keywords;

		return $this;
	} 
	

	public function setEmail($Email)
	{
		
		$this->Email = $Email;

		return $this;
	} 
	

	public function setPays($Pays)
	{
		
		$this->Pays = $Pays;

		return $this;
	} 
	

	public function setVille($Ville)
	{
		
		$this->Ville = $Ville;

		return $this;
	} 
	

	public function setAdresse($Adresse)
	{
		
		$this->Adresse = $Adresse;

		return $this;
	} 
	

	public function setCodepostal($Codepostal)
	{
		
		$this->Codepostal = $Codepostal;

		return $this;
	} 
	

	public function setTelFix($TelFix)
	{
		
		$this->TelFix = $TelFix;

		return $this;
	} 
	

	public function setTelMobil($TelMobil)
	{
		
		$this->TelMobil = $TelMobil;

		return $this;
	} 
	

	public function setTelFax($TelFax)
	{
		
		$this->TelFax = $TelFax;

		return $this;
	} 
	

	public function setFacebook($Facebook)
	{
		
		$this->Facebook = $Facebook;

		return $this;
	} 
	

	public function setTwitter($Twitter)
	{
		
		$this->Twitter = $Twitter;

		return $this;
	} 
	

	public function setPinterest($Pinterest)
	{
		
		$this->Pinterest = $Pinterest;

		return $this;
	} 
	

	public function setMyspace($Myspace)
	{
		
		$this->Myspace = $Myspace;

		return $this;
	} 
	

	public function setLinkedin($Linkedin)
	{
		
		$this->Linkedin = $Linkedin;

		return $this;
	} 
	

	public function setYoutube($Youtube)
	{
		
		$this->Youtube = $Youtube;

		return $this;
	} 
	

	public function setGoogle($Google)
	{
		
		$this->Google = $Google;

		return $this;
	} 
	

	public function setAnalytics($Analytics)
	{
		
		$this->Analytics = $Analytics;

		return $this;
	} 
	

	public function setLangue($Langue)
	{
		
		$this->Langue = $Langue;

		return $this;
	} 
	

	public function setLangueFront($LangueFront)
	{
		
		$this->LangueFront = $LangueFront;

		return $this;
	} 
	

	public function setLangueGroupe($LangueGroupe)
	{
		
		$this->LangueGroupe = $LangueGroupe;

		return $this;
	} 
	

	public function setHoraire($Horaire)
	{
		
		$this->Horaire = $Horaire;

		return $this;
	} 
	

	public function setMentions($Mentions)
	{
		
		$this->Mentions = $Mentions;

		return $this;
	} 
	

	public function setCgu($Cgu)
	{
		
		$this->Cgu = $Cgu;

		return $this;
	} 
	

	public function setMNewsletter($MNewsletter)
	{
		
		$this->MNewsletter = $MNewsletter;

		return $this;
	} 
	

	public function setMComment($MComment)
	{
		
		$this->MComment = $MComment;

		return $this;
	} 
	

	public function setMCommentFacebook($MCommentFacebook)
	{
		
		$this->MCommentFacebook = $MCommentFacebook;

		return $this;
	} 
	

	public function setMCommentDisqus($MCommentDisqus)
	{
		
		$this->MCommentDisqus = $MCommentDisqus;

		return $this;
	} 
	

	public function setMSharethis($MSharethis)
	{
		
		$this->MSharethis = $MSharethis;

		return $this;
	} 
	

	public function setMSitemap($MSitemap)
	{
		
		$this->MSitemap = $MSitemap;

		return $this;
	} 
	

	public function setMRss($MRss)
	{
		
		$this->MRss = $MRss;

		return $this;
	} 
	

	public function setIdFacebook($IdFacebook)
	{
		
		$this->IdFacebook = $IdFacebook;

		return $this;
	} 
	

	public function setIdDisqus($IdDisqus)
	{
		
		$this->IdDisqus = $IdDisqus;

		return $this;
	} 
	

	public function setTheme($Theme)
	{
		
		$this->Theme = $Theme;

		return $this;
	} 
	

	public function setModuleHomepage($ModuleHomepage)
	{
		
		$this->ModuleHomepage = $ModuleHomepage;

		return $this;
	} 
	

	public function setOauthGoogleId($OauthGoogleId)
	{
		
		$this->OauthGoogleId = $OauthGoogleId;

		return $this;
	} 
	

	public function setOauthGoogleSecret($OauthGoogleSecret)
	{
		
		$this->OauthGoogleSecret = $OauthGoogleSecret;

		return $this;
	} 
	

	public function setOauthGoogleActive($OauthGoogleActive)
	{
		
		$this->OauthGoogleActive = $OauthGoogleActive;

		return $this;
	} 
	

	public function setOauthFacebookId($OauthFacebookId)
	{
		
		$this->OauthFacebookId = $OauthFacebookId;

		return $this;
	} 
	

	public function setOauthFacebookSecret($OauthFacebookSecret)
	{
		
		$this->OauthFacebookSecret = $OauthFacebookSecret;

		return $this;
	} 
	

	public function setOauthFacebookActive($OauthFacebookActive)
	{
		
		$this->OauthFacebookActive = $OauthFacebookActive;

		return $this;
	} 
	

	public function setSmtpMandrillActive($SmtpMandrillActive)
	{
		
		$this->SmtpMandrillActive = $SmtpMandrillActive;

		return $this;
	} 
	

	public function setSmtpMandrillHost($SmtpMandrillHost)
	{
		
		$this->SmtpMandrillHost = $SmtpMandrillHost;

		return $this;
	} 
	

	public function setSmtpMandrillPort($SmtpMandrillPort)
	{
		
		$this->SmtpMandrillPort = $SmtpMandrillPort;

		return $this;
	} 
	

	public function setSmtpMandrillUsername($SmtpMandrillUsername)
	{
		
		$this->SmtpMandrillUsername = $SmtpMandrillUsername;

		return $this;
	} 
	

	public function setSmtpMandrillPassword($SmtpMandrillPassword)
	{
		
		$this->SmtpMandrillPassword = $SmtpMandrillPassword;

		return $this;
	} 
	

	public function setStripeActive($StripeActive)
	{
		
		$this->StripeActive = $StripeActive;

		return $this;
	} 
	

	public function setStripeSecretKey($StripeSecretKey)
	{
		
		$this->StripeSecretKey = $StripeSecretKey;

		return $this;
	} 
	

	public function setStripePublishableKey($StripePublishableKey)
	{
		
		$this->StripePublishableKey = $StripePublishableKey;

		return $this;
	} 
	

	public function setCurrency($Currency)
	{
		
		$this->Currency = $Currency;

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
		
	public function getStatut()
	{
		return $this->Statut ;
	} 
		
	public function getStatutVersion()
	{
		return $this->StatutVersion ;
	} 
		
	public function getStatutIp()
	{
		return $this->StatutIp ;
	} 
		
	public function getVersionDoorgets()
	{
		return $this->VersionDoorgets ;
	} 
		
	public function getTitle()
	{
		return $this->Title ;
	} 
		
	public function getSlogan()
	{
		return $this->Slogan ;
	} 
		
	public function getCopyright()
	{
		return $this->Copyright ;
	} 
		
	public function getYear()
	{
		return $this->Year ;
	} 
		
	public function getDescription()
	{
		return $this->Description ;
	} 
		
	public function getKeywords()
	{
		return $this->Keywords ;
	} 
		
	public function getEmail()
	{
		return $this->Email ;
	} 
		
	public function getPays()
	{
		return $this->Pays ;
	} 
		
	public function getVille()
	{
		return $this->Ville ;
	} 
		
	public function getAdresse()
	{
		return $this->Adresse ;
	} 
		
	public function getCodepostal()
	{
		return $this->Codepostal ;
	} 
		
	public function getTelFix()
	{
		return $this->TelFix ;
	} 
		
	public function getTelMobil()
	{
		return $this->TelMobil ;
	} 
		
	public function getTelFax()
	{
		return $this->TelFax ;
	} 
		
	public function getFacebook()
	{
		return $this->Facebook ;
	} 
		
	public function getTwitter()
	{
		return $this->Twitter ;
	} 
		
	public function getPinterest()
	{
		return $this->Pinterest ;
	} 
		
	public function getMyspace()
	{
		return $this->Myspace ;
	} 
		
	public function getLinkedin()
	{
		return $this->Linkedin ;
	} 
		
	public function getYoutube()
	{
		return $this->Youtube ;
	} 
		
	public function getGoogle()
	{
		return $this->Google ;
	} 
		
	public function getAnalytics()
	{
		return $this->Analytics ;
	} 
		
	public function getLangue()
	{
		return $this->Langue ;
	} 
		
	public function getLangueFront()
	{
		return $this->LangueFront ;
	} 
		
	public function getLangueGroupe()
	{
		return $this->LangueGroupe ;
	} 
		
	public function getHoraire()
	{
		return $this->Horaire ;
	} 
		
	public function getMentions()
	{
		return $this->Mentions ;
	} 
		
	public function getCgu()
	{
		return $this->Cgu ;
	} 
		
	public function getMNewsletter()
	{
		return $this->MNewsletter ;
	} 
		
	public function getMComment()
	{
		return $this->MComment ;
	} 
		
	public function getMCommentFacebook()
	{
		return $this->MCommentFacebook ;
	} 
		
	public function getMCommentDisqus()
	{
		return $this->MCommentDisqus ;
	} 
		
	public function getMSharethis()
	{
		return $this->MSharethis ;
	} 
		
	public function getMSitemap()
	{
		return $this->MSitemap ;
	} 
		
	public function getMRss()
	{
		return $this->MRss ;
	} 
		
	public function getIdFacebook()
	{
		return $this->IdFacebook ;
	} 
		
	public function getIdDisqus()
	{
		return $this->IdDisqus ;
	} 
		
	public function getTheme()
	{
		return $this->Theme ;
	} 
		
	public function getModuleHomepage()
	{
		return $this->ModuleHomepage ;
	} 
		
	public function getOauthGoogleId()
	{
		return $this->OauthGoogleId ;
	} 
		
	public function getOauthGoogleSecret()
	{
		return $this->OauthGoogleSecret ;
	} 
		
	public function getOauthGoogleActive()
	{
		return $this->OauthGoogleActive ;
	} 
		
	public function getOauthFacebookId()
	{
		return $this->OauthFacebookId ;
	} 
		
	public function getOauthFacebookSecret()
	{
		return $this->OauthFacebookSecret ;
	} 
		
	public function getOauthFacebookActive()
	{
		return $this->OauthFacebookActive ;
	} 
		
	public function getSmtpMandrillActive()
	{
		return $this->SmtpMandrillActive ;
	} 
		
	public function getSmtpMandrillHost()
	{
		return $this->SmtpMandrillHost ;
	} 
		
	public function getSmtpMandrillPort()
	{
		return $this->SmtpMandrillPort ;
	} 
		
	public function getSmtpMandrillUsername()
	{
		return $this->SmtpMandrillUsername ;
	} 
		
	public function getSmtpMandrillPassword()
	{
		return $this->SmtpMandrillPassword ;
	} 
		
	public function getStripeActive()
	{
		return $this->StripeActive ;
	} 
		
	public function getStripeSecretKey()
	{
		return $this->StripeSecretKey ;
	} 
		
	public function getStripePublishableKey()
	{
		return $this->StripePublishableKey ;
	} 
		
	public function getCurrency()
	{
		return $this->Currency ;
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
		
	public function getValidationStatut()
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
		
	public function getValidationStatutVersion()
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
		
	public function getValidationStatutIp()
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
		
	public function getValidationVersionDoorgets()
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
		
	public function getValidationTitle()
	{
		return array(
			'type'	         => 'varchar', 
			'size'			 => 220, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 
		
	public function getValidationSlogan()
	{
		return array(
			'type'	         => 'varchar', 
			'size'			 => 180, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 
		
	public function getValidationCopyright()
	{
		return array(
			'type'	         => 'varchar', 
			'size'			 => 100, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 
		
	public function getValidationYear()
	{
		return array(
			'type'	         => 'varchar', 
			'size'			 => 10, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 
		
	public function getValidationDescription()
	{
		return array(
			'type'	         => 'varchar', 
			'size'			 => 220, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 
		
	public function getValidationKeywords()
	{
		return array(
			'type'	         => 'varchar', 
			'size'			 => 220, 
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
			'size'			 => 80, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 
		
	public function getValidationPays()
	{
		return array(
			'type'	         => 'varchar', 
			'size'			 => 180, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 
		
	public function getValidationVille()
	{
		return array(
			'type'	         => 'varchar', 
			'size'			 => 180, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 
		
	public function getValidationAdresse()
	{
		return array(
			'type'	         => 'varchar', 
			'size'			 => 220, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 
		
	public function getValidationCodepostal()
	{
		return array(
			'type'	         => 'varchar', 
			'size'			 => 25, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 
		
	public function getValidationTelFix()
	{
		return array(
			'type'	         => 'varchar', 
			'size'			 => 30, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 
		
	public function getValidationTelMobil()
	{
		return array(
			'type'	         => 'varchar', 
			'size'			 => 30, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 
		
	public function getValidationTelFax()
	{
		return array(
			'type'	         => 'varchar', 
			'size'			 => 30, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 
		
	public function getValidationFacebook()
	{
		return array(
			'type'	         => 'varchar', 
			'size'			 => 120, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 
		
	public function getValidationTwitter()
	{
		return array(
			'type'	         => 'varchar', 
			'size'			 => 120, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 
		
	public function getValidationPinterest()
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
		
	public function getValidationMyspace()
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
		
	public function getValidationLinkedin()
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
		
	public function getValidationYoutube()
	{
		return array(
			'type'	         => 'varchar', 
			'size'			 => 120, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 
		
	public function getValidationGoogle()
	{
		return array(
			'type'	         => 'varchar', 
			'size'			 => 250, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 
		
	public function getValidationAnalytics()
	{
		return array(
			'type'	         => 'varchar', 
			'size'			 => 50, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 
		
	public function getValidationLangue()
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
		
	public function getValidationLangueFront()
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
		
	public function getValidationLangueGroupe()
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
		
	public function getValidationHoraire()
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
		
	public function getValidationMentions()
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
		
	public function getValidationCgu()
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
		
	public function getValidationMNewsletter()
	{
		return array(
			'type'	         => 'int', 
			'size'			 => 1, 
			'unique' 		 => false,
			'required' 		 => false,
			'primary_key' 	 => false,
			'auto_increment' => false
		);
	} 
		
	public function getValidationMComment()
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
		
	public function getValidationMCommentFacebook()
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
		
	public function getValidationMCommentDisqus()
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
		
	public function getValidationMSharethis()
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
		
	public function getValidationMSitemap()
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
		
	public function getValidationMRss()
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
		
	public function getValidationIdFacebook()
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
		
	public function getValidationIdDisqus()
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
		
	public function getValidationTheme()
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
		
	public function getValidationModuleHomepage()
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
		
	public function getValidationOauthGoogleId()
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
		
	public function getValidationOauthGoogleSecret()
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
		
	public function getValidationOauthGoogleActive()
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
		
	public function getValidationOauthFacebookId()
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
		
	public function getValidationOauthFacebookSecret()
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
		
	public function getValidationOauthFacebookActive()
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
		
	public function getValidationSmtpMandrillActive()
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
		
	public function getValidationSmtpMandrillHost()
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
		
	public function getValidationSmtpMandrillPort()
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
		
	public function getValidationSmtpMandrillUsername()
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
		
	public function getValidationSmtpMandrillPassword()
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
		
	public function getValidationStripeActive()
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
		
	public function getValidationStripeSecretKey()
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
		
	public function getValidationStripePublishableKey()
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
		    'Statut' =>  'statut',            
		    'StatutVersion' =>  'statut_version',            
		    'StatutIp' =>  'statut_ip',            
		    'VersionDoorgets' =>  'version_doorgets',            
		    'Title' =>  'title',            
		    'Slogan' =>  'slogan',            
		    'Copyright' =>  'copyright',            
		    'Year' =>  'year',            
		    'Description' =>  'description',            
		    'Keywords' =>  'keywords',            
		    'Email' =>  'email',            
		    'Pays' =>  'pays',            
		    'Ville' =>  'ville',            
		    'Adresse' =>  'adresse',            
		    'Codepostal' =>  'codepostal',            
		    'TelFix' =>  'tel_fix',            
		    'TelMobil' =>  'tel_mobil',            
		    'TelFax' =>  'tel_fax',            
		    'Facebook' =>  'facebook',            
		    'Twitter' =>  'twitter',            
		    'Pinterest' =>  'pinterest',            
		    'Myspace' =>  'myspace',            
		    'Linkedin' =>  'linkedin',            
		    'Youtube' =>  'youtube',            
		    'Google' =>  'google',            
		    'Analytics' =>  'analytics',            
		    'Langue' =>  'langue',            
		    'LangueFront' =>  'langue_front',            
		    'LangueGroupe' =>  'langue_groupe',            
		    'Horaire' =>  'horaire',            
		    'Mentions' =>  'mentions',            
		    'Cgu' =>  'cgu',            
		    'MNewsletter' =>  'm_newsletter',            
		    'MComment' =>  'm_comment',            
		    'MCommentFacebook' =>  'm_comment_facebook',            
		    'MCommentDisqus' =>  'm_comment_disqus',            
		    'MSharethis' =>  'm_sharethis',            
		    'MSitemap' =>  'm_sitemap',            
		    'MRss' =>  'm_rss',            
		    'IdFacebook' =>  'id_facebook',            
		    'IdDisqus' =>  'id_disqus',            
		    'Theme' =>  'theme',            
		    'ModuleHomepage' =>  'module_homepage',            
		    'OauthGoogleId' =>  'oauth_google_id',            
		    'OauthGoogleSecret' =>  'oauth_google_secret',            
		    'OauthGoogleActive' =>  'oauth_google_active',            
		    'OauthFacebookId' =>  'oauth_facebook_id',            
		    'OauthFacebookSecret' =>  'oauth_facebook_secret',            
		    'OauthFacebookActive' =>  'oauth_facebook_active',            
		    'SmtpMandrillActive' =>  'smtp_mandrill_active',            
		    'SmtpMandrillHost' =>  'smtp_mandrill_host',            
		    'SmtpMandrillPort' =>  'smtp_mandrill_port',            
		    'SmtpMandrillUsername' =>  'smtp_mandrill_username',            
		    'SmtpMandrillPassword' =>  'smtp_mandrill_password',            
		    'StripeActive' =>  'stripe_active',            
		    'StripeSecretKey' =>  'stripe_secret_key',            
		    'StripePublishableKey' =>  'stripe_publishable_key',            
		    'Currency' =>  'currency',            
		    'DateCreation' =>  'date_creation',            
		    'DateModification' =>  'date_modification',		
		)); 

	} 


    public function __construct($data = array(),&$doorGets = null, $joinMaps = array()) {
        parent::__construct($data,$doorGets,$joinMaps);
    }
}