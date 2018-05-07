<?php
<?php
$haystack = 'ababcd';
$needle   = 'aB';

$pos      = strripos($haystack, $needle);
if ($pos === false) {
    echo "xx";
} else {
    echo "ok";

}
?>