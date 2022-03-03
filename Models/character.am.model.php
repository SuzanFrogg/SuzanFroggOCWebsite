<?php


Class CharacterAM extends Character
{

	private $_hand;
	private $_personality;
	private $_weapon;
	private $_shield;
	private $_helmet;
	private $_armor;
	private $_accesory;
	private $_main_party; //bool
     /**
      * @param name
      * @param firstname
      */
     public function __construct(String $id,String $name,
		 		String 	$firstname, int $age, int $height, String $gender,
				String $bd,String $specie,String $likes,
				String $dislikes, Array $relations, String $bkStory, String $desc,Array $pictures, String $thumbnail,
		 		String $hand, String $personality, String $weapon,
				 String $shield, String $helmet, String $armor,
				 String $accesory, bool $mainparty)
			{
				parent::__construct($id,$name, $firstname,$age,  $height,  $gender,$bd, $specie, $likes, $dislikes, $relations, $bkStory,  $desc, $pictures,$thumbnail);

				$this->_hand = $hand;
				$this->_personality = $personality;
				$this->_weapon = $weapon;
				$this->_shield = $shield;
				$this->_helmet = $helmet;
				$this->_armor = $armor;
				$this->_accesory = $accesory;
				$this->_main_party = $mainparty;

			}


			//GETTER

			public function getHand()
			{
				return $this->_hand;
			} 
			
			public function getPersonality()
			{
				return $this->_personality;
			} 

			public function getWeapon()
			{
				return $this->_weapon;
			} 

			public function getShield()
			{
				return $this->_shield;
			} 

			public function getHelmet()
			{
				return $this->_helmet;
			} 

			public function getArmor()
			{
				return $this->_armor;
			} 

			public function getAccesory()
			{
				return $this->_accesory;
			} 

			public function isMainParty()
			{
				return $this->_main_party;
			} 



  

}

?>