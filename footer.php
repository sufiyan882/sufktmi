<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
		<!-- 	</main> --><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php //get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer class="footer">
<div class="container">
  <div class="row f-border">
  <div class="col-md-3">
    <div class="footer-grid">
		<ul class="f-links">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</ul>

      <ul class="f-social">
        <li><a target="_blank" href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
        <li><a target="_blank" href="https://www.linkedin.com/company/trimurty-infotech-jaipur/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        <li><a target="_blank" href="https://www.instagram.com/trimurtyinfotech/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        <li><a target="_blank" href="https://www.facebook.com/trimurtyinfotechjpr/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
  <div class="col-md-3">
      <div class="footer-grid">
        <ul class="f-links">
          <?php dynamic_sidebar( 'sidebar-2' ); ?>
        </ul>
      </div>
    </div>
    <div class="col-md-3">
        <div class="footer-grid">
          <ul class="f-links">
             <?php dynamic_sidebar( 'sidebar-3' ); ?>
            </ul>
        </div>
      </div>
      <div class="col-md-3">
          <div class="footer-grid f-contact">
          <?php dynamic_sidebar( 'sidebar-4' ); ?>
          </div>
        </div>
      </div>
</div>
</footer>
 	

</div><!-- #page -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom_validations.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
<?php wp_footer(); ?>

</body>
</html>

<script type="text/javascript">
  
$(document).ready(function(){
  $('.sub-menu-toggle').click(function(){
    $(this).next('.dropdown-menu').toggleClass('show');
  });
});

</script>
