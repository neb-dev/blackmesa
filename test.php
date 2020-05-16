<?php

$names = [
  "a" => "josh",
  "b" => "jess",
  "c" => "bailey"
];

if(empty($names)) {
  echo "Array is empty.";
} else {
  foreach($names as $index => $name) {
      echo $index . $name . ", ";
  }
}

var_dump(3 == 3);

$month = 1;
while($month <=12) {
  echo $month . ", ";
  $month++;
}

for($i = 1; $i <= 10; $i++) {
  echo $i;
}

$time = 21;
if($time < 12) {
  echo "Good Morning";
} elseif($time < 18) {
  echo "Good Afternoon";
} elseif($time < 22) {
  echo "Good Evening";
} else {
  echo "Good Night";
}

$num = 1;
switch($num) {
  case 1:
    echo "The number is 1";
    break;
  case 2:
    echo "The number is 2";
    break;
  default:
    echo "That's not a number";
    break;
}

if(false) {
  echo "false";
} else {
  echo "true";
}

$array = [];

for ($i = 1; $i <= 10; $i++) {

    if($i < 4) {
        $array[$i] = "a";
    } elseif ($i <= 7) {
        $array[$i] = "b";
    } else {
        $array[$i] = "c";
    }

}

foreach($array as $index => $item) {
  echo "Index:{$index}, Value:{$item}";
}

?>