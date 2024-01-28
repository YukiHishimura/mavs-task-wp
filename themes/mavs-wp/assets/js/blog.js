// ----------SP ボタンクリックでカテゴリー展開--------------------
const catEl = document.querySelector('#category');
const catBtn = document.querySelector('#category__btn');
let listOpened = false;

catBtn.addEventListener('click', function() {
    this.style.pointerEvents = "none";

    if (listOpened) {
        catEl.classList.remove('opened');
        catBtn.classList.remove('opened');
        listOpened = false;
    } else {
        catEl.classList.add('opened');
        catBtn.classList.add('opened');
        listOpened = true;
    }

    setTimeout(function() {
        catBtn.style.pointerEvents = "auto";
    }, 400);
});

// ウィンドウサイズ変更でリセット
window.addEventListener('resize', function() {
    catEl.classList.remove('opened');
    catBtn.classList.remove('opened');
    listOpened = false;
});