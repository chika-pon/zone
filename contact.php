<?php
session_start();  // セッション開始

// トークン生成
if (empty($_SESSION['token'])) {
  $_SESSION['token'] = bin2hex(random_bytes(32));
}

require 'header.php';
?>

<div class="bz">
  <img src="assets/img/pc-bg-left.png" alt="" class="pc-bg-left" />
  <img src="assets/img/pc-bg-right.png" alt="" class="pc-bg-right" />
  <h2 class="pc-logo__wrapper">
    <a href="./">
      <img src="assets/img/pc-logo.png" alt="xxx" class="pc-logo" />
    </a>
  </h2>

  <!-- PC部分 -->
  <div class="bz-pc pc">
    <!-- bz-pc__contentはデバイスの高さによって縮小される -->
    <div class="bz-pc__content">
      <div class="bz-pc__box">
        <h2>
          <img src="assets/img/pc-left.png" class="pc01"
            alt="新卒・中途・学生インターン 一緒に働ける営業職積極採用中! No.01 未経験大歓迎 元業界日本一の会社出身のメンバーが０から教えます No.02 平均月収50万円 業界トップクラス! 入社半年以内の 社員給与額 No.03 一生物の営業スキル 急成長中の業界だからこそ得られる" />
        </h2>
        <div class="pc-btn01">
          <p class="cta__text cta__text-white">まずは<span>60</span>分で超集中状態を体感</p>
          <a href="contact.php" class="cta__button01">
            <img src="assets/img/cta-button01.png" class="cta__entry" alt="無料体験セッションを受ける" width="368" height="96"
              decoding="async" loading="lazy" />
          </a>
        </div>
        </a>
      </div>
    </div>
  </div>

  <!-- SP部分 -->
  <div class="bz-page contact-page">
    <main class="bz-main">
      <div class="bz-c01">
        <!-- <h1>
          <a href="./index.php">
            <img src="./assets/img/sp-logo.png" alt="ゾーンメンタルコーチング" width="414" height="52" decoding="async" />
          </a>
        </h1> -->
      </div>

      <section class="contact cta-exist" id="contact">
        <div class="contact__inner inner">
          <div class="contact__box">
            <h1>
              <a href="./index.php">
                <img src="./assets/img/sp-logo02.png" alt="ゾーンメンタルコーチング" width="414" height="52" decoding="async" />
              </a>
            </h1>
            <h3 class="contact__sub-title">60分無料体験セッション</h3>
            <h2 class="contact__title second-font">お申し込み</h2>
            <img src="assets/img/contact01.jpg" alt="女性がパソコンの画面を見て話している様子" width="317" height="212" loading="lazy"
              decoding="async" class="contact__image" />

            <form id="mail_form" class="c-form" action="./functions/mail-send.php" method="post">

              <?php
              /*
<input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>" />
*/
              ?>


              <div class="bz-contact__form-body">
                <!-- お名前 -->
                <div class="c-form-item">
                  <div class="c-form-item__ttl">
                    <p>お名前</p>
                    <span class="required">必須</span>
                  </div>
                  <input type="text" class="c-input" maxlength="30" name="name" placeholder="田中 太郎" required />
                </div>

                <!-- ふりがな -->
                <div class="c-form-item">
                  <div class="c-form-item__ttl">
                    <p>ふりがな</p>
                    <span class="required">必須</span>
                  </div>
                  <input type="text" class="c-input" maxlength="30" name="furigana" placeholder="たなか たろう" required />
                </div>

                <!-- メールアドレス -->
                <div class="c-form-item">
                  <div class="c-form-item__ttl">
                    <p>メールアドレス</p>
                    <span class="required">必須</span>
                  </div>
                  <input type="email" class="c-input" maxlength="256" name="mail"
                    placeholder="zone-coaching@example.com" required />
                </div>


                <!-- 電話番号 -->
                <div class="c-form-item">
                  <div class="c-form-item__ttl">
                    <p>お電話番号</p>
                    <span class="required">必須</span>
                  </div>
                  <input type="tel" class="c-input" name="phone" placeholder="090-123-4567"
                    pattern="^\d{2,4}-?\d{2,4}-?\d{4}$" required />
                </div>

                <!-- 住所 -->
                <!-- <div class="c-form-item">
                  <div class="c-form-item__ttl">
                    <p>ご住所</p>
                    <span class="required">必須</span>
                  </div>
                  <input type="text" class="c-input" name="apress" placeholder="東京都杉並区高円寺南4-12-1" required />
                </div> -->

                <!-- スポーツの種目名 -->
                <div class="c-form-item">
                  <div class="c-form-item__ttl">
                    <p>スポーツの種目名</p>
                    <span class="required">必須</span>
                  </div>
                  <input type="text" class="c-input" name="university" placeholder="サッカー" required />
                </div>

                <!-- ご希望日時（第一希望） -->
                <div class="bz-contact__form-item bz-contact__form-item--02 c-form-item">
                  <div class="c-form-item__label">
                    <div class="c-form-item__ttl c-form-item__ttl--02">
                      <p>ご希望日時（第一希望））</p>
                      <span class="required">必須</span>
                    </div>
                  </div>
                  <div class="c-form-item__label-wrap">
                    <div class="c-form-item__label-wrap-inner">
                      <div class="c-select">
                        <input type="date" class="c-input c-input--flex" name="kibouday1" id="datePicker1" min=""
                          required>
                      </div>
                    </div>
                    <div class="c-form-item__label-wrap-inner">
                      <div class="c-form-item__select c-select">
                        <select name="kiboutime1" required class="c-input c-input--flex">
                          <option value="14:00">14:00</option>
                          <option value="15:00">15:00</option>
                          <option value="16:00">16:00</option>
                          <option value="17:00">17:00</option>
                          <option value="18:00">18:00</option>
                          <option value="19:00">19:00</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- ご希望日時（第二希望） -->
                <div class="bz-contact__form-item bz-contact__form-item--02 c-form-item">
                  <div class="c-form-item__label">
                    <div class="c-form-item__ttl c-form-item__ttl--02">
                      <p>ご希望日時（第二希望）</p>
                      <span class="required">必須</span>
                    </div>
                  </div>
                  <div class="c-form-item__label-wrap">
                    <div class="c-form-item__label-wrap-inner">
                      <div class="c-select">
                        <input type="date" class="c-input c-input--flex" name="kibouday2" id="datePicker2" min=""
                          required>
                      </div>
                    </div>
                    <div class="c-form-item__label-wrap-inner">
                      <div class="c-form-item__celect c-select">
                        <select name="kiboutime2" required class="c-input c-input--flex">
                          <option value="14:00">14:00</option>
                          <option value="15:00">15:00</option>
                          <option value="16:00">16:00</option>
                          <option value="17:00">17:00</option>
                          <option value="18:00">18:00</option>
                          <option value="19:00">19:00</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- ご予約動機 -->
                <div class="bz-contact__form-item bz-contact__form-item--02 c-form-item">
                  <div class="c-form-item">
                    <div class="c-form-item__ttl c-form-item__ttl--02">
                      <span class="required">必須</span>
                      <p>ご予約動機</p>
                    </div>
                    <textarea class="c-input c-message" maxlength="256" name="message"
                      placeholder="記入例）サッカー部の高１です。
本番で緊張しすぎてチームの足を引っ張ってしまっています。
体験セッション希望です。"
                      required data-id=""></textarea>
                  </div>
                </div>

                <!-- 送信ボタン -->
                <div class="bz-contact__form-btn">
                  <button type="submit" class="c-cta-btn__btn">内容を送信する
                    <!-- <img src="assets/img/submit-button.png" alt="内容を送信する" width="300" height="82" loading="lazy"
                      decoding="async" class="c-cta-btn__btn"> -->
                  </button>
                </div>
              </div>
          </div>
          </form>
        </div>
      </section>
      </form>
    </main>

    <!-- フッター -->
    <footer class="bz-footer">
      <div class="bz-footer__inner">
        <div class="bz-footer__wrap">
          <div class="bz-footer__link">
            <a href="./privacy.php" class="bz-footer__link-item" target="_blank">プライバシーポリシー</a>
          </div>
        </div>
        <div class="bz-footer__copyright">
          <script>
            TYnow = new Date();
            document.write(TYnow.getFullYear());
          </script>
          &copy;
          ZONE Coaching Co., Ltd. All Rights Reserved.
        </div>
      </div>
    </footer>
  </div>
</div>


<script>
  // フォームの入力欄を順番に表示
  $(".c-input").keyup(function(event) { // event を引数として受け取る
    if (event.key === "Enter") { // keyCode よりも key を使用
      const id = $(this).data('id');
      if (id) {
        $("#" + id).addClass('is-active');
        scrollAnimation("#" + id);
      }
    }
  });

  // チェック入れたら下の質問オープン
  $('.c-input,.c-checkbox,.c-select').change(function() {
    var id = $(this).data('id');
    if (id) {
      $("#" + id).addClass('is-active');
      scrollAnimation("#" + id);
    }
  });

  // 記入欄オープン
  $('.c-checkbox').change(function() {
    var val = $(this).val();
    if ($(this).is(':checked')) {
      if (val == 'その他') {
        $('#jiyuu').addClass('is-active');
      }
    } else {
      if (val == 'その他') {
        $('#jiyuu').removeClass('is-active');
      }
    }
  });

  function scrollAnimation(id) {
    // 取得した値のid属性がついた要素の位置を取得
    const offsetTop = $(id).offset().top;

    // 取得した箇所に移動
    $("html, body").animate({
      scrollTop: offsetTop
    }, 600);
    return false;
  }

  // 日付入力フィールドの最小値を設定
  document.addEventListener('DOMContentLoaded', function() {
    // すべての <input type="date"> 要素を取得
    const dateInputs = document.querySelectorAll('input[type="date"]');

    // 今日の日付を取得
    const today = new Date();
    const yyyy = today.getFullYear();
    const mm = String(today.getMonth() + 1).padStart(2, '0'); // 月は0から始まるため +1
    const dd = String(today.getDate() + 1).padStart(2, '0'); // 翌日を最小値に設定

    // yyyy-mm-dd の形式で min 値を作成
    const minDate = `${yyyy}-${mm}-${dd}`;

    // すべての <input type="date"> 要素に min 値を適用
    dateInputs.forEach(function(input) {
      input.setAttribute('min', minDate);
    });
  });
</script>

<?php require 'footer.php'; ?>