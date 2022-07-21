<?php
//直リンクされた場合index.phpにリダイレクト
if($_SERVER["REQUEST_METHOD"] != "POST"){
	header("Location: index.php");
	exit();
}

//各項目を内容を取得
$name = $_POST['name'];
$furigana = $_POST['furigana'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$contact_type = $_POST['contact-type'];
$contact_body = $_POST['contact-body'];

//チェックボックスの内容をスラッシュ区切りで取り出す
$reason = implode('/', $_POST['reason']);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>確認画面</title>
<style type="text/css">
	body {
		background-color: #f9fff2;
	}
	.input-area {
		margin-bottom: 20px;
	}
	p {
		font-weight: bold;
		font-size: 20px;
	}
	.btn-border {
		display: inline-block;
		max-width: 180px;
		text-align: left;
		border: 2px solid #9ec34b;
		font-size: 15px;
		color: #9ec34b;
		text-decoration: none;
		font-weight: bold;
		padding: 8px 16px;
		border-radius: 4px;
		transition: .4s;
	}
	.btn-border:hover {
		background-color: #9ec34b;
		border-color: #cbe585;
		color: #FFF;
	}
</style>
</head>
<body>
 	<form action="complete.php" method="post">
 		<h2>お問い合わせ内容確認</h2>
	 	<div class="input-area">
		 	<p>名前</p>
		 	<?php echo htmlspecialchars($name,ENT_QUOTES,'UTF-8');?>
		</div>

    <div class="input-area">
		 	<p>電話番号</p>
		 	<?php echo htmlspecialchars($tel,ENT_QUOTES,'UTF-8');?>
	 	</div>

		<div class="input-area">
		 	<p>メール</p>
		 	<?php echo htmlspecialchars($email,ENT_QUOTES,'UTF-8');?>
	 	</div>

	 	<div class="input-area">
		 	<p>お問い合わせ種別</p>
		 	<?php echo $contact_type;?>
	 	</div>

		<div class="input-area">
	 		<p>お問い合わせ内容</p>
	 		<?php echo nl2br(htmlspecialchars($contact_body,ENT_QUOTES,'UTF-8'));?>
		</div>
	 	<div class="input-area">
	 		<input type='button' onclick='history.back()' value='戻る' class="btn-border">
	 		<input type="submit" name="submit" value="送信" class="btn-border">
	 		<input type="hidden" name="name" value="<?php echo $name;?>">
       <input type="hidden" name="tel" value="<?php echo $tel;?>">
	 		<input type="hidden" name="email" value="<?php echo $email;?>">
	 		<input type="hidden" name="contact_type" value="<?php echo $contact_type;?>">
	 		<input type="hidden" name="contact_body" value="<?php echo $contact_body;?>">
	 	</div>
	</form>
</body>
</html>