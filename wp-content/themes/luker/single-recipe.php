<?php

$content = array();
$chef = get_the_terms( $post->ID, 'chef' )[0];
$level = get_the_terms( $post->ID, 'level' )[0];
$cacao = get_the_terms( $post->ID, 'cacao' )[0];

$content['image'] = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
$content['chefName'] = $chef->name;
$content['chefDescription'] = $chef->description;
$content['chefImage'] = get_option("taxonomy_" . $chef->term_id)['imagen'];
$content['level'] = $level->name;
$content['cacao'] = $cacao->name;
$content['content'] = $post->post_content;
$content['tittle'] = $post->post_title;
$content['servings'] = get_post_meta($post->ID, 'ingredient', true);
$content['banner'] = get_post_meta($post->ID, 'directions', true);

echo json_encode($content);
