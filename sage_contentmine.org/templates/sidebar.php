<?php
/*
Sidebar
Renders on blog posts.
 */
?>

TEST SIDEBAR
<?php 
	$children = wp_list_pages( array(
	'child_of' => get_the_ID(), // Only pages that are children of the current page
		'depth' => 1 ,   // Only show one level of hierarchy
		'sort_order' => 'asc',
		'title_li' => '',
		'echo' => '0',
		'post_status'  => 'publish' 
	)); 
	if($children) {
		?><div class="sidebar-children">
			<ul><?php echo $children; ?></ul>
		</div><?php
	} else { ?>
		<div class="sidebar-empty"></div>
	<?php }
?>
