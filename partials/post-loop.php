<?php if (has_post_thumbnail()): ?>
<?php the_post_thumbnail('thumbnail', array('class' => 'post-thumbnail'));?>
<?php endif;?>

<h3><?php the_title()?></h3>
<small>Posted: <?php the_time('F j, Y')?> by <a
        href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author()?></a></small>
<p><?php the_excerpt()?></p>
<a href="<?php the_permalink()?>" title="<?php the_title()?>">View Post</a>