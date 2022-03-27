<html>
<?php

require_once("utils.php");

require_once("Controllers/character.controller.php");
//include_once("Controllers/video.controller.php");
//include_once("Controllers/drawing.controller.php");

require_once("Models/character.model.php");
//include_once("Models/video.model.php");
require_once("Models/character.am.model.php");
require_once("Models/character.undertale.model.php");
//include_once("Models/drawing.model.php");
require_once("Models/character.hnk.model.php");


$title = "Home";
$icon = null;
include_once("Views/head.php");
?>

<body>
	<?php include_once("Views/nav.php");

	//!!!! info => Sasuil Relations, Infos Complémentaires, Explication sur Sasuil, Autre Monde relations
	//Pas oublier les dessins!!!!

	?>
	<div class="content">
		<p>Welcome on my OCs' references website. Have fun exploring.</p>
		
		<h1>Randoms OCs</h1>

		<?php
		$OCsManager = new CharacterManager();
		$OCs = $OCsManager->getList();
		$randomOC = array();

		for ($i = 0; $i < 7; $i++) {
			$inarray = true;
			while ($inarray) {
				$rand = rand(0, count($OCs) - 1);
				$inarray = in_array($OCs[$rand], $randomOC);
			}
			array_push($randomOC, $OCs[$rand]);
		}


		foreach ($randomOC as $o) {
			switch (get_class($o)) {
				case 'Character':
					echo "<a href=Views/character/profilBASE.php?id=" . $o->getName() . "_" . $o->getFirstName() . "> <img src=\"" . $o->getThumbnail() . "\" alt=\"" . $o->getFirstName() . "\"/></a>";
					break;
				case 'CharacterAM':
					echo "<a href=Views/character/profilAM.php?id=" . $o->getName() . "_" . $o->getFirstName() . "> <img src=\"" . $o->getThumbnail() . "\" alt=\"" . $o->getFirstName() . "\"/></a>";
					break;
				case 'CharacterUndertale':
					echo "<a href=Views/character/profilUndertale.php?id=" . $o->getName() . "_" . $o->getFirstName() . "> <img src=\"" . $o->getThumbnail() . "\" alt=\"" . $o->getFirstName() . "\"/></a>";
					break;
				case 'CharacterHNK':
					echo "<a href=Views/character/profilHNK.php?id=" . $o->getName() . "_" . $o->getFirstName() . "> <img src=\"" . $o->getThumbnail() . "\" alt=\"" . $o->getFirstName() . "\"/></a>";
					break;
				default:
					echo "<a href=Views/character/profilBASE.php?id=" . $o->getName() . "_" . $o->getFirstName() . "> <img src=\"" . $o->getThumbnail() . "\" alt=\"" . $o->getFirstName() . "\"/></a>";
					break;
			}
		}
		?>

		<p><a href="Views/character/listOc.php">See the others</a></p>



	</div>
	<?php include_once("Views/footer.php"); ?>

</body>

</html>