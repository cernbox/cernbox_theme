<?php

class OC_Theme 
{
	private $l;
	private $defaultEntity;
	private $defaultName;
	private $defaultTitle;
	private $defaultBaseUrl;
	private $defaultSyncClientUrl;
	private $defaultiOSClientUrl;
	private $defaultiTunesAppId;
	private $defaultAndroidClientUrl;
	private $defaultDocBaseUrl;
	private $defaultDocVersion;
	private $defaultSlogan;
	private $defaultSloganUrl;
	private $defaultLogoClaim;
	private $defaultMailHeaderColor;
	
	function __construct() 
	{
		$this->l = \OC::$server->getL10N ( 'lib' );
		$version = OC_Util::getVersion ();
		
		$this->defaultEntity = 'CERNBox'; 
		$this->defaultName = 'CERNBox'; 
		$this->defaultTitle = 'CERNBox';
		$this->defaultBaseUrl = 'https://cernbox.cern.ch';
		$this->defaultSyncClientUrl = 'http://cernbox.cern.ch/cernbox/doc';
		$this->defaultiOSClientUrl = 'https://cernbox.cern.ch/cernbox/doc';
		$this->defaultiTunesAppId = '543672169';
		$this->defaultAndroidClientUrl = 'https://play.google.com/store/apps/details?id=ch.cern.cernbox';
		$this->defaultDocBaseUrl = 'http://cernbox.cern.ch/cernbox/doc';
		$this->defaultDocVersion = $version [0] . '.' . $version [1]; // used to generate doc links
		$this->defaultSlogan = $this->l->t ('Help and Download Clients');
		$this->defaultLogoClaim = '';
		$this->defaultMailHeaderColor = '#fff'; /* header color of mail notifications */
	}
	
	/**
	 * Returns the base URL
	 * 
	 * @return string URL
	 */
	public function getBaseUrl() 
	{
		return $this->defaultBaseUrl;
	}
	
	/**
	 * Returns the URL where the sync clients are listed
	 * 
	 * @return string URL
	 */
	public function getSyncClientUrl() 
	{
		$this->defaultSyncClientUrl;
	}
	
	/**
	 * Returns the URL to the App Store for the iOS Client
	 * 
	 * @return string URL
	 */
	public function getiOSClientUrl() 
	{
		return $this->defaultiOSClientUrl;
	}
	
	/**
	 * Returns the AppId for the App Store for the iOS Client
	 * 
	 * @return string AppId
	 */
	public function getiTunesAppId() 
	{
		return $this->defaultiTunesAppId;
	}
	
	/**
	 * Returns the URL to Google Play for the Android Client
	 * 
	 * @return string URL
	 */
	public function getAndroidClientUrl() 
	{
		return $this->defaultAndroidClientUrl;
	}
	
	/**
	 * Returns the documentation URL
	 * 
	 * @return string URL
	 */
	public function getDocBaseUrl() 
	{
		return $this->defaultDocBaseUrl;
	}
	
	/**
	 * Returns the title
	 * 
	 * @return string title
	 */
	public function getTitle() 
	{
		return $this->defaultTitle;
	}
	
	/**
	 * Returns the short name of the software
	 * 
	 * @return string title
	 */
	public function getName()
	{
		return $this->defaultName;
	}
	
	/**
	 * Returns the short name of the software containing HTML strings
	 * 
	 * @return string title
	 */
	public function getHTMLName() 
	{
		return $this->defaultName;
	}
	
	/**
	 * Returns entity (e.g.
	 * company name) - used for footer, copyright
	 * 
	 * @return string entity name
	 */
	public function getEntity() 
	{
		return $this->defaultEntity;
	}
	
	/**
	 * Returns slogan
	 * 
	 * @return string slogan
	 */
	public function getSlogan() 
	{
		return $this->defaultSlogan;
	}
	
	/**
	 * Returns logo claim
	 * 
	 * @return string logo claim
	 */
	public function getLogoClaim() 
	{
		return $this->defaultLogoClaim;
	}
	
	/**
	 * Returns short version of the footer
	 * 
	 * @return string short footer
	 */
	public function getShortFooter() 
	{
		$footer = '<a href="' . $this->getDocBaseUrl () . '" target="_blank">' . $this->getSlogan() . '</a>';
		
		return $footer;
	}
	
	/**
	 * Returns long version of the footer
	 * 
	 * @return string long footer
	 */
	public function getLongFooter() 
	{
		$footer = $this->getShortFooter ();
		
		return $footer;
	}
	
	public function buildDocLinkToKey($key) 
	{
		return $this->getDocBaseUrl () . '/server/' . $this->defaultDocVersion . '/go.php?to=' . $key;
	}
	
	/**
	 * Returns mail header color
	 * 
	 * @return string
	 */
	public function getMailHeaderColor() 
	{
		return $this->defaultMailHeaderColor;
	}
}