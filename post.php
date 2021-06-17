<?php
include('connect.php');
include('header.php');



$id =  $_GET['id'];

$query = 'SELECT * FROM posts WHERE id =' . $id;
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
?>

<div class="article">
    <div class="container">
        <h5><?php echo $row['title']; ?></a></h5>
        <p><?php echo $row['post']; ?></p>
    </div>
</div>


<!-- js -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="../blog/js/materialize.js"></script>
<script src="../blog/js/main.js"></script>
</body>

</html>