<?php
    $tittle = 'Galeria';
    $currentPage = 'Galeria';

    include 'Header.php';

    include 'Navbar.php';
?>
	
<br>

<div class="container">
	<?php
		function esPar($numero){
			if($numero % 2 == 0){
				return true;
			}else{
				return false;
			}
		}
   		
		$imagenes = glob('Pinturas/*');
		$cont = 0;
		$poscicion;

    	foreach($imagenes as $imagen){
			if(esPar($cont)){
				$poscicion = 'ImgIzquierda';
			}else{
				$poscicion = 'ImgDerecha';
			}

        	echo '<div class="'.$poscicion.'">
			<a href="'.$imagen.'" target="_blank">
				<img src="'.$imagen.'" width="100%"></img>
				<div class="overlay"><div class="text"><h3>'.substr(str_replace("Pinturas/", "", $imagen), 0, -4).'</h3></div></div>
			</a>
			</div>';

			$cont = $cont + 1;
    	}
	?>
</div>
	
<?php
    include 'Footer.php';
?>