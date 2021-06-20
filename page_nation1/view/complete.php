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
</head>


<body>
    <nav>
        <h2><?php echo '全件数' . $books_num . '件' . '　'; ?></h2>
        <ul>
            <?php foreach ($disp_data as $val) : ?>
                <li><?php echo $val['book_kind'] . '　' . $val['book_name'] ?></li>
            <?php endforeach; ?>
        </ul>

        <a href='<?php echo $prev_page ?>'>前へ</a>
        <a href='<?php echo $now_page ?>'><?php echo $i ?></a>
        <a href='<?php echo $next_page ?>'>次へ</a>
    </nav>

</body>

</html>