<?php
//直リンクされた場合index.phpにリダイレクト
if($_SERVER["REQUEST_METHOD"] != "POST"){
  header("Location: index.html");
  exit();
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require ('vendor/autoload.php');



//メールの日本語設定
mb_language("Japanese");
mb_internal_encoding("UTF-8");

$mail = new PHPMailer(true);

//送信先アドレス
$to = $_POST['email'];
//メール件名
$subject = "お問い合わせありがとうございます。";
//メッセージ本文を視覚的に見やすく格納（ヒアドキュメント）
$message = <<< EOM
お問い合わせありがとうございます。

以下の内容で承りました。
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
【 お名前 】
{$_POST["name"]}

【 電話番号 】
{$_POST["tel"]}

【 メール 】
{$_POST["email"]}

【 お問い合わせの種類 】
{$_POST["contact_type"]}

【 お問い合わせ内容 】
{$_POST["contact_body"]}

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
EOM;
//送信元
$headers = "info@prsholdings.co.jp";
//メール送信
try{

  //server
  //$mail->SMTPDebug = 0; //本番では0とかにする。
  $mail->SMTPDebug = 4;
  $mail->Debugoutput = function($str, $level) {echo "debug level $level; message: $str<br>";};
  $mail->isSMTP();
  $mail->Host = 'smtp.lolipop.jp';
  $mail->SMTPAuth = true;
  $mail->Username = 'info@prsholdings.co.jp'; //ここにusername入れる
  $mail->Password = 'f-UTK53S0Z4ps_W0'; //ここにpassword入れる
  $mail->SMTPSecure = 'tls';
  $mail->Port = 465;


  //Recipients
  $mail->setFrom($headers, 'Mailer'); //アドレスだけでも動きます
  $mail->addAddress($to, 'Mr To');

  //Content
  $mail->CharSet = 'UTF-8'; //文字化け防止
  $mail->Subject = $subject;
  $mail->Body    = $message;

  //送信
  $mail->send();

  echo "send";

}catch(Exception $e){
  echo "error:".$mail->ErrorInfo;
}
?>
<!DOCTYPE html>
<html>

<head>
  <!-- 文字コード -->
  <meta charset="UTF-8">
  <!-- キーワード -->
  <meta name="keyword" content="PRSホールディングス株式会社,お問い合わせ">
  <!-- Webサイトの内容 -->
  <meta name="description" content="PRSホールディングス株式会社,お問い合わせ">
  <!-- SNS OGPタグ -->
  <!-- <meta property="og:url" content="ページURL" /> -->
  <meta property="og:site_name" content="PRSホールディングス株式会社|お問い合わせ" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="PRSホールディングス株式会社|お問い合わせ" />
  <meta property="og:description" content="お問合せはこちらのフォームから" />
  <meta property="og:image" content="./img/meta/PRS-logo.png" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- ビューポートタグ -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- スタイル -->
  <link rel="icon" href="./img/meta/prs-logo.png">
  <link rel="stylesheet" href="css/complete.css">
  <script src="https://kit.fontawesome.com/97c82750ad.js" crossorigin="anonymous"></script>
  <title>PRSホールディングス株式会社|お問い合わせ</title>
</head>

<body>
  <header class="sub-header" id="header">
    <div class="sub-header__logo">
      <img src="img/header/PRS-logo_WEB.png">
    </div>
    <nav class="pc-gnavi">
      <div class="pc-gnavi__content">
        <ul class="pc-gnavi__list">
          <li><span><a href="index.html">ホーム</a></span></li>
          <li><span><a href="service-1.html">事業内容</a></span></li>
          <li><span><a href="company.html">会社概要</a></span></li>
          <li><span><a href="recruit.html">採用情報</a></span></li>
          <li><span><a href="mailto:info@prsholdings.co.jp">お問い合わせ</a></span></li>
        </ul>
      </div>
    </nav>
    <div id="js-drawer">
      <div class="tb-gnavi">
        <div class="tb-gnavi__wrapper">
          <div class="tb-gnavi__logo">
            <img src="img/header/PRS-logo_WEB.png">
          </div>
          <nav>
            <ul class="tb-gnavi__list">
              <li>
                <span class="en"><a href="index.html">HOME</a></span>
                <span class="ja"><a href="index.html">ホーム</a></span>
              </li>
              <li>
                <span class="en"><a href="service-1.html">SERVICE</a></span>
                <span class="ja"><a href="service-1.html">事業内容</a></span>
              </li>
              <li>
                <span class="en"><a href="company.html">COMPANY</a></span>
                <span class="ja"><a href="company.html">会社概要</a></span>
              </li>
              <li>
                <span class=" en"><a href="recruit.html">RECRUIT</a></span>
                <span class="ja"><a href="recruit.html">採用情報</a></span>
              </li>
              <li>
                <span class="en"><a href="mailto:info@prsholdings.co.jp">CONTACT</a></span>
                <span class="ja"><a href="mailto:info@prsholdings.co.jp">お問い合わせ</a></span>
              </li>
            </ul>
          </nav>
        </div>
        <p class="tb-gnavi__copy copyright">&copy; 2022 PRS HOLDINGS Co.,Ltd.</p>
      </div>
    </div>
    <div class="hamburger" id="js-hamburger">
      <div class="hamburger--trigger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </header>
  <div class="hero">
    <div class="hero__bg">
      <div class="hero__content">
        <p>お問い合わせ</p>
        <h1>CONTACT</h1>
        <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="index.html">
              <span itemprop="name">ホーム</span>
            </a>
            <meta itemprop="position" content="1" />
          </li>

          <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="contact.html">
              <span itemprop="name">お問い合わせ</span>
            </a>
            <meta itemprop="position" content="2" />
          </li>
        </ol>
      </div>
    </div>
  </div>
  <div class="flex">
    <div class="message">
      <h2>お問い合わせ完了</h2>
      <a href="index.html">ページトップへ</a>
    </div>
  </div>
</body>

</html>