<?php
session_start();

$_SESSION["currentPage"] = 'pancakes.php';
$_SESSION["commentFile"] = 'pancakeComments.txt';
?>
<!DOCTYPE html>
<html>
<head>
	<title>PancakePage</title>
        <link rel="stylesheet" type="text/css" href="../../resources/css/reset.css"/>
        <link rel="stylesheet" type="text/css" href="../../resources/css/website.css"/>

</head>
<body>

      <?php
include 'resources/fragments/menubar.php';
	?>
    
<div class="grid12-6">





<div class="inner_box_recipe">
	<h1>Pancakes</h1>
	<img src="../../resources/images/pancakes.jpg" alt="Image of Pancakes">
	<div class="text">

		<h2>Ingredients:</h2>
		<ul>
		   <li>1 egg</li>
		   <li>3/4 cup milk</li>
		   <li>2 tablespoons butter, melted</li>
		   <li>1 cup flour</li>
		   <li>1 tablespoon sugar</li>
		   <li>1 teaspoon baking powder</li>
		   <li>1/2 teaspoon salt</li>
		</ul>

	</div>
	<h3><br><br>Directions:</h3>
	<ul>
		<li>Beat egg until fluffy.</li>
		<li>Add milk and melted margarine.</li>
		<li>Add dry ingredients and mix well.</li>
		<li>Heat a heavy griddle or fry pan which is greased with a little butter on a paper towel.</li>
		<li>The pan is hot enough when a drop of water breaks into several smaller balls which 'dance' around the pan.</li>
		<li>Pour a small amount of batter (approx 1/4 cup) into pan and tip to spread out or spread with spoon.</li>
		<li>When bubbles appear on surface and begin to break, turn over and cook the other side.</li>
		</ul>

<?php
    include 'resources/fragments/commentField.php';
    ?>

</div>
</div>



</body></html>