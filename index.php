<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        span{
            font-weight:bold;
            color:red;
            display: inline;
        }
        .C{
            display : inline;
            text-decoration: underline;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
<?php
echo "Bai 1:";
echo "<br>";
echo "Chào mừng các bạn đến với môn học Lập Trình Web 1";
echo "<br>";
echo "(a):";
$a = "Chào mừng các bạn đến với môn học Lập Trình Web 1";
echo "<br>";
echo "$a";
echo "<br>";
echo "(b):";
echo "<br>";
$b = str_replace(" ", "<br>", $a);
echo $b;
echo "<br>";
echo "<br>";
echo "Bai 2:"; //date() in PHP.net
$time = "04/09/2000";
echo "<br>";
echo "(a):";
// $time1 = str_replace("/", "-", $time);
// $time2 = strtotime($time1);
echo $time;
echo "<br>=> ";
$time2 = date("d-m-y", strtotime($time));
echo $time2;
echo "<br>";
echo "(b):";
$time3 = date("F d,Y", strtotime($time));
//F return dạng long-text  của 1 tháng 01=>january
//d return dạng long-number của ngày 09=> 09
//y return dang short-text của năm 2000=>00
echo $time;
echo "<br>=> ";
echo $time3;
echo "<br>";
echo "<br>";
echo "Bai 3:";
echo "<br>";
echo "(a):";
$roll = "9,2,3,5,7";
$cut = explode(",", $roll);
$sum = 0;
for ($i = 0; $i < count($cut); $i++) {

    $sum += $cut[$i];
}
echo "sum = $sum";
echo "<br>";
echo "(b):";
sort($cut); //sap xep mang indexed theo thu tu tang dan
echo $cut[0]; //xuat ra phan tu dau tien trong mang sau khi dc sap xep tang dan
echo "<br>";
echo "(c):";
echo $cut[count($cut) - 1]; //xuat ra phan tu cuoi cung trong mang sau khi dc sap xep tang dan
echo "<br>";
echo "(d):";
$new = $cut;
unset($new[count($new) - 1]);
print_r($new);
echo "<br>";
echo "(e):";
unset($new[0]);
print_r($new);
echo "<br>";
echo "<br>";
echo "Bai 4:";
echo "<br>";

$input = "Lập trình Web 1";
echo $input;
echo "<br>";
function vn_to_str($str)
{

    $unicode = array(

        'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',

        'd' => 'đ',

        'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',

        'i' => 'í|ì|ỉ|ĩ|ị',

        'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',

        'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',

        'y' => 'ý|ỳ|ỷ|ỹ|ỵ',

        'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',

        'D' => 'Đ',

        'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',

        'I' => 'Í|Ì|Ỉ|Ĩ|Ị',

        'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',

        'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',

        'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ',

    );

    foreach ($unicode as $nonUnicode => $uni) {

        $str = preg_replace("/($uni)/i", $nonUnicode, $str);

    }
    $str = str_replace(' ', '-', $str);

    return $str;

}
$output = vn_to_str($input);
echo $output;
echo "<br>";
echo "<br>";
echo "Bai 5:";
function removeSpecialsChar($str)
{
    return preg_replace('/\W/', " ", $str);
}
echo removeSpecialsChar("aa@#%@#%@&#44");
echo "<br>";
echo "<br>";
echo "Bai 6:";
echo "<br>";
$capitals = ["Japan" => "Tokyo", "Mexico" => "Mexico City", "Korea" => "Seoul", "Egypt" => "Cairo", "England" => "London"];
foreach ($capitals as $key => $value) {
    # code...
    echo "<span>" . $key . "</span>" . ": <div class='C'>" . $value . "</div> <br>";
}
?>

</body>
</html>