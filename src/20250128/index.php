<?php
require("User.class.php");

$u = new User("pimbledeedee", "pimble@wow.com", "pimble.jpeg");
$twee = new User("blippydeedoo", "blippy@wow.com", "blippy.jpeg");
$three = new User("poppybibbila", "poppy@wow.com");

print '<pre>';
print_r($u);
print_r($twee);
print_r($three);
print '</pre>';
