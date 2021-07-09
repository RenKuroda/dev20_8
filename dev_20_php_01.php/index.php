<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
<?php
// echo"phpの授業１回目";
// echo"<p>phpの授業１回目</p>";
// echo "<p>5+7</p>";
// echo 5+7;

// $apple = "リンゴ";
// $num = 10+10;
// echo "<p>$apple</p>";
// echo "<p>$num</p>";

// $a =1;
// $b =2;

// if($a=1){
//     echo "1が表示されました"."<br>";
// }
// if($b=2){
//     echo "2が表示されました"."<br>";
// }

// $random = mt_rand(1,4);
// if($random === 1){
// echo "1が表示されました";
// echo '<img src="img/img1.png">';
// }elseif($random === 2){
//     echo "2が表示されました";
//     echo '<img src="img/img2.png">';
// }elseif($random === 3){
//     echo "3が表示されました";
//     echo '<img src="img/img3.png">';
// }elseif($random === 4){
//     echo "4が表示されました";
//     echo '<img src="img/img4.png">';
// }

// for($i = 1; $i < 10; $i++){
//     echo '<tr>';
//     for($j = 1; $j < 10; $j++){
//         $x = $i * $j;
//         echo "<td>{$x}</td>";
//         }
//         echo '<?tr>';
//     }

$hebei = $_GET["hebei"];
$kaisuu = $_GET["kaisuu"];
$height = $_GET["takasa"];

$sum = $hebei/$kaisuu;
$sumHeight = $kaisuu/$height;

echo "登録基本情報"."<br/>";
echo "平米数：".$hebei."m2"."<br/>";
echo "建物階数：".$kaisuu."階"."<br/>";
echo "建物高さ：".$height."m"."<br/>"."<br/>";

echo "1回あたりの平米数は".$sum."m2です"."<br/>";
echo "1階あたりの高さは".$sumHeight."mです"."<br/>";

if($height >= 100){
echo "4が表示されました";
echo '<img src="dev20/img/img4.png">';
}elseif($height >= 60){
    echo "3が表示されました";
    echo '<img src="dev20/img/img3.png">';
}elseif($height >= 10){
    echo "2が表示されました";
    echo '<img src="dev20/img/img2.png">';
}elseif($height >= 0){
    echo "1が表示されました";
    echo '<img src="dev20/img/img1.png">';
}
?>
</table>
    
    </body>
</html>