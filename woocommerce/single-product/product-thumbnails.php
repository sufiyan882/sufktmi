<?php
/**
 * Single Product Thumbnails
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-thumbnails.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$attachment_ids = $product->get_gallery_image_ids();

if ( $attachment_ids && $product->get_image_id() ) {
	foreach ( $attachment_ids as $attachment_id ) {
		echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', wc_get_gallery_image_html( $attachment_id ), $attachment_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
	}
}

?>
 <div class="products-guarantee-main ">
            <div class="guarantee-top">
              <img src="<?php site_url();?>/wp-content/uploads/2021/01/tmi-logo.png" alt="product guarantee at tmi">
            <span>Guarantee</span>
          </div>
          <div class="guarantee-bottom">
            <ul>
              <li>
                <img src="<?php site_url();?>/wp-content/uploads/2021/01/original.png" alt="100% original product">
                <span>100% ORIGINAL<br>Products</span>
              </li>
              <li>
                <img src="<?php site_url();?>/wp-content/uploads/2021/01/payments.png" alt="secure payments mode">
                <span>SECURE<br>Payments</span>
              </li>
              <li>
                <img src="<?php site_url();?>/wp-content/uploads/2021/01/warranty.png" alt="WARRANTY as per CP PLUS">
                <span>WARRANTY<br>As per CP PLUS</span>
              </li>
              <li>
                <img src="<?php site_url();?>/wp-content/uploads/2021/01/best-price.png" alt="best price at Trimurty Infotech">
                <span>Best Price</span>
                </li>
              </ul>
            </div>
          </div>
<?php
