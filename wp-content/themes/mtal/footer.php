<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Mu Theta At Large
 */
?>

</div><!-- container -->	
		<!--footer-->
	<div class="footer-holder">
	<div class="container">	
		
			<div class="one-third column">
				<h3>Quick Links</h3>
				<ul class="square">
					<li><a href="<?php echo get_page_link(45); ?>">Links</a></li>
					<li>New Inductee Corner</li>
					<li>Sigma Theta Tau</li>
					<li>Scholarship</li>
					<li>Research Grant</li>
					<li>Newsletter</li>
					<li>Region 14</li>
					<li>New Members</li>
					<li>Suggested Reading (Monthly articles)</li>
					<li>Chapter Elections</li>
				</ul>
				
			</div>
			
			<div class="one-third column">
				<h3>Sponsorship</h3>
				<h4>College of Saint Elizabeth</h4>
				<p>2 Convent Road<br />
					Morristown, NJ 07960<br />
					Phone: (973) 290-4000</p>
				<h4>Felician College</h4>
				<p>262 South Main Street<br />
					Lodi, NJ 07644<br />
					Phone: (201) 559-6000</p>
				<h4>St. Peter's University</h4>
				
				<p>Hudson Terrace<br />
					Englewood Cliff, NJ 07632<br />
					Phone: (201) 761-7898</p>
				<p>2641 Kennedy Boulevard <br />Jersey City, NJ 07306 </p>
			
			</div>
			
			<div class="one-third column">
			
			<h3>Search</h3>
				<!-- Search Form --> 
    			<?php get_search_form(); ?>

			<h3>Connect with Us</h3>
			<div class="footer-sm">
			<div class="footer-sm-icon"><a href="#" target="_blank"><img alt="facebook" src="<?php echo get_template_directory_uri(); ?>/images/facebook-48.png" title="Facebook"></a></div>
			
			<div class="footer-sm-info">
				Like Mu Theta At Large on facebook!
			</div>
			</div>
			<div class="footer-sm">
			<div class="footer-sm-icon"><a href="#" target="_blank"><img alt="Twitter" src="<?php echo get_template_directory_uri(); ?>/images/email-48.png" title="Email"></a></div>	
			
			<div class="footer-sm-info">
				Contact us regarding the Chapter, website and newsleter!
				<p>
				<ul>
					<li>
						<strong>Chapter:</strong> thompsons@felician.edu
					</li>
					<li>
						<strong>Website:</strong> bhwright15@optonline.net
					</li>
					<li>
						<strong>Newsletter:</strong> koppelaine@yahoo.com
					</li>
				</ul>
				</p>
			</div>

			</div>

		</div>
	</div>
	
	</div>
	<div class="credits">&copy; 2009 Mu Theta at Large Chapter. All Rights Reserved.</div>

<!-- End Document
================================================== -->

<?php wp_footer(); ?>

</body>
</html>
