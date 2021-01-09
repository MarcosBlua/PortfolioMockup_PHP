<?php
    $tittle = 'Galeria';
    $currentPage = 'Galeria';

    include 'Header.php';

    include 'Navbar.php';
?>
	
<br>

<div class="container">
	<?php
    	$imagenes = glob('Pinturas/*');

    	foreach($imagenes as $imagen){
        	echo '<div class="ImgIzquierda">
			<a href="'.$imagen.'" target="_blank">
				<img src="'.$imagen.'" width="100%"></img>
				<div class="overlay"><div class="text"><h3>'.$imagen.'</h3></div></div>
			</a>
			</div>';
    	}
	?>	
</div>
	
<?php
    include 'Footer.php';
?>