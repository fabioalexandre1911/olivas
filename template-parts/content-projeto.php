<div class="project">
    <h3><?php the_title(); ?></h3>
    <?php the_post_thumbnail(); ?>
    <p><?php the_excerpt(); ?></p>
    <span><?php echo get_post_meta(get_the_ID(), 'tipo', true); ?></span>
</div>