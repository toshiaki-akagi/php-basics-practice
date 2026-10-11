<?php
// -- 課題1: 割引計算プログラム --
echo "<h2>課題1: 割引計算プログラム</h2>";
// 変数の定義
$original_price = 5000;
$discount_rate = 0.2;

// 金額の計算
$discount_amount = $original_price * $discount_rate; //割引金額
$final_price = $original_price - $discount_amount;   //割引後の金額

// 結果の表示
echo "価格{$original_price}円の" . ($discount_rate * 100) . "%割引後の金額は{$final_price}円です。";


// -- 課題2: 偶数・奇数判定プログラム --
echo "<h2>課題2: 偶数・奇数判定プログラム</h2>";

// 変数の定義
$number = 7;

// 結果の表示
if ($number % 2 == 0) {
    echo "{$number}は偶数です。";
} else {
    echo "{$number}は奇数です。";
}


// -- 課題3: 複数条件の判定 --
echo "<h2>課題3: 複数条件の判定</h2>";

// 変数の定義
$age = 25;
$is_member = true;
$is_student = false;

// 条件1: 18歳以上かつ会員
if ($age >= 18 && $is_member) {
    echo "割引が適用されます。<br>";
}

// 条件2: 65歳以上または学生
if($age >= 65 || $is_student) {
    echo "シニア・学生割引が適用されます。<br>";
}


// -- 課題4: 複合代入演算子の練習 --
echo "<h2>課題4: 複合代入演算子の練習</h2>";

// 変数の定義
$score = 100;

// 演算やスコア表示
echo "初期スコア: {$score}点<br>";

$score += 50;
echo "ボーナス後: {$score}点<br>";

$score -= 30;
echo "ダメージ後: {$score}点<br>";

$score *= 2;
echo "2倍後スコア: {$score}点<br>";

echo "最終スコア: {$score}点<br>";

?>