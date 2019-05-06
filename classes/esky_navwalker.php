<?php
if (! class_exists( 'Esky_NavWalker' ) ) {
    class Esky_NavWalker extends Walker {
        var $db_fields = array (
            'parent' => 'menu_item_parent', 
            'id'     => 'db_id' 
        );

        private $levels = 0;
        private $element_started = false;

        function positive ($num) {
            if ($num <= 0) return 0;
            else return $num;
        }

        function start_lvl(&$output, $depth = 0, $args = array()) {
            if ($this -> levels == 0) {
                $output .= "<div class=\"navbar-dropdown\"><!-- start level {$this->levels} -->\n";
            }
            $this -> levels += 1;
        }

        function end_lvl( &$output, $depth = 0, $args = array() ) {
            if ($this->levels == 1) {
                $output .= "</div><!-- end level {$this->levels}-->\n";
            }
            $this -> levels -= 1;
        }

        function start_el( &$output, $object, $depth = 0, $args = array(), $current_object_id = 0 ) {
            $childs = count(get_pages('child_of='.$object->object_id.'&parent='.$object->object_id));
            $output .= "<!-- start element {$childs} {$this->levels} -->\n";

            if ($childs <= 0) {
                $output .= sprintf( "\n<div class=\"navbar-item\"><a href='%s'>%s</a>",
                    $object->url,
                    str_repeat("-", $this->positive($depth-1)) . $object->title
                );
            }
            else {
                $output .= sprintf( "\n<div class=\"navbar-item has-dropdown is-hoverable\"><a class=\"navbar-link\" href='%s'>%s</a>",
                    $object->url,
                    $object->title
                );
            }
        }

        function end_el( &$output, $object, $depth = 0, $args = array() ) {
            $output .= "</div>" . "<!-- end element {$this->levels}-->\n";
        }
    }
}
?>