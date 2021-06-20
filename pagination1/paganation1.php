<?php

define('MAX', '3');
$books = array(
    array('book_kind' => 'ライトノベル', 'book_name' => 'ライトノベルの本'),
    array('book_kind' => '歴史', 'book_name' => '歴史の本'),
    array('book_kind' => '料理', 'book_name' => '料理の本'),
    array('book_kind' => '啓発本', 'book_name' => '啓発の本'),
    array('book_kind' => 'コミック', 'book_name' => 'コミックの本'),
    array('book_kind' => '推理小説', 'book_name' => '推理小説の本'),
    array('book_kind' => 'フォトブック', 'book_name' => 'フォトブックの本'),
);

$books_num = count($books);
$max_page = ceil($books_num / MAX);

if (!isset($_GET['page_id'])) {
    $now = 1;
} else {
    $now = $_GET['page_id'];
}

$start_no = ($now - 1) * MAX;

$disp_data = array_slice($books, $start_no, MAX, true);


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>

foreach($disp_data as $val){
echo $val['book_kind']. '　'.$val['book_name']. '<br />';
}

echo '全件数'. $books_num. '件'. '　'; // 全データ数の表示です。

if($now > 1){ // リンクをつけるかの判定
echo '<a href='/paging.php?page_id=' .($now - 1).'')>前へ</a>'. '　';
} else {
echo '前へ'. '　';
}

for($i = 1; $i <= $max_page; $i++){ if ($i==$now) { echo $now. '　' ; } else { echo '<a href=' /test.php?page_id='. $i. '')>' . $i. '</a>' . '　' ; } } if($now < $max_page){ // リンクをつけるかの判定 echo '<a href=' /paging.php?page_id='.($now + 1).'')>次へ</a>' . '　' ; } else { echo '次へ' ; }