<?php require 'header.php'; ?>
<div class="bz">
  <img src="assets/img/pc-bg-left.png" alt="" class="pc-bg-left" />
  <img src="assets/img/pc-bg-right.png" alt="" class="pc-bg-right" />
  <h2 class="pc-logo__wrapper">
    <a href="./">
      <img src="assets/img/pc-logo.png" alt="LEVERAGE BASE" class="pc-logo" />
    </a>
  </h2>

  <!-- PC部分 -->
  <div class="bz-pc pc">
    <!-- bz-pc__contentはデバイスの高さによって縮小される -->
    <div class="bz-pc__content">
      <div class="bz-pc__box">
        <h2>
          <img src="assets/img/pc-left.png" class="pc01" alt="xxx" />
        </h2>
        <a href="./#contact" class="pc-btn01">
          <img src="assets/img/cta-button01.png" alt="Entry 今すぐ応募" width="373" height="102" decoding="async"
            class="pc-cta-button" />
        </a>
      </div>
    </div>
  </div>

  <!-- SP部分 -->
  <div class="bz-page bz-thanks-page">
    <main class="bz-main">
      <div class="bz-01 cta-exist" id="fv">
        <h1>
          <a href="./"><img src="assets/img/pc-logo.png" alt="xxx" class="sp-logo" /></a>
        </h1>
      </div>

      <div class="bz-thanks">
        <div class="bz-thanks__inner">
          <h2 class="bz-thanks__title">
            ご応募いただき<br>ありがとうございます！
          </h2>
          <img src="assets/img/thanks-image.png" alt="3人の社員が笑顔で並んでいる様子" width="359" height="231" loading="lazy"
            decoding="async" class="thanks__image" />
          <p class="bz-thanks__text">
            改めてご連絡をさせて頂きますので<br>今しばらくお待ちください。
          </p>

          <p class="bz-thanks__note">
            ※3営業日経っても連絡がない場合は、<br>
            記入もれやシステム障がいの可能性があるため、<br>
            改めてご連絡いただけますと幸いです。<br>
            メールでのお問い合わせは<br><a href="mailto:xxx@xxx.co.jp">こちら</a>からお願いいたします。
          </p>
        </div>
      </div>
    </main>

    <!-- フッター -->
    <footer class="bz-footer">
      <div class="bz-footer__inner inner">
        <div class="bz-footer__copyright">
          &copy;
          <script>
          TYnow = new Date();
          document.write(TYnow.getFullYear());
          </script>
          leverage-base Co,.Ltd.
        </div>
      </div>
    </footer>
  </div>
</div>

<?php require 'footer.php'; ?>