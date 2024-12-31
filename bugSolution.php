function bar(array $arr): array {
  return array_filter($arr, fn($val) => $val !== 0);
}

$arr = [1, 0, 2, 0, 3];
$result = bar($arr);
print_r($result); // Output: Array ( [0] => 1 [2] => 2 [4] => 3 )

//Alternative solution using array_keys and array_diff_key
$keysToRemove = array_keys(array_filter($arr, fn($val) => $val === 0));
$result = array_diff_key($arr, array_flip($keysToRemove));
print_r($result); // Output: Array ( [0] => 1 [2] => 2 [4] => 3 )