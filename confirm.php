<?php
//直リンクされた場合index.phpにリダイレクト
if($_SERVER["REQUEST_METHOD"] != "POST"){
	header("Location: contact.html");
	exit();
}

//各項目を内容を取得
$name = $_POST['name'];
$furigana = $_POST['furigana'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$contact_type = $_POST['contact_type'];
$contact_body = $_POST['contact_body'];
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
  <link rel="stylesheet" href="css/confirm.css">
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
  <form action="complete.php" method="post" class="form-area">
    <h2>お問い合わせ内容確認</h2>
    <div class="input-area">
      <p>お名前</p>
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
      <input type="submit" name="submit" value="送信" class="btn-border">
      <input type="hidden" name="name" value="<?php echo $name;?>">
      <input type="hidden" name="tel" value="<?php echo $tel;?>">
      <input type="hidden" name="email" value="<?php echo $email;?>">
      <input type="hidden" name="contact_type" value="<?php echo $contact_type;?>">
      <input type="hidden" name="contact_body" value="<?php echo $contact_body;?>">
      </div>
    </form>
		</div>
  </body>
</html>