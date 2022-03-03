<?php


Class Drawing
{
	private $_id; //year_month_number
	private $_characters; //array of id
	private $_artist;
	private $_artist_link;
	private $_event;
	private $_fanart;
	private $_fanart_link;
	private $_year;
	private $_month;
	private $_drawinglink;

		


		/**
		* @param name
		* @param firstname
		*/
	public function __construct(int $number, Array $chara, String $artist, String $artistlink, String $event, String $fanart, String $fanartlink, int $year, String $month,String $link)
	{
		$monthNumber = "";

		switch($month)
		{
			case "Junary" :	$monthNumber = "01";
											break;
			case "February" :	$monthNumber = "02";
											break;
			case "March" :	$monthNumber = "03";
											break;
			case "April" :	$monthNumber = "04";
											break;
			case "May" :	$monthNumber = "05";
											break;
			case "June" :	$monthNumber = "06";
											break;
			case "July" :	$monthNumber = "07";
											break;
			case "August" :	$monthNumber = "08";
											break;
			case "September" :	$monthNumber = "09";
											break;
			case "October" :	$monthNumber = "10";
											break;
			case "November" :	$monthNumber = "11";
											break;
			case "December" :	$monthNumber = "12";
											break;
			default :	$monthNumber = "99";
											break;
		}

		$this->_id = $year . "_" . $monthNumber . "_" . $number;
		$this->_characters = $chara;
		$this->_artist = $artist;
		$this->_artist_link = $artistlink;
		$this->_event = $event;
		$this->_fanart = $fanart;
		$this->_fanart_link = $fanartlink;
		$this->_year = $year;
		$this->_month = $month;
		$this->_drawinglink = $link;
	}



	//GETTER

	public function getID()
	{
		return $this->_id;
	}

	public function getCharacters()
	{
		return $this->_characters;
	}

	public function getArtist()
	{
		return $this->_artist;
	}

	public function getArtistLink()
	{
		return $this->_artist_link;
	}

	public function getEvent()
	{
		return $this->_event;
	}

	public function getFanArt()
	{
		return $this->_fanart;
	}

	public function getFanArtLink()
	{
		return $this->_fanart_link;
	}

	public function getYear()
	{
		return $this->_year;
	}

	public function getMonth()
	{
		return $this->_month;
	}

		public function getLink()
	{
		return $this->_drawinglink;
	}





  

}

?>