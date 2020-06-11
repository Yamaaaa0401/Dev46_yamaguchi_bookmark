<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$title=$_POST["title"];
$bookurl=$_POST["bookurl"];
$comment=$_POST["comment"];


//2. DB接続します ワンパターンなのでコピペで。
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_bookmark;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成
$stmt = $pdo->prepare ("INSERT INTO gs_bm_table ( id,title,url,comment,indate )VALUES( NULL,:a1,:a2,:a3,sysdate())");
// VALUEに書くコードは:a1はbind変数↑／↓各項目にbindvalueを置きユーザーが送ってきたデータを1度無効化することをかませた。PDO::PARAM_STRは文字列型だよ〜って教えている
$stmt->bindValue(':a1', $title, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $bookurl, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $comment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();
// execute:実行データベースへ送る。下へ

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("ErrorMassage:".$error[2]);
}else{
  //５．index.phpへリダイレクト
header('Location:bm_index.php');

}
?>