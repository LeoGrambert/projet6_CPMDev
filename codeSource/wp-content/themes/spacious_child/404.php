<?php
/**
 * The template for displaying 404 pages (Page Not Found).
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
?>

<?php get_header(); ?>

	<?php do_action( 'spacious_before_body_content' ); ?>

	<div id="primary">
		<div id="content" class="clearfix">
			<section class="error-404 not-found">
				<div class="page-content">

					<?php if ( ! dynamic_sidebar( 'spacious_error_404_page_sidebar' ) ) : ?>
						<header class="page-header">
							<h2 class="page-title"><?php _e( 'Oops ! Quelque chose ne va pas !', 'spacious' ); ?></h2>
              <img src="/front/projets/cercleConvergence/wp-content/uploads/2016/12/404-600x253.png" alt="page_404" title="page_404" id="img404"/>
						</header>
						<p><?php _e( 'Il semblerait que la page que vous cherchez n\'existe pas. L\'administrateur du site est sur le coup.<br/> En attendant, essayez le formulaire de recherche ci-dessous', 'spacious' ); ?></p>
						<?php get_search_form(); ?>
            <p><?php _e('Et si vous ne trouvez pas ce que vous recherchez, ce n\'est pas la fin du monde ! <a href="http://leogrambert.fr/front/projets/cercleConvergence/contact/">Contactez-nous</a> !'); ?></p>
            <a href="/"><button>Retour à l'accueil</button></a>

						<?php endif; ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</div><!-- #content -->
	</div><!-- #primary -->

	<?php spacious_sidebar_select(); ?>

	<?php do_action( 'spacious_after_body_content' ); ?>


	<?php
		 date_default_timezone_set('Europe/Paris');
		 $date = date("d-m-Y");
		 $heure = date("H:i");
		 $stat = stat('errors404.html');
		 $sizeDoc = $stat['size'];

		 $referer = $_SERVER['HTTP_REFERER'];

		 if ($referer != ''){
	 		 $failuremess = $i . "Le " . $date . " a " . $heure . " :<br/> Un utilisateur a essaye d'aller a la page <strong>" . $_SERVER['REQUEST_URI'] . " </strong>et a recu une erreur 404 (page not found).<br/> Il venait de l'url : ". $referer . "<br/><br/><br/><br/>";
	 	 } else {
	 		 $failuremess = $i . "Le " . $date . " a " . $heure . " :<br/> Un utilisateur a essaye d'aller a la page <strong>" . $_SERVER['REQUEST_URI'] . " </strong>et a recu une erreur 404 (page not found).<br/> L'utilisateur a directement inscrit le nom de la page dans l'URL.<br/><br/><br/><br/>";
	 	 }

		 if ($sizeDoc > 15000) {
			unlink('errors404.html');
 			$errors404 = fopen('errors404.html', 'a+');
 			fgets($errors404);
 			fputs($errors404, $failuremess);
 			fclose($errors404);
		} else {
			$errors404 = fopen('errors404.html', 'r+');
			fgets($errors404);
			fputs($errors404, $failuremess);
			fclose($errors404);
		}
		$i++;

	?>
