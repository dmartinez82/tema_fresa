<?php
    get_header();
    the_post();
?>

<img src="<?php echo get_theme_file_uri('/img/fondo.jpg'); ?> "></img>

<br/>
<a href="<?php echo site_url("/pricing"); ?>">Pricing</a>

<?php
    get_footer();
?>