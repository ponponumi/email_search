<?php require __DIR__ . "/header.php" ?>

<?php

$text = "メールアドレス hoge@example.com hogehoge@example.com hoge-12345.hoge_hoge@example.com";

$list = \Ponponumi\EmailSearch\EmailSearch::search($text);
$list_pos = \Ponponumi\EmailSearch\EmailSearch::searchPos($text);

?>

<p><?= $text ?></p>

<pre><?php var_dump($list) ?></pre>
<pre><?php var_dump($list_pos) ?></pre>

<?php require __DIR__ . "/footer.php" ?>
