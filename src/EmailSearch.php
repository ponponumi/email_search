<?php

namespace Ponponumi\EmailSearch;

use Ponponumi\MatchPos\Search;

class EmailSearch{
  public static function patternGet(){
    return '/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/';
  }

  public static function search(string $text){
    // メールアドレスを抽出する
    $pattern = self::patternGet();
    preg_match_all($pattern, $text, $match_list);
    $email_list = $match_list[0];
    return $email_list;
  }

  public static function searchPos(string $text){
    // メールアドレスの開始位置も返す
    $email_list = self::search($text);
    $result = Search::multibyte($text,$email_list);

    return $result;
  }

  public static function check(string $text){
    // メールアドレスが含まれるかどうか確認
    $pattern = self::patternGet();
    $result = preg_match($pattern,$text);
    return $result == 1;
  }
}
