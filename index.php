<?php
get_header();
?>
<div class="container-posts">
  <?php
    if ( have_posts() ) {
        while ( have_posts() ) { 
            the_post(); ?>
            <div class="container-post-content">
              <div class="thumbnail">
            <?php 
             the_post_thumbnail(array( 200, 200 )); ?>
             </div>
            <h2><?php the_title(); ?></h2>
            <p class="job"> <?php echo(get_post_meta(get_the_ID(), $key = 'amet', $single = true)); ?></p>
            <p><?php echo(get_post_meta(get_the_ID(), $key = 'kirjeldus', $single = true)); ?></p>
            <p><?php echo(get_post_meta(get_the_ID(), $key = 'email', $single = true)); ?></p>
            </div>
            <?php
      }
    } else {
      ?>
        <h2>Veel ei ole töötajaid lisatud</h2>
  <?php } ?>
</div>
<?php
get_footer();

?>