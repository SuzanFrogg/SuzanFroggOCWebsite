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

	

	$isValid = false;

	if(isset($_GET["id"]))
	{
			$id = $_GET["id"];


			$OCsManager = new CharacterManager();
			$OCs =$OCsManager->getList();

			$oc = $OCsManager->getCharacter($id);

			if($oc != null)
			{
					$isValid = true;
			}

	}

?>

<html>
	<?php 
	$title = $oc->getFirstName() . " " . $oc->getName();
	$icon = $oc->getThumbnail();
	include_once("../head.php");
	?>
  <body>
		<?php if($isValid): ?>
		<?php include_once("../nav.php"); ?>
		<div class="content">

			<h1><?php echo $oc->getFirstName(). " " . $oc->getName() ; ?></h1>

			<h2>Description</h2>

			<p>
				Age : <?php echo $oc->getAge(); ?> y'o <br /><br />
				Height : <?php echo $oc->getHeight(); ?>  cm <br /><br />
				Gender : <?php echo $oc->getGender(); ?> <br /><br />
				Birthday : <?php echo $oc->getBirthDay(); ?> (dd/mm) <br /><br />
				Particular species : <?php echo $oc->getSpecie(); ?>  <br /><br />
				<?php echo $oc->getDescription(); ?>
			</p>

			<?php include_once("modules/likes.php"); ?>
			<?php include_once("modules/relations.php"); ?>
			<?php include_once("modules/pictures.php"); ?>
			<?php include_once("modules/drawing.php"); ?>
			<?php include_once("modules/backstory.php"); ?>

		</div>
		<?php include_once("../footer.php"); ?>

		
	<?php elseif(!$isValid): ?>
		<div class="content">
			<p>Url invalide</p>
			<a href="javascript:history.go(-1)">Retour</a>
		</div>
	<?php endif; ?>
  </body>
</html>

