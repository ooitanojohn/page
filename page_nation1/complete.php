<?php

require_once 'model/initialize.php';
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

if (!isset($_GET['page_id'])) {
    $now = 1;
} else {
    $now = $_GET['page_id'];
}

$start_no = ($now - 1) * MAX;

$disp_data = array_slice($books, $start_no, MAX, true);

if ($now > 1) { // リンクをつけるかの判定
    $prev_page = '/complete.php?page_id=' . ($now - 1) . ')';
} else {
    // $one_or_another =
}

for ($i = 1; $i <= $max_page; $i++) {
    if ($i == $now) {
        $now_page = $now;
    } else {
        $now_page = '/complete.php?page_id=' . $i;
    }
}

if ($now < $max_page) { // リンクをつけるかの判定
    $next_page = '/complete.php?page_id=' . ($now + 1);
} else {
    // echo '次へ';
}

require_once 'view/complete.php';