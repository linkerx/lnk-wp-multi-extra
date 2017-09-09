 <?php

 /**
 * Plugin Name: LNK WP-MULTISITE EXTRA DATA
 * Plugin URI: https://github.com/linkerx
 * Description: Agrega al post (de todos los tipos) a que blog pertenece
 * Version: 0.1
 * Author: Diego Martinez Diaz
 * Author URI: https://github.com/linkerx
 * License: GPLv3
 */

 add_action( 'rest_api_init', 'lnk_post_add_blog_data' );
 function lnk_post_add_blog_data() {
     register_rest_field( 'post',
         'blog_data',
         array(
             'get_callback'    => 'post_blog_data',
             'update_callback' => null,
             'schema'          => null,
         )
     );
 }

 /**
  * Get the post blog data
  *
  * @param array $object Details of current post.
  * @param string $field_name Name of field.
  * @param WP_REST_Request $request Current request
  *
  * @return mixed
  */
 function slug_get_starship( $object, $field_name, $request ) {

   
     return get_post_meta( $object[ 'id' ], $field_name, true );
 }
