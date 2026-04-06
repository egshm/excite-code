const header = document.getElementById('js-header');

// スライダー（Swiper）
//--------------------------------------------

// ファーストビューの画像を縦方向にループスライド
const fvSlider = new Swiper("#js-fvSlider", {
  direction: "vertical",
  loop: true,
  slidesPerView: 1,
  speed: 6000,
  allowTouchMove: false,
  autoplay: {
    delay: 0,
  },
});


// ハンバーガーメニュー
//--------------------------------------------

// ヘッダーロゴ
const logo = document.getElementById('js-logo');
// ハンバーガーメニューボタン
const hamburger = document.getElementById('js-hamburger');
// スマホ用メニュー
const spmenu = document.querySelector('.js-spmenu');
// 各メニューリンク
const spmenuLinks = document.querySelectorAll('.js-spmenuLink');
const overlay = document.getElementById('js-overlay');

// ハンバーガーメニューボタンがクリックされた時
hamburger.addEventListener('click', function() {

  const expanded = this.getAttribute('aria-expanded');

  // メニューが開くとき
  if (expanded === 'false') {
    openHamburger();
  }
  // メニューが閉じるとき
  else {
    closeHamburger();
  }
});

// ウィンドウのリサイズ時
window.addEventListener("resize", function() {
  // PC表示であればハンバーガーメニューを閉じる
  if (this.matchMedia('(min-width: 768px').matches) {
    closeHamburger();
  }
});

// スマホ用メニューリンクがクリックされた時
spmenuLinks.forEach(link => {
  link.addEventListener('click', function() {
    // ハンバーガーメニューを閉じる
    closeHamburger();
    hamburger.focus();
  });
});

// ハンバーガーメニューを開く
function openHamburger() {
  header.classList.add('is-menu-open');
  hamburger.setAttribute('aria-expanded', 'true');
  spmenu.setAttribute('aria-hidden', 'false');
  logo.setAttribute('src', logo.dataset.logoW);
  overlay.classList.add('is-active');
}

// ハンバーガーメニューを閉じる
function closeHamburger() {
  header.classList.remove('is-menu-open');
  hamburger.setAttribute('aria-expanded', 'false');
  spmenu.setAttribute('aria-hidden', 'true');
  logo.setAttribute('src', logo.dataset.logoB);
  overlay.classList.remove('is-active');
}


// 全img要素の読込み完了を監視
//--------------------------------------------
function onAllImagesLoaded(callback) {
  const images = document.querySelectorAll("img");
  let loadedCount = 0;
  let isCalled = false;

  // callback の重複実行を防ぐ
  function done() {
    if (!isCalled) {
      isCalled = true;
      callback();
    }
  }

  // 画像が無い場合は即実行
  if (images.length === 0) {
    done();
    return;
  }

  images.forEach(image => {
    // すでに読込みが完了している場合
    if (image.complete) {
      loadedCount++;
      if (loadedCount === images.length) done();
      return;
    }

    // 読込みが完了した場合
    image.addEventListener('load', function() {
      loadedCount++;
      if (loadedCount === images.length) done();
    });

    // 読込みエラーの場合
    image.addEventListener('error', function() {
      loadedCount++;
      if (loadedCount === images.length) done();
    });
  });
}


// スムーススクロール
//--------------------------------------------

// スクロールオフセット調整値（px）
const SCROLL_OFFSET_ADJUST = 20;

// ページ遷移後のスクロール待機時間（ms）
const SCROLL_DELAY_TIME = 300;

document.querySelectorAll('a[href*="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();

    const href = anchor.getAttribute('href');

    // ページ内スクロール
    if (href.startsWith('#')) {

      // 遅延読込み画像を強制的に読込むように設定
      document.querySelectorAll('img[loading="lazy"]').forEach(lazyImage => {
        lazyImage.loading = "eager";
      });

      // 画像の読み込みがすべて完了したら処理を継続
      onAllImagesLoaded(function() {

        const target = document.querySelector(
          href === '#' || href === '' ? 'html' : href
        );
        const offset = logo.offsetHeight + SCROLL_OFFSET_ADJUST;
        const position = target.getBoundingClientRect().top + window.pageYOffset;

        // スムーススクロール
        window.scrollTo({
          top: position - offset,
          behavior: 'smooth'
        });

        // URLにハッシュを追加
        history.pushState(null, '', href);
      });
    }
    // ページ外へ遷移
    else {
      // 移動先ページ
      const destPage = anchor.href.split('#')[0];
      // 移動先ハッシュ
      const destHash = anchor.href.split('#')[1];

      // ハッシュを一時保存
      sessionStorage.setItem('scrollTarget', destHash);

      // 移動先ページに遷移
      window.location.href = destPage;
    }
  });
});

// ページ外スムーススクロール
window.addEventListener('load', function() {

  // スクロール先のハッシュ値を取得
  const urlHash = sessionStorage.getItem('scrollTarget');

  if (urlHash) {
    // 遅延読込み画像を強制的に読込むように設定
    document.querySelectorAll('img[loading="lazy"]').forEach(lazyImage => {
      lazyImage.loading = "eager";
    });

    // 画像の読み込みがすべて完了したら処理を継続
    onAllImagesLoaded(function() {

      // ページの先頭に移動
      window.scrollTo(0, 0);
      // 保存情報を破棄
      sessionStorage.removeItem('scrollTarget');
      // 移動先を取得
      const target = document.querySelector('#' + urlHash);

      if (target) {
        const offset = logo.offsetHeight + SCROLL_OFFSET_ADJUST;
        const position = target.getBoundingClientRect().top + window.pageYOffset;

        setTimeout(function(){
          // 移動先へスムーススクロール
          window.scrollTo({
            top: position - offset,
            behavior: 'smooth'
          });
          // ハッシュを再設定
          history.replaceState(null, '', window.location.pathname + '#' + urlHash);
        }, SCROLL_DELAY_TIME);
      }
    });
  }
});


// 流れるテキスト
//--------------------------------------------

const flowText = document.getElementById('js-flowText');

if (flowText) {
  // 初期化
  setFlowTextEndPos();
  // ウィンドウのリサイズ時
  window.addEventListener("resize", setFlowTextEndPos);
  
  // 流れるテキストの終点を、テキスト幅に応じて動的に設定する
  function setFlowTextEndPos() {
  
    // テキスト幅およびビューポート幅を取得
    const textWidth = flowText.scrollWidth;
    const viewportWidth = window.innerWidth;
  
    // テキストがビューポート幅におさまる場合
    if (textWidth < viewportWidth) {
      flowText.style.setProperty('--end_pos', '-100%');
    }
    // テキストがビューポート幅におさまらない場合
    else {
      const offset = 10;
      const endPos = ((textWidth / viewportWidth) * 100) + offset;
      flowText.style.setProperty('--end_pos', `-${endPos}%`);
    }
  }
}


// ふわっと表示
//--------------------------------------------

$(".js-inview").on("inview", function (event, isInView) {
  if (isInView) {
    $(this).stop().addClass("is-show");
  }
});

/* FVを背景画像→タイトルの順に時間差で表示 */
$('#js-fv').on('inview', function(event, isInView) {
  const DELAY_TIME = 800;

  if (isInView) {
    $(this).find('#js-fvImg').stop().addClass('is-show');
    setTimeout(() => {
      $(this).find('#js-fvTitle').stop().addClass('is-show');
    }, DELAY_TIME);
  }
});


// パンくずリスト
//--------------------------------------------

document.addEventListener('DOMContentLoaded', function() {
  const currentItem = document.querySelector('.current-item');

  if (!currentItem) return;

  currentItem.classList.add('js-limitedText');
  currentItem.setAttribute('data-limit-sp', '10');

  // 文字数制限
  applyTextLimit();
});


// 文字数制限
//--------------------------------------------

// 初期化
applyTextLimit();

// SP・PC切り替え時
window.matchMedia('(min-width: 768px)').addEventListener('change', applyTextLimit);

function applyTextLimit() {
  const elements = document.querySelectorAll('.js-limitedText');

  elements.forEach(el => {
    // 文字数上限
    let limit;
    // テキスト原文
    const original = el.dataset.original ?? el.innerText;

    // テキスト原文を退避
    el.dataset.original = original;

    // 文字数上限を取得
    if (window.matchMedia('(min-width: 768px)').matches) {
      // PC時
      limit = (el.dataset.limitPc !== undefined)
        ? Number(el.dataset.limitPc)
        : Number(el.dataset.limitSp);
    } else {
      // SP時
      limit = (el.dataset.limitSp !== undefined)
        ? Number(el.dataset.limitSp)
        : Number(el.dataset.limitPc);
    }

    if (!limit) return;

    // テキスト文字数が上限を超えるなら、超えた分を省略して三点リーダーを表示
    el.innerText =
      original.length > limit
        ? original.substring(0, limit) + '...'
        : original;
  });
}


// エントリーフォーム（Contact Form 7）
//--------------------------------------------

if (document.querySelector('.wpcf7')) {
  // 入力フォームエリア
  const formArea = document.querySelector("#js-formArea");
  // 入力内容確認エリア
  const confirmArea = document.querySelector("#js-confirmArea");
  // 入力フィールド
  const formInputs = document.querySelectorAll('#js-formArea input, #js-formArea select, #js-formArea textarea');
  // 必須項目
  const requiredInputs = document.querySelectorAll('[aria-required="true"], #acceptance');
  // セレクトボタン
  const selectBtns = document.querySelectorAll('.wpcf7-select');
  // 確認ボタン
  const confirmBtn = document.querySelector('#js-confirmBtn');
  const confirmBtnWrap = document.querySelector('#js-confirmBtnWrap');
  // 戻るボタン
  const backBtn = document.querySelector('#js-backBtn');


  // セレクトボタンの初期値を取得し、確認画面に反映
  selectBtns.forEach(btn => {
    const id = btn.id;
    if (!id) return;

    const confirm = document.querySelector(`#js-confirm-${id}`);
    if (!confirm) return;

    confirm.textContent = btn.value;
  });


  // 各入力フィールドから値を取得し、確認画面に反映
  // ※現時点では確認画面に反映すべきラジオボタン・チェックボックスが無いため、これらには対応していない。
  formInputs.forEach(input => {
    input.addEventListener('change', function () {
      const id = this.id;
      if (!id) return;

      const confirm = document.querySelector(`#js-confirm-${id}`);
      if (!confirm) return;

      confirm.textContent = this.value;
    });
  });


  // 必須項目が変更された場合の処理
  requiredInputs.forEach(input => {
    input.addEventListener('input', () => {
      let isDisabled = false;

      // 必須項目がすべて入力されているかチェック
      for (const input of requiredInputs) {
        const type = input.getAttribute('type');

        if (((type === 'checkbox') && !(input.checked)) || !(input.value)) {
          isDisabled = true;
          confirmBtn.setAttribute('tabindex', '-1');
          confirmBtnWrap.classList.remove('is-active');
          break;
        }
      }

      // 確認ボタンを有効化または無効化
      if (!isDisabled) {
        confirmBtn.setAttribute('tabindex', '0');
        confirmBtnWrap.classList.add('is-active');
      }
    });
  });


  // 確認ボタンをクリックしたとき
  confirmBtn.addEventListener('click', () => {
    // 入力内容確認エリアを表示して入力フォームを非表示
    formArea.style.display = 'none';
    confirmArea.style.display = 'block';

    // 入力内容確認エリアの位置まで移動
    window.scrollTo({
      top: confirmArea.getBoundingClientRect().top + window.pageYOffset - logo.offsetHeight - SCROLL_OFFSET_ADJUST
    });
  });


  // 戻るボタンをクリックしたとき
  backBtn.addEventListener('click', () => {
    // 入力フォームを表示して入力内容確認エリアを非表示
    formArea.style.display = 'block';
    confirmArea.style.display = 'none';

    // 入力フォームの位置まで移動
    window.scrollTo({
      top: formArea.getBoundingClientRect().top + window.pageYOffset - logo.offsetHeight - SCROLL_OFFSET_ADJUST
    });
  });


  // 送信が完了したとき
  document.addEventListener('wpcf7mailsent', function(event) {
    // 送信完了メッセージを非表示に設定
    document.querySelectorAll('.wpcf7-response-output').forEach(function(output) {
      output.style.display = 'none';
    });
    // 送信完了画面に遷移
    location = '/excite-code/contact/complete';
  }, false);
}
