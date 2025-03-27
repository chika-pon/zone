<?php
// メールバリデーション
$email = filter_input(INPUT_GET, 'user_email');
if (email_exists($email)) {
 echo 'false';
} else {
 echo 'true';
}
