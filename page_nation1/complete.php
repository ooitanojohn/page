<?php
require_once '../config/pagination.php';
require_once '../config/initialize.php';

$books = [
    ['book_kind' => 'ライトノベル', 'book_name' => 'ライトノベルの本', 'page_no' => 1],
    ['book_kind' => '歴史', 'book_name' => '歴史の本', 'page_no' => 2],
    ['book_kind' => '料理', 'book_name' => '料理の本', 'page_no' => 3],
    ['book_kind' => '啓発本', 'book_name' => '啓発の本', 'page_no' => 4],
    ['book_kind' => 'コミック', 'book_name' => 'コミックの本', 'page_no' => 5],
    ['book_kind' => '推理小説', 'book_name' => '推理小説の本', 'page_no' => 6],
    ['book_kind' => 'フォトブック', 'book_name' => 'フォトブックの本', 'page_no' => 7],
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

$disc_data = array_slice($books, $start_no, MAX, true);

// リンクをつけるかの判定
if ($now > 1) {
    $prev_page = 'complete.php?page_id=' . ($now - 1);
}

for ($i = 1; $i <= $max_page; $i++) {
    if ($i == $now) {
        $page_class[] = 'exist';
        $page_link_class[] = 'none';
        $now_page[] = $now;
    } else {
        $page_class[] = 'none';
        $page_link_class[] = 'exist';
        $now_page[] = 'complete.php?page_id=' . $i;
    }
}

// リンクをつけるかの判定
if ($now < $max_page) {
    $next_page = 'complete.php?page_id=' . ($now + 1);
}

require_once 'view/complete.php';
