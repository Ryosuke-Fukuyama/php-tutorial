<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
  <!-- 簡単な命令 -->
  <?php echo '<p>Hello World</p>'; ?>

  <!-- PHP からシステムに関する情報を取得する -->
  <!-- <?php phpinfo(); ?> -->

  <!-- 変数を出力する (配列要素) -->
  <?php echo $_SERVER['HTTP_USER_AGENT']; ?>

  <!-- 制御構造 および 関数の使用例 -->
  <!-- <?php
  if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) {
    echo 'あなたはInternet Explorerを使用しています<br />';
  }
  ?> -->

  <!-- 練習 -->
  <?php
  if (1 + 1 == 2) {
    echo '正解！';
  }
  ?>

  <!-- HTML および PHP モードの両方を混在させる -->
  <?php
  if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) {
  ?>
  <h3>strposがtrueを返しました</h3>
  <center><b>あなたはInternet Explorerを使用しています</b></center>
  <?php
  } else {
  ?>
  <h3>strposがfalseを返しました</h3>
  <center><b>あなたはInternet Explorerを使用していません</b></center>
  <?php
  }
  ?>
 </body>
</html>