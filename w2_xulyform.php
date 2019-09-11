<?php
$_fullname = "";
if (isset($_GET['fullname'])) {
    $_fullname = $_GET['fullname'];
}
echo "$_fullname";
echo "<br>";
$_hobbie=[];
if (isset($_GET['hobbie'] )) {
    $_hobbie = $_GET['hobbie'];
}
foreach ($_hobbie as $value) {
    # code...
    echo "$value";
}
;
$_favorite = [];

if (isset($_GET['favorite'] )) {
    $_favorite = $_GET['favorite'];
}
foreach ($_favorite as $value) {
    echo "$value";
}
