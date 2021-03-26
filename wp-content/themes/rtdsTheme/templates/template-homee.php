<?php
/**
 * Template Name: Home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rtds
 * @since rtds 1.0
 */

get_header();

$args = array(
	'numberposts' => -1,
	'order' => 'ASC',
	'orderby' => 'menu_order',
	'post_type'   => 'tool'
);

$tools = get_posts($args);

$args = array(
	'numberposts' => -1,
	'order' => 'ASC',
	'orderby' => 'menu_order',
	'post_type'   => 'feature'
);

$feature = get_posts($args);

$args = array(
	'numberposts' => -1,
	'order' => 'ASC',
	'orderby' => 'menu_order',
	'post_type'   => 'company'
);

$company = get_posts($args);

$post = get_post(); 
$content = $post->post_content;
$bannerdata = get_post_meta(get_the_ID(), 'bannerdata', TRUE);
$companyheading = get_post_meta(get_the_ID(), 'companyheading', TRUE);
$featureheading = get_post_meta(get_the_ID(), 'featureheading', TRUE);
$Integrationheading = get_post_meta(get_the_ID(), 'Integrationheading', TRUE);

?>



<main id="site-content" role="main">

	<section class="section-banner">

		<div class="banner-inner">

			<div class="container-fluid">

				<div class="row align-items-center">

					<div class="col-md-4 col-md-offset-2 pad0 text-center text-md-left">
						<?php echo $bannerdata ?>
					</div>

					<div class="col-md-6 pad0">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" />
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="section-brands">
			<div class="wrap text-center">
				  <h3> <?php echo $companyheading ?></h3>
				  <ul class="clients">
					<?php
						for ($i = 0; $i < count($company); $i++) {
	  							$image = wp_get_attachment_image_src( get_post_thumbnail_id(  $company[$i]->ID ) ); 
								echo '<li><a href="#"><img src="'.$image[0].'" /></a></li>';		
	  					}
					?>
				  </ul>
				  <hr />
			</div>
	</section>

<?php echo $content; ?>



	<div class="section-title text-center">
		<h2 class="section-title4"> <?php echo $featureheading ?></h2>	
	</div>
	<section id="contactSection" class="contactSection featureSection">
		<div class="container">
			<div  class="col-lg-9 col-md-11 col-sm-12 col-md-offset-1 tabSection">
				<div class="col-md-4 col-xs-12 nav-tabsm"> <!-- required for floating -->
					<!-- Nav tabs -->
					<ul class="nav nav-tabs tabs-left sideways">

					<?php
						for ($i = 0; $i < count($feature); $i++) {
							$image = wp_get_attachment_image_src( get_post_thumbnail_id(  $feature[$i]->ID ) );
							if ($i==0) { 

								?>
								<li class="active"><a  href="#<?php  echo $feature[$i]->ID ?>" data-toggle="tab"><img src="<?php echo $image[0]; ?>" /> <?php echo get_the_title( $feature[$i]->ID ); ?> <img class="activeIcon" width="30px" src="<?php echo get_template_directory_uri(); ?>/assets/images/tabs-line.jpg" /> </a></li> <?php
							} else { ?>
								<li><a href="#<?php  echo $feature[$i]->ID ?>" data-toggle="tab"> <img src="<?php echo $image[0]; ?>" /> <?php echo get_the_title( $feature[$i]->ID ); ?> <img class="activeIcon" width="30px" src="<?php echo get_template_directory_uri(); ?>/assets/images/tabs-line.jpg" /></a></li> <?php
							}	
						}
					?>
					</ul>
				</div>

				<div class="col-md-8 col-xs-12">
				  <!-- Tab panes -->
				  <div class="tab-content">

					<?php
						for ($i = 0; $i < count($feature); $i++) {
							if ($i==0) { ?>
							    <div class="tab-pane active" id="<?php  echo $feature[$i]->ID ?>">
									<?php echo get_post_field('post_content',  $feature[$i]->ID); ?>
							    </div>
								<?php
							} else { ?>
								<div class="tab-pane" id="<?php  echo $feature[$i]->ID ?>">
									<?php echo get_post_field('post_content',  $feature[$i]->ID); ?>
							    </div>
							    <?php
							}	
						}
					?>

				  </div>
				</div>
			</div>
		</div>
	</section>

	<section class="IntegrationSection" id="IntegrationSection">

			<div class="section-title text-center">
				<?php echo $Integrationheading ?>
			</div>
			<div class="container-fluid">
				<div class="row">
	    			<div class="IntegrationSectionInner">
		    			<section class="toolsWrapper">
				<?php
					for ($i = 0; $i < count($tools); $i++) {
  							$image = wp_get_attachment_image_src( get_post_thumbnail_id(  $tools[$i]->ID ) ); 
  							
  						if ($i == 0 || $i == count($tools)-1) {
							echo '<div>
									<a href="#"><img src='.$image[0].' /></a>	
								</div>';  							
  						} elseif ($i > 0) {

	  						$image = wp_get_attachment_image_src( get_post_thumbnail_id(  $tools[$i]->ID ) )[0]; 

								echo '<div>
									<a href="#"><img src='.$image.' /></a>	
									';
									$i++;
									$imageNext = wp_get_attachment_image_src( get_post_thumbnail_id(  $tools[$i]->ID ) )[0]; 
								echo '
									<a href="#"><img src='.$imageNext.' /></a>	
								</div>';  							
  						}
					}
				?>
			    		</section>
	    			</div>    				
				</div>
			</div>
	</section>
	<section class="integrationButton mb40">
		<div class="integrationButtonInner">
	    	<a href="#" class="btn btn1">SEE ALL Intergartion</a>			
		</div>
	</section>
    
	<section id="contactSection" class="contactSection">
		<div class="container">
	        <div class="row contact-section">
	          <div class="col-md-8 px-0 contactFormContainer">
	            <div class="contact-form-container">
					<div class="card-form">
						<form class="signup">
							<div class="section-title3 mb40">Try our cloud contact center software today.</div>
								<div class="form-body">
									<div class="row column2">
										<input type="text" placeholder=" Full name*">
										<input type="tel" placeholder=" Phone number*">
									</div>
									<div class="row ecolumn">
										<input type="text" placeholder="@ Business email address*">
									</div>
								</div>
			                    <div class="checkbox">
			                        <label><input type="checkbox" id="invoice">Your data is protected and secured in our <a href="#"> Privacy Policy.</a></label>
			                    </div>
								<div class="form-footer">
									<button href="#" class="btn btn5">SUBMIT NOW</button>
									<button href="#" class="btn btn6">SCHEDULE DEMO</button>
								</div>
						</form>
					</div>
	            </div>
	          </div>

	          <div class="col-md-4 px-0 contactLeft">
				<div class="contact-left">

				</div>
	          </div>
	        </div>
		</div>
	</section>

	<div class="box vc-widget">
		<div class="row">
			<div class="col-sm-8">
			<p>Robert Saint Park</p>
			</div>
			<div class="col-sm-4">
			<p>On Call</p>
			</div>
		</div>

		<div class="box-footer plan-purchase text-center">
			<div class=" pt-4 pb-4">
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/vc-video-icon.jpg" /></a><span>03:23</span>
				</div>
				<div class="">
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/vc-mute-icon.jpg" /></a>
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/vc-cut-icon.jpg" /></a>
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/vc-add-call-icon.jpg" /></a>

			</div>
		</div>

	</div>


</main>

<?php get_footer(); ?>