<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="../css/pagination.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <table>
        <tr>
            <td><?php echo $page_text['book_kind'] ?></td>
            <td><?php echo $page_text['book_name'] ?></td>
        </tr>
        <tr>
            <td><a href='detail.php?page_id=<?php echo $page_prev ?>' class='<?php echo $prev_class ?>'>前のNo.へ</a></td>
            <td><a href='detail.php?page_id=<?php echo $page_next ?>' class='<?php echo $next_class ?>'>次のNo.へ</a></td>
        </tr>
        <tr>
            <td><a href='complete.php'>画面一覧に戻る</a></td>
        </tr>
    </table>


</body>

</html>