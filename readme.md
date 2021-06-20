# page_nation

様々な奴(php,js)見比べて理解、カスタマイズ、利用できる様にするのが目的。ノッてくるまで markdown、git の練習も兼ねるとする。

## Lv1 page_nation1

[侍エンジニア](https://www.sejuku.net/blog/70234)

- 変更する所(予定)
  - ~~define から const へ~~
  - ~~array を [] に~~
  - 変数名をどうするか。// ひとまず prev,next now 辺り使っていく。
  - ~~そもそもコピペだと動いていないので動くようにする and mvc 化~~
  - ~~ひとまず vc 化~~
  - そもそもページネーションのタグとは？
  - link rel に修正 (2019 に google サポは終了)[タグ](http://ooitanojohn.wp.xdomain.jp/2021/06/20/%e3%83%9a%e3%83%bc%e3%82%b8%e3%83%8d%e3%83%bc%e3%82%b7%e3%83%a7%e3%83%b3/)
  - google はカノニカルタグを推奨(よく分からん)
  - ~~表示項目は aside 想定 その下に link が来るようにデザインしてみる~~
  - ~~やっぱり nav で 説明ではないから li は ul 使用~~
  - complete and detail を想定して構成する。
  - complete は a で反映 detail は link で
  - ~~現在のページリンク no 分岐の際 mvc どう分ける~~
  - ~~class で 分岐マン~~ // ~~そんなの要らねーぞばか~~
  - ~~やっぱいるわばか 分岐~~
  - php-class-name → css 機能変える or html タグ
  - 後ちょっとできそうがこない
  - a タグ 最初、最終 page の時機能消せ
  1. term1 タグは php 内で出力禁止。
  - answer display none and とりま<a>タグで代用
  - class の配列化する、風呂入りてえ、、、、また三時間コースだ、、、、
  - bootstrap の class 指定で display:none したみ
