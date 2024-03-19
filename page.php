<?php get_header();
?>




<div class="page-title">
    <h1><?php the_title(); ?></h1>
</div>


<div class="header-img"><?php the_post_thumbnail(); ?></div>
<h2><a href="<?php echo site_url(); ?>"></a></h2>

<div class="content"> <?php the_content(); ?></div>





<?php get_footer();
?>