<?php require __DIR__ . "/header.php" ?>

<?php

$text = "メールアドレスはありません";

$list = \Ponponumi\EmailSearch\EmailSearch::search($text);
$list_pos = \Ponponumi\EmailSearch\EmailSearch::searchPos($text);
$check = \Ponponumi\EmailSearch\EmailSearch::check($text);

?>

<p><?= $text ?></p>

<pre><?php var_dump($list) ?></pre>
<pre><?php var_dump($list_pos) ?></pre>
<pre><?php var_dump($check) ?></pre>

<?php require __DIR__ . "/footer.php" ?>
