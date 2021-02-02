<?php /*Template Name: Portfolio Page*/

get_header();  ?>

<div class="header_section">
    <div class="container">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
  </div>

  <div class="result">
  	  <div class="container">
  	 <div class="row show-result">
        <div class="col-md-7">
          <h2>I want to see Portfolio in</h2>
        </div>
        <div class="col-md-5">
          <select>
            <option>Select category</option>
            <option>Web Design</option>
            <option>Ecommerce Solution</option>
            <option>Mobile App Development</option>
            <option>Digital Marketing</option>
            <option>CCTV Camera Solution</option>
          </select>
        </div>
      </div>
                   
                    <div class="row">
                        <?php if (have_rows('project_portfolio')) : ?>
                            <?php while (have_rows('project_portfolio')) : the_row();
                                $brand = get_sub_field('brnad_name');
                                $contry = get_sub_field('country_text');
                                $cat = get_sub_field('category'); ?>
                                <div class="col-md-6 col-lg-6 col-6" data-category="<?php echo $cat; ?>">
                                    <a href="<?php the_sub_field('features_project_url'); ?>" class="client-box">
                                        <div class="content-box">
                                            <span class="country"><?php echo $contry; ?></span>
                                            <h3 class="brnad-name"><?php echo $brand; ?></h3>
                                            <div class="client-img">
                                                <img src="<?php the_sub_field('client_image'); ?>">
                                            </div>
                                        </div>
                                        <div class="img-sec"><img src="<?php the_sub_field('imge_secand'); ?>"> </div>
                                    </a>
                                </div>
                        <?php endwhile;
                        endif; ?>
                        <div class="city_category_btn">
                            <a href="<?php the_field('features_button_url'); ?>" class="btn btn22">View More</a>
                        </div>
                    </div>
                </div>
            </div>


<?php get_footer();?>