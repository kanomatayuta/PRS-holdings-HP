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
