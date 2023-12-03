<?php
include_once('head.php');
session_start();
?>

<body>
    <nav>
        <div class="container-fluid">
            <img class="navbar-brand" src="bachkhoalogo.png" alt="HCMUT logo" width="60" height="68" p-3 m-3>
        </div>
    </nav>

    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-6 col-xl-4 p-5 card forms d-flex flex-column justify-content-center align-items-cente">

                <h2 class="text-center mb-4">Log In</h2>
                <div class="alert alert-danger" style="display: none;"></div>

                <form action="loginProcessing.php" class="d-flex flex-column justify-content-center align-items-center needs-validation" method="POST" novalidate>

                    <div class="form-group mb-3 w-75">
                        <label for="username" class="form-lable">Username</label>
                        <input type="username" class="form-control
                            <?php if (isset($_SESSION['usernamereinput'])) echo 'is-invalid' ?>" name="login_username" autocomplete="on" id="username" value="<?php if (isset($_SESSION['usernamereinput'])) { echo $_SESSION['usernamereinput']; }?>" required>
                            <?php if (isset($_SESSION['usernamereinput'])) { echo "<div class='invalid-feedback'>Input wrong username or password</div>"; } ?>
                    </div>

                    <div class="form-group mb-3 w-75">
                        <label for="password" class="form-lable">Password</label>
                        <input type="password" class="form-control" name="login_password" autocomplete="on" id="password" required>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Log In</button>
                </form>

            </div>
        </div>
    </div>
</body>

</html>