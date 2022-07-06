
const value = document.getElementsByClassName('value')
for (let i = 0; i < value.length; i++)
{
  // valueクラスのテキストを取得
  const text = value[i].innerText;
  // valueクラスの親要素に取得しwitdthを指定
  value[i].parentNode.style.width = text;
}

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


