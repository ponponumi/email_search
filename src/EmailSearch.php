<?php

namespace Ponponumi\EmailSearch;

class EmailSearch{
  public static function search(string $text){
    // メールアドレスを抽出する
    preg_match_all('/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/', $text, $match_list);
    $email_list = $match_list[0];
    return $email_list;
  }
}
