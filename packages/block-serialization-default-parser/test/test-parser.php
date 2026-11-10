<?php
/**
 * PHP Test Helper
 *
 * Facilitates running PHP parser against same tests as the JS parser implementation.
 *
 * @package gutenberg
 */

// This must run in an environment where the Core PHP parser is present.
$parser = new WP_Block_Parser();

echo json_encode( $parser->parse( file_get_contents( 'php://stdin' ) ) );
