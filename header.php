<!DOCTYPE html>
<html lang="ja">
<?php
$title = 'xxxxxxx';
$description = '若いうちの挑戦が大きな武器に。学生インターン、中途採用を募集中。未経験歓迎、業界トップクラスの給与、営業スキルが身に付く環境です。';
?>

<head>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="ゾーンメンタルコーチング。超集中状態をつくり本番で結果を出す。マンツーマンのセッションで成果。指導実績500名以上。本気の人はやっている。">
  <title>ゾーンメンタルコーチング - マンツーマンセッションで超集中状態を実現</title>
  <meta name="keywords" content="ゾーンメンタルコーチング,マンツーマン,集中力,メンタル強化,パフォーマンス向上,コーチング">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <!-- og-image -->
  <?php
  $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
  $host = $_SERVER['HTTP_HOST'];

  // テスト環境と本番環境のOG画像パスを分岐
  $og_image_path = (strpos($_SERVER['REQUEST_URI'], '/xxx/') === 0) ? '/xxx/assets/img/og-image.jpg' : '/assets/img/og-image.jpg';

  // 最終的なOG画像のURL
  $og_image_url = $protocol . $host . $og_image_path;
  ?>
  <meta property="og:image" content="<?php echo htmlspecialchars($og_image_url, ENT_QUOTES, 'UTF-8'); ?>">

  <!-- Googleフォントを使用しないのであれば削除 -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@200;300;400;500;600;700;800;900&family=en+Kaku+Gothic+New:wght@300;400;500;700;900&family=Shippori+Mincho+B1:wght@600;700;800&display=swap"
    rel="stylesheet">

  <!-- Splide -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>