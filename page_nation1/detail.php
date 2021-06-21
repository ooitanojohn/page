<?php
require_once '../config/pagination.php';
require_once '../config/initialize.php';

// page_id受け取り
if (isset($_GET['page_id'])) {
    $page_id = $_GET['page_id'];
}
// NEXT sql_query で where実行　
$books = [
    ['book_kind' => 'ライトノベル', 'book_name' => 'ライトノベルの本', 'page_no' => 1],
    ['book_kind' => '歴史', 'book_name' => '歴史の本', 'page_no' => 2],
    ['book_kind' => '料理', 'book_name' => '料理の本', 'page_no' => 3],
    ['book_kind' => '啓発本', 'book_name' => '啓発の本', 'page_no' => 4],
    ['book_kind' => 'コミック', 'book_name' => 'コミックの本', 'page_no' => 5],
    ['book_kind' => '推理小説', 'book_name' => '推理小説の本', 'page_no' => 6],
    ['book_kind' => 'フォトブック', 'book_name' => 'フォトブックの本', 'page_no' => 7],
];

// next sql内の要素数をcountして、
$books_num = count($books);

foreach ($books as $val) {
    if ($val['page_no'] == $page_id) {
        $page_text = $val;
    }
}
// ページリンク
// 先頭と最終のリンク消す
if ($page_id > 1) {
    $page_prev = $page_id - 1;
} else {
    $page_prev = 1;
    $prev_class = 'none';
}
if ($page_id < $books_num) {
    $page_next = $page_id + 1;
} else {
    $page_next = $books_num;
    $next_class = 'none';
}

require_once 'view/detail.php';
