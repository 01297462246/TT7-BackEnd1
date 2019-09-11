<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- <form action="xulyform.php" method="get">
        <input type="text" name="fullname" id="fullname" placeholder="Nhap Ho va Ten">
    <br>
        <label for="">
            <input type="checkbox" name="hobbie[]" value=" drink">Uong
        </label>
        <label for="">
            <input type="checkbox" name="hobbie[]" value=" eat">An
        </label>
        <label for="">
            <input type="checkbox" name="hobbie[]" value=" sleep">Ngu
        </label>
    <br>
        <select name="favorite[]" id="" multiple>
            <option value=" An">An</option>
            <option value=" Uong">Uong</option>
            <option value=" Ngu">Ngu</option>
        </select>
    <br>
        <button>Send</button>
    </form> -->

    <?php
$marks = array(
    "studen1" => array("physics" => 35, "maths" => 30, "chemistry" => 39),
    "student2" => array("physics" => 30, "maths" => 32, "chemistry" => 29),
);
foreach ($marks as $key => $value) {
    echo "<ul> $key<br> ";
    # code...

    foreach ($value as $key => $value1) {
        # code...
        echo "<li> $key : $value1 </li>  ";
    }
    echo "</ul>";
}
?>

</body>
</html>
