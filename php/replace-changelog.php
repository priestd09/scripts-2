<?php

// replace changelog section in readme.txt
$changelog = file_get_contents('CHANGELOG.md');

// remove first 2 lines (heading)
$changelog = explode( PHP_EOL, $changelog );
$changelog = array_slice( $changelog, 2 );
$changelog = join( PHP_EOL, $changelog );

// add padding
$changelog = PHP_EOL . PHP_EOL . $changelog . PHP_EOL . PHP_EOL;

// replace changelog
$readme = file_get_contents( 'readme.txt' );
$new_readme = preg_replace( '/(== Changelog ==)(.|\n)+?(?=== )/', '$1 ' . $changelog, $readme );

echo $new_readme;
file_put_contents( 'readme.txt', $new_readme );