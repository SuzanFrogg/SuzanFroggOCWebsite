<?php


class Video
{
	private $_id;
	private $_characters; //array of id
	private $_video_link;




	/**
	 * @param name
	 * @param firstname
	 */
	public function __construct($id,  $chara,  $link)
	{
		$this->_id = $id;
		$this->_characters = $chara;
		$this->_video_link = $link;
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

	public function getLink()
	{
		return $this->_video_link;
	}
}
