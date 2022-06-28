window.addEventListener("load", function () {
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





var swiper = new Swiper(".fadeSwiper", {
  centeredSlides: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  effect: "fade", //フェードのエフェクト
  autoplay: {
    delay: 4000, //４秒後に次の画像へ
    disableOnInteraction: false //ユーザー操作後に自動再生を再開する
  },
  speed: 2000, //２秒かけながら次の画像へ移動
  allowTouchMove: false, //マウスでのスワイプを禁止
});
