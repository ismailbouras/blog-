<?php
include('connect.php');
include('header.php');

$query = 'SELECT * FROM posts ';
$result = mysqli_query($con, $query);

if (isset($result)) {
    while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="article">
            <div class="container">
                <h5><a href="post.php?id=<?php echo $row['id'] ?>"><?php echo $row['title']; ?></a></h5>
                <p><?php echo $row['post']; ?></p>
                <a href="post.php?id=<?php echo $row['id'] ?>"><button>Read More</button></a>
            </div>
        </div>
<?php

    }
}
?>



<!-- js -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="../blog/js/materialize.js"></script>
<script src="../blog/js/main.js"></script>
</body>

</html>