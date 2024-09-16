<div class="container">
    <div class="sidebar">
        <h2>Filtro por Tipo</h2>
        <?php
        $tipos = get_terms(['taxonomy' => 'tipo', 'hide_empty' => true]);
        foreach ($tipos as $tipo) : ?>
            <div class="filter">
                <button onclick="filterProjects('<?php echo $tipo->slug; ?>')"><?php echo $tipo->name; ?></button>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="projects" id="projects-list">
        <?php
        $args = ['post_type' => 'projetos', 'posts_per_page' => -1];
        $projetos = new WP_Query($args);
        while ($projetos->have_posts()) : $projetos->the_post();
            get_template_part('template-parts/content', 'projeto');
        endwhile; ?>
    </div>
</div>

<script>
function filterProjects(tipo) {
    // Implementar lógica de filtragem
}
</script>