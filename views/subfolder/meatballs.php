<?php
session_start();


$_SESSION["currentPage"] = 'meatballs.php';
$_SESSION["commentFile"] = 'meatballComments.txt';

?>
<!DOCTYPE html>
<html>
<head>
	<title>MeatballPage</title>
        <link rel="stylesheet" type="text/css" href="../../resources/css/reset.css"/>
        <link rel="stylesheet" type="text/css" href="../../resources/css/website.css"/>
</head>
<body>
      <?php
include 'resources/fragments/menubar.php';
	?>

<div class="grid12-6">



<div class="inner_box_recipe">
	<h1>Meatballs</h1>
	<img src="../../resources/images/meatballs2.jpg" alt="Image of Meatballs">
	<div class="text">

	<h2>Ingredients:</h2>
		<ul>
		   <li>1 lb lean (at least 80%) ground beef</li>
		   <li>1/2 cup bread crumbs</li>
		   <li>1/4 cup milk</li>
		   <li>1/2 teaspoon salt</li>
		   <li>1/2 teaspoon Worcestershire sauce</li>
		   <li>1/4 teaspoon pepper</li>
		   <li>1 small onion, finely chopped</li>
		   <li>1 egg</li>
		</ul>
	</div>
	<h3><br>Directions:</h3>
	<ul>
		<li>Heat oven to 400F. Line 13x9-inch pan with foil; spray with cooking spray.</li>
		<li>In large bowl, mix all ingredients. Shape mixture into 20 to 24 (1 1/2-inch) meatballs. Place 1 inch apart in pan.</li>
		<li>Bake uncovered 18 to 22 minutes or until no longer pink in center. </li>
	</ul>


<?php
    include 'resources/fragments/commentField.php';
    ?>

</div>

</div>

</body></html>