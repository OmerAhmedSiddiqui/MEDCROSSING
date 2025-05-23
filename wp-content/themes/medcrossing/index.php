<?php get_header(); ?>

<main>
   <div style="overflow:hidden">
<?php for($count=1;  $count<=15; $count++){

    $section = get_field( 'section_'.$count, get_the_ID() );
    echo do_shortcode($section);

}?>
</div>

</main

    <?php get_footer(); ?>