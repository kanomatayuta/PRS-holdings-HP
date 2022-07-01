// 質問タブを変数に入れる
const tab = document.querySelectorAll(".accordion__icon");
// 回答コンテンツを変数に入れる
const contents = document.querySelectorAll(".accordion__content");

// 繰り返し(ループ)
// item初期値が0からtab.length(.accordion__tab-icon)の数だけ繰り返す。
for (let count = 0; count < tab.length; count++)
{
  // 質問タブをクリックしたら実行
  tab[count].addEventListener("click", function () {
    // クリックした質問タブのactiveクラスを付け替える
    this.classList.toggle("active");
    // クリックした質問タブのindex番号の回答コンテンツのactiveクラスを付け替える
    contents[count].classList.toggle("active");
  });
}

const swiper = new Swiper(".swiper", {
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