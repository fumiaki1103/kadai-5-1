<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>九九の表</title>
<style>
    .multiplication-table {
        font-family: Arial, sans-serif;
        text-align: left;
        width: auto;
    }
    .multiplication-table td {
        padding: 5px;
    }
</style>
</head>
<body>
<h1>九九の計算</h1>
<table class="multiplication-table">
<?php
for ($i = 1; $i <= 9; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 9; $j++) {
        echo "<td>" . $i . " x " . $j . " = " . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
?>
</table>

</body>
</html>



