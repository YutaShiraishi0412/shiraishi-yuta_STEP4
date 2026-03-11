<?php

$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$question = $_POST['question'];
$gender = $_POST['gender'];

$errors = [];

// 名前チェック
if(!preg_match("/^[ぁ-んァ-ン一-龥a-zA-Z]+$/u",$name)){
$errors[] = "name:名前はひらがな、カタカナ、漢字、英字のみ使用できる";
}

// 年齢チェック
if($age < 0 || $age > 150){
$errors[] = "age:年齢は０から１５０の間で入力する";
}

// 電話番号チェック
if(!preg_match("/^[0-9\-]+$/",$phone)){
$errors[] = "phone:電話番号は半角数字とハイフンのみ使用できます";
}

// メールチェック
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
$errors[] = "email：メールアドレスの形式が正しくありません";
}

// 住所チェック
if(!preg_match("/^[ぁ-んァ-ン一-龥a-zA-Z]+$/u",$address)){
$errors[] = "address：住所はひらがな、カタカナ、漢字、英字のみ使用できます";
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>入力内容確認</title>
</head>

<body>

<?php

if(!empty($errors)){

foreach($errors as $error){
echo "<p>".$error."</p>";
}

echo "<a href='form.php'>戻る</a>";

}else{

echo "<h1>入力内容確認</h1>";

echo "名前: ".$name."<br>";
echo "年齢: ".$age."<br>";
echo "電話番号: ".$phone."<br>";
echo "メールアドレス: ".$email."<br>";
echo "住所: ".$address."<br>";
echo "質問: ".$question."<br>";
echo "性別: ".$gender."<br>";

}

?>

</body>
</html>