const num = 27
console.log(num)

// スライドメニュー
const menuBtn = document.querySelector('#menuBtn');
const menuBtnTop = document.querySelector('#menuBtn__top');
const menuBtnMiddle = document.querySelector('#menuBtn__middle');
const menuBtnBottom = document.querySelector('#menuBtn__bottom');
const gnav = document.querySelector('#gnav');
const headerImg = document.querySelector('#header__img');
let menuOpened = false;

// ボタンをクリックできるように戻す関数
function pointerEventsAuto() {
    menuBtn.style.pointerEvents = "auto";
}

// スクロールを停止する関数
function disableScroll(e) {
    e.preventDefault();
}

// クリックでクラス付け外し
menuBtn.addEventListener('click', function() {
    // アニメーション中は、ボタンをクリックできないようにする
    this.style.pointerEvents = "none";

    // メニューが展開済みだったら
    if (menuOpened) {
        gnav.classList.remove('translateNav');
        menuBtnTop.classList.remove('rotateTop');
        menuBtnMiddle.classList.remove('hideMiddle');
        menuBtnBottom.classList.remove('rotateBottom');
        headerImg.classList.remove('changeLogoColor');
        document.removeEventListener('touchmove', disableScroll, { passive: false });
        document.removeEventListener('mousewheel', disableScroll, { passive: false });
        menuOpened = false;
    } else {
        // メニューが展開されていなかったら
        gnav.classList.add('translateNav');
        menuBtnTop.classList.add('rotateTop');
        menuBtnMiddle.classList.add('hideMiddle');
        menuBtnBottom.classList.add('rotateBottom');
        headerImg.classList.add('changeLogoColor');
        document.addEventListener('touchmove', disableScroll, { passive: false });
        document.addEventListener('mousewheel', disableScroll, { passive: false });
        menuOpened = true;
    }

    setTimeout(pointerEventsAuto, 400); 
});