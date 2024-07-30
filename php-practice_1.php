<?php
// Q1 変数と文字列
$name = "安居"; //name変数に名前を格納
 echo "私の名前は「".$name."」です。。。。。";//.で接続

// Q2 四則演算
$num = 5 * 4;     //num=数値格納　５*４
echo $num . "\n"; //エコーでnumを表示する .で文字列結合  "\n"で改行文字
$num = $num / 2; //numを2で割る
echo $num; //新しいnumを表示

// Q3 日付操作
$currentDateTime = date("Y年m月d日 H時i分s秒"); // 現在の日時を取得する 日時変数 date=指定のフォーマットに従い現在日時を出す
echo "現在時刻は、" . $currentDateTime . "です。"; // 出力する文字を作成・表示

// Q4 条件分岐-1 if文
$device = "mac"; //macに指定
if ($device === 'windows' || $device === 'mac'){
  echo '使用OSは、'. $device .'です。';
} else {
  echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
//基本構成：条件 ? 真の場合の値 : 偽の場合の値;
$age = 20; // 数値を指定
$message = ($age < 18) ? '未成年です。' : '成人です。';
echo $message;

// Q6 配列
//配列はarray関数を使用する
$kanto = array('東京都', '神奈川県', '千葉県', '埼玉県', '茨城県', '栃木県', '群馬県');
$fifth = $kanto[2]; //配列インデックスは0から始まる、3番目はインデックス2
$second = $kanto[3]; //5番目はインデックス4
echo $fifth . 'と' . $second . 'は関東地方の都道府県です。'; //選択したものを表示させる

// Q7 連想配列-1

// 関東の都・県とその県庁所在地を格納した連想配列
$kantoPrefectures = array( //関東都道府県 array=配列
 '東京都' => '新宿区', //キーに東京都 バリューに県庁所在地を指定
 '神奈川県' => '横浜市',
 '千葉県' => '千葉市',
 '埼玉県' => 'さいたま市',
 '栃木県' => '宇都宮市',
 '群馬県' => '前橋市',
 '茨城県' => '水戸市'
);
foreach ($kantoPrefectures as $prefecture => $capital) {
 echo $capital . "\n";
}

//foreachで繰り返しの処理　指定された$kantoPrefecturesの要素を繰り返し処理行う
//as キーを$prefecture バリューを$capitalに代入する
//取り出した値をエコーに出力する
//繰り返しのため、全ての要素を同様の処理を行う

// Q8 連想配列-2
foreach ($kantoPrefectures as $prefecture => $capital){
  if ($prefecture === '埼玉県'){
    echo $prefecture . 'の県庁所在地は、' . $capital .'です。';
 }
}

//foreachは繰り返しの処理をしている 繰り返しする場所はQ7で定義した配列
//配列の中のキーと値をforeachが1つずつ繰り返している　キーとバリューをしている
//if文で埼玉県の文字列型が合うものをキーの中で比較している
//比較の結果、TRUEのものがあった場合エコーが出力される


// Q9 連想配列-3
$prefectures = array( // arrayで配列を作る　配列の中にキーと値を定義 その配列を変数に代入している
 "埼玉県" => "さいたま市",
 "東京都" => "新宿区",
 "神奈川県" => "横浜市",
 "千葉県" => "千葉市",
 "栃木県" => "宇都宮市",
 "群馬県" => "前橋市",
 "茨城県" => "水戸市",
 "愛知県" => "名古屋市",
 "大阪府" => "大阪市"
);

$kantoPrefectures = array("埼玉県", "東京都", "神奈川県", "千葉県", "栃木県", "群馬県", "茨城県"); // 関東地方の県名を配列で定義
foreach ($prefectures as $prefecture => $capital) { // 連想配列のキーとバリューを順番にチェック
 if (in_array($prefecture, $kantoPrefectures)) {   // 関東地方の県名であるかを確認
 echo $prefecture . "の県庁所在地は、" . $capital . "です。<br>"; // 県名と県庁所在地を表示
 } else {
 echo $prefecture . "は関東地方ではありません。<br>";  // 関東地方ではない場合のメッセージを表示
 }
}

// Q10 関数-1 //処理のまとまり
function hello($name) {
 return $name . "さん、こんにちは。";
}
echo hello("金谷") . "\n";
echo hello("安藤") . "\n";

//93 返り値とは、実行元に値を返すこと
//97・98 functionは関数宣言を行う 関数名はhello
//95 helloの中の値を関数宣言に返している　→ 95で関数宣言が処理される
//97・98 returnは返り値で使うので、実行元に返し、エコーで出力されてる

// Q11 関数-2
$price = 1000; // 税抜き価格を変数$priceとして定義
function calcTaxInPrice($price) { // functionで関数使う宣言 $priceに1000が入る
 $taxRate = 0.10; // 消費税率10%
 return $price * (1 + $taxRate); // 税込価格を計算して返す
}

$taxInPrice = calcTaxInPrice($price); // 関数を実行して返り値を$taxInPriceに代入
echo $price . "円の商品の税込価格は" . $taxInPrice . "円です。"; // 最終的な出力を表示

// Q12 関数とif文
function distinguishNum($num) { // distinguishNum関数を定義
if ($num % 2 == 0) {
    return $num . "は偶数です。";
    } else {
    return $num . "は奇数です。";
    }
}
echo distinguishNum(11) . "\n"; // distinguishNum関数を実行して、結果を表示
echo distinguishNum(24) . "\n";

//返り値とは、実行元に値を返すこと
//functionは関数宣言を行う 関数名はnum
//numの中の値を関数宣言に返している　→ で関数宣言が処理される
//if文でnumを2でわり、あまりは奇数
//それを持って、リターンで実行元124に戻り2つ目も実行される

// Q13 関数とswitch文
function evaluateGrade($grade) { // evaluateGrade関数を定義
    switch ($grade) {
     case 'A':
     case 'B':
           return "合格です。";
     case 'C':
           return "合格ですが追加課題があります。";
     case 'D':
           return "不合格です。";
        default:
           return "判定不明です。講師に問い合わせてください。";
    }
}

echo evaluateGrade('A') . "\n"; // evaluateGrade関数を実行して、結果を表示
echo evaluateGrade('E') . "\n";

//

?>
