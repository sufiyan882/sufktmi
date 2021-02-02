<?php /*Template Name: Faq Page*/

get_header();  ?>

 <div class="header_section">
    <div class="container">
      <?php the_content();?>
    </div>
  </div>
<div class="container">
    <div class="faq-row">
		<?php while( have_rows('faq_repiter') ): the_row();            
		$tite = get_sub_field( 'accordion_title' ); 
		$det = get_sub_field( 'accordion_deteles' );?>

		<div class="ques_block accordion"><span class="short-block">Q</span>
		<h4 class="panel"><?php echo $tite; ?></h4>
		</div>
		<div class="ans_block accordion">
		<span class="short-block">A</span> 
		<p class="panel"><?php echo $det; ?></p>
		</div>
		<?php endwhile; ?>
    </div>
  </div>

<?php get_footer();?>