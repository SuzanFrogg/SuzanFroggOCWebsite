<?php
	include_once("../Controllers/character.controller.php");
	include_once("../Controllers/video.controller.php");
	include_once("../Controllers/drawing.controller.php");
	
	include_once("../Models/character.model.php");
	include_once("../Models/video.model.php");
	include_once("../Models/character.am.model.php");
	include_once("../Models/character.undertale.model.php");
	include_once("../Models/drawing.model.php");
	include_once("../Models/character.hnk.model.php");

	$isValid = false;

	if(isset($_GET["id"]))
	{
			$id = $_GET["id"];


			$OCsManager = new CharacterManager();
			$oc = $OCsManager->getCharacter($id);
			if($oc != null)
			{
					$isValid = true;
			}

	}

	?>

<html>
	<?php 
	$title = "Drawings : " . $oc->getFirstName() . " " . $oc->getName();
	$icon = $oc->getThumbnail();
	include_once("head.php");
	?>
	<body>
		<?php if($isValid): ?>
		<?php include_once("nav.php"); ?>
		<div class="content">
		
			<p>
			<em> I sometimes forget to post the drawings here, if you want to see more use the <a href="https://www.instagram.com/explore/tags/suzanfroggoc/?hl=fr">#suzanfroggoc</a> on instagram ! </em>
			<h1> Drawings </h1>
			<?php //Drawing

				$drawingManager = new DrawingManager();
				$lstDrawing = $drawingManager->getList();

				foreach($lstDrawing as $draw)
				{
					if(in_array($oc->getID(),$draw->getCharacters()))
					{
						echo "<div class=\"imageOC\"><img src=\"". $draw->getLink() ."\"/>
									<br/> Made in ". $draw->getMonth() . " " . $draw->getYear();
						if($draw->getArtist() != "")
							echo"<br/>Artist: <a href=\"". $draw->getArtistLink() ."\" target=\"_blank\">". $draw->getArtist() ."</a>";
						if($draw->getEvent() != "")
							echo"<br/>Context: " .$draw->getEvent() ;
						if($draw->getFanArt() != "")
							echo"<br/>Fan Art: <a href=\"". $draw->getFanArtLink() ."\" target=\"_blank\">". $draw->getFanArt() ."</a>";
						echo "<br/></div>";


					}
				}
			?>
			</p>

			<p>
			<h1> Videos </h1>
			<?php //Video
	
				$videomanager = new VideoManager();
				$lstvid = $videomanager->getList();

				foreach($lstvid as $vid)
				{
					if(in_array($oc->getID(),$vid->getCharacters()))
						echo "<iframe src=\"". $vid->getLink() ."\" allowfullscreen ></iframe><br/>";
						// width=\"560\" height=\"315\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen
						
				}
			?>
			</p>

			<p>
			<?php //Liens Perso
				switch(get_class($oc))
							{
								case 'Character':
											echo "<a href=character/profilBASE.php?id=" .  $oc->getID() .">Refsheet</a>";
											break;
								case 'CharacterAM':
											echo "<a href=character/profilAM.php?id=" . $oc->getID() .">Refsheet</a>";
											break;
								case 'CharacterUndertale':
											echo "<a href=character/profilUndertale.php?id=" . $oc->getID() .">Refsheet</a>";
											break;
								case 'CharacterHNK':
											echo "<a href=character/profilHNK.php?id=" . $oc->getID() .">Refsheet</a>";
											break;
								default : 
											echo "<a href=character/profilBASE.php?id=" .$oc->getID() .">Refsheet</a>";
											break;

							}
			?>
			</p>

		</div>
		<?php include_once("footer.php"); ?>



	<?php elseif(!$isValid): ?>
		<div class="content">
			<p>Url invalide</p>
			<a href="javascript:history.go(-1)">Retour</a>
		</div>
	<?php endif; ?>
	
	</body>
</html>

