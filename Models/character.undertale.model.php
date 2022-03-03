<?php

Class CharacterUndertale extends Character
{

	private $_job;
	private $_PV;
	private $_def;
	private $_atq;

     /**
      * @param name
      * @param firstname
      */
     public function __construct(String $id,String $name,
		 		String 	$firstname, int $age, int $height, String $gender,
				String $bd,String $specie,String $likes,
				String $dislikes, Array $relations, String $bkStory, String $desc,Array $pictures, String $thumbnail,
				String $job, int $pv, int $def, int $atq)
			{
				parent::__construct($id,$name, $firstname,$age,  $height,  $gender,$bd, $specie, $likes, $dislikes, $relations, $bkStory,  $desc, $pictures,$thumbnail);

				$this->_job = $job;
				$this->_PV = $pv;
				$this->_def = $def;
				$this->_atq = $atq;
				

			}


			//GETTER

			public function getJob()
			{
				return $this->_job;
			} 

			public function getDef()
			{
				return $this->_def;
			}
			
			public function getPV()
			{
				return $this->pv;
			}
			
			public function getAtq()
			{
				return $this->_atq;
			} 
			




  

}

?>