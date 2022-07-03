
const value = document.getElementsByClassName('value')
for (let i = 0; i < value.length; i++)
{
  // valueクラスのテキストを取得
  const text = value[i].innerText;
  // valueクラスの親要素に取得しwitdthを指定
  value[i].parentNode.style.width = text;
}