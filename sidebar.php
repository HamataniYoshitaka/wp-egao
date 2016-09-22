<div class="sidebar-news">
    <h4 class="sidebar-news-title">CATEGORIES</h4>
<?php
$args = array(
  'orderby' => 'name',
  'parent' => 0
  );
$categories = get_categories( $args );
foreach ( $categories as $category ) {
	echo '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a><br/>';
}
?>


<h4 class="sidebar-news-title">ARCHIVE</h4>

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
</div>
