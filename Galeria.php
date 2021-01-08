<?php
    $tittle = 'Galeria';
    $currentPage = 'Galeria';

    include 'Header.php';

    include 'Navbar.php';
?>
	
<br>

<?php
    $imagenes = include('Pinturas/*');

    foreach($imagenes as $imagen){
        echo '<div class="ImgIzquierda">
		<a href="'.$imagen.'" target="_blank">
			<img src="'.$imagen.'" width="100%"></img>
			<div class="overlay"><div class="text"><h3>'.$imagen.'</h3></div></div>
		</a>
		</div>';
    }
?>

<div class="container">
	<div class="ImgIzquierda">
		<a href="Pinturas\Abberly.png" target="_blank">
			<img src="Pinturas\Abberly.png" width="100%"></img>
			<div class="overlay"><div class="text"><h3>Abberly</h3></div></div>
		</a>
	</div>
	<div class="ImgDerecha">
		<a href="Pinturas\Ascend to darkness.png" target="_blank">
			<img src="Pinturas\Ascend to darkness.png" width="100%"></img>
			<div class="overlay"><div class="text"><h3>Ascend to darkness</h3></div></div>
		</a>
	</div>
	<div class="ImgIzquierda">
		<a href="Pinturas\Break free.png" target="_blank">
			<img src="Pinturas\Break free.png" width="100%"></img>
			<div class="overlay"><div class="text"><h3>Break free</h3></div></div>
		</a>
	</div>
	<div class="ImgDerecha">
		<a href="Pinturas\Broken knight.png" target="_blank">
			<img src="Pinturas\Broken knight.png" width="100%"></img>
			<div class="overlay"><div class="text"><h3>Broken knight</h3></div></div>
		</a>
	</div>
	<div class="ImgIzquierda">
		<a href="Pinturas\Death Comes.png" target="_blank">
			<img src="Pinturas\Death Comes.png" width="100%"></img>
			<div class="overlay"><div class="text"><h3>Death Comes</h3></div></div>
		</a>
	</div>
	<div class="ImgDerecha">
			<a href="Pinturas\Demon sword.png" target="_blank">
				<img src="Pinturas\Demon sword.png" width="100%"></img>
				<div class="overlay"><div class="text"><h3>Demon sword</h3></div></div>
			</a>
		</div>
		<div class="ImgIzquierda">
			<a href="Pinturas\Excalibur Umbra.png" target="_blank">
				<img src="Pinturas\Excalibur Umbra.png" width="100%"></img>
				<div class="overlay"><div class="text"><h3>Excalibur Umbra</h3></div></div>
			</a>	
		</div>
		<div class="ImgIzquierda">
			<a href="Pinturas\Fallen Hopes.jpg" target="_blank">
				<img src="Pinturas\Fallen Hopes.jpg" width="100%"></img>
				<div class="overlay"><div class="text"><h3>Fallen Hopes</h3></div></div>
			</a>
		</div>
		<div class="ImgDerecha">
			<a href="Pinturas\Fear the dark.png" target="_blank">
				<img src="Pinturas\Fear the dark.png" width="100%"></img>
				<div class="overlay"><div class="text"><h3>Fear the dark</h3></div></div>
			</a>
		</div>
		<div class="ImgDerecha">
			<a href="Pinturas\Fear the light.png" target="_blank">
				<img src="Pinturas\Fear the light.png" width="100%"></img>
				<div class="overlay"><div class="text"><h3>Fear the light</h3></div></div>
			</a>
		</div>
		<div class="ImgIzquierda">
			<a href="Pinturas\God is fake.png" target="_blank">
				<img src="Pinturas\God is fake.png" width="100%"></img>
				<div class="overlay"><div class="text"><h3>God is fake</h3></div></div>
			</a>
		</div>
		<div class="ImgDerecha">
			<a href="Pinturas\High class.png" target="_blank">
				<img src="Pinturas\High class.png" width="100%"></img>
				<div class="overlay"><div class="text"><h3>High class</h3></div></div>
			</a>
		</div>
		<div class="ImgIzquierda">
			<a href="Pinturas\Knight.png" target="_blank">
				<img src="Pinturas\Knight.png" width="100%"></img>
				<div class="overlay"><div class="text"><h3>Knight</h3></div></div>
			</a>
		</div>
		<div class="ImgDerecha">
			<a href="Pinturas\Light the path.png" target="_blank">
				<img src="Pinturas\Light the path.png" width="100%"></img>
				<div class="overlay"><div class="text"><h3>Light the path</h3></div></div>
			</a>
		</div>
		<div class="ImgIzquierda">
			<a href="Pinturas\Sanctuary guardian.png" target="_blank">
				<img src="Pinturas\Sanctuary guardian.png" width="100%"></img>
				<div class="overlay"><div class="text"><h3>Sanctuary guardian</h3></div></div>
			</a>
		</div>
		<div class="ImgDerecha">
			<a href="Pinturas\Shinobi.png" target="_blank">
				<img src="Pinturas\Shinobi.png" width="100%"></img>
				<div class="overlay"><div class="text"><h3>Shinobi</h3></div></div>
			</a>
		</div>
		<div class="ImgIzquierda">
			<a href="Pinturas\Spartan.png" target="_blank">
				<img src="Pinturas\Spartan.png" width="100%"></img>
				<div class="overlay"><div class="text"><h3>Spartan</h3></div></div>
			</a>
		</div>
		<div class="ImgDerecha">
			<a href="Pinturas\Speed.png" target="_blank">
				<img src="Pinturas\Speed.png" width="100%"></img>
				<div class="overlay"><div class="text"><h3>Speed</h3></div></div>
			</a>
		</div>
		<div class="ImgIzquierda">
			<a href="Pinturas\The witch.png" target="_blank">
				<img src="Pinturas\The witch.png" width="100%"></img>
				<div class="overlay"><div class="text"><h3>The witch</h3></div></div>
			</a>
		</div>
		<div class="ImgDerecha">
			<a href="Pinturas\Time to rest.png" target="_blank">
				<img src="Pinturas\Time to rest.png" width="100%"></img>
				<div class="overlay"><div class="text"><h3>Time to rest</h3></div></div>
			</a>
		</div>
	</div>
	
<?php
    include 'Footer.php';
?>