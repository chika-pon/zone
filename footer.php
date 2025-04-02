<!-- ページ内遷移用 -->
<script type="text/javascript">
  $(function() {
    $('a[href^="#"]').click(function() {
      var speed = 200;
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      $("html, body").animate({
        scrollTop: position
      }, speed, "swing");
      return false;
    });
  });
</script>

<!-- PC時左に固定するコンテンツの高さを動的にする -->
<script>
  // .bz-pc__content 要素を取得
  const content = document.querySelector(".bz-pc__content");

  // ウィンドウの高さに基づいてスケールを調整する関数
  function adjustScale() {
    const windowHeight = window.innerHeight; // ウィンドウの高さを取得
    const contentHeight = content.offsetHeight; // コンテンツの高さを取得
    const paddingSpace = 20; // 上下の余白を設定

    // 上下余白を加えた調整後のコンテンツ高さを計算
    const adjustedContentHeight = contentHeight + paddingSpace * 2;

    // ウィンドウの高さが調整後のコンテンツ高さより小さい場合
    if (windowHeight < adjustedContentHeight) {
      const scaleRatio = windowHeight / adjustedContentHeight; // スケール比率を計算
      content.style.transform = `translateY(-50%) scale(${scaleRatio})`; // スケールと中央配置を適用
      content.style.paddingTop = `${paddingSpace}px`; // 上余白を設定
      content.style.paddingBottom = `${paddingSpace}px`; // 下余白を設定
    } else {
      // ウィンドウの高さが十分な場合、スケールをリセット
      content.style.transform = "translateY(-50%) scale(1)"; // 元のスケールと中央配置に戻す
      content.style.paddingTop = "0"; // 上余白をリセット
      content.style.paddingBottom = "0"; // 下余白をリセット
    }
  }

  // 初期実行：ページ読み込み時にスケールを調整
  adjustScale();

  // ウィンドウリサイズ時にスケールを再調整
  window.addEventListener("resize", adjustScale);
</script>

<!-- 追従ボタン設定 CTAボタンがあるところでは非表示-->
<script>
  $(document).ready(function() {
    const koteiBtn = $('.kotei-btn');

    function toggleKoteiBtn() {
      const scrollTop = $(window).scrollTop();
      const windowHeight = $(window).height();
      const footerOffsetTop = $('.bz-footer').offset().top;

      // footer表示範囲にボタンが入っているか
      const inFooterRange = scrollTop + windowHeight >= footerOffsetTop;

      // いずれかの .cta-exist が表示範囲にあるか
      let inCtaExistRange = false;
      $('.cta-exist').each(function() {
        const ctaExistOffsetTop = $(this).offset().top;
        if (scrollTop + windowHeight >= ctaExistOffsetTop && scrollTop <= ctaExistOffsetTop + $(this).height()) {
          inCtaExistRange = true;
          return false; // 見つかったらループを終了
        }
      });

      // 表示・非表示の判定
      if (inFooterRange || inCtaExistRange) {
        koteiBtn.removeClass('is-active'); // footerやいずれかのcta-existが見えている場合は非表示
      } else {
        koteiBtn.addClass('is-active'); // それ以外では表示
      }
    }

    // ページ読み込み時に表示・非表示を判定
    toggleKoteiBtn();

    // スクロールイベントで表示・非表示を判定
    $(window).on('scroll', function() {
      toggleKoteiBtn();
    });
  });
</script>

<!-- スクロールイベント用 -->
<script>
  function js_scroll() {
    $(".js-scroll").each(function() {
      var position = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height() / 1.1;
      if (scroll > position - windowHeight) {
        $(this).addClass("is-active");
      }
    });
  };
  window.onload = function() {
    js_scroll();
  }
  $(window).scroll(function() {
    js_scroll();
  });
</script>

<!-- 独自JS -->
<!-- 自動スライド（左に無限に流れる） -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const splideElement = document.querySelector("#splide01");

    if (!splideElement) return; // Splideがないページでは処理を実行しない

    const isMobile = window.matchMedia("(max-width: 768px)").matches;

    const splide01Options = {
      type: "loop", // スライドをループさせる
      arrows: false, // 矢印ボタンを非表示
      pagination: false, // ページネーションを非表示
      drag: false, // ドラッグ無効
      fixedWidth: "16rem", // スライドの幅
      gap: "-1rem",// スライド間の余白
      autoScroll: {
        speed: 0.5, // スマホ時は遅くする
        pauseOnHover: false, // カーソルが乗ってもスクロールを停止させない
      },
    };

    const splide01Instance = new Splide(splideElement, splide01Options);
    splide01Instance.mount(window.splide.Extensions);
  });
</script>

<!-- dateで翌日以降の平日のみを選択できるようにする -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const datePickers = document.querySelectorAll('input[type="date"]');

    datePickers.forEach(datePicker => {
      let lastSelectedDate = ""; // 🔹直前の値を保存
      let alertShown = false; // 🔹アラートを一度だけ表示するためのフラグ

      datePicker.addEventListener("change", (e) => {
        if (alertShown) {
          alertShown = false; // 🔹アラートが出た後はリセット
          return;
        }

        const selectedDate = e.target.value;
        if (selectedDate === lastSelectedDate) return; // 🔹直前と同じ値なら処理しない
        lastSelectedDate = selectedDate; // 🔹現在の値を保存

        const day = new Date(selectedDate).getDay(); // 0:日曜, 6:土曜

        if (day === 0 || day === 6) {
          alert("土日を選択することはできません。別の日を選んでください。");
          e.target.value = ""; // 入力をリセット
          lastSelectedDate = ""; // 🔹リセット時も記録をクリア
          alertShown = true; // 🔹アラートが出たことを記録
        }
      });

      // 今日以降の日付のみ選択可能にする
      const today = new Date().toISOString().split("T")[0];
      datePicker.setAttribute("min", today);
    });
  });
</script>

<!-- フォームの入力値を整形する 生年月日・卒業年-->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    // iPhone Safari の判定
    const isiOS = /iPhone|iPad|iPod/.test(navigator.userAgent);

    const birthdateInput = document.querySelector('input[name="birthdate"]');
    const graduationYearInput = document.querySelector('input[name="graduation-year"]');

    if (!isiOS) {
      // iPhone Safari **以外** ならスクリプトを実行
      if (birthdateInput) {
        birthdateInput.addEventListener("input", (e) => {
          let value = e.target.value.replace(/\D/g, ""); // 数字以外を削除
          if (value.length > 4) value = value.slice(0, 4) + "/" + value.slice(4);
          if (value.length > 7) value = value.slice(0, 7) + "/" + value.slice(7);
          e.target.value = value;
        });
      }

      if (graduationYearInput) {
        graduationYearInput.addEventListener("input", (e) => {
          let value = e.target.value.replace(/\D/g, ""); // 数字以外を削除
          if (value.length > 4) value = value.slice(0, 4) + "/" + value.slice(4, 6); // YYYY/MM の形にする
          e.target.value = value;
        });
      }
    } else {
      // iPhone Safari の場合は pattern バリデーションを削除
      if (birthdateInput) birthdateInput.removeAttribute("pattern");
      if (graduationYearInput) graduationYearInput.removeAttribute("pattern");
    }
  });
</script>

<!-- サポート選手の声　アコーディオン -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const button = document.querySelector('.voice__button');
    const hiddenSection = document.querySelector('.voice-hidden');

    // ボタンがクリックされた時
    button.addEventListener("click", function() {

      // 'voice-open' クラスを明示的に追加
      hiddenSection.classList.add('voice-open');

      // voice-open が付与されたらボタンを非表示に
      button.style.display = 'none';
    });
  });
</script>

<!-- メッサージ　アコーディオン -->
<script>
  const buttons = document.querySelectorAll('.card__open');

  buttons.forEach(button => {
    button.addEventListener('click', function() {
      const card = button.closest('.card'); // 現在のカード要素を取得
      const contentOpen = card.querySelector('.card__content'); // このカードのcontent
      const contentHide = card.querySelector('.card__content-hide'); // このカードのhidden content

      contentOpen.classList.toggle('is-open'); // is-openクラスを切り替える
      contentHide.classList.toggle('is-open'); // is-openクラスを切り替える
    });
  });
</script>

<!-- Safariのみに使用できるクラス -->
<script>
  function isSafari() {
    var ua = navigator.userAgent.toLowerCase();
    return ua.indexOf('safari') > -1 && ua.indexOf('chrome') === -1 && ua.indexOf('firefox') === -1;
  }

  if (isSafari()) {
    document.body.classList.add("safari");
  }
</script>

<!-- Firefoxのみに使用できるクラス -->
<script>
  function isFirefox() {
    return navigator.userAgent.toLowerCase().includes("firefox");
  }

  if (isFirefox()) {
    document.body.classList.add("firefox");
  }
</script>

<!-- Splide script 読み込み -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<!-- Splide auto-scroll 読み込み -->
<script
  src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js">
</script>
</body>

</html>