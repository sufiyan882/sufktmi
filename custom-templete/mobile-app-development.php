<?php /*Template Name: Mobile App Development*/

get_header();  ?>
<div class="header_top_banner">
    <img src="<?php the_field('header_top_banner'); ?>">
</div>

<div class="city_category_main">
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
                <?php the_content(); ?>
                <section class="marketing_sec">

                    <?php if (have_rows('marketing_section')) :
                        $number = 1; ?>
                        <?php while (have_rows('marketing_section')) : the_row();
                            $markimg = get_sub_field('marketing_section_left');
                            $rigt = get_sub_field('marketing_section_right');
                            if ($number % 2 == 0) { ?>

                                <div class="row position-left">
                                    <div class="col-sm-6">
                                        <?php echo $rigt; ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="img_div">
                                            <img src="<?php echo $markimg; ?>" alt="">
                                        </div>
                                    </div>

                                </div>
                            <?php } else { ?>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <?php echo $rigt; ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="img_div">
                                            <img src="<?php echo $markimg; ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                    <?php }
                            $number++;
                        endwhile;
                    endif; ?>
                </section>

                <div class="result">
                    <div class="web_design_title">
                        <h2><?php the_field('features_project_title'); ?></h2>
                    </div>
                    <div class="row">
                        <?php if (have_rows('features_project')) : ?>
                            <?php while (have_rows('features_project')) : the_row();
                                $brand = get_sub_field('brnad_name');
                                $contry = get_sub_field('country_text'); ?>
                                <div class="col-md-6 col-lg-6 col-6">
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

                <section class="clients">
                    <div class="container">
                        <div class="section-header">
                            <h2><?php the_field('testimonial_widget_title'); ?></h2>
                        </div>
                        <div id="ClientsDiv" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <?php $tst = 0;
                                while (have_rows('testimonial_widget')) : the_row();
                                    if ($tst == 0) { ?>
                                        <li data-target="#ClientsDiv" data-slide-to="0" class="active"></li>
                                    <?php } else { ?>
                                        <li data-target="#ClientsDiv" data-slide-to="<?php echo $tst; ?>"></li>
                                <?php }
                                    $tst++;
                                endwhile;
                                ?>
                            </ol>

                            <div class="carousel-inner">
                                <?php $zf = 0;
                                while (have_rows('testimonial_widget')) : the_row(); ?>
                                    <div class="carousel-item <?php if ($zf == 0) {
                                                                    echo 'active';
                                                                } ?>">
                                        <div class="caption" data-ride="First slide">
                                            <p><?php the_sub_field('testimonial_contentweb'); ?></p>
                                            <h5><?php the_sub_field('auther_nametwo'); ?></h5>
                                        </div>
                                    </div>
                                <?php $zf++;
                                endwhile; ?>
                            </div>

                        </div>
                    </div>
                </section>

                <div class="other_services">
                    <div class="web_design_title">
                        <h2><?php the_field('other_services_title'); ?></h2>
                    </div>
                    <ul>
                        <?php while (have_rows('other_services_repiter')) : the_row(); ?>
                            <li>
                                <div class="services_icon">
                                    <img src="<?php the_sub_field('services_icon'); ?>">
                                    <img src="<?php the_sub_field('services_icon_two'); ?>">
                                </div>
                                <h3><a href="<?php the_sub_field('servics_text_url'); ?>"><?php the_sub_field('services__text'); ?></a></h3>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
