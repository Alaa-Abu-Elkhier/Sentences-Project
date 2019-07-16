<!DOCTYPE html>
<html>

<head>
	<title>Sentences Project</title>
	<meta charset="utf-8"  />
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>
<div >
<?php 

$sentence1     = "My name is Ahmed Ali";
$sentence2     = "My name is Ali Tarek";
echo '<span style="color:red;"><h2>Frist sentence</h2></span>';
echo"<div>$sentence1</div>";
echo '<span style="color:red;"><h2>Second sentence</h2></span>';
echo"<div>$sentence2</div>";

echo '<span style="color:red;"><h2>Spliting the sentences</h2></span>';
$arr1          = explode(" ",$sentence1);
$arr2          = explode(" ",$sentence2);
echo"<pre>";
print_r($arr1);
echo"</pre>";
echo"<pre>";
print_r($arr2);
echo"</pre>";
echo '<span style="color:red;"><h2>classification of words</h2></span>';

//Similar words.
echo '<span style="color:blue;"><h3>The Similar words</h3></span>';
$similarWords    = array_intersect($arr1, $arr2);
print_r($similarWords);

//different words.
echo '<span style="color:blue;"><h3>The different words</h3></span>';
$differentWords = array_merge(array_diff($arr1, $arr2), array_diff($arr2, $arr1));
print_r($differentWords);

//final sentence which the first half of it contains similar words and the other half contain the different words.
echo '<span style="color:red;"><h2>Final sentence</h2></span>';
$finalSentence   = implode(" ",$similarWords). " " .implode(" ",$differentWords);
echo "<div>$finalSentence</div>";
?>
</div>




</body>
</html>

