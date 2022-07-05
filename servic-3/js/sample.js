window.addEventListener("load", function () {
  const swiper = new Swiper(".swiper", {
    loop: true, // ループ有効
    speed: 10000, // ループの時間
    allowTouchMove: false, // スワイプ無効
    autoplay: {
      delay: 0, // 途切れなくループ
      disableOnInteraction: false, //ユーザーがドラッグなどの操作をしても自動再生が止まらない
    },
    breakpoints: {
      // スライドの表示枚数：600px以上の場合
      0: {
        slidesPerView: 1,// 一度に表示する枚数
      },
      // スライドの表示枚数：768px以上の場合
      768: {
        slidesPerView: 2,
      },
    },
  });

  /*----------------------------
  * hamburger-navの実装 SP版
  *----------------------------*/
  const hamburgerBtn = document.getElementById('js-hamburger');
  const drawerNav = document.getElementById('js-drawer');
  let flag = false;

  hamburgerBtn.addEventListener('click', function () {
    if (!flag)
    {
      drawerNav.classList.add('drawer--active');
      hamburgerBtn.classList.add('btn--active');
      flag = true;
    } else
    {
      drawerNav.classList.remove('drawer--active');
      hamburgerBtn.classList.remove('btn--active');
      flag = false;
    }
  });
});