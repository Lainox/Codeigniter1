<body>
	
	<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="#">Future Imperfect</a></h1>
						<nav class="links">
							<ul>
								<li><a href="#">Lorem</a></li>
								<li><a href="#">Ipsum</a></li>
								<li><a href="#">Feugiat</a></li>
								<li><a href="#">Tempus</a></li>
								<li><a href="#">Adipiscing</a></li>
							</ul>
						</nav>
						<nav class="main">
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">Search</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Search" />
									</form>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>

						<section id="menu">

						<!-- Search -->
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>

						<!-- Links -->
							<section>
								<ul class="links">
									<li>
										<a href="#">
											<h3>Lorem ipsum</h3>
											<p>Feugiat tempus veroeros dolor</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Dolor sit amet</h3>
											<p>Sed vitae justo condimentum</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Feugiat veroeros</h3>
											<p>Phasellus sed ultricies mi congue</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Etiam sed consequat</h3>
											<p>Porta lectus amet ultricies</p>
										</a>
									</li>
								</ul>
							</section>

						<!-- Actions -->
							<section>
								<ul class="actions vertical">
									<li><a href="#" class="button big fit">Log In</a></li>
								</ul>
							</section>

					</section>


					<!-- Main -->
					<div id="main">
						
						<!-- Post -->
						 <?php foreach($consulta->result() as $fila){ ?>
							<article class="post">

								<header>
									<div class="title">
										<h2><a href="<?= base_url()?>article/post/<?= $fila->id ?>">
											<?=  $fila->post ?>
										</a></h2>
										<p> <?=  $fila->descripcion ?></p>
									</div>
									<div class="meta">
										<strong><?= $fila->fecha ?></strong>
										
									</div>
								</header>
								<a href="#" class="image featured"><img src="plantilla/images/pic01.jpg" alt="" /></a>
								<p><?= $fila->contenido ?></p>
								<footer>
									<ul class="actions">
										<li><a href="<?= base_url()?>article/post/<?= $fila->id ?>" class="button big">Continue Reading</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon fa-heart">28</a></li>
										<li><a href="#" class="icon fa-comment">128</a></li>
									</ul>
								</footer>
							</article>
							<?php } ?>

						

					
						<!-- Pagination -->
							<ul class="actions pagination">
								<li><a href="" class="disabled button big previous">Previous Page</a></li>
								<li><a href="#" class="button big next">Next Page</a></li>
							</ul>

					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="#" class="logo"><img src="plantilla/images/logo.jpg" alt="" /></a>
								<header>
									<h2>Future Imperfect</h2>
									<p>Another fine responsive site template by <a href="http://html5up.net">HTML5 UP</a></p>
								</header>
							</section>

						
						


	

		
								

		