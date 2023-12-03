<?php
include './head.php';
session_start();

if (!isset($_SESSION['user_id']))
{
    header('Location: login.php');
}

?>

<body>

</body>
<nav>
    <div class="container d-flex flex-column flex-lg-row align-items-center">
        <img class="navbar-brand" src="bachkhoalogo.png" alt="HCMUT logo" width="60" height="68" p-3 m-3>

        <ul class="navbar-nav mb-2 mb-lg-0 d-flex flex-row" style="margin-left:50px;">
            <li class="nav-item">
                <a id="addBtn" class="btn btn-outline-primary btn-lg rounded-pill" style="margin-right: 10px;" href="viewCV/screenOutput.php">CV View</a>
            </li>
        </ul>

        <ul class="navbar-nav mb-2 mt-3 mb-lg-0 d-flex flex-row ms-auto">
            <li class="nav-item">
                <a class="btn btn-outline-primary btn-lg rounded-pill" style="margin-right: 50px;" href="logoutProcessing.php">Log out</a>
            </li>

            <li class="nav-item">
                <div class="border border-warning rounded-3">
                    <div class="row" style="margin: 5px 5px;">
                        <img src="img_avatar3.png" class="rounded col" alt="avatar.jpg" style="width: 80px; height: 50px;">
                        <h2 class="col d-flex align-items-center" style="margin: 0px;"><?php echo $_SESSION['username'] ?></h2>
                    </div>
                </div>
            <li>
        </ul>
    </div>
</nav>

</html>