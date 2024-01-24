// ----------スクロールで要素を出現させる--------------------
const aboutSec = document.querySelector('#about');
const serviceSec = document.querySelector('#service');
const blogSec = document.querySelector('#blog');
const memberSec = document.querySelector('#member');
const recruitSec = document.querySelector('#recruit');
const newsSec = document.querySelector('#news');

const elems = document.querySelectorAll('.scrollTrigger');

function showEl() {
    const scroll = window.scrollY;
    const windowHeight = window.innerHeight;

    elems.forEach(function(elem, i) {
        let elemPos = elem.getBoundingClientRect().top + scroll;

        if (windowHeight * 0.6 + scroll >= elemPos) {
            elem.classList.add('show');
        // } else {
        //     elem.classList.remove('show');
        }
    });
}
// 初回実行
showEl();

// 画面がスクロールされたら実行
window.addEventListener('scroll', function() {
   showEl(); 
});


