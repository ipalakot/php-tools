<?php
/*
Template Name: Rencontres
*/

//get global prefix
global $sr_prefix;

//get template header
get_header(); 

	if (have_posts()) : while (have_posts()) : the_post(); 

?>
     
		<!-- SECTION -->
		
			<div class="section-inner">
			
				<?php get_template_part( 'includes/page-title' ); ?>
				
				<div class="wrapper event">
				<?php $index=0; ?>
				<?php query_posts( array( 'category_name' => 'events' ) );
				while (have_posts()) : the_post(); ?>
				<?php if($index % 2 == 0) { $class = '';} else {$class='last-col';} ?>
				
						<div class="column one-half <?php echo($class); ?> events">
							<div class="cadre">
								<img src="<?php the_field('photo'); ?>"><br>
								<div class="content-event">
									<div class="titre-event">
										<div class="date">
											<i class="fa fa-calendar-o"></i> <?php the_field('date'); ?>
										</div> 
										<div class="titre">
											<strong><?php the_title(); ?></strong>
										</div>
									</div>
									<div class="lieu">
										<i class="fa fa-map-marker"></i> <?php the_field('lieu'); ?>
									</div>
									<div class="lieu">
										<i class="fa fa-user"></i> Membre(s) agence présent(s) : <?php the_field('membres'); ?>
									</div>
									<div class="principe">
										<strong><?php the_field('principe'); ?></strong>
									</div>
									<a href="mailto:amaury.peillon@digital-expression.fr"&subject="Inscription à un événement"><?php the_field('libelle_du_lien'); ?></a>
								</div>
							</div>
						</div>
					<?php $index++; ?>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>	
				</div>
				
			</div>
		<!-- SECTION -->                  

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
