const swiper = new Swiper(".swiper", {
  loop: true, // ループ有効
  slidesPerView: 2, // 一度に表示する枚数
  speed: 10000, // ループの時間
  allowTouchMove: false, // スワイプ無効
  autoplay: {
    delay: 0, // 途切れなくループ
  },
});