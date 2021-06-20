<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="../css/bootstrap.min.css.map" rel="stylesheet" crossorigin="anonymous">
    <link href="../css/bootstrap.rtl.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="../css/bootstrap.rtl.min.css.map" rel="stylesheet" crossorigin="anonymous">
    <title>Document</title>
    <link rel=prev'' href=' /test.php?page_id=' . $i. '' )>' . $i. '</link>
    <link rel='next' href='/paging.php?page_id=' .($now - 1).'')>前へ
</head>

</head>

<body>

    <nav>
        <ul>
            <?php foreach ($disp_data as $val) : ?>
                <li><?php echo $val['book_kind'] . '　' . $val['book_name'] ?></li>
            <?php endforeach; ?>
            <li><?php echo '全件数' . $books_num . '件' . '　'; ?></li> // 全データ数の表示です。
        </ul>

    </nav>


</body>

</html>





if($now > 1){ // リンクをつけるかの判定
echo '
<link rel='next' href='/paging.php?page_id=' .($now - 1).'')>前へ</link>'. '　';
} else {
echo '前へ'. '　';
}

for($i = 1; $i <= $max_page; $i++){ if ($i==$now) { echo $now. '　' ; } else { echo '<link rel=prev'' href=' /test.php?page_id='. $i. '')>' . $i. '</link>' . '　' ; } } if($now < $max_page){ // リンクをつけるかの判定 echo '<link rel="next" href=' /paging.php?page_id='.($now + 1).'')>次へ</link>' . '　' ; } else { echo '次へ' ; }