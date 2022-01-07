<?php
/**
 * SETUP-START | 1.0.0 | 211215 | partials/archive.php
 *
 * @package      SETUP-START
 * @author       Mark Corpuz
 * @since        1.0.0
 * @license      GPL-2.0+
**/

$entry_classes = get_post_class();
if( is_array( $entry_classes ) ) {
   $e_class_list = '';
   foreach( $entry_classes as $e_class ) {
      $e_class_list .= $e_class.' ';
   }
}

echo '<article class="'.trim( $e_class_list ).'">';
   setup_child_title();
   setup_child_dateauthor_nolink();
   setup_child_excerpt();
echo '</article>';