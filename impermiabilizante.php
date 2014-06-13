<?php
/*
Template name: impermiabilizante
*/
?>


<?php get_header(); ?>

<section id="contenido">

		<!-- CONTENIDO HEADER -->
		<?php include("cabezal.php"); ?>
		<!-- CONTENIDO HEADER -->

		<!-- NAV -->
		<?php include("menu.php"); ?>
		<!-- NAV -->

		<section class="contenidoPage">

			<section class="colCont01">
				<ul>
					<li><a href="">RAP - 820 - MUROS</a></li>
					<li><a href="">RAP - 920 - TECHOS</a></li>
				</ul>
			</section> <!-- End of colCont01 -->

			<section class="colCont02">
				<figure>
					<img src="<?php bloginfo('template_directory'); ?>/img/impermiabilizante.jpg" alt="Impermiabilizantes">
				</figure>
			</section> <!-- End of colCont02 -->

		</section> <!-- End of conetenido -->

		<section id="transparencia">
			<div class="mapa">
				<h2>COMO LLEGAR</h2>
				<img src="<?php bloginfo('template_directory'); ?>/img/mapa.jpg" alt="Mira como llegar a Arquinova Color">
			</div> <!-- End of mapa -->

			<div class="mlBanner">
				<h2>CONOCE NUESTRO SHOP EN MERCADO LIBRE</h2>
				<img src="<?php bloginfo('template_directory'); ?>/img/ml-banner.jpg" alt="Entra a nuestro shop en Mercado Libe">
			</div> <!-- End of mlBanner -->
			<div class="clear"></div> <!-- End of clear -->
		</section> <!-- End of transparencia -->

<?php get_footer(); ?>