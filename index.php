
<!-- ここから -->
 <?php
 /*
<?php
// セッションを開始（セッションが未開始の場合のみ）
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

// トークンが未設定の場合にのみ生成
if (empty($_SESSION['token'])) {
  $_SESSION['token'] = bin2hex(random_bytes(32));
}
?>
<!-- ここまではcontact.phpがあればそっちに記入する -->
*/
?>
<?php require 'header.php'; ?>

<div class="bz">
  <img src="assets/img/pc-bg.png" alt="" class="pc-bg" />
  <h2 class="pc-logo__wrapper">
    <a href="./">
      <img src="assets/img/pc-logo.png" alt="ゾーンメンタルコーチング" class="pc-logo" />
    </a>
  </h2>

  <!-- PC部分 -->
  <div class="bz-pc pc">
    <!-- bz-pc__contentはデバイスの高さによって縮小される -->
    <div class="bz-pc__content">
      <div class="bz-pc__box">
               <div>
          <img src="assets/img/pc-tokuten.png" alt="3大特典プレゼント" width="323" height="186" loading="lazy"
            decoding="async" class="" />
        </div>
        <div class="tokuten__items">
          <div class="tokuten__item tokuten__item1">
            <div class="title">フィードバックシート</div>
            <p>体験セッションでの内容をコーチが分析し、具体的なアドバイスをフィードバックすることで自己理解が深まります。</p>
          </div>
          <div class="tokuten__item tokuten__item2">
            <div class="title">ゾーンに入る5つのステップ</div>
            <p>すぐに実践できる具体的なゾーンメンタルの知恵をまとめた資料です。</p>
          </div>
          <div class="tokuten__item tokuten__item3">
            <div class="title">試合・練習前の<br>
              メンタルルーチン集</div>
            <p>パフォーマンスを最大限に発揮するための「心の準備」をサポートするためのガイドです。</p>
          </div>
        </div>
        <div class="cta01_cta cta">
          <p class="second-font cta__text cta__text-pc">\ まずは<span class="highlight"><span class="number">60</span>分</span>で超集中状態を体感 /</p>
          <a href="contact.php" class="cta__button01">
            <img src="assets/img/cta-button01.png" class="cta__entry" alt="無料体験セッションを受ける" width="368" height="96"
              decoding="async" loading="lazy" />
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- SP部分 -->
  <div class="bz-page">
    <main class="bz-main">
      <!-- fv -->
      <div class="bz-fv bz-01 cta-exist" id="fv">
        <section class="bz-fv__main">
          <h1>
            <img src="assets/img/sp-logo.png" class="bz-fv__image" alt="ゾーンメンタルコーチング" width="414" height="52" decoding="async" />
          </h1>
          <div class="bz-fv__slide">
            <img src="assets/img/fv-sp.png" class="bz-fv__image" alt="" width="414"
              height="52" decoding="async" />
            <!-- スライダー1つ目 -->
            <div class="bz-slider01">
              <div id="splide01" class="splide">
                <div class="splide__track">
                  <ul class="splide__list">
                    <li class="splide__slide">
                      <img src="assets/img/slide01.png" class="" alt="20代のプロゴルファー、落ち着いて考えられるように！">
                    </li>
                    <li class="splide__slide">
                      <img src="assets/img/slide02.png" class="" alt="20代の格闘家、初めてKO勝ち出来ました！">
                    </li>
                    <li class="splide__slide">
                      <img src="assets/img/slide03.png" class="" alt="20代のレーシングドラーバー、安定した走りで優勝できました！">
                    </li>
                    <li class="splide__slide">
                      <img src="assets/img/slide04.png" class="" alt="中学生、3年ぶりの空手の大会で優勝！">
                    </li>
                    <li class="splide__slide">
                      <img src="assets/img/slide05.png" class="" alt="20代モデル、堂々とパフォーマンスができた！">
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="bz-fv__cta cta">
            <p class="cta__text second-font">\ まずは <span class="highlight"><span class="number">60</span>分</span> で超集中状態を体感 /</p>
            <a href="contact.php" class="cta__button">
              <img src="assets/img/cta-button01.png" class="cta__entry" alt="無料体験セッションを受ける" width="368" height="96"
                decoding="async" loading="lazy" />
            </a>
          </div>
        </section>
      </div>
      <div class="content01">
        <h2>
          <img src="assets/img/k01.png" alt="お子様へのサポートも安心" width="246" height="105" loading="lazy"
            decoding="async" class="" />
        </h2>
        <p class="p1">メンタルコーチングは大人だけでなく、スポーツを頑張るお子様も成果を実感できるプログラムです。親御様のお悩みもお気軽にご相談ください。</p>
        <p class="p2 second-font center">毎月1回30分の<br>パパ・ママへのZOOMサポート</p>
      </div>
      <div class="content02">
        <h2 class="second-font center">スポーツをする<br><span>全ての方へ</span></h2>
        <p class="p1 second-font center">本番で力をだせず<br>悩んでませんか？</p>
        <ul class="content02__items">
          <li class="content02__list">
            <p class="content02__list-title">緊張</p>
            <div class="content02__item">
              <img src="assets/img/nayami01.jpg" alt="" width="176" height="127" loading="lazy"
                decoding="async" class="" />
              <p><span class="big">大事な試合で<br><span class="underline white">緊張</span>しすぎる</span></p>
            </div>
          </li>
          <li class="content02__list">
            <p class="content02__list-title">ストレス</p>
            <div class="content02__item">
              <img src="assets/img/nayami02.jpg" alt="" width="176" height="127" loading="lazy"
                decoding="async" class="" />
              <p><span class="big">練習や試合に</span><br><span>ストレス</span>を感じる</p>
            </div>
          </li>
          <li class="content02__list">
            <p class="content02__list-title">劣等感</p>
            <div class="content02__item">
              <img src="assets/img/nayami03.jpg" alt="" width="176" height="127" loading="lazy"
                decoding="async" class="" />
              <p>他の選手と比べて<br><span><span class="big">劣等感</span></span>を感じる</p>
            </div>
          </li>
          <li class="content02__list">
            <p class="content02__list-title">ミス</p>
            <div class="content02__item">
              <img src="assets/img/nayami04.jpg" alt="" width="176" height="127" loading="lazy"
                decoding="async" class="" />
              <p>集中力を保てず<span><span class="big">ミス</span>が増える</span></p>
            </div>
          </li>
        </ul>
      </div>
      <div class="content03">
        <div class="inner">
          <h2 class="second-font"><span class="box">本番</span>で出せる<br>パフォーマンスは<br>
            <span class="underline2">メンタル</span>の状態に<br>とても大きく左右されます
          </h2>
          <p class="p1">つまり、</p>
          <p class="p2"><span class="box-w">不安</span>や<span class="box-w">緊張</span>が<br>集中力を妨げ<br>
            <span class="underline2">本来の実力</span>を発揮できなく<br>
            させているのです
          </p>
          <div class="k3">
            <img src="assets/img/k03.png" alt="練習では上手くいくが、試合本番では実力発揮できない" width="356" height="310" loading="lazy"
              decoding="async" class="" />
          </div>
        </div>
      </div>
      <div class="content04">
        <div class="content04__block">
          <p class="p1 second-font">そこで....</p>
          <p class="p2 second-font">ゾーンメンタルコーチング！</p>
          <h2>超集中状態</h2>
          <p class="p3 second-font">を作ることで</p>
          <p class="p4 second-font"><span class="underline- bk">ハイパフォーマンス</span>へ導く</p>
          <img src="assets/img/k04.png" alt="超集中状態のメンタルづくりで力を出し切る" width="414" height="478" loading="lazy"
            decoding="async" class="" />
        </div>
        <div class="bg-bk">
          <p class="p5 second-font center line-gr">ご存知ですか？</p>
          <h3 class="second-font center">
            <span class="f30">超集中状態</span> <span class="f26">(ゾーン)は</span><br>
            <span class="highlight">自分で</span>
            作れます!
          </h3>
          <div class="p6">※心と体が一体化し、感覚が研ぎ澄まされ、今の活動や行動に没頭している超集中状態（ゾーン）。</div>
          <div class="k5">
            <img src="assets/img/k05.png" alt="" width="398" height="303" loading="lazy"
              decoding="async" class="" />
          </div>
        </div>
        <p class="p7"><span class="underline">メンタルの知識</span>と<span class="underline">理論</span>を知り、心の中にあるブレーキを緩め、自信というアクセルを強く踏むことで作り出すことができるのです！</p>
      </div>
      <div class="content05">
        <div class="inner content05__inner">
          <h3 class="second-font center line-gr">コーチってどんな人？</h3>
          <div class="k6">
            <img src="assets/img/k06.png" alt="古徳大輔メンタルコーチ" width="331" height="378" loading="lazy"
              decoding="async" class="" />
          </div>
          <div class="content05__name underline-bk">古徳大輔<span>メンタルコーチ</span></div>
            <div class="content05__block">
              <p>トレーナーとして10年以上活躍</p>
              <p>選手として25年以上のキャリア</p>
              <p>子どもから大人まで 500名以上の指導実績</p>
            </div>
          <img src="assets/img/k07.png" alt="Miracrea認定プロメンタルコーチ" width="341" height="146" loading="lazy"
            decoding="async" class="k07" />
          <ul class="content05__list">
            <li>JLPGA日本女子プロゴルフ協会所属選手指導</li>
            <li>RISEフライ級ランカー 指導</li>
            <li>元FIA-F4レーシングドライバー指導</li>
            <li>ミスユニバース日本大会出場選手指導</li>
            <li>常磐大学＆茨城県中小企業家同友会<br>
              「キャリア形成と大学」3期連続講師</li>
            <li>茨城県立 勝田工業高等学校ラグビー部 指導</li>
            <li>小学校保健安全委員会 講師</li>
          </ul>
        </div>
        <p class="p1 center">\ 水戸市長 表敬訪問 /</p>
        <div class="k8">
          <img src="assets/img/k08.jpg" alt="" width="413" height="174" loading="lazy"
            decoding="async" class="" />
        </div>
      </div>
      <div class="content06">
        <div class="content06__q second-font center">？</div>
        <h3 class="second-font center">でもどうやって<br>最高の結果へ導くの</h3>
        <div class="k9">
          <img src="assets/img/k09.jpg" alt="" width="342" height="260" loading="lazy"
            decoding="async" class="" />
        </div>
      </div>
      <section class="step">
        <div class="step__inner">
          <p class="p1 second-font center">NLP理論に基づく<br>ゾーンメンタルコーチング</p>
          <h2 class="second-font center">基本ステップ</h2>
          <div class="step__items">
            <p class="p1 second-font underline-bk">1回60分の完全マンツーマン</p>
            <h3 class="second-font">メンタルコーチング<br>
              セッション</h3>
            <div class="step__item">
              <div class="step__item-num">
                <img src="assets/img/step01.png" alt="step01" width="88" height="27" loading="lazy"
                  decoding="async" class="" />
              </div>
              <p class="step__item-title second-font">達成したい成果を明確に設定</p>
              <div class="step__item-flex">
                <p class="step__item-text text01">短期的な目標から<br>
                  長期的なビジョンまで<br>
                  僕が実現まで導きます！</p>
                <div class="step__item-img">
                  <img src="assets/img/k10.png" alt="古徳大輔コーチ" width="126" height="131" loading="lazy"
                    decoding="async" class="" />
                </div>
              </div>
            </div>
            <div class="step__item">
              <div class="step__item-num">
                <img src="assets/img/step02.png" alt="step02" width="88" height="27" loading="lazy"
                  decoding="async" class="" />
              </div>
              <p class="step__item-title second-font">現状と理想の状態を把握し<br>
                課題点を洗い出していく</p>
              <div class="step__item-flex">
                <p class="step__item-text text02">自分の思考パターンや<br>
                  感情の動きがしっかり分かる<br>ので、新たな気づきに<br>
                  ハッとするでしょう！</p>
                <div class="step__item-img">
                  <img src="assets/img/k10.png" alt="古徳大輔コーチ" width="126" height="131" loading="lazy"
                    decoding="async" class="" />
                </div>
              </div>
            </div>
            <div class="step__item">
              <div class="step__item-num">
                <img src="assets/img/step03.png" alt="step03" width="88" height="27" loading="lazy"
                  decoding="async" class="" />
              </div>
              <p class="step__item-title second-font">メンタルスキルを体得し<br>
                心を整え練習や本番に繋げる</p>
              <div class="step03__item">
                <div class="step03__item-block">
                  <div class="step03__item-title">NLP理論を用いた<br>
                    メンタルスキルの一例をご紹介</div>
                  <ul>
                    <li>プレッシャー管理</li>
                    <p>試合前の緊張や不安を効果的にコントロールする方法を学びます。</p>
                    <li>集中力維持</li>
                    <p>競技中に持続的な集中力を維持するためのテクニックを習得します</p>
                    <li>自信を育てる</li>
                    <p>自己肯定感を高め、困難な状況でも自信を持って力を発揮できるメンタルを整えます。</p>
                  </ul>
                </div>
              </div>
              <div class="step__item-flex">
                <p class="step__item-text text03">｢気合で頑張れ！｣<br>
                  ｢集中しろ！｣ <br>
                  ｢自信を持て！｣では、<br>
                  結果が中々出せないことが<br>
                  あります。<br>
                  自分の心と成果への繋がりを<br>論理的に理解することが重要<br>です！</p>
                <div class="step__item-img">
                  <img src="assets/img/k10.png" alt="古徳大輔コーチ" width="126" height="131" loading="lazy"
                    decoding="async" class="" />
                </div>
              </div>
            </div>
          </div>
          <p class="step__text second-font center"><span>さらに</span><br>セッションだけじゃない！</p>
        </div>
      </section>
      <section class="support">
        <div class="support__inner">
          <h2 class="second-font"><span class="small">アスリートとしての成功を支える</span><br>
            ゾーンコーチングだけの
            <span class="gr">特別サポート</span>
          </h2>
          <div class="support__items">
            <div class="support__item">
              <div class="support__item-block">
                <h3 class="second-font">LINEで<br>
                  無制限サポート</h3>
                <p class="second-font"><span>試合前の緊張時</span><span>試合後の振り返り</span><br>
                  <span>コーチングに関する質問や相談</span>など
                </p>
              </div>
              <div class="k12">
                <img src="assets/img/k12.png" alt="古徳大輔コーチとLINEでの相談の様子" width="329" height="309" loading="lazy"
                  decoding="async" class="" />
              </div>
            </div>
            <div class="support__item">
              <div class="support__item-block">
                <h3 class="second-font">人間関係の相談</h3>
                <p>心の負担を軽減し、より良い環境で力を発揮できるよう、周りとの人間関係に関するお悩みも気軽に相談できます。</p>
                <div class="k13">
                  <img src="assets/img/k13.png" alt="監督の指導方法に納得がいかない、チームメンバーと価値観が合わない、家族からのプレッシャーがつらい" width="329" height="309" loading="lazy"
                    decoding="async" class="" />
                </div>
              </div>
            </div>
            <div
              class="support__item">
              <div class="support__item-block">
                <h3 class="second-font h3-3">トレーニング・食事相談</h3>
                <p>パーソナルトレーナーとしても多くの実績を持つコーチが、実践に基づく効果的なトレーニング方法や、減量・増量に適した食事プランについてアドバイスします。</p>
                <div class="k14">
                  <img src="assets/img/k14.png" alt="" width="308" height="148" loading="lazy"
                    decoding="async" class="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="content07">
        <div class="content07__inner">
          <h2 class="second-font">
            <span class="underline-bk">アスリートに特化した</span><br>独自の<br>
            コーチングメソッド
          </h2>
          <div class="k15">
            <img src="assets/img/k15.png" alt="ゾーンコーチングのメリット" width="368" height="597" loading="lazy"
              decoding="async" class="" />
          </div>
        </div>
      </div>
      <section class="features">
        <div class="features__inner">
          <h2><span class="small">ゾーンメンタルコーチング</span><span class="num">3</span>つの特徴</h2>
          <div class="features__items">
            <div class="features__item">
              <div class="features__item-num second-font">1</div>
              <h3 class="second-font"><span>最短3ヶ月〜成果を実感</span><br>ゾーンに導く専門メソッド</h3>
              <p>一般的なコーチングとは異なり、「本番での超集中状態（ゾーン）を作り出すこと」に特化した独自のメソッドを採用。<br>
                集中的なトレーニングにより、短期間で心の状態に変化が現れ、実際の競技で成果を実感できます。</p>
            </div>
          </div>
          <div class="features__item">
            <div class="features__item-num second-font">2</div>
            <div>ゾーンメンタルコーチングだけ！</div>
            <h3><span>メンタルスコア測定で</span><br>効果を見える化</h3>
            <div>
              <img src="assets/img/k16.png" alt="" width="377" height="330" loading="lazy"
                decoding="async" class="" />
            </div>
            <p>一般的なコーチングとは異なり、「本番での超集中状態（ゾーン）を作り出すこと」に特化した独自のメソッドを採用。<br>
              集中的なトレーニングにより、短期間で心の状態に変化が現れ、実際の競技で成果を実感できます。</p>
          </div>
          <div class="features__item">
            <div class="features__item-num second-font">3</div>
            <h3><span>イメージトレーニングで</span><br>思考のクセを改善</h3>
            <p>目標を達成した瞬間や成功した場面をリアルにイメージするトレーニングを行います。 これまでの物事の見方、捉え方、習慣的な思考や心の反応を理解し見直すことで、競技中の冷静さと自信を高めます。</p>
          </div>
        </div>
      </section>

      <section class="tokuten">
        <div class="inner">
          <div>
            <img src="assets/img/tokuten.png" alt="3大特典プレゼント" width="" height="" loading="lazy"
              decoding="async" class="" />
          </div>
          <div class="tokuten__items">
            <div class="tokuten__item tokuten__item1">
              <div class="title">フィードバックシート</div>
              <p>体験セッションでの内容をコーチが分析し、具体的なアドバイスをフィードバックすることで自己理解が深まります。</p>
            </div>
            <div class="tokuten__item tokuten__item2">
              <div class="title">ゾーンに入る5つのステップ</div>
              <p>すぐに実践できる具体的なゾーンメンタルの知恵をまとめた資料です。</p>
            </div>
            <div class="tokuten__item tokuten__item3">
              <div class="title">試合・練習前の<br>
                メンタルルーチン集</div>
              <p>パフォーマンスを最大限に発揮するための「心の準備」をサポートするためのガイドです。</p>
            </div>
          </div>
          <div class="cta01_cta cta">
            <p class="second-font cta__text cta__text-white">\ まずは<span class="highlight"><span class="number">60</span>分</span>で超集中状態を体感 /</p>
            <a href="contact.php" class="cta__button01">
              <img src="assets/img/cta-button01.png" class="cta__entry" alt="無料体験セッションを受ける" width="368" height="96"
                decoding="async" loading="lazy" />
            </a>
          </div>
        </div>
      </section>
      <section class="voice">
        <div class="voice__inner">
          <h2 class="second-font center"><span>本番で結果を出せた！</span><br>サポート選手の声</h2>
          <div class="voice__items">
            <div class="voice__item">
              <div>
                <img src="assets/img/voice01.png" alt="空手、中学生、小林将人様" width="387" height="269" loading="lazy"
                  decoding="async" class="" />
              </div>
              <div class="voice__flex">
                <div class="voice__flex-img">
                  <img src="assets/img/icon-hito.png" alt="" width="40" height="52" loading="lazy"
                    decoding="async" class="" />
                </div>
                <div class="voice__title">3年ぶりの大会で<br>
                  優勝する事ができました！</div>
              </div>
              <div class="voice__contents">
                <h3>サポートを受ける前の悩み</h3>
                <p>僕が空手を始めたのは小学4年生の時でした。<br>
                  当時は強くなりたいけどキツイ練習が嫌いで、特に<strong>夢も目標も無く空手を続けているだけ</strong>でした。</p>
              </div>
              <div class="voice__contents">
                <h3>コーチやプログラム内容の印象</h3>
                <p>中学2年になって、初めて古徳コーチのセッションを受けました。明るくて知識が豊富、しっかり向き合ってくれる印象でした。<br>
                  特に夢も目標も無かった自分にまずは<strong>目標を持つ大切さに気付かせてくれました</strong>。<br>
                  いつ、どうなりたいのか？それに向けてやるべきこと、気持ちの持ち方、とにかく良かったところを沢山褒め、認めてくれる、それだけでなく、悪かった所（改善すべきところ）はどうすれば良いのか一緒に考えてくれました。</p>
              </div>
              <div class="voice__contents">
                <h3>サポートを受けてからの変化</h3>
                <p>古徳コーチの丁寧なサポートのお陰で、<br>
                  <strong>・空手の大会で優勝したい！</strong><br>
                  <strong>・空手を活かした仕事をしたい！</strong><br>
                  と強く思うようになり、あんなに嫌いだった練習にも真剣に取り組むことができるようになりました。<br>
                  コーチングを受けてしばらく経ったとき、古徳コーチから「試合に出てみては？」と言われ出場してみると、<span>3年ぶりの大会で優勝する事ができました</span>。<br>
                  その後、道場生の指導も手伝うようになると、指導法などのアドバイスも頂きました。<br>
                  今は古徳コーチのような人になることが夢で背中を追っています！<br>
                  古徳コーチと出会うまでは夢も無く、何をどうしたら良いのかもわかりませんでした。自分に夢を与えてくれた人だと思っています。<span>古徳コーチと接すると本当に前向きにさせてくれます</span>。不思議な力があります。そういう人です。
                </p>
              </div>
              <div class="voice__contents">
                <h3>迷っている人へ一言</h3>
                <p>なにかに悩んでどうしたらいいのかわからない方へ沢山の経験のもとコーチングで導いてくれます。
                  <span>古徳コーチに頼れば間違いないです！</span>
                </p>
              </div>
            </div>
            <div class="voice__item">
              <div>
                <img src="assets/img/voice02.png" alt="レーシングドライバー、20代、今橋彩佳様" width="387" height="269" loading="lazy"
                  decoding="async" class="" />
              </div>
              <div class="voice__flex">
                <div class="voice__flex-img">
                  <img src="assets/img/icon-hito.png" alt="" width="40" height="52" loading="lazy"
                    decoding="async" class="" />
                </div>
                <div class="voice__title">安定した走りで<br>
                  優勝できました！</div>
              </div>
              <div class="voice__contents">
                <h3>サポートを受ける前の悩み</h3>
                <p>心身共に準備が足りないままレースに挑み、元々メンタルが弱かったことも相まって気持ちの面で既にライバルに負けていました。<br>
                  不安な気持ちを隠す為に表面上は強く振舞っていましたが、いつも誤魔化し切れてはいませんでした。そのため<strong>パフォーマンスにムラがあり、実力を上手く発揮できずにモヤモヤする事が多かったです</strong>。</p>
              </div>
              <div class="voice__contents">
                <h3>コーチやプログラム内容の印象</h3>
                <p>コーチは常に自分に全力で向き合ってくれました。マンツーマンサポートの良い点だと思います。常に全開走行するレーシングドライバーという、少し特殊な環境下のアスリートでも、細かく話を聞いてくださり、必要なスキームを構築してくれたので、確実に自分の力になっていきました。<br>
                  私の事、レースの事を「知ろう」としてくれる姿勢も嬉しかったです。<strong>着実に限界の少し先へ導いてくれた</strong>ので、目標を持ちながら続ける事が出来ました。やはり継続は力なりです。</p>
              </div>
              <div class="voice__contents">
                <h3>サポートを受けてからの変化</h3>
                <p>メンタルトレーニングをしたという事実、変わった自分、それらが全て自信に繋がり、以前と比べて強い気持ちでレースに挑めるようになりました。<br>
                  実はかなり身体への負担が大きいモータースポーツですが、正確なコントロールと判断をしながら200kmを超えるスピードで競い合うには、非常に高い集中力が必要になってきます。<span>集中力が高まったことはかなり大きな成果だった</span>と思います。<br>
                  <span>安定した走りが出来るようになり優勝という結果もついてきましたが、その結果が更に自信へと繋がりいい連鎖を生みました</span>。
                </p>
              </div>
              <div class="voice__contents">
                <h3>迷っている人へ一言</h3>
                <p>自分の持っているパフォーマンスを必要な場面で十分発揮するには、日頃からメンタルの管理が重要になってきます。私は気持ちがそのまま結果に反映されると考えていますが、<strong>「勝てる」「出来る」という強い気持ちには、根拠が必要</strong>だと思っています。気持ちを強く装っても、心は弱いままです。私もそうでした。身体同様に、メンタルもしっかり鍛えてあげる必要があります。<br>
                  フィジカルトレーニングとも上手く組み合わせて、どÏんな時でも100％の実力を発揮できる根拠のある自信と強いメンタルを手に入れてほしいと思います。
                  <strong>競技や勝負事に限らず、メンタルの安定は日常生活でも恩恵が大きいです</strong>。是非メンタルコーチングを受けてみてください。
                </p>
              </div>
            </div>
            <div class="voice__item">
              <div>
                <img src="assets/img/voice03.png" alt="プロ格闘家、20代、平山裕翔様" width="387" height="269" loading="lazy"
                  decoding="async" class="" />
              </div>
              <div class="voice__flex">
                <div class="voice__flex-img">
                  <img src="assets/img/icon-hito.png" alt="" width="40" height="52" loading="lazy"
                    decoding="async" class="" />
                </div>
                <div class="voice__title">初めて<br>
                  KO勝ち出来ました！</div>
              </div>
              <div class="voice__contents">
                <h3>サポートを受ける前の悩み</h3>
                <p>もともとはフィジカル面に課題があって、試合のときに<strong>対戦相手との「差」</strong>を感じてしまい、それがメンタル面と試合結果に影響が出ていました。</p>
              </div>
              <div class="voice__contents">
                <h3>コーチやプログラム内容の印象</h3>
                <p>古徳コーチも格闘家として経験が長いので、色々質問したことに対して丁寧に教えて貰えました！メンタル面の課題についても、<strong>次に向けどうすべきかを一緒に考えてくれた</strong>のでとても心強かったです。</p>
              </div>
              <div class="voice__contents">
                <h3>サポートを受けてからの変化</h3>
                <p>メンタルに自信がついたことで、フィジカル面でも負けなくなり、打撃もパワーアップして<strong>初めてKO勝ち出来ました！</strong><br>
                  コーチングを受ける前と比べると、常に自分の目標を明確に出来ていて、毎回の練習で常に試合が意識できて、練習が終わる度にレベルアップしていることが実感できています！<strong>試合ではどんな時も冷静に対処できるように</strong>なり、イメージトレーニングを今まで以上に実施するようになり、自分の動きを自信もってできるようになっています！
                  毎回のコーチングでは振り返りが効果的にできました！次の課題も明確にしてくださりモチベーションが上がりとても良かったです！
                </p>
              </div>
              <div class="voice__contents">
                <h3>コーチへ一言</h3>
                <p>いつも丁寧に教えて頂いてありがとうございます！<strong>すごい成果が出て試合でもいい結果を残せました！</strong><br>
                  ほんとにありがとうございます！これからもよろしくお願いします！
                </p>
              </div>
              <div class="voice__contents">
                <h3>迷っている人へ一言</h3>
                <p>気持ちの持ちようなど前向きになり目標に向けて頑張ろうって思えます！<br>
                  そして<strong>本番でいい結果を残せます！</strong>
                  是非受けてみてください！
                </p>
              </div>
            </div>
            <div class="voice__item">
              <div>
                <img src="assets/img/voice04.png" alt="モデル、20代、冨田七々海様" width="387" height="269" loading="lazy"
                  decoding="async" class="" />
              </div>
              <div class="voice__flex">
                <div class="voice__flex-img">
                  <img src="assets/img/icon-hito.png" alt="" width="40" height="52" loading="lazy"
                    decoding="async" class="" />
                </div>
                <div class="voice__title">ステージで堂々と<br>
                  パフォーマンスができた！</div>
              </div>
              <div class="voice__contents">
                <h3>サポートを受ける前の悩み</h3>
                <p>自分の嫌いな部分ばかりが気になり、自信を持ってステージでパフォーマンスできませんでした。理想に近づくために、<strong>適切な/十分なトレーニングができているか、自信が持てずにいました</strong>。</p>
              </div>
              <div class="voice__contents">
                <h3>コーチやプログラム内容の印象</h3>
                <p>コーチ自身が現役で様々なことにチャレンジしているため、専門知識も豊富で、<strong>プレーヤーとしての気持ちや悩みに寄り添ったセッション</strong>をしていただけました。</p>
              </div>
              <div class="voice__contents">
                <h3>サポートを受けてからの変化</h3>
                <p>プロコーチの指導で、適切な内容・頑張る方向性を定められるため、安心して目標に向かい走ることができました。自分のなりたい姿を明確に想像し、それに向かって現状とのギャップを縮めていくことで、結果、<strong>ステージで堂々とパフォーマンスをすることができました</strong>。
                </p>
              </div>
              <div class="voice__contents">
                <h3>コーチへ一言</h3>
                <p>現状の状態と目標とのギャップを細かく確認・調整しながらセッションを組み立てていただき、安心して取り組むことができました ！</p>
              </div>
              <div class="voice__contents">
                <h3>迷っている人へ一言</h3>
                <p>勝負の瞬間にどれだけ自分のベストを出せるかは、実力ももちろん大事ですが、自分をどれだけ信じることができるか、メンタル面を強く保てるかも重要だと感じた。<br>
                  <strong>ステージで最も輝ける自分であるために、メンタルを整えること</strong>もオススメです！
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- アコーディオン -->
        <section class="voice-hidden">
          <div class="voice__inner">
            <div class="voice__items">
              <div class="voice__item">
                <div>
                  <img src="assets/img/voice05.png" alt="空手、高校生、小崎貴広様" width="387" height="269" loading="lazy"
                    decoding="async" class="" />
                </div>
                <div class="voice__flex">
                  <div class="voice__flex-img">
                    <img src="assets/img/icon-hito.png" alt="" width="40" height="52" loading="lazy"
                      decoding="async" class="" />
                  </div>
                  <div class="voice__title">諦めるという選択肢がなくなりました！</div>
                </div>
                <div class="voice__contents">
                  <h3>サポートを受ける前の悩み</h3>
                  <p>学生の自分はとても飽きっぽくて、少し私生活が荒れている面もありました。また、<strong>諦め癖もありキツいと感じる場面で踏ん張ることが苦手でした</strong>。</p>
                </div>
                <div class="voice__contents">
                  <h3>コーチやプログラム内容の印象</h3>
                  <p>目標(試合)に向けて、具体的なトレーニングを組み立てることができました。また、試合は闇雲に出るのではなく、<strong>課題をもって練習に取り組んでから出場すること、｢負け癖をつけない｣と気付かせてもらったこと</strong>がとても印象的でした。</p>
                </div>
                <div class="voice__contents">
                  <h3>サポートを受けてからの変化</h3>
                  <p>試合の相手はでは格上と当たることが多かったのですが、苦しい場面でも自分のやるべき事をやる意識がついたお陰で、<strong>諦めるという選択肢がなくなりました</strong>。<br>
                    負ける事もありましたが、確実に勝ちに繋がっていった実感があります。<br>
                    また、コーチングを受けているうちに私生活も落ち着いていきました。<strong>私生活の落ち着きは競技への集中に繋がりました</strong>。</p>
                </div>
                <div class="voice__contents">
                  <h3>コーチへ一言</h3>
                  <p><strong>目標や上を目指す意識が出来るようになった事がとても良かった</strong>と感じております。
                    目標へ向かう為のモチベーション維持や、目標達成の為に、今何をどう考えていくのか？が明確になったことがとても良かったです。</p>
                </div>
                <div class="voice__contents">
                  <h3>迷っている人へ一言</h3>
                  <p><strong>受けて損はありません!!</strong><br>
                    競技以外に、学生生活や私生活でも役立つ場面が多く、受けて良かったと思います。<br>
                    競技やこれからの人生のためにも是非受けてみて下さい!!</p>
                </div>
              </div>
              <div class="voice__item">
                <div>
                  <img src="assets/img/voice06.png" alt="プロゴルファー、20代、佐久間綾女様" width="387" height="269" loading="lazy"
                    decoding="async" class="" />
                </div>
                <div class="voice__flex">
                  <div class="voice__flex-img">
                    <img src="assets/img/icon-hito.png" alt="" width="40" height="52" loading="lazy"
                      decoding="async" class="" />
                  </div>
                  <div class="voice__title">精神的に落ち着いて物事を考えられるようになった！</div>
                </div>
                <div class="voice__contents">
                  <h3>サポートを受ける前の悩み</h3>
                  <p>練習ではできているのに本番では自分の力を発揮できませんでした。</p>
                </div>
                <div class="voice__contents">
                  <h3>コーチやプログラム内容の印象</h3>
                  <p>メンタルトレーニングを受けたことで、<strong>試合の向き合い方が変わりました</strong>。<br>
                    試合を想定してイメージをしながら練習に取り組むことによって、本番で失敗することが少なくなりました。</p>
                </div>
                <div class="voice__contents">
                  <h3>サポートを受けてからの変化</h3>
                  <p><strong>精神的に落ち着いて物事を考えられるようになりました</strong>。<br>
                    自分のやってきた事に自信を持ってできるようになったので、<strong>パフォーマンスも上がりました</strong>。</p>
                </div>
                <div class="voice__contents">
                  <h3>コーチへ一言</h3>
                  <p>コーチには色々と相談に乗っていただいて、応援していただきました。<br>
                    ありがとうございます！</p>
                </div>
                <div class="voice__contents">
                  <h3>迷っている人へ一言</h3>
                  <p>考え方を変えるだけで<strong>競技パフォーマンスも変わる</strong>ので、ぜひ受けてみてください！</p>
                </div>
              </div>
              <div class="voice__item">
                <div>
                  <img src="assets/img/voice07.png" alt="空手 / 親子（子15歳）、萩本海様・雅治様" width="387" height="269" loading="lazy"
                    decoding="async" class="" />
                </div>
                <div class="voice__flex">
                  <div class="voice__flex-img">
                    <img src="assets/img/icon-hito.png" alt="" width="40" height="52" loading="lazy"
                      decoding="async" class="" />
                  </div>
                  <div class="voice__title">どうやって勝ちに繋げるかのビジョンが見えました！</div>
                </div>
                <div class="voice__contents">
                  <h3>サポートを受ける前の悩み</h3>
                  <p>自分の強みはなんとなくわかっていたが、そこから<strong>どうやって勝ちに繋げるかのビジョンが見えていませんでした</strong>。</p>
                </div>
                <div class="voice__contents">
                  <h3>コーチやプログラム内容の印象</h3>
                  <p>どんな些細なことでも、一つ一つ真剣に向き合ってくださったので、<strong>伸び伸びと練習することができるようになりました</strong>。</p>
                </div>
                <div class="voice__contents">
                  <h3>サポートを受けてからの変化</h3>
                  <p>コーチングを受けたことで、悩みであった勝ちへのビジョンを意識できるようになり、それが自信につながり、<strong>試合の動きにもつながりました</strong>。</p>
                </div>
                <div class="voice__contents">
                  <h3>コーチへ一言</h3>
                  <p>幅広い年齢の人がいる環境ですが、年齢差を気にすることなく、<strong>自分がやるべきことに集中して、練習に打ち込めるようになりました</strong>。</p>
                </div>
                <div class="voice__contents">
                  <h3>迷っている人へ一言</h3>
                  <p>メンタルがプレーに影響することは大きいので、<strong>メンタル面で課題や悩みを持っている方は是非受けてみてほしいです！</strong></p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <button class="voice__button">サポート選手の声を<br>
          もっと見る
        </button>
      </section>
      <!-- コーチ紹介 -->
      <section class="coach">
        <div class="coach__inner">
          <h2 class="second-font center">コーチ紹介</h2>
          <div class="coach__img">
            <img src="assets/img/coach.jpg" alt="古徳 大輔ゾーンメンタルコーチ・トレーナー" width="384" height="302" loading="lazy"
              decoding="async" class="" />
          </div>
          <div class="coach__info">
            <span class="small">ゾーンメンタルコーチ・トレーナー</span><br>
            古徳 大輔<span class="en">KOTOKU DAISUKE</span>
          </div>
          <div class="coach__info-text">
            <p>1980年生まれ</p>
            <p>株式会社ケーアイ代表取締役</p>
            <p>パーソナルフィットネスStudioK 代表</p>
          </div>
          <!-- アコーディオン -->
          <div class="cards">
            <div class="card">
              <h3 class="card__title">20歳で空手全日本優勝、<br> 海外での修行・指導実績も</h3>
              <div class="card__content is-open">
                <p class="card__text">
                  私は8歳のときに見たアクション映画がきっかけで”強さ”に憧れ、13歳のときに...
                </p>
                <button class="card__open">続きを読む</button>
              </div>
              <div class="card__content-hide">
                <p class="card__text">
                  私は8歳のときに見たアクション映画がきっかけで”強さ”に憧れ、13歳のときに空手道場の門を叩き、その魅力にのめり込みました。
                  毎日が楽しく夢中で稽古に励み、20歳で国際総合空手日本大会優勝という大きな成果を得ることができました。
                </p>
                <p class="card__text">
                  以降、80戦以上を積み重ね、新たな挑戦として40歳でキックボクシングへと転向します。
                </p>
                <img src="assets/img/card01.jpg" alt="" width="311" height="178" loading="lazy" decoding="async" class="" />
              </div>
            </div>
            <div class="card__content-hide">
              <p class="card__text">
                私は8歳のときに見たアクション映画がきっかけで”強さ”に憧れ、13歳のときに空手道場の門を叩き、その魅力にのめり込みました。
                毎日が楽しく夢中で稽古に励み、20歳で国際総合空手日本大会優勝という大きな成果を得ることができました。</p>
              <p class="card__text">
                以降、80戦以上を積み重ね、新たな挑戦として40歳でキックボクシングへと転向します。
              </p>
              <img src="assets/img/card01.jpg" alt="" width="311" height="178" loading="lazy"
                decoding="async" class="" />
            </div>
            <div class="card">
              <h3 class="card__title">選手として、指導者として、親として</h3>
              <div class="card__content is-open">
                <p class="card__text">
                  選手と指導者という立場を経験してきたなか、多くの子どもと触れ...
                </p>
                <button class="card__open">続きを読む</button>
              </div>
              <div class="card__content-hide">
                <p class="card__text">
                  選手と指導者という立場を経験してきたなか、多くの子どもと触れ合う機会がありました。子どもは心も体も柔軟で可能性に満ち溢れています。一方メンタルという点において、成長過程の子どもにはとても繊細な時期があります</p>
                <p class="card__text">
                  そのような時期は周りでサポートする大人（アスリート・アントラージュ）の存在はとても重要です。子どもの気持ちを尊重し、受け入れ、見守る姿勢が大切で、どのような関わり方をするか、言葉がけをするかで子どものパフォーマンスとその後のアスリート人生、未来は大きく変わります。
                </p>
                <p class="card__text">
                  私自身、武道を通して我が子とも親子の対話ができ、思春期を経ても「心の繋がり」を感じることができ、家庭内での調和がとれたことは、父親として、指導者として、そして選手としての私を大きく成長させてくれました。
                </p>
                <img src="assets/img/card02.jpg" alt="" width="311" height="178" loading="lazy"
                  decoding="async" class="" />
              </div>
            </div>
            <div class="card">
              <h3 class="card__title">突然やってきた”超”集中状態</h3>
              <div class="card__content is-open">
                <p class="card__text">
                  もちろんすべて順風満帆だったわけでなく、選手生活を送るなか挫折やスランプも...
                </p>
                <button class="card__open">続きを読む</button>
              </div>
              <div class="card__content-hide">
                <p class="card__text">
                  もちろんすべて順風満帆だったわけでなく、選手生活を送るなか挫折やスランプもあり、練習で取り組んできたことが本番でまったく発揮できないことは多々ありましたし、逆に驚くほど調子が良いときもありました。</p>
                <p class="card__text">
                  「あれ？ぜんぜん疲れないぞ？？」
                </p>
                <p class="card__text">
                  ！？いつもならとっくに息が上がっているのに、まだまだ動ける！足裏に根が張ったように安定している！体幹がブレない！相手の動きが見える！技がぜんぶ決まる！そんな感覚の試合が何度かありました。
                </p>
                <p class="card__text">
                  衝撃でした。自分でも驚くほどの集中力（ゾーン状態）でハイパフォーマンスを発揮できた瞬間です。しかし、これがなぜ起きたのか？まったく理解できず、ただ「調子が良かっただけ」と思っていました。
                </p>
                <img src="assets/img/card03.jpg" alt="" width="311" height="178" loading="lazy"
                  decoding="async" class="" />
              </div>
            </div>
            <div class="card">
              <h3 class="card__title">大怪我で気づいたメンタルの重要性</h3>
              <div class="card__content is-open">
                <p class="card__text">
                  私はこれまで2度、選手生命に関わる大怪我をしました。たった3年の間に...
                </p>
                <button class="card__open">続きを読む</button>
              </div>
              <div class="card__content-hide">
                <p class="card__text">
                  私はこれまで2度、選手生命に関わる大怪我をしました。<br>
                  たった3年の間に両膝の前十字靭帯を断裂。
                <p class="card__text">
                  この時期は敗戦が続き、メンタルも落ち込み、競技に楽しみを見出せなくなり、ただただ辛い日々でした。練習に復帰しても不安しかなく、ジムに行くことすら苦痛で、身体もまったく仕上がらないため、試合どころではありませんでした。
                </p>
                <p class="card__text">
                  「もう、ここらが潮時かな…。」
                </p>
                <img src="assets/img/card04.jpg" alt="" width="311" height="178" loading="lazy"
                  decoding="async" class="" />
                <p class="card__text">
                  そんな時に出会ったのが、スポーツ心理学とメンタルコーチングです。<br>
                  このとき、パフォーマンスを最大限に発揮するためには、フィジカル面だけでなく「”メンタル”と”環境”を整えること」がとても重要であることに気付かされました。</p>
                <p class="card__text">
                  この時期は敗戦が続き、メンタルも落ち込み、競技に楽しみを見出せなくなり、ただただ辛い日々でした。練習に復帰しても不安しかなく、ジムに行くことすら苦痛で、身体もまったく仕上がらないため、試合どころではありませんでした。</p>
                </p>
                <p class="card__text">
                  思い返してみれば結果が出ない時期は、楽しみよりも焦りや恐怖心でいっぱいの状態。
                  『”超”集中状態』が訪れたときは、”心の状態”と”環境”が自然に整い安定している状態で、試合にワクワクする気持ちで臨めていました。
                </p>
                <p class="card__text">
                  以降、少しずつメンタルを整えたことで、練習に向かう姿勢や、身体の仕上がりにも変化があらわれ、復帰戦では自分が思っていた以上のパフォーマンスを発揮することができたのです。
                </p>
                <img src="assets/img/card05.jpg" alt="" width="311" height="178" loading="lazy"
                  decoding="async" class="" />
              </div>
            </div>
          </div>
          <div class="message">MESSAGE
          </div>
          <!-- 動画 -->
          <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/1066810544?h=b10b232425&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="ゾーンメンタルコーチングの特徴"></iframe></div>
          <script src="https://player.vimeo.com/api/player.js"></script>
          <div class="message__title second-font">自分を信じ、<br>
            最高のパフォーマンスを</div>
          <div class="message__contents">
            <p>『練習通りの力を本番で発揮したい！』『あの時の自分を超えたい！』
              私自身、競技者として共感します。</p>
            <p>心を整え、メンタルの力、つまり自分自身を味方につけることで、選手は壁を乗り越え、大きく成長し、輝く成果を手に入れることができます。</p>
            <p>想像してみてください。　試合当日「超集中状態（ゾーン）」が自分の武器となり、緊張ではなく「楽しみ」が心の底から湧き上がり、”最高の自分”が目の前のステージで躍動する瞬間を。</p>
          </div>
          <div class="message__head">その瞬間、一緒に手に入れませんか？</div>
          <div class="message__contents">
            <p>一人でも多くの方に、このメンタルコーチングを体験いただき、自身に眠っている可能性を感じ、競技生活に喜びと感動を、そして最高のパフォーマンスを発揮できるお手伝いができれば、私にとって何よりの喜びです。</p>
            <p>メンタルに課題を感じていたり、練習をがんばっているのに成果に結びつかないその原因を知りたい方、まず一度セッションを受けてみてください。</p>
            <p>あなたの未来を、ここから一緒に変えましょう。</p>
          </div>
        </div>
      </section>

      <!-- よくある質問 -->
      <section class="faq">
        <div class="faq__inner inner">
          <h2 class="faq__title second-font center">よくある質問</h2>
          <ul class="faq__list">
            <li class="faq__item">
              <h3 class="faq__item-question">
                コーチングの料金はいくらですか？
              </h3>
              <p class="faq__item-answer">
                料金はプランによって異なります。初回無料体験セッション後に、3ヶ月、6ヶ月、12ヶ月の各プランをご用意しています。詳細な料金については、無料セッションでご相談ください。
              </p>
            </li>
            <li class="faq__item">
              <h3 class="faq__item-question">
                年齢制限はありますか？
              </h3>
              <p class="faq__item-answer">
                特にはございません。子どもから大人まで幅広い年齢層に対応しています。
              </p>
            </li>
            <li class="faq__item">
              <h3 class="faq__item-question">
                どのくらいのペースで受ければよいですか？
              </h3>
              <p class="faq__item-answer">
                月2回ペースで3～6ヶ月ほど受けると、ご自身でも内面の変化を感じることができるようになります。
              </p>
            </li>
            <li class="faq__item">
              <h3 class="faq__item-question">
                キャンセルや変更は可能ですか？
              </h3>
              <p class="faq__item-answer">
                はい、セッションのキャンセルや変更は可能です。セッションの24時間前までにご連絡いただければ、無料でキャンセルまたは別の日程への変更が可能です。
              </p>
            </li>
          </ul>
        </div>
      </section>
      <!-- 3大特典 -->
      <section class="tokuten">
        <div class="inner">
          <div class="tokuten__img">
            <img src="assets/img/tokuten.png" alt="3大特典プレゼント" width="" height="" loading="lazy"
              decoding="async" class="" />
          </div>
          <div class="tokuten__items">
            <div class="tokuten__item tokuten__item1">
              <div class="title">フィードバックシート</div>
              <p>体験セッションでの内容をコーチが分析し、具体的なアドバイスをフィードバックすることで自己理解が深まります。</p>
            </div>
            <div class="tokuten__item tokuten__item2">
              <div class="title">ゾーンに入る5つのステップ</div>
              <p>すぐに実践できる具体的なゾーンメンタルの知恵をまとめた資料です。</p>
            </div>
            <div class="tokuten__item tokuten__item3">
              <div class="title">試合・練習前の<br>
                メンタルルーチン集</div>
              <p>パフォーマンスを最大限に発揮するための「心の準備」をサポートするためのガイドです。</p>
            </div>
          </div>
          <div class="cta01_cta cta">
            <p class="second-font cta__text cta__text-white">\ まずは<span class="highlight"><span class="number">60</span>分</span>で超集中状態を体感 /</p>
            <a href="contact.php" class="cta__button01">
              <img src="assets/img/cta-button01.png" class="cta__entry" alt="無料体験セッションを受ける" width="368" height="96"
                decoding="async" loading="lazy" />
            </a>
          </div>
        </div>
      </section>
      <!-- LINE友だち限定 -->
      <section class="line">
        <div class="inner">
          <h2 class="line__title center underline">LINE友だち限定</h2>
          <div class="line__img">
            <img src="assets/img/line.png" alt="" width="" height="" loading="lazy"
              decoding="async" class="" />
          </div>
          <div class="cta02_cta cta">
            <a href="https://lin.ee/BBzpQcc" class="cta__button02">
              <img src="assets/img/icon-line.png" class="cta__line" alt="line" width="59" height="56"
                decoding="async" loading="lazy" />
              <div class="cta__line-text">
                <span>メンタルを鍛えるスキルと<br>ゾーンに入り成果を出す方法</span><br>
                LINE登録者限定配信中!
              </div>
            </a>
          </div>
        </div>
      </section>
      <!-- 固定ボタン -->
      <!-- <div class="kotei-btn">
  <a href="contact.php">
    <img src="assets/img/cta-button01.png" class="bz-fv__entry" alt="Entry 今すぐ応募" width="373" height="102"
      decoding="async" loading="lazy" />
  </a>
</div> -->
    </main>
    <!-- フッター -->
    <footer class="bz-footer">
      <div class="bz-footer__inner inner">
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

<?php require 'footer.php'; ?>