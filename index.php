
<?php
$qwe="Snow on the ground. Snow on the tree. Snow on the house. Snow on me !";
$arr = preg_split('/[\s!?.]/u', $qwe, -1, PREG_SPLIT_NO_EMPTY);
print_r(array_count_values($arr));
echo "<br>Всего слов:". count($arr);
?>
