<div class="container">
    <h1><?php the_title(); ?></h1>
    <p>Data: <?php echo get_the_date(); ?></p>
    <?php the_post_thumbnail(); ?>
    <p><?php the_content(); ?></p>
    <span><?php echo get_post_meta(get_the_ID(), 'tipo', true); ?></span>
    <a href="<?php echo get_post_meta(get_the_ID(), 'link_externo', true); ?>" class="btn">Ver Projeto</a>
    
    <h2>Projetos Relacionados</h2>
    <div class="related-projects">
        <?php // Implementar listagem de projetos relacionados ?>
    </div>
</div>