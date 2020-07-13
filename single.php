<?php get_header()?>


<?php if (has_post_thumbnail()): ?>
<img src="<?php the_post_thumbnail_url('post_image')?>" alt="feature">
<?php endif?>

<h1><?php the_title();?></h1>
</div>

<?php if (have_posts()): while (have_posts()): the_post();?>

<?php the_content();?>


<?php endwhile;else: ?>

<p>Sorry, no posts matched your criteria.</p>

<?php endif;?>



<?php get_sidebar();?>

<?php get_footer()?>