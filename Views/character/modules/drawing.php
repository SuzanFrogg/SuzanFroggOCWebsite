<?php //Drawing
	include_once("../../Controllers/character.controller.php");
	include_once("../../Controllers/drawing.controller.php");
	include_once("../../Controllers/video.controller.php");
	include_once("../../Models/character.model.php");
	include_once("../../Models/video.model.php");
	include_once("../../Models/character.am.model.php");
	include_once("../../Models/character.undertale.model.php");
	include_once("../../Models/drawing.model.php");
	include_once("../../Models/character.hnk.model.php");

	$drawingManager = new DrawingManager();
	$lstDrawing = $drawingManager->getList();

	$OCHasDrawings = false;
	foreach($lstDrawing as $draw)
	{
		if(in_array($oc->getID(),$draw->getCharacters()))
		{
			$OCHasDrawings = true;
			break;
		}
	}

	$videoManager = new VideoManager();
	$lstvid = $videoManager->getList();

	$OCHasVid = false;
	foreach($lstvid as $vid)
	{
		if(in_array($oc->getID(),$vid->getCharacters()))
		{
			$OCHasVid = true;
			break;
		}
	}
?>
<?php if($OCHasDrawings || $OCHasVid) : ?>
<p><a href="../drawing.php?id=<?php echo $oc->getID() ?>">Drawings of <?php echo $oc->getFirstName() ?> <?php echo $oc->getName() ?></a><p>
<?php endif ?>
