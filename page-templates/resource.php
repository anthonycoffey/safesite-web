<?php
/*
Template Name: Resource
*/
get_header(); ?>

<div id="archive-filters">
<?php foreach( $GLOBALS['my_query_filters'] as $key => $name ): 
	
	// get the field's settings without attempting to load a value
	$field = get_field_object($key, false, false);
	
	
	// set value if available
	if( isset($_GET[ $name ]) ) {
		
		$field['value'] = explode(',', $_GET[ $name ]);
		
	}
	
	
	// create filter
	?>
	<div class="filter" data-filter="<?php echo $name; ?>">
		<?php create_field( $field ); ?>
	</div>
	
<?php endforeach; ?>
</div>
