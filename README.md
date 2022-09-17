# ElSite

本番適用時変更点
URL変更
mail.php
$site_top = "http://192.168.11.169:5500/"; //本番適用時変更

//管理者のメールアドレス ※メールを受け取るメールアドレス(複数指定する場合は「,」で区切ってください 例 $to = "aa@aa.aa,bb@bb.bb";)
$to = "bookreader0199@gmail.com";　変更

//管理者宛てメールの返信先（reply）はユーザーのメールアドレスになります。
$from = "bookreader0299@gmail.com";　変更

<!-- <form action="<?php echo h($_SERVER['SCRIPT_NAME']); ?>" method="POST"> 本番適用時変更2 -->　コメントアウト解除
<form action="<?php echo ("mail.php"); ?>" method="POST">　削除


PHPではメール送信のための関数が用意されています。用意された関数ではメール送信の際に使用するSMTPサーバ名とポート番号を「php.ini」ファイルで設定された値を読み込んで利用します(PHPスクリプトでは指定できないようです)。

その為、まずは「php.ini」ファイルの該当箇所を適切な値に設定します。「php.ini」ファイルをテキストエディタなどで開き[mail function]を検索して下さい。747行目付近にあります。

[mail function]
; For Win32 only.
SMTP = smtp.example.jp
smtp_port = 25

; For Win32 only.
sendmail_from = peke@example.jp

[mail function]
SMTP=localhost //localhostのままでOKです。
smtp_port=587 //サブミッションポートを登録します。
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t" //sendmail.exeのパスを登録します。

gmailの場合
アカウントの編集画面からセキュリティを選択します。
アプリパスワード
ここでアプリ選択をメール、デバイスはその他を選んでsendmailと名前を付けてやってください。
するとなんということでしょう！
sendmail専用のパスワードが発行されるのです。

sendmail.ini
smtp_server=smtp.gmail.com //smtp.gmail.comを登録します。
smtp_port=587 //サブミッションポートを登録します。
auth_username=test@gmail.com //送信用のgmailアドレスを登録します。
auth_password= xxxxxxxxx //アプリパスワードを取得して登録します(ここ最重要！)