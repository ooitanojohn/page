<?php

require_once '../config/initialize.php';
const MAX = '3';

$books = [
    ['book_kind' => 'ライトノベル', 'book_name' => 'ライトノベルの本'],
    ['book_kind' => '歴史', 'book_name' => '歴史の本'],
    ['book_kind' => '料理', 'book_name' => '料理の本'],
    ['book_kind' => '啓発本', 'book_name' => '啓発の本'],
    ['book_kind' => 'コミック', 'book_name' => 'コミックの本'],
    ['book_kind' => '推理小説', 'book_name' => '推理小説の本'],
    ['book_kind' => 'フォトブック', 'book_name' => 'フォトブックの本'],
];

$books_num = count($books);
$max_page = ceil($books_num / MAX);

// 現在のページno.GET
if (!isset($_GET['page_id'])) {
    $now = 1;
} else {
    $now = $_GET['page_id'];
}

$start_no = ($now - 1) * MAX;

$disp_data = array_slice($books, $start_no, MAX, true);

echo '$disp_data:';
var_dump($disp_data);
echo '<br>';

// リンクをつけるかの判定
if ($now > 1) {
    $prev_page = 'complete.php?page_id=' . ($now - 1);
}

for ($i = 1; $i <= $max_page; $i++) {
    if ($i == $now) {
        $now_page[] = $now;
        $now_page_none = 'page_nation_none';
    } else {

        $now_page[] = 'complete.php?page_id=' . $i;
    }
}
echo '$now_page:';
var_dump($now_page);
echo '<br>';

// リンクをつけるかの判定
if ($now < $max_page) {
    $next_page = 'complete.php?page_id=' . ($now + 1);
}

require_once 'view/complete.php';
