<?php
include('connect.php');
include('header.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    //Query
    $sql = "SELECT * FROM users WHERE email='" . $email . "' AND password='" . $password . "' LIMIT 1";
    $result = mysqli_query($con, $sql);

    if ($result->num_rows === 1) {
        $_SESSION["login"] = "true";
        header('location: index.php');
        die();
    } else {
        header('location: login.php');
        session_unset();
    }
}

?>
<div class="section"></div>
<main>
    <center>
        <h5>Please, login into your account</h5>
        <div class="container">
            <div class="boxx z-depth-1 grey lighten-4 row">

                <form class="col s12" method="post">
                    <div class='row'>
                        <div class='col s12'>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='input-field col s12'>
                            <input class='validate' type='email' name='email' id='email' />
                            <label for='email'>Enter your email</label>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='input-field col s12'>
                            <input class='validate' type='password' name='password' id='password' />
                            <label for='password'>Enter your password</label>
                        </div>
                    </div>

                    <br />
                    <center>
                        <div class='row'>
                            <button type='submit' name='submit' class='col s12 btn btn-large waves-effect teal accent-4'>Login</button>
                        </div>
                    </center>
                </form>
            </div>
        </div>
        <a href="#!">Create account</a>
    </center>

</main>

<!-- js -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="../blog/js/materialize.js"></script>
<script src="../blog/js/main.js"></script>
</body>

</html>