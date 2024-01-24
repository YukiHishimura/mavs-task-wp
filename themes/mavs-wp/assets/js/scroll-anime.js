// ----------スクロールで要素を出現させる--------------------
const elems = document.querySelectorAll('.scrollTrigger');

function showEl() {
    const scroll = window.scrollY;
    const bodyHeight = document.body.clientHeight;
    const windowHeight = window.innerHeight;
    const bottomPoint = bodyHeight - windowHeight;


    elems.forEach(function(elem, i) {
        let elemPos = elem.getBoundingClientRect().top + scroll;

        if (windowHeight * 0.6 + scroll >= elemPos ||
            scroll >= bottomPoint) {
            elem.classList.add('show');
        }
    });
}
// 初回実行
showEl();

// 画面がスクロールされたら実行
window.addEventListener('scroll', function() {
   showEl(); 
});


