<?php
//1. POSTデータ取得
//まず前のphpからデーターを受け取る（この受け取ったデータをもとにbindValueと結びつけるため）
$hebei = $_POST["hebei"];
$kaisuu = $_POST["kaisuu"];
$takasa = $_POST["takasa"];
// step1 記述しましょう！
$id = $_POST["id"]; //hiddenで送られたid
//2. DB接続します xxxにDB名を入力する
try {
    $pdo = new PDO('mysql:dbname=b_db;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
}
//３．データ登録SQL作成 //ここにカラム名を入力する
// step2. prepareのSQLをUPDATEに書き換えましょう
$stmt = $pdo->prepare("UPDATE b_table SET hebei=:hebei, kaisuu=:kaisuu, takasa=:takasa WHERE id=:id");
$stmt->bindValue(':hebei', $hebei, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':kaisuu', $kaisuu, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':takasa', $takasa, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
// step3. bindValueにIDを紐付けましょう！
$stmt->bindValue(':id', $id, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();
//４．データ登録処理後
if ($status==false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
} else {
    //５．index.phpへリダイレクト 書くときにLocation: in この:　のあとは半角スペースがいるので注意！！
    header("Location: select.php");
    exit;
}