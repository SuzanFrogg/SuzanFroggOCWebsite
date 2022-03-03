<?php


Class Character
{
    private $_id;
     private $_name;
     private $_firstName;
     private $_age;
     private $_height;
     private $_gender;
     private $_birthday;
     private $_specie;
     private $_likes;
     private $_dislikes; 
     private $_relations;//array
     private $_backstory;
		 private $_description;
		 private $_pictures; //array
		 private $_thumbnail;
     


     /**
      * @param name
      * @param firstname
      */
     public function __construct(String $id,String $name,
		 		String $firstname,int $age, int $height, String $gender,
				String $bd,String $specie,String $likes,
				String $dislikes, Array $relations, String $bkStory, String $desc,Array $pictures, String $thumbnail)
			{
          $this->_name = $name;
          $this->_firstName = $firstname;
          $this->_id=$id;
          $this->_age= $age;
          $this->_height = $height;
          $this->_gender =$gender;
          $this->_birthday = $bd;
          $this->_specie = $specie;
          $this->_likes = $likes;
          $this->_dislikes = $dislikes;
          $this->_relations = $relations;
          $this->_backstory = $bkStory;
					$this->_description = $desc;
					$this->_pictures = $pictures;
					$this->_thumbnail = $thumbnail;

     }



     //GETTER

     /**
      * @return _name
      */
     public function getName()
     {
          return $this->_name;
     }

     /**
      * @return _fistname
      */
      public function getFirstName()
      {
           return $this->_firstName;
      }

      /**
      * @return _id
      */
      public function getID()
      {
           return $this->_id;
      }
      
      /**
       * @return _age
       */
      public function getAge()
      {
           return $this->_age;
      }

      public function getHeight()
      {
           return $this->_height;
      }

      public function getGender()
      {
           return $this->_gender;
      }
      
      public function getBirthday()
      {
           return $this->_birthday;
      }

      public function getSpecie()
      {
           return $this->_specie;
      }
			
      public function getLikes()
      {
           return $this->_likes;
      }

      public function getDislikes()
      {
           return $this->_dislikes;
      }

      public function getRelations()
      {
           return $this->_relations;
      }

      public function getBackStory()
      {
           return $this->_backstory;
      }
			
			public function getDescription()
      {
           return $this->_description;
      }

			public function getPictures()
      {
           return $this->_pictures;
      }

			public function getThumbnail()
      {
           return $this->_thumbnail;
      }

  

}

?>