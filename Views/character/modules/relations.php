<?php 

if(count($oc->getRelations())> 0) : ?>
			<h2>Importants Relations</h2>
				<p> <ul>
				<?php foreach( $oc->getRelations() as $key => $value )
				{
					$relative = $OCsManager->getCharacter($key);
					if($relative != null)
						echo "<li><a href=profilBASE.php?id=". $relative->getName() . "_" . $relative->getFirstName() .">". $relative->getFirstName() . " " . $relative->getName() . "</a> : " . $value ."</li>";
					else
						echo "<li>" . $key . " : " . $value ."</li>";
				}
				?>
				</ul></p>
<?php endif?>