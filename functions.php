<?php

  /*	THEME SETUP
   *	Set up basic theme functionality here
  ------------------------------------------------------------------------------------------------------- */

  add_action( 'after_setup_theme', function() {

    // Register menu
    register_nav_menu( 'main', __( 'Main Menu', 'dijoyb2c_zeta' ) );

    // Localization
    load_theme_textdomain( 'wheresmarco', get_template_directory() . '/languages' );

    // Add RSS feed links to <head>
    add_theme_support( 'automatic-feed-links' );

    // Featured images
    add_theme_support( 'post-thumbnails' );

    // HTML5 galleries
    add_theme_support( 'html5', array( 'gallery', 'caption' ) );

    // Use HTML5 search form
    add_theme_support( 'html5', array( 'search-form' ) );

    // Use title tag
    add_theme_support( 'title-tag' );

    // Add support for editor-style.css
    add_editor_style();

  } );



  /* DEFAULT CONTENT WIDTH
   * This is full width, used for embeds, figures
  ------------------------------------------------------------------------------------------------------- */

  if ( ! isset( $content_width ) ) $content_width = 1440;



  /*	SCRIPTS SETUP
   *	Proper way to enqueue scripts and styles
  ------------------------------------------------------------------------------------------------------- */

  add_action ( 'wp_enqueue_scripts', function() {

  	// Styles
  	wp_enqueue_style(  'prefix-style', get_template_directory_uri() . '/style.css', array( 'basic', 'layout' ), '1.0' );
  	wp_register_style( 'basic',        get_template_directory_uri() . '/assets/css/basic.css', array(), '1.0' );
  	wp_register_style( 'layout',       get_template_directory_uri() . '/assets/css/layout.css', array(), '1.0' );

  } );



  /*	WORK POST TYPE
   *	Add work custom post type
  ------------------------------------------------------------------------------------------------------- */

  add_action( 'init', function() {

  	$labels = array(
  		'name'                  => _x( 'Work', 'Post Type General Name', 'wheresmarco' ),
  		'singular_name'         => _x( 'Work', 'Post Type Singular Name', 'wheresmarco' ),
  		'menu_name'             => __( 'Work', 'wheresmarco' ),
  		'name_admin_bar'        => __( 'Work', 'wheresmarco' ),
  		'archives'              => __( 'Work Archives', 'wheresmarco' ),
  		'parent_item_colon'     => __( 'Parent Work:', 'wheresmarco' ),
  		'all_items'             => __( 'All Work', 'wheresmarco' ),
  		'add_new_item'          => __( 'Add New Work', 'wheresmarco' ),
  		'add_new'               => __( 'Add New', 'wheresmarco' ),
  		'new_item'              => __( 'New Work', 'wheresmarco' ),
  		'edit_item'             => __( 'Edit Work', 'wheresmarco' ),
  		'update_item'           => __( 'Update Work', 'wheresmarco' ),
  		'view_item'             => __( 'View Work', 'wheresmarco' ),
  		'search_items'          => __( 'Search Work', 'wheresmarco' ),
  		'not_found'             => __( 'Work not found', 'wheresmarco' ),
  		'not_found_in_trash'    => __( 'Work not found in Trash', 'wheresmarco' ),
  		'featured_image'        => __( 'Featured Image', 'wheresmarco' ),
  		'set_featured_image'    => __( 'Set featured image', 'wheresmarco' ),
  		'remove_featured_image' => __( 'Remove featured image', 'wheresmarco' ),
  		'use_featured_image'    => __( 'Use as featured image', 'wheresmarco' ),
  		'insert_into_item'      => __( 'Insert into Work', 'wheresmarco' ),
  		'uploaded_to_this_item' => __( 'Uploaded to this Work', 'wheresmarco' ),
  		'items_list'            => __( 'Work list', 'wheresmarco' ),
  		'items_list_navigation' => __( 'Work list navigation', 'wheresmarco' ),
  		'filter_items_list'     => __( 'Filter Work list', 'wheresmarco' ),
  	);

  	$rewrite = array(
  		'slug'                  => 'work',
  		'with_front'            => false,
  		'pages'                 => false,
  		'feeds'                 => false,
  	);

  	$args = array(
  		'label'                 => __( 'Work', 'wheresmarco' ),
  		'description'           => __( 'Work post type.', 'wheresmarco' ),
  		'labels'                => $labels,
  		'supports'              => array( 'title', 'excerpt', 'revisions' ),
  		'hierarchical'          => false,
  		'public'                => true,
  		'show_ui'               => true,
  		'show_in_menu'          => true,
  		'menu_position'         => 5,
  		'menu_icon'             => 'dashicons-index-card',
  		'show_in_admin_bar'     => true,
  		'show_in_nav_menus'     => true,
  		'can_export'            => true,
  		'has_archive'           => 'work',
  		'exclude_from_search'   => false,
  		'publicly_queryable'    => true,
  		'rewrite'               => $rewrite,
  		'capability_type'       => 'page',
  	);

  	register_post_type( 'wheresmarco_work', $args );

  }, 0 );



  /*	WORK CLIENT TAXONOMY
   *	Add taxonomy for work named client
  ------------------------------------------------------------------------------------------------------- */

  add_action( 'init', function() {

    $labels = array(
  		'name'                       => _x( 'Clients', 'Taxonomy General Name', 'wheresmarco' ),
  		'singular_name'              => _x( 'Client', 'Taxonomy Singular Name', 'wheresmarco' ),
  		'menu_name'                  => __( 'Clients', 'wheresmarco' ),
  		'all_items'                  => __( 'All Clients', 'wheresmarco' ),
  		'parent_item'                => __( 'Parent Client', 'wheresmarco' ),
  		'parent_item_colon'          => __( 'Parent Client:', 'wheresmarco' ),
  		'new_item_name'              => __( 'New Client Name', 'wheresmarco' ),
  		'add_new_item'               => __( 'Add New Client', 'wheresmarco' ),
  		'edit_item'                  => __( 'Edit Client', 'wheresmarco' ),
  		'update_item'                => __( 'Update Client', 'wheresmarco' ),
  		'view_item'                  => __( 'View Client', 'wheresmarco' ),
  		'separate_items_with_commas' => __( 'Separate Clients with commas', 'wheresmarco' ),
  		'add_or_remove_items'        => __( 'Add or remove Clients', 'wheresmarco' ),
  		'choose_from_most_used'      => __( 'Choose from the most used Clients', 'wheresmarco' ),
  		'popular_items'              => __( 'Popular Clients', 'wheresmarco' ),
  		'search_items'               => __( 'Search Client', 'wheresmarco' ),
  		'not_found'                  => __( 'Client Not Found', 'wheresmarco' ),
  		'no_terms'                   => __( 'No Clients', 'wheresmarco' ),
  		'items_list'                 => __( 'Clients list', 'wheresmarco' ),
  		'items_list_navigation'      => __( 'Clients list navigation', 'wheresmarco' ),
  	);

  	$rewrite = array(
  		'slug'                       => 'client',
  		'with_front'                 => false,
  		'hierarchical'               => false,
  	);

  	$args = array(
  		'labels'                     => $labels,
  		'hierarchical'               => false,
  		'public'                     => false,
  		'show_ui'                    => true,
  		'show_admin_column'          => true,
  		'show_in_nav_menus'          => true,
  		'show_tagcloud'              => false,
  		'rewrite'                    => $rewrite,
  	);

  	register_taxonomy( 'client', array( 'wheresmarco_work' ), $args );

  }, 0 );



  /*	WORK POST METABOX
   *	Add metaboxes for date, client, urls
  ------------------------------------------------------------------------------------------------------- */

  function init_metabox() {

    add_action( 'add_meta_boxes', function() {

      add_meta_box(
        'wheresmarco_work',
        __( 'Work', 'wheresmarco' ),
        function( $post ) {

          // Add nonce for security and authentication.
          wp_nonce_field( 'wheresmarco_nonce_action', 'wheresmarco_nonce' );

          // Retrieve an existing value from the database.
          $wheresmarco_work_date = get_post_meta( $post->ID, 'wheresmarco_work_date', true );
          $wheresmarco_work_url = get_post_meta( $post->ID, 'wheresmarco_work_url', true );

          // Set default values.
          if( empty( $wheresmarco_work_date ) ) $wheresmarco_work_date = '';
          if( empty( $wheresmarco_work_url ) ) $wheresmarco_work_url = '';

          // Form fields.
          echo '<p><label for="wheresmarco_work_date">Date:</label><br /><input type="text" class="code" id="wheresmarco_work_date" name="wheresmarco_work_date" value="' . $wheresmarco_work_date . '"></p>';
          echo '<p><label for="wheresmarco_work_url">URL:</label><br /><input type="text" class="code" id="wheresmarco_work_url" name="wheresmarco_work_url" value="' . $wheresmarco_work_url . '"></p>';

        },
        'wheresmarco_work',
        'normal',
        'low'
      );

    } );


    add_action( 'save_post', function( $post_id, $post ) {

      // Add nonce for security and authentication.
      $nonce_name   = isset( $_POST['wheresmarco_nonce'] ) ? $_POST['wheresmarco_nonce'] : '';
      $nonce_action = 'wheresmarco_nonce_action';

      // Check if a nonce is set.
      if ( ! isset( $nonce_name ) )
        return;

      // Check if a nonce is valid.
      if ( ! wp_verify_nonce( $nonce_name, $nonce_action ) )
        return;

      // Check if the user has permissions to save data.
      if ( ! current_user_can( 'edit_post', $post_id ) )
        return;

      // Check if it's not an autosave.
      if ( wp_is_post_autosave( $post_id ) )
        return;

      // Sanitize user input.
      $wheresmarco_work_date = isset( $_POST[ 'wheresmarco_work_date' ] ) ? $_POST[ 'wheresmarco_work_date' ] : '';
      $wheresmarco_work_url = isset( $_POST[ 'wheresmarco_work_url' ] ) ? $_POST[ 'wheresmarco_work_url' ] : '';

      // Update the meta field in the database.
      update_post_meta( $post_id, 'wheresmarco_work_date', $wheresmarco_work_date );
      update_post_meta( $post_id, 'wheresmarco_work_url', $wheresmarco_work_url );

    }, 10, 2 );

  }


  if ( is_admin() ) :

    add_action( 'load-post.php', 'init_metabox' );
    add_action( 'load-post-new.php', 'init_metabox' );

  endif;
