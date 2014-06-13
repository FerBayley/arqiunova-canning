<?php
/*
Template name: marcas
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

		<section class="contenidoCentral">
			<!-- LOOP -->

				<hgroup>
					<h2>MARCAS</h2>
				</hgroup>

				<div class="marcas">
					<img src="<?php bloginfo('template_directory'); ?>/img/anclaflex.jpg" alt="Anclaflex">
					<img src="<?php bloginfo('template_directory'); ?>/img/venier.jpg" alt="Venier">
					<img src="<?php bloginfo('template_directory'); ?>/img/polacrin.jpg" alt="Polacrin">
					<img src="<?php bloginfo('template_directory'); ?>/img/ecostone.jpg" alt="Ecostone">
					<img src="<?php bloginfo('template_directory'); ?>/img/rust-oleum.jpg" alt="Rust-Oleum">
					<img src="<?php bloginfo('template_directory'); ?>/img/steelcote.jpg" alt="SteelCote">
					<img src="<?php bloginfo('template_directory'); ?>/img/wepel.jpg" alt="Wepel">
				</div> <!-- End of marcas -->

			<!-- LOOP -->
		</section> <!-- End of contenidoCentral -->

		<section id="transparencia">
			<section class="comoLlegar">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3274.0997197887377!2d-58.503356999999994!3d-34.8537216!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcd6de2c1c59bb%3A0x5ba43cd9c031c305!2sMariano+Castex!5e0!3m2!1ses!2sar!4v1401343755901" width="1200" height="300" frameborder="0" style="border:0"></iframe>
			</section> <!-- End of comoLlegar -->
		</section> <!-- End of transparencia -->

		<section class="contacto">

			<figure>
				<img src="<?php bloginfo('template_directory'); ?>/img/img-final.jpg" alt="En Arquinova Color encontras todas estas marcas">
			</figure>

		</section> <!-- End of contacto -->

<?php get_footer(); ?>