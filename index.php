<?php get_header(); ?>
    
    <h1>MI PRIMER BLOG FRESITA!!!!! </h1>

<?php

if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php
        the_excerpt();
  }
} else{
    echo "NO HAY POSTS!!!!!";
}

?>

</body>
</html>