<html>
	<?php 
	$title = "Refsheets";
	$icon = null;
	include_once("../head.php");
	?>
	<body>

	<?php
		include_once("../../Controllers/character.controller.php");
		include_once("../../Controllers/video.controller.php");
		include_once("../../Controllers/drawing.controller.php");
		
		include_once("../../Models/character.model.php");
		include_once("../../Models/video.model.php");
		include_once("../../Models/character.am.model.php");
		include_once("../../Models/character.undertale.model.php");
		include_once("../../Models/drawing.model.php");
		include_once("../../Models/character.hnk.model.php");

	?>

	<?php 

	include_once("../nav.php");

	$OCsManager = new CharacterManager();
	$OCs =$OCsManager->getList(); 
	?>

	<div class="content">
		<h1> Originals OCs </h1>

		<h2> Sasuil's OC </h2>
		<p>
		<?php foreach ($OCs as $o)
		{		
			if(get_class($o) == Character)
				echo "<a href=profilBASE.php?id=" . $o->getName() . "_" . $o->getFirstName() ."> <img src=\"" . $o->getThumbnail() . "\" alt=\"" . $o->getFirstName() . "\"/></a>";
		}?>
		</p>


		<h2> Autre Monde's OC </h2>
		<p><em>Game not available anymore</em></p>
		<p>
		<?php foreach ($OCs as $o)
		{		
			if(get_class($o) == CharacterAM)
				echo "<a href=profilAM.php?id=" .  $o->getName() . "_" . $o->getFirstName()  ."> <img src=\"" . $o->getThumbnail() . "\" alt=\"" . $o->getFirstName() . "\"/></a>";
		}?>
		</p>

		<h1> Fan OCs </h1>

		<h2> Undertale </h2>
		<p><a href="https://undertale.fandom.com/wiki/Main_Page">Undertale Wiki</a></p>
		<p>
		<?php foreach ($OCs as $o)
		{		
			if(get_class($o) == CharacterUndertale)
				echo "<a href=profilUndertale.php?id=" .  $o->getName() . "_" . $o->getFirstName() ."> <img src=\"" . $o->getThumbnail() . "\" alt=\"" . $o->getFirstName() . "\"/></a>";
		}?>
		</p>

		<h2> Houseki No Kuni </h2>
		<p><a href="https://houseki-no-kuni.fandom.com/wiki/Houseki_no_Kuni_Wiki">Houseki No Kuni Wiki</a></p>
		<p>
		<?php foreach ($OCs as $o)
		{		
			if(get_class($o) == CharacterHNK)
				echo "<a href=profilHNK.php?id=" .  $o->getName() . "_" . $o->getFirstName() ."> <img src=\"" . $o->getThumbnail() . "\" alt=\"" . $o->getFirstName() . "\"/></a>";
		}?>
		</p>
	</div>
	<?php include_once("../footer.php"); ?>
	</body>
</html>
