<?php
/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

if ( ! $short_description ) {
	return;
}

?>
<?php
$wplogoutURL = urlencode(get_the_permalink());
$wplogoutTitle = urlencode(get_the_title());
$wplogoutImage= urlencode(get_the_post_thumbnail_url(get_the_ID(), 'full'));
?>
   <div class="share-icon">
            <span>Share:</span>
            <ul>
              <li>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $wplogoutURL; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href="https://twitter.com/intent/tweet?text=<?php echo $wplogoutTitle;?>&amp;url=<?php echo $wplogoutURL;?>" target="_blank"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a href="https://www.linkedin.com/shareArticle?url=<?php echo $wplogoutURL; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
              </li>
           <!--    <li>
                <a href="<?php// site_url();?>"><i class="fa fa-instagram"></i></a>
              </li>
              <li>
                <a href="<?php //site_url();?>"><i class="fa fa-google-plus"></i></a>
              </li> -->
            </ul>
          </div>
<div class="woocommerce-product-details__short-description">
	<?php echo $short_description; // WPCS: XSS ok. ?>
</div>
<div class="package-content-button">
    <a href="<?php site_url();?>/contact-us/" class="btn-request"><i class="fa fa-phone"></i> Request a callback</a>
  </div>