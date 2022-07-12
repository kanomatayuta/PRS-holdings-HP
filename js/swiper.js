const interviewSwiper = new Swiper(".interviewswiper", {
  loop: true,
  a11y: "none", //アクセシビリティ
  breakpoints: {
    0: {// 0x以上の場合
      slidesPerView: 1,// 横幅
      spaceBetween: 30,// 隣同士の余白
    },
  },
  // ページネーション
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  // 前後の矢印
  navigation: {
    nextEl: ".swiper-button-next",
  },
});

const workSwiper = new Swiper(".workswiper", {
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
  }
})

var swiper = new Swiper(".fadeSwiper", {
  loop: true,
  effect: 'fade',
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  speed: 2000,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  }
});


var serviceSwaiper = new Swiper('.swiper-service', {
  spaceBetween: 30,// 隣同士の余白
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true
  }
});