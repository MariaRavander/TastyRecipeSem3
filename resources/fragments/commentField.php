
<div class="comment">
	<h2>Please leave a comment!</h2>
    <p>(You need to be logged in to leave a comment.)</p>


<form action="CommentAdded" method="post">


    	<div class="textarea">
    	<textarea id= "entry" name="comment" rows = 5 placeholder="Write your comment here."></textarea>
    	</div>
    	<div class="submit">
    	<input type="submit" value="Send">
    	</div>


    </form>
  
    <h2>Comments:</h2>
    <?php


    for($i=0; $i<count($comments); $i++) {
        echo "<form action='CommentDeleted'>";
        $author = $comments[$i++];
        echo "<h3>$author<br></h3>";
        $comment = $comments[$i++];
        echo "<p>$comment<br><br></p>";
        $time = $comments[$i]; 
        if($author === trim($user)) {
            //$time = $comment[++$i]; 
            echo "<input type='hidden' value='" . trim($time) . "' name='timestamp'>"; 
            echo "<div class='delet'>";    
            echo "<input type='submit' value='Delete' id='deletbutton'></div>";
            echo "</form>";
        }
 
    }

    ?>


  