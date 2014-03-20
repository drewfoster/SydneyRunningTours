<?php
/*
Controller name: Custom
Controller description: Creates a JSON feed for Google Maps
*/
class JSON_API_Custom_Controller {

  public function get_posts_poI() {
    global $json_api;
    $url = parse_url($_SERVER['REQUEST_URI']);
    $defaults = array(
    	'ignore_sticky_posts' => true,
		'post_type' => 'poi'
    );
    $query = wp_parse_args($url['query']);
    unset($query['json']);
    unset($query['post_status']);
    $query = array_merge($defaults, $query);
    $posts = $json_api->introspector->get_posts($query);
    $result = $this->posts_result($posts);
    $result['query'] = $query;
    return $result;
  }

  public function get_posts_runRoutes() {
    global $json_api;
    $url = parse_url($_SERVER['REQUEST_URI']);
    $defaults = array(
    	'ignore_sticky_posts' => true,
		'post_type' => 'runroute'
    );
    $query = wp_parse_args($url['query']);
    unset($query['json']);
    unset($query['post_status']);
    $query = array_merge($defaults, $query);
    $posts = $json_api->introspector->get_posts($query);
    $result = $this->posts_result($posts);
    $result['query'] = $query;
    return $result;
  }

}

?>