<?php /*Template Name: Home page*/

get_header();  ?>
<section class="home_slide">
  <div class="container">
  	<?php if( have_rows('home_slide') ): ?>
    <?php $k =1;
    while( have_rows('home_slide') ): the_row(); 
        $image = get_sub_field('slide_image');
        if($k==1){ ?>
        <div class="feature_box">
        	<img src="<?php echo $image; ?>" alt="">
           
        </div>
         <div class="slide_caption"><?php the_sub_field('slide_caption'); ?></div>
    <?php } $k++; endwhile; ?>
<?php endif; ?>
  </div>
</section>

<div class="clearfix"></div>
<div class="home_about">
  <div class="container">
    <div class="about_content">
     <?php the_content();?>
    </div>
  </div>
</div>

<div class="clearfix"></div>
<section class="shop_retail_store">
  <div class="container">
    <div class="section-header">
      <h2><?php the_field('retail_store_title');?></h2>
    </div>
	    <div class="service-owl-slider">
	      <div class="owl-carousel items-service">
			<?php if( have_rows('service_owl_slider') ): ?>
			<?php $i =1;
			while( have_rows('service_owl_slider') ): the_row();
			$owlslider = get_sub_field('owl_slider_images');
			?><div class="item"><img src="<?php echo $owlslider; ?>"> <a href="<?php the_sub_field('item_service_url'); ?>" class="btn"><?php the_sub_field('item_service_name');?></a></div>
			<?php  $i++; endwhile; ?>
			<?php endif; ?>
	       </div>
	    </div>
    <div class="row"> 
		<?php if( have_rows('shop_box') ): ?>
		<?php while( have_rows('shop_box') ): the_row();
		$boximg = get_sub_field('shop_box_image');
		?>
		<div class="col-md-6">
		<div class="shop_box">
		<img src="<?php echo $boximg; ?>" alt="">
		<a href="<?php the_sub_field('shop_box_url');?>" class="btn"><?php the_sub_field('shop_box_title');?></a>
		</div>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
    </div>
  </div>
</section>

<div class="clearfix"></div>
<section class="clients">
  <div class="container">
    <div class="section-header">
      <h2>Happy Clients</h2>
    </div>
    <div id="ClientsDiv" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
		<?php $kf=0;            
		while( have_rows('testimonial_slide') ): the_row();            
		if ($kf == 0){?>
		<li data-target="#ClientsDiv" data-slide-to="0" class="active"></li>
		<?php }else{ ?>
		<li data-target="#ClientsDiv" data-slide-to="<?php echo $kf; ?>"></li>
		<?php }  $kf++;            
		endwhile; 
		?>
      </ol>
      <div class="carousel-inner">
		<?php $z = 0;            
		while( have_rows('testimonial_slide') ): the_row();            
		$image = get_sub_field( 'slider_image' ); ?>
		<div class="carousel-item <?php if ($z == 0) { echo 'active';} ?>">
		<div class="caption" data-ride="First slide">
		<p><?php the_sub_field('testimonial_content'); ?></p>
		<h5><?php the_sub_field('auther_name'); ?></h5>
		</div>
		</div>
		<?php $z++;            
		endwhile; 
		?>
      </div>
    </div>
  </div>
</section>

<div class="clearfix"></div>
<section class="contact_sec">
  <div class="container">
    <div class="row contact_row">
      <div class="col-md-6">
        <div class="contact_details">
         <?php the_field('contact_details'); ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="contact_form">
        <?php the_field('contact_shortcode'); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();?>