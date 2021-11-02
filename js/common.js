//スクロールアニメーション
const targets = document.querySelectorAll('.scroll');
const option = {
  rootMargin: '-100px'
};
const observer = new IntersectionObserver(callback, option);
targets.forEach(target => observer.observe(target));
function callback(entries) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('show');
    };
  });
};

// jQuery
$(function () {

  //スムーススクロール
  $('a[href^="#"]').click(function () {
    let speed = 1000;
    let href = $(this).attr("href");
    let target = $(href == "#" || href == "" ? 'html' : href);
    let position = target.offset().top;
    $('body,html').animate({ scrollTop: position }, speed, 'swing');
    return false;
  });



  //hoverアニメーションの設定
  $('.works-item').hover(function () {
    $(this).children(".works-link").addClass("show");
    $(this).children(".works-text").addClass("show-tab");
    $(this).delay(100).queue(function () {
      $(this).children(".works-text").addClass("show");
    });
  });
})



// confirmページのリンククリック時の警告
function confirmFunction() {
  //確認ダイアログを表示する
  let conf = confirm("Topページに移動します。ページを移動すると、ご入力いただいた内容は消えてしまいます。よろしいですか？");
  return conf;
}