<?php /*Template Name: Get All Post*/ 

get_header();

?>
<?php 

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$argu = array(
'post_type'=>'post',
'post_status'=> 'publish',
'posts_per_page'=>2,
'order by'=>'title',
'order'=> 'ASC',
'paged' => $paged
);

$wp_query = new wp_query($argu);

if($wp_query->have_posts()):
  while($wp_query->have_posts()): 
     $wp_query->the_post();

     the_post_thumbnail(array(150,150));
     // the_excerpt();
 // $cont = get_the_excerpt();
//wp_trim_words
?> <a href="<?php the_permalink()?>"> <?php the_title();?> </a><br/>

<!-- <p> <?php// echo wp_trim_words($cont, 10) ?></p>
 -->
<div class="addReadMore showlesscontent"><?php the_content();?></div>


<?php

endwhile; ?>
<div class="nav-previous alignleft"><?php previous_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php next_posts_link( 'Newer posts' ); ?></div> 
<?php endif;
?>


 <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 

<style>
    .addReadMore.showlesscontent .SecSec,
    .addReadMore.showlesscontent .readLess {
        display: none;
    }

    .addReadMore.showmorecontent .readMore {
        display: none;
    }

    .addReadMore .readMore,
    .addReadMore .readLess {
        font-weight: bold;
        margin-left: 2px;
        color: blue;
        cursor: pointer;
    }

    .addReadMoreWrapTxt.showmorecontent .SecSec,
    .addReadMoreWrapTxt.showmorecontent .readLess {
        display: block;
    }
    </style>
    <script>

function AddReadMore() {
    //This limit you can set after how much characters you want to show Read More.
    var carLmt = 280;
    // Text to show when text is collapsed
    var readMoreTxt = " ... Read More";
    // Text to show when text is expanded
    var readLessTxt = " Read Less";


    //Traverse all selectors with this class and manupulate HTML part to show Read More
    $(".addReadMore").each(function() {
        if ($(this).find(".firstSec").length)
            return;

        var allstr = $(this).text();
        if (allstr.length > carLmt) {
            var firstSet = allstr.substring(0, carLmt);
            var secdHalf = allstr.substring(carLmt, allstr.length);
            var strtoadd = firstSet + "<span class='SecSec'>" + secdHalf + "</span><span class='readMore'  title='Click to Show More'>" + readMoreTxt + "</span><span class='readLess' title='Click to Show Less'>" + readLessTxt + "</span>";
            $(this).html(strtoadd);
        }

    });
    //Read More and Read Less Click Event binding
    $(document).on("click", ".readMore,.readLess", function() {
        $(this).closest(".addReadMore").toggleClass("showlesscontent showmorecontent");
    });
}
$(function() {
    //Calling function after Page Load
    AddReadMore();
});

</script>

<?php get_footer();?>