<?php

class CharacterHNK extends Character
{

	private $_hardness;

	/**
	 * @param name
	 * @param firstname
	 */
	public function __construct(
		$id,
		$name,
		$firstname,
		$age,
		$height,
		$gender,
		$bd,
		$specie,
		$likes,
		$dislikes,
		$relations,
		$bkStory,
		$desc,
		$pictures,
		$thumbnail,
		$hardness
	) {
		parent::__construct($id, $name, $firstname, $age,  $height,  $gender, $bd, $specie, $likes, $dislikes, $relations, $bkStory,  $desc, $pictures, $thumbnail);

		$this->_hardness = $hardness;
	}


	//GETTER

	public function getHardness()
	{
		return $this->_hardness;
	}
}
