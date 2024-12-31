function foo(array $arr): array {
  foreach ($arr as $key => $value) {
    if ($value === 0) {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = [1, 0, 2, 0, 3];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => 1 [2] => 2 [4] => 3 )

function bar(array $arr): array {
  return array_filter($arr, fn($val) => $val !== 0);
}

$arr = [1, 0, 2, 0, 3];
$result = bar($arr);
print_r($result); // Output: Array ( [0] => 1 [2] => 2 [4] => 3 )