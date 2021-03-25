<?php 
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>
<footer>
  <div class="footer-inner">
    <section class="footer-item">
        <a class="brand-logo" href="<?php echo site_url(); ?>"> <img src="<?php echo $image[0]; ?> " alt="RTDS"> </a>
        <h2><b class="">Lorem ipsum dolor .</b></h2>
        <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
    </section>
        
    <section class="footer-item">
      <h3>Industries</h3>
        <ul>
          <li><a href="#">Construction</a></li>
          <li><a href="#">Real Estate</a></li>
          <li><a href="#">Healthcare</a></li>
          <li><a href="#">Marketing</a></li>
          <li><a href="#">Travel & Hospitality</a></li>
          <li><a href="#">Finance</a></li>
          <li><a href="#">Education</a></li>
          <li><a href="#">Professional Services</a></li>
        </ul>
    </section>
          
            
    <section class="footer-item">
      <h3>Integrations</h3>
        <ul>
          <li><a href="#">Zoho CRM</a></li>
          <li><a href="#">Salesforce</a></li>
          <li><a href="#">Hubspot</a></li>
          <li><a href="#">Microsoft dynamics</a></li>
          <li><a href="#">Freshworks</a></li>
          <li><a href="#">Google contacts</a></li>
          <li><a href="#">Pipedrive</a></li>
        </ul>
    </section>
        
    <section class="footer-item">
      <h3>COMPANY</h3>
        <ul>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Become a Reseller</a></li>
          <li><a href="#">Refund Policy</a></li>
          <li><a href="#">Sitemap</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Cookie Policy</a></li>
          <li><a href="#">Terms of Service</a></li>
        </ul>
    </section>
        
    <section class="footer-item">
      <h3>Resources</h3>
        <ul>
          <li><a href="#">Plans & Pricing</a></li>
          <li><a href="#">Special Offers</a></li>
          <li><a href="#">10 Days Free Trial</a></li>
          <li><a href="#">Live Demo</a></li>
          <li><a href="#">Switch & Save</a></li>
          <li><a href="#">FAQs</a></li>
          <li><a href="#">Application Director</a></li>
        </ul>
    </section>
            
  </div>
		<?php wp_footer(); ?>
</footer>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</body>
</html>