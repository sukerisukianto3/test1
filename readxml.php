<?php
if ( file_exists( 'author.xml' ) ) {
  // Get XML object
  $xml_object = simplexml_load_file( 'author.xml' );
  // Turn XML object to JSON so we can make it into an associative array
  $json = json_encode( $xml_object );
  $xml_array = json_decode( $json, true );
  // Take what we want, the quizQuestion element and make that our array so that it's
  // easier to navigate with foreach statements
  $name_array = $xml_array['NAME'];
}
?>