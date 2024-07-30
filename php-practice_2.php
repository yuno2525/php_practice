<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
  if ($i % 4 == 0 && $i % 5 == 0) {
      echo "tic-tac\n";
  } elseif ($i % 4 == 0) {
      echo "tic\n";
  } elseif ($i % 5 == 0) {
      echo "tac\n";
  } else {
      echo $i . "\n";
  }
}

// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

var_dump ($personalInfos);

//問題1
$bTel = $personalInfos[1]['tel'];  // 配列の中のBさんの電話番号を取得
echo "Bさんの電話番号は" . $bTel . "です。";  // メッセージを表示

//問題2
foreach ($personalInfos as $info) { //asの後キー=>で情報が取れる
  echo $counter . "番目の" . $info['name'] . "のメールアドレスは" . $info['mail'] . "で、電話番号は" . $info['tel'] . "です。\n";
  $counter++;
}

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }

    public function displayStudentInfo()
    {
        echo "学籍番号{$this->studentId}番の生徒は{$this->studentName}です。";
    }
}

// 例として、学籍番号120番、名前を山田と設定
$student = new Student(120, '山田');
$student->displayStudentInfo(); // 出力: 学籍番号120番の生徒は山田です。


// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        echo "{$this->studentName}は{$subject}の授業に参加しました。学籍番号：{$this->studentId}";
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP'); // 出力: 山田はPHPの授業に参加しました。学籍番号：120

// Q5 定義済みクラス
//問題1
$currentDate = new DateTime();
$currentDate->modify('-1 month');
echo $currentDate->format('Y-m-d');

//問題2
$currentDate = new DateTime();// 現在の日付を取得
$pastDate = new DateTime('1992-04-25');// 1992年4月25日の日付を取得
$dateDifference = $currentDate->diff($pastDate);// 日付の差を計算
$daysDifference = $dateDifference->days;// 差の日数を取得
echo "あの日から{$daysDifference}日経過しました。";// 結果を出力

?>