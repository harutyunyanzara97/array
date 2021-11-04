<?php
$count=0;
$arr = array(1, 4, 6, 1, 8, 9, 4, 4, 6, 2, 2, 1, 1, 2, 3, 4 -51, 12, 12, 12, -51);
for($i = 0; $i < count($arr)-1; $i++) {
if($arr[$i] == $arr[$i + 1] || $arr[$i] == $arr[$i - 1]) {
$count++;
}
}
print_r($count);
