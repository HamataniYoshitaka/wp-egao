<div class="sidebar-news">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 215 14" xml:space="preserve">
         <path class="sidebar-line" d="M212.7,1.8c-61.4,13.7-146.9,14-211,0"/>
    </svg>
    <h4 class="sidebar-news-title roboto-condensed tracking-2">CATEGORY</h4>
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 215 14" xml:space="preserve">
         <path class="sidebar-line" d="M212.7,1.8c-61.4,13.7-146.9,14-211,0"/>
    </svg>

    <ul>
<?php
$args = array(
  'orderby' => 'name',
  'parent' => 0
  );
$categories = get_categories( $args );
foreach ( $categories as $category ) {
?>
	<li><a href="<? echo get_category_link( $category->term_id ) ?>"><? echo $category->name ?></a></li>
<? } ?>
    </ul>
</div>


<div class="sidebar-news">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 215 14" xml:space="preserve">
         <path class="sidebar-line" d="M212.7,1.8c-61.4,13.7-146.9,14-211,0"/>
    </svg>
    <h4 class="sidebar-news-title roboto-condensed tracking-2">ARCHIVE</h4>
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 215 14" xml:space="preserve">
         <path class="sidebar-line" d="M212.7,1.8c-61.4,13.7-146.9,14-211,0"/>
    </svg>
    <ul>
<?
$args = array(
    'type'            => 'monthly',
    'post_type'       => 'post',
    'limit'           => '',
    'format'          => 'html',
    'before'          => '',
    'after'           => '',
    'show_post_count' => false,
    'echo'            => 1,
    'order'           => 'DESC'
);
wp_get_archives( $args );
?>
    </ul>
</div>
