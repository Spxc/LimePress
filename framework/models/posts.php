<?php
class Website {
 
  // for our own reference of what's available
  public $url,
         $title,
         $author;
 
  // allows us to easily set attributes
  // on the class
  function __construct(array $data = null) {
    if( empty($data) ) 
      return;
 
    foreach( $data as $field => $value ) {
      $this->$field = $value;
    }
  }
 
}
?>