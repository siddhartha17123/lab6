<html>
<body>

<?php

$detail = array("Sujit"=>"35", "Safal"=>"37", "Siddhu"=>"43");

echo "Peter is " . $detail['Peter'] . " years old.";
foreach($detail as $x => $value) {
  echo "Key=" . $x . ", Value=" . $value;
  echo "<br>";
}

?>

</body>
</html>