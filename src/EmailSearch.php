<?php

namespace Ponponumi\EmailSearch;

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
    $result = [];

    if($email_list !== []){
      // メールアドレスがあれば
      $start = 0;

      foreach ($email_list as $email) {
        $pos = mb_strpos($text,$email,$start);

        if($pos !== false){
          $start = $pos + 1;
        }

        $result[] = [
          "pos" => $pos,
          "value" => $email,
        ];
      }
    }

    return $result;
  }

  public static function check(string $text){
    // メールアドレスが含まれるかどうか確認
    $pattern = self::patternGet();
    $result = preg_match($pattern,$text);
    return $result == 1;
  }
}
