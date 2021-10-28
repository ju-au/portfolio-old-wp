// formの入力チェック
const submit = document.getElementById('submit');
submit.addEventListener('click', e => {
  console.log(e);
  const blankName = document.getElementById("blankName");
  const blankEmail = document.getElementById("blankEmail");
  const blankMessage = document.getElementById("blankMessage");
  const formName = document.query.queryName.value;
  const formEmail = document.query.queryEmail.value;
  const formMessage = document.query.queryMessage.value;
  //formのそれぞれの項目に対して、関数blankCheckを実行
  let checkName = blankCheck(blankName, formName);
  let checkEmail = blankCheck(blankEmail, formEmail);
  let checkMessage = blankCheck(blankMessage, formMessage);
  //formの全ての項目に入力されていなければ、ページ遷移を止める
  if (!checkName || !checkEmail || !checkMessage) {
  e.preventDefault();
  };
});
//関数blankCheck
function blankCheck(target, form) {
  if (form == "") {
    target.classList.add("showBlankMessage");
    return false;
  };
  target.classList.remove("showBlankMessage");
  return true;
};



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



  // //スクロールアニメーションの設定
  // let window_h = $(window).height();
  // //スクロールイベント
  // $(window).on("scroll", function () {
  //   //スクロールの位置を取得する
  //   let scroll_top = $(window).scrollTop();
  //   $(".scroll").each(function () {
  //     //各box要素のtopの位置を取得する
  //     let elem_pos = $(this).offset().top;
  //     //どのタイミングでフェードインさせるか
  //     if (scroll_top >= elem_pos - window_h +100) {
  //       $(this).addClass("show");　//特定の位置を超えたらクラスを追加
  //     }
  //   });
  // });



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