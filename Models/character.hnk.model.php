<?php

Class CharacterHNK extends Character
{

	private $_hardness;

     /**
      * @param name
      * @param firstname
      */
     public function __construct(String $id,String $name,
		 		String 	$firstname, int $age, int $height, String $gender,
				String $bd,String $specie,String $likes,
				String $dislikes, Array $relations, String $bkStory, String $desc,Array $pictures, String $thumbnail,
				String $hardness)
			{
				parent::__construct($id,$name, $firstname,$age,  $height,  $gender,$bd, $specie, $likes, $dislikes, $relations, $bkStory,  $desc, $pictures,$thumbnail);

				$this->_hardness = $hardness;

				

			}


			//GETTER

			public function getHardness()
			{
				return $this->_hardness;
			} 





  

}

?>