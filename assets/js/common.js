// JavaScript Document//スクロールした際の動きを関数でまとめる

//FAQアコーディオン
$(function () {
  $(".js-accordion-title").on("click", function () {
    $(this).next().slideToggle(200);
    $(this).toggleClass("open", 200);
  });
});


// 固定リンク_フッター手前でストップ
function PageTopAnime() {

  var scroll = $(window).scrollTop(); //スクロール値を取得
  if (scroll >= 0) { //スクロールしたら
    $('#fixed-link').removeClass('DownMove'); // DownMoveというクラス名を除去して
    $('#fixed-link').addClass('UpMove'); // UpMoveというクラス名を追加して出現
  } else { //それ以外は
    if ($('#fixed-link').hasClass('UpMove')) { //UpMoveというクラス名が既に付与されていたら
      $('#fixed-link').removeClass('UpMove'); //  UpMoveというクラス名を除去し
      $('#fixed-link').addClass('DownMove'); // DownMoveというクラス名を追加して非表示
    }
  }

  var wH = window.innerHeight; //画面の高さを取得
  var footerPos = $('#footer').offset().top; //footerの位置を取得
  if (scroll + wH >= (footerPos)) {
    // var pos = (scroll+wH) - footerPos //スクロールの値＋画面の高さからfooterの位置を取得し
    $('#fixed-link').css('bottom', footerPos); //#page-topに上記の値をCSSのbottomに直接指定してフッター手前で止まるようにする
  } else { //それ以外は
    if ($('#fixed-link').hasClass('UpMove')) { //UpMoveというクラス名がついていたら
      $('#fixed-link').css('bottom', '0');
    }
  }
}

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
  PageTopAnime(); /* スクロールした際の動きの関数を呼ぶ*/
});


//プライバシーバリデーション位置
$(function () {
  $('.checkbox-privacy').parent().parent().addClass('privacy-area');
});


// リンク先にcheckedを付与(ページを読み込んだ時チェックをつける)
$(document).ready(function () {
  const urlParams = new URLSearchParams(window.location.search);
  const checks = urlParams.getAll('check');
  if (checks.length !== 0 ) {
    checks.forEach(function (check) {
      $('#' + check).prop('checked', true);
      
      if ($('[id=tab01]').prop('checked')) {
        $('#tab-contens01').addClass('show');
        $('#tab-contens02').removeClass('show');
        $('#tab01').addClass('active');
        $('#tab02').removeClass('active');
      } else if ($('[id=tab02]').prop('checked')) {
        $('#tab-contens02').addClass('show');
        $('#tab-contens01').removeClass('show');
        $('#tab02').addClass('active');
        $('#tab01').removeClass('active');
      } 
    });
  } else {
        $('#tab-contens01').addClass('show');
        $('#tab-contens02').removeClass('show');
        $('#tab01').addClass('active');
        $('#tab02').removeClass('active');
  }
  
  TabChecked()
});


//フォームタブの条件分岐
// タブ
const tabList = document.querySelectorAll('.tab-list-item');
// タブコンテンツ
const tabContent = document.querySelectorAll('.tab-contents-item');

//DOMが読み込み終わったら
document.addEventListener('DOMContentLoaded', function () {
  // タブに対してクリックイベントを適用
  for (let i = 0; i < tabList.length; i++) {
    tabList[i].addEventListener('click', tabSwitch);
  }
  // タブをクリックすると実行する関数
  function tabSwitch() {
    // activeクラスを削除
    let removeTarget = document.querySelectorAll('.active')[0]
    removeTarget.classList.remove('active');
    // クリックしたタブにactiveクラスを付与    
    this.classList.add('active');
    // showクラスを削除
    document.querySelectorAll('.show')[0].classList.remove('show');
    // タブを配列風オブジェクトとして定義
    const aryTabs = Array.prototype.slice.call(tabList);
    // クリックしたタブの配列番号を取得     
    const index = aryTabs.indexOf(this);
    // クリックしたタブと同じ配列番号のタブコンテンツにshowクラスを付与    
    tabContent[index].classList.add('show');
    if ($('#tab01').hasClass('active')) {
      $('#tab01').prop('checked', true);
      $('#tab02').prop('checked', false);
    } else {
      $('#tab01').prop('checked', false);
      $('#tab02').prop('checked', true);
    }
    TabChecked();
  }
});


//tab
function TabChecked() {
  if ($('[id=tab01]').prop('checked')) {
    $('.footer_nav_li01').addClass('current');
    $('.footer_nav_li02').removeClass('current');
  } else if($('[id=tab02]').prop('checked')) {
      $('.footer_nav_li02').addClass('current');
      $('.footer_nav_li01').removeClass('current');
  }
  }




