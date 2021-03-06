<?php namespace s2clean;

if (!defined('WPINC')) {
    exit('Do NOT access this file directly.');
}
$theme = theme(); // Theme instance.
?>
<!DOCTYPE html>
<html <?php echo $theme->lang_attributes(); ?> class="<?php echo esc_attr($theme->html_body_classes()); ?>">
<?php get_template_part('src/includes/head'); ?>

<body id="top" class="<?php echo esc_attr($theme->html_body_classes()); ?>">
