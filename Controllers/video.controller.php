<?php


//include_once("../../Models/drawing.model.php");


Class VideoManager
{
	private $_arrayVideo;

	public function __construct()
	{
		$this->_arrayVideo = array();
		
		/*
		https://youtube.com/embed/
		$video = new Video(id, array(chara), link);
		array_push($this->_arrayVideo, $video);
		*/

		$video = new Video("HappyPills", array("Ewana_Tomoyo"),"https://www.youtube.com/embed/UbOytqXsnpI");
		array_push($this->_arrayVideo, $video);

		$video = new Video("Mine", array("Lewis_Mary","Lewis_Ruby","Hona_Lysthill"), "https://youtube.com/embed/vc5gt0sgkus");
		array_push($this->_arrayVideo, $video);

		$video = new Video("Kurimasu", array("_Amset","_Laly","_Jun","Nina_Saki","Nina_Rira","Letha_Kaële","Letha_Köös","Merry_Heiby","_Sally","_Jack","Hona_Satoru"), "https://youtube.com/embed/0W2SxF5lsP8");
		array_push($this->_arrayVideo, $video);
		
		$video = new Video("MeMeMe", array("Merry_Heiby"), "https://youtube.com/embed/TXGHzmYMwU");
		array_push($this->_arrayVideo, $video);
		
		$video = new Video("CutMyHairs", array("Ewana_Tomoyo"), "https://youtube.com/embed/JraovcU1_yY");
		array_push($this->_arrayVideo, $video);
		
		$video = new Video("SayMyName", array("_Amset","_Laly"), "https://youtube.com/embed/bX3TG8mepys");
		array_push($this->_arrayVideo, $video);

		$video = new Video("Despacito", array("Nina_Saki"), "https://youtube.com/embed/yAEk7X3hn2U");
		array_push($this->_arrayVideo, $video);

		$video = new Video("DoItForMe", array("Shido_Rocre","Shido_Akio","Shido_Sera"), "https://youtube.com/embed/PkFVXpBQdDI");
		array_push($this->_arrayVideo, $video);
		
		$video = new Video("ImNotASaint", array("_Amset","_Laly","_Jun","Nina_Saki","Shido_Akio","_Ash","Nina_Rira","Shido_Sera","_Naly"), "https://youtube.com/embed/Cfkyz-FQLoQ");
		array_push($this->_arrayVideo, $video);
		
		$video = new Video("OhKlahoma", array("_Jun","_Amset","Nina_Saki","Nina_Rira","Shido_Akio","Shido_Sera","_Naly"), "https://youtube.com/embed//cOgEezBFDcA");
		array_push($this->_arrayVideo, $video);
		
		$video = new Video("Bromance", array("_Jun","_Amset","Nina_Saki","_Jack"), 'https://youtube.com/embed/mM8o7K437Co');
		array_push($this->_arrayVideo, $video);
		
		$video = new Video("MyR", array("Ewana_Tomoyo","Lewis_Ruby","Ewana_Tori","Ewana_Lyci", "Ewana_Domma","Dass_Nyaomie"), "https://youtube.com/embed/TZ2eOSaPL3w");
		array_push($this->_arrayVideo, $video);
	
		$video = new Video("TheEndIsNotTheAwnser", array("Ewana_Tomoyo","Dass_Nyaomie"), "	https://youtube.com/embed/I8m8AJh3AgE");
		array_push($this->_arrayVideo, $video);
		
		$video = new Video("TrapDoor", array("_Amset","_Laly","_Jun","Nina_Saki"), "https://youtube.com/embed/h271-EP1r-w");
		array_push($this->_arrayVideo, $video);
		
		$video = new Video("BabyDontCut", array("Ewana_Tomoyo","Dass_Nyaomie"), "https://youtube.com/embed/z8Xs66bZ64c");
		array_push($this->_arrayVideo, $video);
		
		$video = new Video("ZombieSong", array("_Ash","_Naly","_Amset","_Laly","Merry_Heiby","Shido_Akio","Shido_Sera","Nina_Saki"), "https://youtube.com/embed/xkeg7MgiQ-4");
		array_push($this->_arrayVideo, $video);
		
		$video = new Video("FriendPlease", array("_Jun","_Amset","Nina_Saki","_Laly"), "https://youtube.com/embed/kyTSZa7PxHg");
		array_push($this->_arrayVideo, $video);
		
		$video = new Video("EndOfTheParty", array("_Jun","_Amset"), "https://youtube.com/embed/brgNM4UsJ_U");
		array_push($this->_arrayVideo, $video);
		
		$video = new Video("DahiMagicalGirl", array("Hona_Dahi"), "https://youtube.com/embed/GvMcb8pp0Sc");
		array_push($this->_arrayVideo, $video);
		
		$video = new Video("OCVine1", array("Lewis_Mary","_Jack","Hona_Satoru","Ewana_Domma","Ewana_Lyci","_Jun","_Naly","Merry_Miranda","Dass_Tsyna","Hona_Dahi","_Ash","Nina_Rira","Nina_Saki","_Amset","Dass_Nyaomie","Ewana_Tomoyo","Shido_Akio","Shido_Rocre"), "https://youtube.com/embed/usYKX-0KpiQ");
		array_push($this->_arrayVideo, $video);

		$video = new Video("OCVine2", array("_Ruth","Lewis_Mary","Shido_Rocre","_Jack","Hona_Satoru","Merry_Heiby","_Jun","_Amset","Hona_Dahi","Dass_Tsyna","Nina_Saki","Ewana_Domma","Ewana_Lyci","Ewana_Tomoyo","Ewana_Tori","Dass_Nyaomie","Lewis_Ruby","_Naly","Shido_Sera","Merry_Miranda","_Laly","_Ash","Hona_Ama"), "https://youtube.com/embed/mgHZudHAViw");
		array_push($this->_arrayVideo, $video);
		

		


	}

	/***
	Récupère la liste des dessins
	*/
	public function getList()
	{
			return $this->_arrayVideo;
	}

	/***
	Donne une video d'après son id
	**/
	public function getVideo($id)
	{
		$video = null;
		$lst_video = $this->getList();
		foreach ($lst_video as $v)
		{
				if($v->getID() == $id)
				{
					$video = $v;
				}
		}

			return $video;
	}


}


?>