// bar graph　棒グラフ
const barValue = document.getElementsByClassName('value')
for (let i = 0; i < barValue.length; i++)
{
  // valueクラスのテキストを取得
  const text = barValue[i].innerText;
  // valueクラスの親要素に取得しwitdthを指定
  barValue[i].parentNode.style.width = text;
}

