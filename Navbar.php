<nav class="navbar navbar-expand-md navbar-dark sticky-top">
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
		<span class="navbar-toggler-icon"></span>
		</button>
	
	<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="navbar-nav mr-auto mx-auto mt-2 mt-md-0">
		<li class="nav-item <?php if ($currentPage === 'Home') {echo 'activa';}?>"><a class="nav-link" href="Home.php">Home</a></li>
		<li class="nav-item <?php if ($currentPage === 'Galeria') {echo 'activa';}?>"><a class="nav-link" href="Galeria.php">Galeria</a></li>
		<li class="nav-item <?php if ($currentPage === 'Pedido') {echo 'activa';}?>"><a class="nav-link" href="Pedido.php">Pedido Personalizado</a></li>
		<li class="nav-item <?php if ($currentPage === 'SobreMi') {echo 'activa';}?>"><a class="nav-link" href="SobreMi.php">Sobre mi</a></li>
		</ul>
		</br>
	</div>
</nav>

<br>