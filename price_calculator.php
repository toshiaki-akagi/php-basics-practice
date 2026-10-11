<?php

// 変数の定義
$product_name = "ノートパソコン";
$price = 80000;
$quantity = 2;
$tax_rate = 0.1;

// 金額の計算
$subtotal = $price * $quantity;      // 小計の計算
$tax_amount = $subtotal * $tax_rate; // 消費税額
$total = $subtotal + $tax_amount;    //税込合計金額

// 結果の表示
echo "商品名: " . $product_name . "<br>"; //文字連結バージョン
echo "単価: " . $price . "円<br>";        //文字連結バージョン
echo "数量: " . $quantity . "個<br>";     //文字連結バージョン
echo "小計: {$subtotal}円<br>";           //変数展開バージョン
echo "消費税(10%): {$tax_amount}円<br>";  //変数展開バージョン
echo "合計金額: {$total}円";              //変数展開バージョン

?>