<?php
// ＜アルゴリズムの注意点＞
// アルゴリズムではこれまでのように調べる力ではなく物事を論理的に考える力が必要です。
// 検索して答えを探して解いても考える力には繋がりません。
// まずは検索に頼らずに自分で処理手順を考えてみましょう。


// 以下は1から100までの数字を順番に表示するプログラムです。
// その数が3で割り切れるなら"Fizz"、5で割り切れるなら"Buzz"、
// 両方で割り切れるなら"FizzBuzz"
// と表示してください。
// 判定は関数に記述し、関数を呼び出して結果表示すること
// ※余りの計算が分からなければ「php 四則演算」で検索

// 表示例）
// 1 
// 2 
// 3 Fizz 
// 4 
// 5 Buzz 
// 6 Fizz 
// 7 
// 8 
// 9 Fizz
// 10 Buzz
// 11
// 12 Fizz
// 13
// 14
// 15 FizzBuzz
// .
// .
// 以下省略

function nabeatsu($i) {
    // この関数内に処理を記述
    if($i % 3 == 0 && $i % 5 == 0){
        echo $i." FizzBuzz";
    } else if($i % 3 == 0 && $i % 5 != 0){
        echo $i." Fizz";
    } else if($i % 5 == 0 && $i % 3 != 0){
        echo $i." Buzz";
    } else {
        echo $i;
    }

}
// ↓変数を定義1
// ↓ループ　変数の範囲指定②
for($x = 1 ; $x <= 100 ; $x ++){
    nabeatsu($x);
    echo "\n";
}
?>
