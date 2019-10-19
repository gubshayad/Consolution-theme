<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if(have_posts()) :?>
                    <?php while(have_posts()): the_post() ?>
                        <p><?php the_content(); ?></p>
                    <?php endwhile;?>
                    <?php else : ?>
                    <h2>404 Not Found</h2>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>