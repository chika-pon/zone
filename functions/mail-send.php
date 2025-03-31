<?php
session_start();  // セッション開始

// エラー表示の設定（開発時のみ有効）
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// クリックジャッキング対策
header('X-FRAME-OPTIONS: SAMEORIGIN');

// HTML特殊文字をエスケープする関数
function escape($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

// セッションのトークンを確認
$token = isset($_POST['token']) ? $_POST['token'] : null;
if (!isset($_SESSION['token']) || !hash_equals($_SESSION['token'], $token) || empty($token)) {
    die("不正アクセスの可能性があります");
}

// 入力値の取得とトリム処理
function get_input($key)
{
    return isset($_POST[$key]) ? trim($_POST[$key]) : '';
}

$name           = escape(get_input('name'));
$furigana       = escape(get_input('furigana'));
$mail           = escape(get_input('mail'));
$phone          = escape(get_input('phone'));
$sports     = escape(get_input('sports'));
$kibouday1     = escape(get_input('kibouday1'));
$kibouday2     = escape(get_input('kibouday2'));
$kiboutime1     = escape(get_input('kiboutime1'));
$kiboutime2     = escape(get_input('kiboutime2'));
$message     = escape(get_input('message'));

// 必須項目のバリデーション
if (
    empty($name) || empty($furigana) ||  empty($mail) || empty($phone) || 
    empty($sports) || 
    empty($kibouday1) || empty($kibouday2) || empty($kiboutime1) || empty($kiboutime2)
) {
    die("必須項目が入力されていません");
}

// メール送信設定
mb_language("ja");
mb_internal_encoding("UTF-8");

// 管理者宛メール
$to = 'xxx@xxx.com';  // 管理者のメールアドレス
$from = 'xxx@xxx.com';  // 送信元のメールアドレス
$from_name = '株式会社xxx';

// メールヘッダー
$headers_admin = implode("\r\n", [
    "From: " . mb_encode_mimeheader($from_name) . " <{$from}>",
    "Content-Type: text/plain; charset=UTF-8",
    "Content-Transfer-Encoding: 8bit",
    "Reply-To: {$from}"
]);

// 管理者メール本文
$admin_text = <<<EOT
応募フォームからお問い合わせメールが届きました。
以下、内容をご確認ください。

3営業日以内に返信をお願いいたします。

----------------------------------------------
【お名前】 {$name}
【ふりがな】 {$furigana}
【メールアドレス】 {$mail}
【お電話番号】 {$phone}
【スポーツの種目名】 {$sports}
【ご希望日時（第一希望）】 {$kibouday1} {$kiboutime1}
【ご希望日時（第二希望）】 {$kibouday2} {$kiboutime2}
【ご予約動機】
{$message}
----------------------------------------------
EOT;

// 自動返信メール本文
$user_text = <<<EOT
{$name} 様

無料体験セッションのお申し込み、誠にありがとうございます。
改めてご連絡をさせて頂きますので今しばらくお待ちください

3営業日経っても連絡がない場合は、
記入もれやシステム障がいの可能性があるため、
改めてご連絡いただけますと幸いです。

====================
株式会社xxx
東京都中央区xxx
xxxタワーxxx階
MAIL : xxx@xxx.com
TEL : 03-xxxx-xxxx
====================
EOT;

try {
    // 管理者宛メール送信
    $send_admin = mb_send_mail($to, '応募フォームからお問い合わせが届きました', $admin_text, $headers_admin);

    if ($send_admin) {
        // 自動返信メールの送信
        $headers_user = implode("\r\n", [
            "From: " . mb_encode_mimeheader($from_name) . " <{$from}>",
            "Content-Type: text/plain; charset=UTF-8",
            "Content-Transfer-Encoding: 8bit",
            "Reply-To: {$from}"
        ]);

        $send_user = mb_send_mail($mail, '【' . $name . '様】ご応募ありがとうございます', $user_text, $headers_user);

        if ($send_user) {
            // メール送信成功時にリダイレクト
            header('Location: ../thanks.php');
            exit;
        } else {
            throw new Exception("自動返信メールの送信に失敗しました。");
        }
    } else {
        throw new Exception("管理者宛メールの送信に失敗しました。");
    }
} catch (Exception $e) {
    error_log("メール送信エラー: " . $e->getMessage());
    die("エラーが発生しました。管理者にお問い合わせください。");
}