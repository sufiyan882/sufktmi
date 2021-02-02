<?php /*Template Name: Categories Template */

get_header();  ?>
<div class="header_top_banner">
  <img src="<?php the_field('header_banner'); ?>">
</div>

<div class="city_category_main products_category_inner products_details_page_main">
     <div class="container">
    <div class="row">
      <div class="col-md-3">
                <div class="top_left_header">
                    <h1><span>Mobile App Development Company in</span> Jaipur</h1>
                </div>
                <div class="top_left_middle">
                    <div class="dropdown-section">
                        <?php dynamic_sidebar('left-section1'); ?>
                    </div>
                    <div class="dropdown-section">
                        <?php dynamic_sidebar('left-section2'); ?>
                    </div>
                </div>
                <div class="top_left_header1">
                    <h1><span>in</span> Jaipur</h1>
                </div>
                <div class="contact-left">
                    <?php the_field('contact_left_section'); ?>
                </div>
                <div class="top_left_address">
                    <?php the_field('left_address'); ?>
                </div>
            </div>

      <div class="col-md-9">
        <?php the_content();?>
         <?php do_action('[product_category category="computer-laptop" per_page="12" columns="4" orderby="default" order="asc"]');  ?>

        <div class="clearfix"></div>
         <div class="prodct-listing popular-product-main">
          <div class="popular-product-title">
            <h2>Popular Packages</h2>

            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer() ?>