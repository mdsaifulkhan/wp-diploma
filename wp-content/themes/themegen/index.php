<?php get_header(); ?>


    Index

    <?php if ( have_posts() ) : ?>

    <ul>
        <?php while ( have_posts() ) : the_post() ?>
            <li>
                <?php the_post_thumbnail('post-image'); ?>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php the_excerpt(); ?>
            </li>
        <?php endwhile; ?>
    </ul>

    <?php endif; ?>


<?php get_footer(); ?>

