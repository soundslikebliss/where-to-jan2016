<?php 
/* Template Name: Your Destination Template */ 
?>

<?php get_header(); ?>


<?php 
	$temp = $_POST["temp"];

	if($temp == "Hot" ) {
		$page = get_page_by_title( 'fiji', OBJECT, 'post' );
	}
	if($temp == "Cold" ) {
		$page = get_page_by_title( 'alaska', OBJECT, 'post' );
	}


	$title = get_the_title($page->ID);
	$content = $page->post_content; 
?>



<div class="content section-inner">						
			
	<div class="posts">

		<div class="post">
		
		
				<div class="content-inner">
										
					<div class="post-header">
														
					    <h2 class="post-title"><?php echo $title; ?></h2>
					    				    
				    </div> <!-- /post-header -->
				   				        			        		                
					<div class="post-content">
										                                        
						
						<?php if ( current_user_can( 'manage_options' ) ) : ?>
																		
							<p><?php edit_post_link( __('Edit', 'lingonberry') ); ?></p>
						
						<?php endif; ?>

						<!--<?php var_dump(get_field('location_image', $page->ID)); ?>-->
						<?php $location_image = get_field('location_image', $page->ID); ?>
						<?php echo '<img src="' .$location_image['sizes']['large']. '"/>'; ?>
						<br />
						<br />

						<?php echo $content; ?>
															            			                        
					</div> <!-- /post-content -->
					
				</div> <!-- /post-inner -->


		</div> <!-- /post -->
	
	</div> <!-- /posts -->

	<div class="clear"></div>
	
</div> <!-- /content section-inner -->
								
<?php get_footer(); ?>