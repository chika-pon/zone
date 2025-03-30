<!-- ここから -->
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

<?php require 'header.php'; ?>
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
  <div class="bz-page">
    <main class="bz-main">
      <!-- fv -->
      <div class="bz-fv bz-01 cta-exist" id="fv">
        <section class="bz-fv__main">
          <h1>
            <img src="assets/img/sp-logo.png" class="bz-fv__image" alt="ゾーンメンタルコーチング" width="414"
              height="52" decoding="async" />
          </h1>
          <div>
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
          <p class="p4 second-font underline">ハイパフォーマンスへ導く</p>
          <img src="assets/img/k04.png" alt="超集中状態のメンタルづくりで力を出し切る" width="414" height="478" loading="lazy"
            decoding="async" class="" />
        </div>
        <div class="bg-bk">
          <p class="p5 second-font center line-gr">ご存知ですか？</p>
          <h3 class="second-font center">
            <span class="f30">超集中状態</span> <span class="f26">（ゾーン）は</span><br>
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
          <div>
            <div class="content05__block">
              <p>トレーナーとして10年以上活躍</p>
              <p>選手として25年以上のキャリア</p>
              <p>子どもから大人まで 500名以上の指導実績</p>
            </div>
          </div>
          <img src="assets/img/k07.png" alt="Miracrea認定プロメンタルコーチ" width="341" height="146" loading="lazy"
            decoding="async" class="" />
          <ul class="content05__list">
            <li>JLPGA日本女子プロゴルフ協会所属選手指導</li>
            <li>RISEフライ級ランカー 指導</li>
            <li>元FIA-F4レーシングドライバー指導</li>
            <li>ミスユニバース日本大会出場選手指導</li>
            <li>常磐大学＆茨城県中小企業家同友会
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
          <p class="second-font center">NLP理論に基づく<br>ゾーンメンタルコーチング</p>
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
                  <p>NLP理論を用いた<br>
                    メンタルスキルの一例をご紹介</p>
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
          <section class="hidden">
            <div class="voice__inner">
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
                    <div class="voice__title">アコーディオン<br>
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
              <h3 class="card__title underline">20歳で空手全日本優勝、<br>
                海外での修行・指導実績も</h3>
              <div class="card__content">
                <p class="card__text">
                  私は8歳のときに見たアクション映画がきっかけで”強さ”に憧れ、13歳のときに...
                </p>
                <button class="card__open">
                  <span class="more">続きを読む</span>
                </button>
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
            </div>
            <div class="card">
              <h3 class="card__title underline">選手として、指導者として、親として</h3>
              <div class="card__content is-open" role="button" tabindex="0">
                <p class="card__text">
                  選手と指導者という立場を経験してきたなか、多くの子どもと触れ...
                </p>
                <span class="more">続きを読む</span>
              </div>
              <div class="card__content-hide">
                <p class="card__text">
                  選手と指導者という立場を経験してきたなか、多くの子どもと触れ合う機会がありました。子どもは心も体も柔軟で可能性に満ち溢れています。一方メンタルという点において、成長過程の子どもにはとても繊細な時期があります
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
              <h3 class="card__title underline">突然やってきた”超”集中状態</h3>
              <div class="card__content is-open" role="button" tabindex="0">
                <p class="card__text">
                  もちろんすべて順風満帆だったわけでなく、選手生活を送るなか挫折やスランプも...
                </p>
                <span class="more">続きを読む</span>
              </div>
              <div class="card__content-hide">
                <p class="card__text">
                  もちろんすべて順風満帆だったわけでなく、選手生活を送るなか挫折やスランプもあり、練習で取り組んできたことが本番でまったく発揮できないことは多々ありましたし、逆に驚くほど調子が良いときもありました。
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
              <h3 class="card__title underline">大怪我で気づいたメンタルの重要性</h3>
              <div class="card__content is-open" role="button" tabindex="0">
                <p class="card__text">
                  私はこれまで2度、選手生命に関わる大怪我をしました。たった3年の間に...
                </p>
                <span class="more">続きを読む</span>
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
                  このとき、パフォーマンスを最大限に発揮するためには、フィジカル面だけでなく「”メンタル”と”環境”を整えること」がとても重要であることに気付かされました。
                <p class="card__text">
                  この時期は敗戦が続き、メンタルも落ち込み、競技に楽しみを見出せなくなり、ただただ辛い日々でした。練習に復帰しても不安しかなく、ジムに行くことすら苦痛で、身体もまったく仕上がらないため、試合どころではありませんでした。
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
          <div class="message">MESSAGE</div>
          <!-- 動画 -->
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
          <h2 class="line__title">LINE友だち限定</h2>
          <div>
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


<!-- あなたのキャリアを飛躍させる -->
<section class="career">
  <div class="career__inner inner">
    <h2>
      <img src="assets/img/career01.png" alt="ここで得る経験があなたのキャリアを飛躍させる" width="270" height="227" loading="lazy"
        decoding="async" class="career__title" />
    </h2>
    <ul class="career__list">
      <li class="career__item">
        <img src="assets/img/career02.png" alt="No.01 未経験大歓迎 元業界日本一の会社出身のメンバーが０から教えます" width="370" height="155"
          loading="lazy" decoding="async" class="career__item-image" />
      </li>
      <li class="career__item">
        <img src="assets/img/career03.png" alt="No.02 平均月収50万円 業界トップクラス! 入社半年以内の 社員給与額" width="370" height="155"
          loading="lazy" decoding="async" class="career__item-image" />
      </li>
      <li class="career__item">
        <img src="assets/img/career04.png" alt="No.03 一生物の営業スキル 急成長中の業界だからこそ得られる" width="370" height="155"
          loading="lazy" decoding="async" class="career__item-image" />
      </li>
    </ul>
    <p class="career__note">※インセンティブを含む金額です</p>
  </div>
</section>

<!-- オフィス -->
<section class="office">
  <h2 class="office__title">
    <img src="assets/img/office01.png" alt="晴海トリトンスクエアオフィスタワーの15階に位置する清潔で洗練されたオフィス" width="335" height="108"
      loading="lazy" decoding="async" class="office__title-image">
  </h2>
  <!-- 自動スライダー 左に流れる -->
  <div class="office__slider">
    <div id="splide01" class="splide">
      <div class="splide__track">
        <ul class="splide__list">
          <li class="splide__slide">
            <img src="assets/img/office-slide01.png" alt="モダンなオフィスのラウンジエリア。ボックスシートとテーブルが並び、奥にはカウンター席がある。"
              width="197" height="292" loading="lazy" decoding="async" class="splide__image" />
          </li>
          <li class="splide__slide">
            <img src="assets/img/office-slide02.png" alt="ナチュラルなデザインのオフィスカウンター。木製のカウンターとスツールが並び、壁には丸い照明が配置されている。"
              width="197" height="292" loading="lazy" decoding="async" class="splide__image" />
          </li>
          <li class="splide__slide">
            <img src="assets/img/office-slide03.png" alt="シンプルで落ち着いた会議スペース。長方形の木製テーブルと白いチェアが配置されている。" width="197"
              height="292" loading="lazy" decoding="async" class="splide__image" />
          </li>
        </ul>
      </div>
    </div>
    <p class="office__slider-text second-font">Office</p>
  </div>
</section>

<!-- どんな会社 -->
<section class="company">
  <div class="company__title-box">
    <h2 class="company__title">
      <img src="assets/img/company01.png" alt="株式会社レバレッジベースってどんな会社" width="414" height="478" loading="lazy"
        decoding="async" class="company__title-image" />
    </h2>
    <p class="company__text">
      私たちは、再生可能エネルギーを代表する太陽光発電などの省エネ機器の販売をメインで行う会社です。
    </p>
  </div>
  <img src="assets/img/company02.jpg" alt="たくさんの社員が集まってガッツポーズをしている" width="414" height="288" loading="lazy"
    decoding="async" class="company__image01" />
  <h3>
    <img src="assets/img/company03.png" alt="お客様のお悩みやご希望に応じてお客様のお悩みやご希望に応じて" width="349" height="118"
      loading="lazy" decoding="async" class="company__image02" />
  </h3>
</section>

<!-- こんな風に考えていませんか？ -->
<section class="thinking">
  <h2 class="thinking__title">
    <img src="assets/img/thinking01.png" alt="こんな風に考えていませんか？" width="219" height="87" loading="lazy"
      decoding="async" class="thinking__title-image" />
  </h2>
  <ul class="thinking__list">
    <li class="thinking__item">
      <img src="assets/img/thinking02.png" alt="ソーラーパネルがついた屋根の様子" width="204" height="169" loading="lazy"
        decoding="async" class="thinking__item-image" />
      <p class="thinking__item-text">
        <span class="small">この業界について</span><br />何も知識がない
      </p>
    </li>
    <li class="thinking__item">
      <img src="assets/img/thinking03.png" alt="女性社員がお客様にパソコンを見せながら提案している様子" width="204" height="169"
        loading="lazy" decoding="async" class="thinking__item-image" />
      <p class="thinking__item-text">
        <span class="small">提案型の営業を</span><br />やったことがない
      </p>
    </li>
    <li class="thinking__item">
      <img src="assets/img/thinking04.png" alt="男性社員が笑顔で電話をしている様子" width="177" height="169" loading="lazy"
        decoding="async" class="thinking__item-image" />
      <p class="thinking__item-text">
        <span class="small">高単価商材の業界は</span><br />ハードルが高そう
      </p>
    </li>
  </ul>
  <img src="assets/img/thinking-vertical.png" alt="Are you thinking?" width="536" height="73" loading="lazy"
    decoding="async" class="thinking__image" />
  <img src="assets/img/thinking-rectangle.png" alt="赤い五角形の背景" width="414" height="141" loading="lazy"
    decoding="async" class="thinking__rectangle" />
</section>

<!-- CTA01 -->
<div class="cta01 cta-exist">
  <img src="assets/img/cta-image.png" alt="0からしっかり教えるので大丈夫です!" width="359" height="350" loading="lazy"
    decoding="async" class="cta01__image" />
  <div class="cta01__cta cta">
    <p class="cta__text cta__text--white">2025年 積極採用中</p>
    <a href="#contact" class="cta__button cta__button01">
      <img src="assets/img/cta-button01.png" class="cta__entry" alt="Entry 今すぐ応募" width="373" height="102"
        decoding="async" loading="lazy" />
    </a>
  </div>
</div>

<!-- 最高月収 -->
<section class="income">
  <div class="income__inner inner">
    <h2 class="income__title">
      <img src="assets/img/income01.png" alt="最高月収" width="82" height="224" loading="lazy" decoding="async"
        class="income__title-image" />
    </h2>
    <div class="income__right">
      <ul class="income__list">
        <li class="income__item">
          <p class="income__item-text">アポインター</p>
          <img src="assets/img/income02.png" alt="月収120万円" width="194" height="82" loading="lazy" decoding="async"
            class="income__item-image" />
        </li>
        <li class="income__item">
          <p class="income__item-text">クローザー</p>
          <img src="assets/img/income03.png" alt="月収460万円" width="194" height="82" loading="lazy" decoding="async"
            class="income__item-image" />
        </li>
      </ul>
      <p class="income__note">※インセンティブを含む金額です。</p>
    </div>
  </div>
  <img src="assets/img/income-bg.png" alt="" width="258" height="259" loading="lazy" decoding="async"
    class="income__bg" />
</section>

<!-- ビジネスモデル -->
<section class="business-model">
  <div class="business-model__inner inner">
    <h2 class="business-model__title">
      <img src="assets/img/business-model01.png" alt="高収入を実現する独自のビジネスモデル" width="331" height="140" loading="lazy"
        decoding="async" class="business-model__title-iamge" />
    </h2>
    <ul class="business-model__list">
      <li class="business-model__item01">
        <img src="assets/img/business-model02.png" alt="男性社員が2人で話し合っている様子" width="311" height="185" loading="lazy"
          decoding="async" class="business-model__item-image01" />
        <img src="assets/img/business-model03.png" alt="REASON. 01 業界トップ営業マンによる再現性の高い営業戦略" width="285" height="98"
          loading="lazy" decoding="async" class="business-model__item-image02" />
        <p class="business-model__item-text">
          初めて営業に挑戦する方でも安心して成果を出せるよう、具体的な営業手法を基礎から指導します。<br />
          経験豊富な社員が培った実践的なノウハウを共有することで、短期間での成長を実現します。
        </p>
        <img src="assets/img/business-model-bg01.png" alt="" width="370" height="548" loading="lazy"
          decoding="async" class="business-model__item-bg01" />
      </li>
      <li class="business-model__item02">
        <img src="assets/img/business-model04.png" alt="ソーラーパネルがついた家の外観" width="311" height="185" loading="lazy"
          decoding="async" class="business-model__item-image03" />
        <img src="assets/img/business-model05.png" alt="REASON. 02 高単価の商材と安定した市場ニーズ" width="254" height="95"
          loading="lazy" decoding="async" class="business-model__item-image04" />
        <p class="business-model__item-text">
          再生可能エネルギー事業は、国が推奨する成長分野です。補助金制度が充実しており、導入のハードルが低い一方で、1件あたりの契約単価が高いため、契約が直接大きな収入につながります。<br />
          さらに、環境意識や防災意識の高まりにより安定した需要が見込める市場環境も大きな追い風です。
        </p>
        <img src="assets/img/business-model-bg02.png" alt="" width="370" height="614" loading="lazy"
          decoding="async" class="business-model__item-bg02" />
      </li>
      <li class="business-model__item03">
        <img src="assets/img/business-model06.png" alt="女性社員がパソコンに向かって作業している様子" width="311" height="185"
          loading="lazy" decoding="async" class="business-model__item-image05" />
        <img src="assets/img/business-model07.png" alt="REASON. 03 努力が正当に評価される高インセンティブ制度" width="285" height="101"
          loading="lazy" decoding="async" class="business-model__item-image06" />
        <p class="business-model__item-text">
          成果に応じた明確な報酬体系を採用しており、契約数や金額が直接収入に反映されます。成果を出した分だけ収入が増える仕組みで、目標に向かう意欲をしっかりサポートします。
        </p>
        <img src="assets/img/business-model-bg03.png" alt="" width="370" height="523" loading="lazy"
          decoding="async" class="business-model__item-bg03" />
      </li>
    </ul>
  </div>
</section>

<!-- こんな方が向いてます -->
<section class="suit">
  <div class="suit__inner inner">
    <h2 class="suit__title">
      <img src="assets/img/suit01.png" alt="レバレッジベースはこんな方が向いています" width="196" height="325" loading="lazy"
        decoding="async" class="suit__title-image" />
    </h2>
    <div class="suit__list-wrapper">
      <ul class="suit__list">
        <li class="suit__item">
          <h3 class="suit__item-title second-font">
            自分の可能性を<br />
            広げたい方
          </h3>
          <p class="suit__item-text">
            「もっと成長したい」「市場価値を高めたい」と考えている方にピッタリの環境です。未経験でも一から学べる研修制度と、成果を正当に評価する仕組みが整っています。
          </p>
        </li>
        <li class="suit__item">
          <h3 class="suit__item-title second-font">
            野心があり、<br />
            もっと自分を<br />
            成長させたい方
          </h3>
          <p class="suit__item-text">
            自分の力を試したい、挑戦することで成長したいという意欲的な方を歓迎します。負けず嫌いでポジティブなマインドを持つ方は、成果を出しやすい環境です。
          </p>
        </li>
        <li class="suit__item">
          <h3 class="suit__item-title second-font">
            チームで目標を<br />
            追いかけるのが<br />
            好きな方
          </h3>
          <p class="suit__item-text">
            個人プレーだけでなく、仲間と一緒に目標を達成する喜びを感じられる方にも最適です。一体感のある職場で、みんなとともに成長を楽しむことができます。
          </p>
        </li>
        <li class="suit__item">
          <h3 class="suit__item-title second-font">
            営業スキルを<br />
            身につけたい方
          </h3>
          <p class="suit__item-text">
            元業界トップの営業マンが指導するので、未経験でも圧倒的なスキルを身につけられる環境です。将来のキャリアアップや独立を目指す方には、この経験が大きな武器になるでしょう。
          </p>
        </li>
        <li class="suit__item">
          <h3 class="suit__item-title second-font">
            「稼ぎたい!」<br />
            という<br />
            熱い想いがある方
          </h3>
          <p class="suit__item-text">
            個人プレーだけでなく、仲間と一緒に目標を達成する喜びを感じられる方にも最適です。一体感のある職場で、みんなとともに成長を楽しむことができます。
          </p>
        </li>
      </ul>
      <img src="assets/img/suit-vertical.png" alt="Are you thinking?" width="253" height="23" loading="lazy"
        decoding="async" class="suit__vertical" />
    </div>
  </div>
  <!-- <img src="assets/img/suit-bg.png" alt="" width="414" height="1976" loading="lazy" decoding="async"
          class="suit__bg" /> -->
</section>

<!-- 人生を大きく左右する -->
<section class="influence">
  <div class="influence__inner inner">
    <h2 class="influence__title">
      <img src="assets/img/influence01.png" alt="若いうちの経験がその後の人生を大きく左右する" width="323" height="254" loading="lazy"
        decoding="async" class="influence__title-image" />
    </h2>
    <p class="influence__text">
      20代は、人生の中で<br />
      最も多くの可能性を試せる時期です。
    </p>
    <img src="assets/img/influence01-2.png" alt="だからこそ" width="173" height="42" loading="lazy" decoding="async"
      class="influence__text-image" />
    <p class="influence__text">
      この時期に「自分の実力で確実に稼ぐ力」「汎用性の高い営業スキル」を身につけることは、将来の選択肢を広げ、自分の力で人生を切り拓いていく大きな武器になります。
    </p>
  </div>
  <img src="assets/img/influence02.jpg" alt="1人の男性がガッツポーズして、他の社員が拍手をしている様子" width="414" height="278"
    loading="lazy" decoding="async" class="influence__image01" />
  <div class="influence__inner02 inner">
    <h2 class="influence__title02">
      <img src="assets/img/influence03.png" alt="20代でできた差は一生かけても埋まらない" width="353" height="225" loading="lazy"
        decoding="async" class="influence__title-image02" />
    </h2>
    <img src="assets/img/influence04.png" alt="一生埋まらない実力差を表すグラフ 差が出る要因は、努力以前に「どこで働くか」「だれと働くか」" width="370"
      height="335" loading="lazy" decoding="async" class="influence__image02" />
    <p class="influence__text02">
      将来の成功の要因として、本人の努力はもちろん、その前の前提として
    </p>
    <p class="influence__text02 bold">
      「どこで働くか」と「だれと働くか」
    </p>
    <p class="influence__text02">
      という環境的な要素が最も重要といっても過言ではないでしょう。
    </p>
    <h3 class="influence__sub-title">
      成長できる職場と仲間を求めるならここ
    </h3>
  </div>
</section>

<!-- CTA02 -->
<div class="cta02 cta-exist">
  <img src="assets/img/cta-image02.png" alt="僕達と一緒に後悔のない20代を過ごしませんか？" width="367" height="387" loading="lazy"
    decoding="async" class="cta02__image" />
  <div class="cta02__cta cta">
    <p class="cta__text cta__text--white">2025年 積極採用中</p>
    <a href="#contact" class="cta__button cta__button02">
      <img src="assets/img/cta-button01.png" class="cta__entry" alt="Entry 今すぐ応募" width="373" height="102"
        decoding="async" loading="lazy" />
    </a>
  </div>
</div>

<!-- 福利厚生 -->
<section class="benefit">
  <div class="benefit__inner inner">
    <h2 class="benefit__title">
      <img src="assets/img/benefit01.png" alt="頑張る社員を全力で応援! 福利厚生" width="126" height="260" loading="lazy"
        decoding="async" class="benefit__title-image" />
    </h2>
    <ul class="benefit__list">
      <li class="benefit__item">
        <h3 class="benefit__item-title">インセンティブ制度</h3>
        <p class="benefit__item-text">
          成果に応じた高いインセンティブを支給。<br />
          月収400万円以上も目指せる仕組みで、努力がしっかり報われます。
        </p>
      </li>
      <li class="benefit__item">
        <h3 class="benefit__item-title">家賃補助</h3>
        <p class="benefit__item-text">
          役職に応じて、月額5万円〜20万円の家賃補助が支給されます。社員が快適に働ける環境を整えています。
        </p>
      </li>
      <li class="benefit__item">
        <h3 class="benefit__item-title">独立支援制度</h3>
        <p class="benefit__item-text">
          一定の実績を積んだ社員には、独立のサポートを提供。新しい事業を立ち上げたい方を全面的に支援します。
        </p>
      </li>
      <li class="benefit__item">
        <h3 class="benefit__item-title">社員旅行</h3>
        <p class="benefit__item-text">
          年に1回、ハワイやマカオ、グアムなどで過ごします。リフレッシュしながらチームと仲を深められます。
        </p>
      </li>
    </ul>
  </div>
</section>

<!-- 1日ルーティン -->
<section class="routine">
  <h2 class="routine__title">
    <img src="assets/img/routine01.png" alt="密着取材 営業職、髙橋魅杏さんの1日ルーティン" width="414" height="377" loading="lazy"
      decoding="async" class="routine__title-image" />
  </h2>
  <div class="routine__inner inner">
    <div class="routine__contents">
      <img src="assets/img/routine-line.png" alt="" width="10" height="1893" loading="lazy" decoding="async"
        class="routine__line" />
      <ul class="routine__list">
        <li class="routine__item">
          <h3 class="routine__item-title">
            11:30 出社・先輩とロープレ
          </h3>
          <img src="assets/img/routine02.png" alt="先輩社員とロープレする高橋さん" width="324" height="211" loading="lazy"
            decoding="async" class="routine__item-image" />
          <div class="routine__item-box">
            <img src="assets/img/routine03.png" alt="高橋さんが話している様子" width="65" height="65" loading="lazy"
              decoding="async" class="routine__item-left" />
            <p class="routine__item-text">
              <span class="bold">ゆっくり目の出社で体力も万全！</span><br />
              オフィスに着いたら、資料の準備や先輩とのロープレを行います。
            </p>
          </div>
        </li>
        <li class="routine__item">
          <h3 class="routine__item-title">14:00 休憩タイム</h3>
          <img src="assets/img/routine04.png" alt="社員で楽しく休憩している様子" width="324" height="211" loading="lazy"
            decoding="async" class="routine__item-image routine__item-image02" />
          <div class="routine__item-box routine__item-box02">
            <img src="assets/img/routine03.png" alt="高橋さんが話している様子" width="65" height="65" loading="lazy"
              decoding="async" class="routine__item-left" />
            <p class="routine__item-text">
              <span class="bold">午後の営業に向けてエネルギーチャージ</span><br />
              社内で遅めのランチを取りながら、同僚と情報交換をするリラックスタイムです。
            </p>
          </div>
        </li>
        <li class="routine__item routine__item02">
          <h3 class="routine__item-title">17:00 客宅へ訪問スタート</h3>
          <img src="assets/img/routine05.png" alt="お客様に笑顔で説明をしている高橋さん" width="324" height="211" loading="lazy"
            decoding="async" class="routine__item-image routine__item-image03" />
          <div class="routine__item-box routine__item-box03">
            <img src="assets/img/routine03.png" alt="高橋さんが話している様子" width="65" height="65" loading="lazy"
              decoding="async" class="routine__item-left" />
            <p class="routine__item-text">
              この時間帯から訪問を開始。飛び込み営業でお客様と直接対話し、ニーズをヒアリングします。<span
                class="bold bold02">お客様との信頼を築く丁寧なアプローチを大切にしています。</span>
            </p>
          </div>
        </li>
        <li class="routine__item">
          <h3 class="routine__item-title">20:30 帰社・結果報告</h3>
          <img src="assets/img/routine06.png" alt="同僚や先輩と結果報告をしている様子" width="324" height="211" loading="lazy"
            decoding="async" class="routine__item-image routine__item-image04" />
          <div class="routine__item-box routine__item-box04">
            <img src="assets/img/routine03.png" alt="高橋さんが話している様子" width="65" height="65" loading="lazy"
              decoding="async" class="routine__item-left" />
            <p class="routine__item-text">
              オフィスに戻り、1日の営業結果を報告します。<span
                class="bold bold02">成功事例や改善点を先輩と共有し、次の訪問計画に役立てます。</span>この振り返りが成果を出すカギです！
            </p>
          </div>
        </li>
        <li class="routine__item routine__item05">
          <h3 class="routine__item-title large">21:30 退勤</h3>
          <img src="assets/img/routine07.png" alt="同僚と帰宅する様子" width="324" height="211" loading="lazy"
            decoding="async" class="routine__item-image routine__item-image05" />
          <div class="routine__item-box routine__item-box05">
            <img src="assets/img/routine03.png" alt="高橋さんが話している様子" width="65" height="65" loading="lazy"
              decoding="async" class="routine__item-left" />
            <p class="routine__item-text">
              達成感を胸に、リフレッシュしながら帰宅。<span class="bold">しっかり休んで</span>翌日に備えます。
            </p>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <img src="assets/img/routine08.png" alt="Employee comment お客様との会話から学びが多く、日々成長を実感しています。やりがいと達成感が最高です！ 髙橋魅杏さん(23)"
    width="353" height="267" loading="lazy" decoding="async" class="routine__image" />
</section>

<!-- 入社後インタビュー -->
<section class="interview">
  <div class="interview__inner inner">
    <h2 class="interview__title">
      <img src="assets/img/interview01.png" alt="頑張る社員を全力で応援! 入社後インタビュー" width="198" height="326" loading="lazy"
        decoding="async" class="interview__title-image" />
    </h2>
    <div class="interview__box">
      <img src="assets/img/interview02.png" alt="インターン 室井 耀さん Muroi Hikaru 最高月収50万 結果が求められる世界で即戦力として活躍できる"
        width="362" height="358" loading="lazy" decoding="async" class="interview__box-main-image" />
      <div class="interview__box-contents">
        <h3 class="interview__box-title">なぜレバレッジベースに？</h3>
        <p class="interview__box-text">
          「とにかく頑張った分だけ稼げる」成果に対してしっかり対価がある事から入社を決めました。<br />
          僕が若い学生のうちから稼ぎたい理由は2つ。<br />まず、ここまで育ててくれた両親に親孝行をしたかった！次に、将来家族が出来た時に幸せにしてあげられる様に、まずは自分自身が幸せになる為の手段として、とにかく稼ぐスキルを身に付けたかったから。平均年齢が若い企業なので風通しが良く働きやすい楽しい環境にも魅力を感じたのが決め手でした。あと・・・大学が近くて1限後にそのまま出社しやすかった(笑)
        </p>
        <img src="assets/img/interview03.png" alt="笑顔で話す室井さん" width="327" height="208" loading="lazy"
          decoding="async" class="interview__box-image" />
      </div>
      <div class="interview__box-contents">
        <h3 class="interview__box-title interview__box-title--high">
          実際にインターンをしてみて<br />
          どう感じていますか？
        </h3>
        <p class="interview__box-text">
          最初は緊張して、頭が真っ白になり話しが脱線したり飛んだりしていました。ですが、インターン1名に対しチームリーダーやマネジャーがメンターに付いてサッとフォローしてくれます。社員同等に時間を割いてノウハウをレクチャーして貰えるので、自ずとやる気が出てきます。<br />"今の自分のおかげで将来の自分の成長スピードがどれだけ変わるか”を実感し楽しみながら奮闘中です！
        </p>
        <img src="assets/img/interview04.png" alt="先輩社員と話をする室井さん" width="327" height="208" loading="lazy"
          decoding="async" class="interview__box-image" />
      </div>
      <div class="interview__box-contents">
        <h3 class="interview__box-title interview__box-title--high">
          この経験が将来に<br />
          どう活かせると思いますか？
        </h3>
        <p class="interview__box-text">
          個人営業なので、メリット以上に自分の人間性やキャラクターを見て決められることも多いので、コミュニケーション能力やビジネスの基礎が身に付き「度胸」が鍛えられます！<br />
          何事も泥臭く継続して目標を達成していく喜びを知っているので、結果が求められる世界で即戦力として活躍できると思っています。
        </p>
        <img src="assets/img/interview05.png" alt="同僚同士で笑顔で話をする室井さん" width="327" height="208" loading="lazy"
          decoding="async" class="interview__box-image" />
      </div>
      <img src="assets/img/interview-bg01.png" alt="" width="370" height="2027" loading="lazy" decoding="async"
        class="interview__bg01" />
    </div>
    <div class="interview__box">
      <img src="assets/img/interview06.png" alt="営業職 木曽 隆斗さん Kiso Ryuto 最高月収150万 前職の壁を越え新たな環境で成長を実感" width="362"
        height="354" loading="lazy" decoding="async" class="interview__box-main-image" />
      <div class="interview__box-contents">
        <h3 class="interview__box-title">なぜレバレッジベースに？</h3>
        <p class="interview__box-text">
          やりたい事や"なりたい自分"の理想像や夢が漠然としていて、このままで良いのか・・・と感じていたタイミングでこの会社に出会い直感で興味を持ち、面談や面接を通して、自分の身一つで稼いでいけるスキルを身に付けたいと思うようになりました。<br />
          仕事を通して成長できるか？成長の幅を広げて行けるか？と自分に問い、稼げて、成長を止めずに追い求めることができると確信し入社を決めました！
        </p>
        <img src="assets/img/interview07.png" alt="笑顔で話している木曽さん" width="327" height="208" loading="lazy"
          decoding="async" class="interview__box-image" />
      </div>
      <div class="interview__box-contents">
        <h3 class="interview__box-title interview__box-title--high">
          レバレッジベースの<br />
          どこに魅力を感じましたか？
        </h3>
        <p class="interview__box-text">
          社員ひとりひとりが、日々"なりたい自分"に向かって本気で仕事に向き合っているところ。だからこそ辛い事や失敗も勿論あるけれど、次の日にはそれを取り返せる。<br />
          チャレンジしやすい社風だからこそ、仲間と共に熱くなれる魅力がここにありました。
        </p>
        <img src="assets/img/interview08.png" alt="先輩社員と話をする木曽さん" width="327" height="208" loading="lazy"
          decoding="async" class="interview__box-image" />
      </div>
      <div class="interview__box-contents interview__box-contents--last">
        <h3 class="interview__box-title">現在の目標は何ですか？</h3>
        <p class="interview__box-text interview__box-text--last">
          班を持ちスピード感のある仕事が出来て、今まで気づかなかった自分の魅力や強みなどに気づくことが出来ました。<br />
          そこから目標が明確化し、直近としては、まず年収2500万達成すること。とにかく稼いでやりたい事の選択肢を増やす。<br>
          身体を動かし営業力をつけた後に、頭を動かしマネジメント力を身に付けお金と時間に余裕を持った豊かな人生にしていきます！
        </p>
        <img src="assets/img/interview09.png" alt="同僚同士で笑顔で話をする室井さん" width="327" height="208" loading="lazy"
          decoding="async" class="interview__box-image interview__box-image--last" />
      </div>
      <img src="assets/img/interview-bg02.png" alt="" width="370" height="1985" loading="lazy" decoding="async"
        class="interview__bg02" />
    </div>
  </div>
</section>

<!-- 快適でお洒落なオフィスへ出勤 -->
<section class="environment">
  <div class="environment__inner inner">
    <div class="environment__contents">
      <h2 class="environment__contents-title">
        まるでカフェ<br />
        快適でお洒落なオフィスへ出勤
      </h2>
      <div class="environment__box">
        <img src="assets/img/interview10.png" alt="並んで出勤する2人の男性社員" width="249" height="196" loading="lazy"
          decoding="async" class="environment__box-image" />
        <img src="assets/img/interview11.png" alt="environment" width="17" height="196" loading="lazy"
          decoding="async" class="environment__box-text" />
      </div>
    </div>
    <div class="environment__contents">
      <h2 class="environment__contents-title">
        自分の成果が正当に評価される<br />
        やりがいある環境で
      </h2>
      <div class="environment__box environment__box--reverse">
        <img src="assets/img/interview12.png" alt="社員同士で話している様子" width="249" height="196" loading="lazy"
          decoding="async" class="environment__box-image" />
        <img src="assets/img/interview13.png" alt="assessment" width="17" height="196" loading="lazy"
          decoding="async" class="environment__box-text" />
      </div>
    </div>
    <div class="environment__contents environment__contents03">
      <h2 class="environment__contents-title">
        仲間や先輩と支え合いながら
      </h2>
      <div class="environment__box">
        <img src="assets/img/interview14.png" alt="4人の社員が仲良く並んでいる様子" width="249" height="196" loading="lazy"
          decoding="async" class="environment__box-image" />
        <img src="assets/img/interview15.png" alt="support" width="17" height="196" loading="lazy"
          decoding="async" class="environment__box-text" />
      </div>
    </div>
    <div class="environment__contents">
      <h2 class="environment__contents-title">
        お客様の課題に<br />
        真摯に向き合いご提案をする
      </h2>
      <div class="environment__box environment__box--reverse">
        <img src="assets/img/interview16.png" alt="お客様と真摯に話をしている様子" width="249" height="196" loading="lazy"
          decoding="async" class="environment__box-image" />
        <img src="assets/img/interview17.png" alt="suggestion" width="17" height="196" loading="lazy"
          decoding="async" class="environment__box-text" />
      </div>
    </div>
    <h3 class="environment__welcome">
      成長できる環境を求める方大歓迎
    </h3>
    <p class="environment__text">ここでの経験が</p>
    <h4 class="environment__heading second-font">
      あなたの<span class="large">人生</span>を<br />
      大きく変えます
    </h4>
  </div>
</section>

<!-- CTA03 -->
<div class="cta03 cta-exist">
  <img src="assets/img/cta-image03.png" alt="僕達と一緒に心から仕事を楽しみませんか？" width="395" height="390" loading="lazy"
    decoding="async" class="cta03__image" />
  <div class="cta03__cta cta">
    <p class="cta__text cta__text--white">2025年 積極採用中</p>
    <a href="#contact" class="cta__button cta__button03">
      <img src="assets/img/cta-button01.png" class="cta__entry" alt="Entry 今すぐ応募" width="373" height="102"
        decoding="async" loading="lazy" />
    </a>
  </div>
</div>

<!-- 採用までの流れ -->
<section class="flow">
  <div class="flow__inner inner">
    <h2 class="flow__title second-font">採用までの流れ</h2>
    <ul class="flow__list">
      <li class="flow__item">
        <img src="assets/img/flow01.png" alt="Step01" width="83" height="27" loading="lazy" decoding="async"
          class="flow__item-number" />
        <h3 class="flow__item-title flow__item-title--large">エントリー</h3>
        <p class="flow__item-text">
          まずは応募フォームから<br />
          必要情報を入力してご応募ください。
        </p>
        <a href="#contact">
          <img src="assets/img/flow-cta-button.png" alt="Entry 今すぐ応募" width="215" height="59" loading="lazy"
            decoding="async" class="flow__item-button" />
        </a>
        <img src="assets/img/flow-triangle.png" alt="下へ向く三角形" width="38" height="18" loading="lazy"
          decoding="async" class="flow__triangle" />
      </li>
      <li class="flow__item flow__item02">
        <img src="assets/img/flow02.png" alt="Step02" width="83" height="27" loading="lazy" decoding="async"
          class="flow__item-number" />
        <h3 class="flow__item-title">面接のご案内</h3>
        <p class="flow__item-text">
          応募後、早ければ数時間以内に面接のご案内をお送りします。スケジュール調整が可能で、希望の日程で対応します。
        </p>
        <img src="assets/img/flow-triangle.png" alt="下へ向く三角形" width="38" height="18" loading="lazy"
          decoding="async" class="flow__triangle" />
      </li>
      <li class="flow__item flow__item03">
        <img src="assets/img/flow03.png" alt="Step03" width="83" height="27" loading="lazy" decoding="async"
          class="flow__item-number" />
        <div class="flow__item-box">
          <div class="flow__item-left">
            <p class="flow__item-heading">中途の方</p>
            <h3 class="flow__item-title flow__item-title--left">一次面接のみ</h3>
            <p class="flow__item-text flow__item-text--left">
              中途の方は、一度の面接で完結します。
            </p>
          </div>
          <div class="flow__item-right">
            <p class="flow__item-heading flow__item-heading--right">新卒・学生の方</p>
            <h3 class="flow__item-title flow__item-title--right">
              一次面接<br />
              二次面接
            </h3>
            <p class="flow__item-text flow__item-text--right">
              一次面接通過後、<br />
              希望者には座談会を実施いたします。
            </p>
          </div>
        </div>
        <img src="assets/img/flow-triangle.png" alt="下へ向く三角形" width="38" height="18" loading="lazy"
          decoding="async" class="flow__triangle" />
      </li>
      <li class="flow__item flow__item04">
        <img src="assets/img/flow04.png" alt="Step04" width="83" height="27" loading="lazy" decoding="async"
          class="flow__item-number" />
        <h3 class="flow__item-title">内定</h3>
        <p class="flow__item-text flow__item-text--04">
          面接後、最短当日〜3日以内で結果のご連絡をいたします。
        </p>
      </li>
    </ul>
  </div>
</section>

<!-- メッセージ -->
<section class="message">
  <h2 class="message__title">
    <img src="assets/img/message01.png" alt="営業力で豊かな人生とキャリアを築きたいあなたへ 代表取締役 大西 主将" width="414" height="519"
      loading="lazy" decoding="async" class="message__title-image" />
  </h2>
  <div class="message__inner inner">
    <h3 class="message__heading">メッセージ</h3>
    <div class="message__box">
      <h4 class="message__box-title second-font">仕事選びの重要性</h4>
      <p class="message__box-text">
        まず初めに、仕事は目的ではなく手段です。そのため、仕事選びには「なぜその仕事をしたいのか」という理由が重要です。この理由が特になく仕事をしていて出世や成功を収めている人はほとんどいないと考えます。<br />
        仕事をする中で得られるスキルを使って将来何を叶えたいのか、得られる報酬や待遇でどんな生活をしたいのか、得られるやりがいでどういう心情で過ごしたいのかなど。また、今はまだ将来のビジョンが定まっていなくても、選択肢を広げるために今何をしておくのかの優先順位を決めること。当社では、それを営業という仕事で叶えていく環境を用意しています。
      </p>
    </div>
    <div class="message__box">
      <h4 class="message__box-title message__box-title02 second-font">
        営業力の多面的な価値と<br />
        人生への影響
      </h4>
      <p class="message__box-text">
        営業力は、モノを売る力だけでなく、自分の思い通りに物事を推し進める力でもあります。販売力を培って売上を作れるのも一つ、お客様の課題解決ができる力も一つ、人を巻き込んで大きな力を生み出すのも一つ。若いうちにお金を稼いでできることの範囲を広げるのも一つ。選択肢の多さが豊かな人生のバロメーターとなります。<br />
        やりがいを重視してやりたいことをやるのも良いですし、得意なことを仕事にするのも良いでしょう。営業に向いている人は、話が上手い人や頭が良い人だけではなく、見た目の良し悪しで決まるわけでもありません。目的意識がはっきりとしており、愚直に行動できる人、つまりスキルやスペックよりもマインドが大事です。
      </p>
    </div>
    <div class="message__box">
      <h4 class="message__box-title message__box-title03 second-font">
        営業に向いている人材と<br />
        若いうちの成功のメリット
      </h4>
      <p class="message__box-text">
        これまでの人生にやり残したことがあり反骨精神で燃えられる人も、これまでの人生が順調で自分に自信がある人も、どちらも営業に向いています。満足のラインが人並みで安定やゆとりを求めているなら、わざわざ営業をやる必要はありません。<br />
        まだ若くエネルギーが余っていて大きな夢や目標を持っているが頑張り方が分からない人や、頑張れる環境を求めている人は、結果主義で勝負の世界に挑み、他では得られない対価を追求するのも良いでしょう。40歳50歳になってからお金に余裕が出てくるより、20代でお金に余裕があると選択肢の多さは大きく異なります。若いうちの成功体験が30代40代をより加速させていくので、そんな20代を経験してみたい方はぜひご応募ください。<br />
        人生にレバレッジをかける時間と環境を提供することを約束します。
      </p>
    </div>
  </div>
</section>

<!-- 会社概要 -->
<section class="company-info">
  <div class="company-info__inner inner">
    <h2 class="company-info__title second-font">会社概要</h2>
    <dl class="company-info__list">
      <div class="company-info__row">
        <dt>会社名</dt>
        <p>株式会社レバレッジベース</p>
      </div>
      <div class="company-info__row">
        <dt>所在地</dt>
        <p>
          東京都中央区晴海１丁目８番８号<br />
          晴海トリトンスクエアオフィスタワーＷ１５階
        </p>
      </div>
      <div class="company-info__row">
        <dt>設立</dt>
        <p>2024年5月31日</p>
      </div>
      <div class="company-info__row">
        <dt>代表者</dt>
        <p>代表取締役 大西 主将</p>
      </div>
      <div class="company-info__row">
        <dt>従業員数</dt>
        <p>30名</p>
      </div>
      <div class="company-info__row">
        <dt>事業内容</dt>
        <p>
        <ul>
          <li>再生可能エネルギー関連商材の提案営業</li>
          <li>太陽光発電システム、蓄電池、オール電化システムの販売</li>
          <li>営業職特化の新卒採用支援サービス</li>
        </ul>
        </p>
      </div>
      <div class="company-info__row">
        <dt>お問い合わせ先</dt>
        <p>
          <a href="https://lin.ee/HLcIuf5" class="company-info__link" target="_blank">公式LINE</a>
          からお問い合わせください
        </p>
      </div>
    </dl>
  </div>
</section>

<!-- 募集要項 -->
<section class="job-info">
  <div class="job-info__inner inner">
    <h2 class="job-info__title second-font">募集要項</h2>
    <dl class="job-info__list">
      <div class="job-info__row">
        <dt>募集職種</dt>
        <p>営業職（新卒・中途・インターン）</p>
      </div>
      <div class="job-info__row">
        <dt>仕事内容</dt>
        <p>
          再生可能エネルギー商材の提案営業。<br />
          飛び込み営業を中心に、お客様のニーズに応じた最適なソリューションを提供します。<br />
          営業未経験でも、基礎から学べる研修制度で安心してスタートできます。
        </p>
      </div>
      <div class="job-info__row">
        <dt>応募資格</dt>
        <p>
        <ul>
          <li>高卒以上（未成年不可）</li>
          <li>社会人経験、営業経験不問</li>
          <li>運転免許（インターン生は除く）</li>
          <li>成長意欲の高い方</li>
        </ul>
        </p>
      </div>
      <div class="job-info__row">
        <dt>勤務地</dt>
        <p>東京</p>
      </div>
      <div class="job-info__row">
        <dt>勤務時間</dt>
        <p>
          11:30〜21:30（休憩2時間） <br><span class="small">※業務によりスケジュール調整可</span>
        </p>
      </div>
      <div class="job-info__row">
        <dt>給与</dt>
        <p>
        <ul>
          <li>基本給：30万円〜<br />
            <span class="small">（試用期間3ヶ月あり。その期間は25万円）</span><span class="small"><br>※試用期間は9割が1ヶ月で終了しています</span>
          </li>
          <li>高インセンティブ制度あり<br>
            <span class="small">（実績に応じた追加報酬）</span>
          </li>
          <li>
            平均月収：80万円
            <span class="small"><br>（未経験スタート）</span>
          </li>
        </ul>
        </p>
      </div>
      <div class="job-info__row">
        <dt>待遇・福利厚生</dt>
        <p>
        <ul>
          <li>家賃補助：月額5万円〜20万円<br><span class="small">（役職に準ずる）</span></li>
          <li>各種社会保険完備</li>
          <li>社員旅行<span class="small">（ハワイ・グアムなど）</span></li>
          <li>独立支援制度</li>
        </ul>
        </p>
      </div>
      <div class="job-info__row">
        <dt>休日・休暇</dt>
        <p>
        <ul>
          <li>完全週休2日制<span class="small">（月火休み）</span></li>
          <li>年末年始休暇、夏季休暇、GW休暇</li>
          <li>有給休暇<span class="small">（入社半年後より付与）</span></li>
          <li>誕生日休暇<span class="small">（1日）</span></li>
        </ul>
        </p>
      </div>
    </dl>
  </div>
</section>

<!-- お問い合わせフォーム -->
<section class="contact cta-exist" id="contact">
  <div class="contact__inner inner">
    <h3 class="contact__sub-title">未経験者大歓迎です</h3>
    <h2 class="contact__title second-font">応募フォーム</h2>

    <form id="mail_form" class="c-form" action="./functions/mail-send.php" method="post">
      <input type="hipen" name="token" value="<?php echo $_SESSION['token']; ?>" />

      <div class="bz-contact__form-body">
        <div class="contact__box">
          <!-- お名前 -->
          <div class="c-form-item">
            <div class="c-form-item__ttl">
              <p>お名前</p>
              <span class="required">必須</span>
            </div>
            <input type="text" class="c-input" maxlength="30" name="name" placeholder="佐藤 綾子" required />
          </div>

          <!-- ふりがな -->
          <div class="c-form-item">
            <div class="c-form-item__ttl">
              <p>ふりがな</p>
              <span class="required">必須</span>
            </div>
            <input type="text" class="c-input" maxlength="30" name="furigana" placeholder="さとう あやこ" required />
          </div>

          <!-- 生年月日 -->
          <div class="c-form-item">
            <div class="c-form-item__ttl">
              <p>生年月日</p>
              <span class="required">必須</span>
            </div>
            <input type="text" class="c-input" name="birthdate" placeholder="1995/01/01"
              pattern="\d{4}/\d{2}/\d{2}" required />
          </div>

          <!-- 電話番号 -->
          <div class="c-form-item">
            <div class="c-form-item__ttl">
              <p>お電話番号</p>
              <span class="required">必須</span>
            </div>
            <input type="tel" class="c-input" name="phone" placeholder="090-000-0000（ハイフンあり）"
              pattern="^\d{2,4}-?\d{2,4}-?\d{4}$" required />
          </div>

          <!-- メールアドレス -->
          <div class="c-form-item">
            <div class="c-form-item__ttl">
              <p>メールアドレス</p>
              <span class="required">必須</span>
            </div>
            <input type="email" class="c-input" maxlength="256" name="mail"
              placeholder="leverage-base@example.co.jp" required />
          </div>

          <!-- 住所 -->
          <div class="c-form-item">
            <div class="c-form-item__ttl">
              <p>ご住所</p>
              <span class="required">必須</span>
            </div>
            <input type="text" class="c-input" name="apress" placeholder="東京都杉並区高円寺南4-12-1" required />
          </div>

          <!-- 大学 -->
          <div class="c-form-item">
            <div class="c-form-item__ttl">
              <p>大学（卒業した大学）</p>
              <span class="required">必須</span>
            </div>
            <input type="text" class="c-input" name="university" placeholder="○○大学" required />
          </div>

          <!-- 学部 -->
          <div class="c-form-item">
            <div class="c-form-item__ttl">
              <p>学部</p>
              <span class="required">必須</span>
            </div>
            <input type="text" class="c-input" name="faculty" placeholder="○○学部" required />
          </div>

          <!-- 学科 -->
          <div class="c-form-item">
            <div class="c-form-item__ttl">
              <p>学科</p>
              <span class="required">必須</span>
            </div>
            <input type="text" class="c-input" name="department" placeholder="○○学科" required />
          </div>

          <!-- 卒業見込み年月 -->
          <div class="c-form-item">
            <div class="c-form-item__ttl">
              <p>卒業見込み年月（卒業年月）</p>
              <span class="required">必須</span>
            </div>
            <div class="">
              <!-- <input type="month" class="c-input" name="graduation-year" required /> -->
              <input type="text" class="c-input" name="graduation-year" placeholder="2025/03"
                pattern="\d{4}/\d{1,2}" required />
            </div>
          </div>

          <!-- 採用形態 -->
          <div class="c-form-item">
            <div class="c-form-item__ttl">
              <p>採用形態</p>
              <span class="required">必須</span>
            </div>
            <div class="c-select c-select--wide">
              <select class="c-input" name="employment-type" required>
                <option value="学生インターン">学生インターン</option>
                <option value="中途採用">中途採用</option>
                <option value="新卒採用">新卒採用</option>
              </select>
            </div>
          </div>

          <!-- 面接希望日（第一希望） -->
          <div class="bz-contact__form-item bz-contact__form-item--02 c-form-item">
            <div class="c-form-item__label">
              <div class="c-form-item__ttl c-form-item__ttl--02">
                <p>面接希望日（第一希望）</p>
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

          <!-- 面接希望日（第二希望） -->
          <div class="bz-contact__form-item bz-contact__form-item--02 c-form-item">
            <div class="c-form-item__label">
              <div class="c-form-item__ttl c-form-item__ttl--02">
                <p>面接希望日（第二希望）</p>
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

          <!-- 自由記入欄 -->
          <div class="bz-contact__form-item bz-contact__form-item--02 c-form-item">
            <div class="c-form-item">
              <div class="c-form-item__ttl c-form-item__ttl--02">
                <p>自由記入欄(任意)</p>
              </div>
              <textarea class="c-input c-message" maxlength="256" name="message"
                placeholder="やむを得ない事情で土日または14:00-19:00以外の時間帯をご希望の場合や、その他ご質問・ご連絡事項等がございましたら、こちらにご記入ください。"
                data-id=""></textarea>
            </div>
          </div>

          <!-- 送信ボタン -->
          <div class="bz-contact__form-btn">
            <button type="submit" class="c-cta-btn__btn">
              <img src="assets/img/submit-button.png" alt="内容を送信する" width="300" height="82" loading="lazy"
                decoding="async" class="c-cta-btn__btn">
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>

<!-- 固定ボタン -->
<!-- <div class="kotei-btn">
  <a href="#contact">
    <img src="assets/img/cta-button01.png" class="bz-fv__entry" alt="Entry 今すぐ応募" width="373" height="102"
      decoding="async" loading="lazy" />
  </a>
</div> -->
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