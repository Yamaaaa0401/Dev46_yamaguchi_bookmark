<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>お気に入り登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="bm_select.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="bm_insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ブックマーク</legend>
     <label>書籍名：<input type="text" name="title"></label><br>
     <label>URL：<input type="text" name="bookurl"></label><br>
     <label><textArea name="comment" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- ファイルのアップロード↓ -->
<form enctype="multipart/form-data"  action="file_insert.php" method="POST">
  <div class="jumbotron">
    <fieldset>
      <legend>発表ファイル</legend>
      <label>ファイル名：<input type="text" name="title"></label><br>
      <input type="hidden" name="name" value="value" />
      アップロード: <input name="userfile" type="file" accept="file/*"/></br> <!-- 追記：accept="file/*" -->
      <label style.10px>ファイルコメント</label></br>
      <label><textArea name="comment" rows="2" cols="40"></textArea></label><br>
      <input type="submit" value="ファイル送信" />
    </fieldset>

  </div>
  
</form>
<!-- Main[End] -->


</body>
</html>


