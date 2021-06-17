<?php
include('connect.php');
include('header.php');

$title = $_POST['inp-title'];
$post = $_POST['inp-post'];
$send = $_POST['inp-send'];

if (isset($send)) {
    $query = "INSERT INTO posts(title,post) VALUES('$title','$post')";
    mysqli_query($con, $query);
    echo "Post Published Successfully";
}

?>

<!-- add-post -->
<div class="add-post"></div>
<div class="container">
    <h4>Add Post</h4>
    <form action="add-post.php" method="POST">
        <label>Title</label>
        <input type="text" name="inp-title" placeholder="Enter a Title">
        <label>Post</label>
        <input type="text" name="inp-post" placeholder="Enter a Post">
        <a><button class="btn teal accent-4" name="inp-send">Post</button></a>
    </form>
</div>

<!-- js -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="../blog/js/materialize.js"></script>
<script src="../blog/js/main.js"></script>
</body>

</html>