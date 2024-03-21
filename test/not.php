<?php require __DIR__ . "/header.php" ?>

<?php

$text = "メールアドレスはありません";

$list = \Ponponumi\EmailSearch\EmailSearch::search($text);

?>

<p><?= $text ?></p>

<pre><?php var_dump($list) ?></pre>

<?php require __DIR__ . "/footer.php" ?>
