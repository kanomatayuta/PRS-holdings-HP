<!DOCTYPE html>
<html lang="ja">

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
  <link rel="stylesheet" href="css/contact.css">
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

  <main class="main" id="main">
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

    <section class="sec contact">
      <div class="sec__wrapper">
        <h2 class="sec__title">お問い合わせ</h2>
        <p class="sec__text">下記フォームよりご質問・ご依頼などお気軽にお問い合わせください。</p>
      </div>

      <form action="confirm.php" class="form" method="post">
        <div class="form__wrapper">
          <div class="Form-Item">
            <p class="Form-Item-Label">お名前<span class="Form-Item-Label-Required">必須</span></p>
            <input type="text" name="name" class="Form-Item-Input" autocomplete="name" placeholder="例）山田太郎" required>
          </div>
          <div class="Form-Item">
            <p class="Form-Item-Label">フリガナ<span class="Form-Item-Label-Required">必須</span></p>
            <input type="text" name="furigana" class="Form-Item-Input" placeholder="例）ヤマダタロウ" required>
          </div>
          <div class="Form-Item">
            <p class="Form-Item-Label">電話番号<span class="Form-Item-Label-Required">必須</span></p>
            <input type="text" name="tel" class="Form-Item-Input" autocomplete="tel" placeholder="例）000-0000-0000"
              required>
          </div>
          <div class="Form-Item">
            <p class="Form-Item-Label">メールアドレス<span class="Form-Item-Label-Required">必須</span></p>
            <input type="email" name="email" class="Form-Item-Input" autocomplete="email"
              placeholder="例）example@gmail.com" required>
          </div>
          <div class="Form-Item">
            <p class="Form-Item-Label">メールアドレス(確認)<span class="Form-Item-Label-Required">必須</span></p>
            <input type="email" name="email2" class="Form-Item-Input" autocomplete="email"
              placeholder="例）example@gmail.com" required>
          </div>
          <div class="Form-Item">
            <p class="Form-Item-Label isMsg">お問い合わせ種類</p>
            <ul class="contact-type">
              <li>
                <input type="radio" id="entry" name="contact_type" value="採用エントリー">
                <label for="entry">採用エントリー</label>
              </li>
              <li>
                <input type="radio" id="question" name="contact_type" value="質問">
                <label for="question">質問</label>
              </li>
              <li>
                <input type="radio" id="request" name="contact_type" value="ご依頼">
                <label for="request">ご依頼</label>
              </li>
              <li>
                <input type="radio" id="others" name="contact_type" value="その他">
                <label for="others">その他</label>
              </li>
            </ul>
          </div>
          <div class="Form-Item">
            <p class="Form-Item-Label isMsg">内容詳細<span class="Form-Item-Label-Required">必須</span></p>
            <textarea class="Form-Item-Textarea" name="contact_body" required></textarea>
          </div>
        </div>
        <div class="sec privacy">
          <div class="sec__wrapper">
            <h2 class="sec__title">プライバシー</h2>
            <p class="sec__text">個人情報のお取扱についてはプライバシーポリシーをご覧下さい。</p>


            <div class="agree">
              <h3>個人情報取得に関する同意分</h3>

              <div class="agree__cntent">
                <p>
                  PRSホールディングス(株)（以下，「弊社」といいます。）は，本ウェブサイト上で提供するサービス（以下,「本サービス」といいます。）における，ユーザーの個人情報の取扱いについて，以下のとおりプライバシーポリシー（以下，「本ポリシー」といいます。）を定めます。
                </p>

                <h4>第1条（個人情報）</h4>
                <p>
                  「個人情報」とは，個人情報保護法にいう「個人情報」を指すものとし，生存する個人に関する情報であって，当該情報に含まれる氏名，生年月日，住所，電話番号，連絡先その他の記述等により特定の個人を識別できる情報及び容貌，指紋，声紋にかかるデータ，及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。
                </p>

                <h4>第2条（個人情報の収集方法）</h4>
                <p>
                  弊社は，ユーザーが利用登録をする際に氏名，生年月日，住所，電話番号，メールアドレス，銀行口座番号，クレジットカード番号，運転免許証番号などの個人情報をお尋ねすることがあります。また，ユーザーと提携先などとの間でなされたユーザーの個人情報を含む取引記録や決済に関する情報を,弊社の提携先（情報提供元，広告主，広告配信先などを含みます。以下，｢提携先｣といいます。）などから収集することがあります。
                </p>

                <h4>第3条（個人情報を収集・利用する目的）</h4>
                <p>弊社が個人情報を収集・利用する目的は，以下のとおりです。</p>
                <ul>
                  <li>弊社サービスの提供・運営のため</li>
                  <li>ユーザーからのお問い合わせに回答するため（本人確認を行うことを含む）</li>
                  <li>ユーザーが利用中のサービスの新機能，更新情報，キャンペーン等及び弊社が提供する他のサービスの案内のメールを送付するため</li>
                  <li>メンテナンス，重要なお知らせなど必要に応じたご連絡のため</li>
                  <li>利用規約に違反したユーザーや，不正・不当な目的でサービスを利用しようとするユーザーの特定をし，ご利用をお断りするため</li>
                  <li>ユーザーにご自身の登録情報の閲覧や変更，削除，ご利用状況の閲覧を行っていただくため</li>
                  <li>有料サービスにおいて，ユーザーに利用料金を請求するため</li>
                  <li>上記の利用目的に付随する目的</li>
                </ul>

                <h4>第4条（利用目的の変更）</h4>
                <p>
                  弊社は，利用目的が変更前と関連性を有すると合理的に認められる場合に限り，個人情報の利用目的を変更するものとします。<br />利用目的の変更を行った場合には，変更後の目的について，弊社所定の方法により，ユーザーに通知し，または本ウェブサイト上に公表するものとします。
                </p>

                <h4>第5条（個人情報の第三者提供）</h4>
                <p>弊社は，次に掲げる場合を除いて，あらかじめユーザーの同意を得ることなく，第三者に個人情報を提供することはありません。ただし，個人情報保護法その他の法令で認められる場合を除きます。</p>
                <ul>
                  <li>人の生命，身体または財産の保護のために必要がある場合であって，本人の同意を得ることが困難であるとき</li>
                  <li>公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合であって，本人の同意を得ることが困難であるとき</li>
                  <li>国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって，本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき
                  </li>
                  <li>予め次の事項を告知あるいは公表し，かつ弊社が個人情報保護委員会に届出をしたとき</li>
                  <li>利用目的に第三者への提供を含むこと</li>
                  <li>第三者に提供されるデータの項目</li>
                  <li>第三者への提供の手段または方法</li>
                  <li>本人の求めに応じて個人情報の第三者への提供を停止すること</li>
                  <li>本人の求めを受け付ける方法</li>
                  <li>前項の定めにかかわらず，次に掲げる場合には，当該情報の提供先は第三者に該当しないものとします。</li>
                  <li>弊社が利用目的の達成に必要な範囲内において個人情報の取扱いの全部または一部を委託する場合</li>
                  <li>合併その他の事由による事業の承継に伴って個人情報が提供される場合</li>
                  <li>
                    個人情報を特定の者との間で共同して利用する場合であって，その旨並びに共同して利用される個人情報の項目，共同して利用する者の範囲，利用する者の利用目的および当該個人情報の管理について責任を有する者の氏名または名称について，あらかじめ本人に通知し，または本人が容易に知り得る状態に置いた場合
                  </li>
                </ul>

                <h4>第6条（個人情報の開示）</h4>
                <p>
                  弊社は、本人から個人情報の開示を求められたときは、本人に対し、遅滞なくこれを開示します。ただし、開示することにより次のいずれかに該当する場合は、その全部または一部を開示しないこともあり、開示しない決定をした場合には、その旨を遅滞なく通知します。なお、個人情報の開示に際しては、あたり1,000円の手数料を申し受けます。
                </p>
                <ul>
                  <li>本人または第三者の生命，身体，財産その他の権利利益を害するおそれがある場合</li>
                  <li>弊社の業務の適正な実施に著しい支障を及ぼすおそれがある場合</li>
                  <li>その他法令に違反することとなる場合</li>
                </ul>
                <p>前項の定めにかかわらず，履歴情報および特性情報などの個人情報以外の情報については，原則として開示いたしません。</p>

                <h4>第7条（個人情報の訂正および削除）</h4>
                <p>
                  ユーザーは，弊社の保有する自己の個人情報が誤った情報である場合には，弊社が定める手続きにより，弊社に対して個人情報の訂正，追加または削除（以下，「訂正等」といいます。）を請求することができます。<br />弊社は，ユーザーから前項の請求を受けてその請求に応じる必要があると判断した場合には，遅滞なく，当該個人情報の訂正等を行うものとします。
                </p>
                <p>弊社は，前項の規定に基づき訂正等を行った場合，または訂正等を行わない旨の決定をしたときは遅滞なく，これをユーザーに通知します。</p>

                <h4>第8条（個人情報の利用停止等）</h4>
                <p>
                  弊社は，本人から，個人情報が，利用目的の範囲を超えて取り扱われているという理由，または不正の手段により取得されたものであるという理由により，その利用の停止または消去（以下，「利用停止等」といいます。）を求められた場合には，遅滞なく必要な調査を行います。
                </p>
                <p>
                  前項の調査結果に基づき，その請求に応じる必要があると判断した場合には，遅滞なく，当該個人情報の利用停止等を行います。<br />弊社は，前項の規定に基づき利用停止等を行った場合，または利用停止等を行わない旨の決定をしたときは，遅滞なく，これをユーザーに通知します。
                </p>
                <p>
                  前2項にかかわらず、利用停止等に多額の費用を有する場合その他利用停止等を行うことが困難な場合であって、ユーザーの権利利益を保護するために必要なこれに代わるべき措置をとれる場合は、この代替策を講じるものとします。
                </p>
                <h4>第9条（プライバシーポリシーの変更）</h4>
                <p>
                  本ポリシーの内容は，法令その他本ポリシーに別段の定めのある事項を除いて，ユーザーに通知することなく，変更することができるものとします。<br />弊社が別途定める場合を除いて，変更後のプライバシーポリシーは，本ウェブサイトに掲載したときから効力を生じるものとします。
                </p>

                <h4>第10条（お問い合わせ窓口）</h4>
                <p>本ポリシーに関するお問い合わせは，下記の窓口までお願いいたします。</p>
                <p>社名:PRSホールディングス株式会社<br>
                  住所:〒104-0041 東京都中央区新富2-14-5ACN銀座イーストビル10F<br>
                  Eメールアドレス:info@prsholdings.co.jp</p>
              </div>
              <p class="check-text"><input type="checkbox" id="consent-chk" name="consent-chk">
                <label for="consent-chk">規約に同意する</label>
              </p>
              <div class="btn">
                <button type="submit" name="submit" class=" btn--blue btn-c">送信する</button>
              </div>
            </div>
          </div>
        </div>
      </form>




    </section>

  </main>

  <footer class=" footer">
    <a href="#" class="totop"></a>

    <div class="footer__wrapper">
      <div class="footer__company">
        <div class="logo">
          <a href="#">
            <img src="img/header/PRS-logo_WEB.png" width="300px" height="100px">
          </a>
        </div>
        <address class="address">
          〒104-0041<br>
          東京都中央区新富2-14-5 ACN銀座イーストビル10F<br>
          TEL:03-6275-2803<br>
          FAX:03-6275-2804<br>
          MAIL:info@prsholdings.co.jp
        </address>
      </div>
      <div class="footer__nav">
        <nav class="footer__nav--tb">
          <ul class="menu-list">
            <li><a href="index.html">ホーム</a></li>
            <li><a href="recruit.html">採用情報</a></li>
            <li><a href="company.html">会社概要</a></li>
            <li><a href="mailto:info@prsholdings.co.jp">お問い合わせ</a></li>
          </ul>

          <ul class="menu-list">
            <li><a href="service-1.html">事業内容</a></li>
            <li class="sp">
              <ul class="service-list--tb">
                <li><a href="service-2.html">ゼロベース・プロデュース事業</a></li>
                <li><a href="service-3.html">受託開発事業</a></li>
                <li><a href="service-4.html">SES事業</a></li>
                <li><a href="#">コンサル事業</a></li>
              </ul>
            </li>
            <li><a href="pravacy.html">プライバシポリシー</a></li>
          </ul>
        </nav>

        <nav class="footer__nav--sp">
          <ul class="menu-list">
            <li><a href="index.html">ホーム</a></li>
            <li><a href="service-1.html">事業内容</a>
            <li>
              <ul class="service-list--sp">
                <li><a href="service-2.html">ゼロベース・プロデュース事業</a></li>
                <li><a href="service-3.html">受託開発事業</a></li>
                <li><a href="service-4.html">SES事業</a></li>
                <li><a href="#">コンサル事業</a></li>
              </ul>
            </li>
            </li>
            <li><a href="recruit.html">採用情報</a></li>
            <li><a href="company.html">会社概要</a></li>
            <li><a href="mailto:info@prsholdings.co.jp">お問い合わせ</a></li>
            <li><a href="pravacy.html">プライバシポリシー</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <small class="copyright">© 2022 PRS HOLDINGS Co.,Ltd.</small>
  </footer>
  <script src="js/navi.js"></script>

</body>

</html>