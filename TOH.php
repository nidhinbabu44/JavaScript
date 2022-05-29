//To solve Tower of Hanoi using recursion
<html>
<head>
<title>PHP Program To solve Tower of Hanoi using recursion</title>
</head>
<body>
<form method="post">
<table border="0">
<tr>
<td> <input type="text" name="num" value="" placeholder="Enter number"/> </td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Submit"/> </td>
</tr>
</table>
</form>
<?php
// Recursive Function to solve Tower of Hanoi
function towerOfHanoi($n, $from_rod, $to_rod, $aux_rod)
{
if ($n == 1)
{
echo ("Move disk 1 from rod $from_rod to rod $to_rod \n")."<br>";
return;
}
towerOfHanoi($n-1, $from_rod, $aux_rod, $to_rod);
echo ("Move disk $n from rod $from_rod to rod $to_rod \n")."<br>";
towerOfHanoi($n-1, $aux_rod, $to_rod, $from_rod);
}
if(isset($_POST['submit']))
{
$n = $_POST['num']; // Number of disks
towerOfHanoi($n, 'A', 'C', 'B'); // A, B and C are names of rods
return 0;
}
?>
</body>
</html>