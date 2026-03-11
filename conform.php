<?php

$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$question = $_POST['question'];
$gender = $_POST['gender'];

?>

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>入力内容確認</title>
</head>

<body>

<h1>入力内容確認</h1>

<?php

echo "名前: ".$name."<br>";
echo "年齢: ".$age."<br>";
echo "電話番号: ".$phone."<br>";
echo "メールアドレス: ".$email."<br>";
echo "住所: ".$address."<br>";
echo "質問: ".$question."<br>";
echo "性別: ".$gender."<br>";

?>

</body>
</html>