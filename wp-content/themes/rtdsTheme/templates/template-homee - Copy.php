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
$content = apply_filters('the_content', $content);

?>



<main id="site-content" role="main">

	<section class="section-banner">

		<div class="banner-inner">

			<div class="container-fluid">

				<div class="row align-items-center">

					<div class="col-md-4 col-md-offset-2 pad0 text-center text-md-left">
						<h2>UNIFIED COMMUNICATIONS</h2>
						<h1>Voice. Video. Message.</h1>
						<p>One cloud platform. All your business communications.Set up instantly, integrate effortlessly, and save remarkably.</p>

						<div class="banner-links">
							<button class="btn btn1">View pricing</button>
							<button class="btn btn2">Start demo</button>
						</div>
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
				  <h3>Acefone is the no. 1 choice for X+ leading companies</h3>
				  <ul class="clients">
					<?php
						for ($i = 0; $i < count($company); $i++) {
	  							$image = wp_get_attachment_image_src( get_post_thumbnail_id(  $company[$i]->ID ) ); 
								echo '<li><a href="#"><img src="'.$image[0].' ?>" /></a></li>';		
	  					}
					?>
				  </ul>
				  <hr />
			</div>
	</section>


	<section class="planSection">
		<div class="container">
			<div class="row">
				<div id="box-section">
						<div class="box">
								<div class="box-header">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/voice.png" />
								</div>
								<div class="box-content"> 
		                            <span class="plan-price">Voice</span>
								</div>
		                        <p>Build connections effort</p>
		                        <div class="box-footer plan-purchase text-center">
		                            <button class="exploreBtn " href="#">Explore <i class="fa fa-chevron-right"></i></button>
		                        </div>

		                </div>
		                <div class="box">

								<div class="box-header">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/video.png" />
								</div>

								<div class="box-content"> 
		                            <span class="plan-price">Video</span>
								</div>
		                        <p>Stay connected in HD</p>
		                        <div class="box-footer plan-purchase text-center">
		                            <button class="exploreBtn" href="#">Explore <i class="fa fa-chevron-right"></i></button>
		                        </div>

		                </div>
		                <div class="box">

								<div class="box-header">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/message.png" />
								</div>

								<div class="box-content"> 
		                            <span class="plan-price">Message</span>
								</div>
		                        <p>Team collaboration</p>

		                        <div class="box-footer plan-purchase text-center">
		                            <button class="exploreBtn" href="#">Explore <i class="fa fa-chevron-right"></i></button>
		                        </div>
		                </div>			
		        </div>
			</div>
		</div>	
	</section>


	<section class="section" id="discussProject">

		<div class="section-title text-center">
			<h2 class="section-title1">Why Acefone?</h2>	
			<h3 class="section-title2">Your workday, simplified. At the office or home.</h3>	
		</div>

	    <div class="container">
	        <div class="row">
	            <div class="col-md-6 order-1 order-md-2">
					<div class="Ctable">
						<div class="Vmiddle">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/	acefoneR1.png" />
						</div>
					</div>
	            </div>
	            <div class="col-md-6 order-2 order-md-1">
	                <div class="leftContent">                	
		                <div class="leftContentInner">                	
		                    <div class="left-heading">
		                        <h2 class="section-title3 mb40">Best-in-class onboarding and support</h2>
		                    </div>
		                    <div class="left-text">
								<p>Shopping list styled with custom icons</p>
								<ul>
								  <li >Super-easy onboarding process</li>
								  <li >Dedicated staff to guide you at every step</li>
								  <li >Round-the-clock, 365-days support</li>
								  <li >Customise our services anytime with expert guidance</li>
								</ul>
							</div>

		                </div>
		            </div>        
	            </div>

	        </div>
	    </div>
	    <br> <br>
	    <div class="container">
	        <div class="row">
	            <div class="col-md-6 col-sm-12">
					<div class="Ctable">
						<div class="Vmiddle">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/acefoneR2.png" />
						</div>
					</div>
	            </div>
	            <div class="col-md-6 col-sm-12">
	                <div class="leftContent">                	
		                <div class="leftContentInner">                	
		                    <div class="left-heading">
		                        <h2 class="section-title3 mb40">Video + Voice + Chat = One stop Solution</h2>
		                    </div>
		                    <div class="left-text">
								<p>Shopping list styled with custom icons</p>
								<ul>
									<li >Video + Voice + Chat - together</li>
									<li >Create a digital workspace for easy team collabora</li>
									<li >Run channels individually or together with</li>
									<li >Round-the-clock support from industry experts</li>
								</ul>
						</div>
	                </div>
	            </div>
	        </div>
	    </div>

	</section>

	
 	<section class="callAction" id="callAction">
		<div class="callActionInner">
			<div class="banner-content text-center">
				<p>Set the gold standard of communication for your clients today. </p>
				<button class="btn btn1">0800-080-8888</button>
				<button class="btn btn2">CHAT WITH US</button>
			</div>
		</div>
	</section>



	<div class="section-title text-center">
		<h2 class="section-title4">Every feature you need, and then some more</h2>	
	</div>
	<section id="contactSection" class="contactSection featureSection">
		<div class="container">
			<div  class="col-md-9 col-md-offset-1 tabSection">
				<div class="col-xs-4"> <!-- required for floating -->
					<!-- Nav tabs -->
					<ul class="nav nav-tabs tabs-left sideways">
					<?php
						for ($i = 0; $i < count($feature); $i++) {
							if ($i==0) { ?>
								<li class="active"><a href="#<?php  echo $feature[$i]->ID ?>" data-toggle="tab"><?php echo get_the_title( $feature[$i]->ID ); ?></a></li> <?php
							} else { ?>
								<li><a href="#<?php  echo $feature[$i]->ID ?>" data-toggle="tab"><?php echo get_the_title( $feature[$i]->ID ); ?></a></li> <?php
							}	
						}
					?>
					</ul>
				</div>

				<div class="col-xs-8">
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
				<h2 class="section-title4">Powerful Integration with most used business tools</h2>	
				<p>Connect with all your favourite apps</p>	
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
										<input type="text" placeholder="First Name*">
										<input type="text" placeholder="Last Name*">
									</div>
									<div class="row">
										<input type="text" placeholder="Email Address*">
									</div>
								</div>
			                    <div class="checkbox">
			                        <label><input type="checkbox" id="invoice">Send me an invoice</label>
			                    </div>
								<div class="form-footer">
									<button class="btn btn1">SUBMIT NOW</button>
									<button class="btn btn2">SCHEDULE DEMO</button>
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

</main>

<?php get_footer(); ?>