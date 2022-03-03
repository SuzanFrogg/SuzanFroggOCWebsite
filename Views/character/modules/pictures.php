<h2>Reference Picture(s)</h2>
		<p>
		<?php foreach($oc->getPictures() as $pic)
		{
				echo "<img src=\"" . $pic ."\" controls alt=" . $oc->getFirstName() . ">" ;
		}
		?>
		</p>