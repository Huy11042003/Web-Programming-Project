<?php
include './head.php';
session_start();
?>

<body>

</body>
<nav>
    <div class="container d-flex flex-column flex-lg-row align-items-center">
        <img class="navbar-brand" src="bachkhoalogo.png" alt="HCMUT logo" width="60" height="68" p-3 m-3>

        <ul class="navbar-nav mb-2 mb-lg-0 d-flex flex-row" style="margin-left:50px;">
            <li class="nav-item">
                <a id="addBtn" class="btn btn-outline-primary btn-lg rounded-pill" style="margin-right: 10px;" href="printCV/printMain.php">CV View</a>
            </li>
        </ul>

        <ul class="navbar-nav mb-2 mb-lg-0 d-flex flow-row ms-auto" style="margin-right:50px;">
            <li class="nav-item">
                <form method="post" action="logoutProcessing.php" id="addBtn" class="btn btn-outline-primary btn-lg rounded-pill" style="margin-right: 10px;">Log out</form>
            </li>
        </ul>
    </div>
</nav>

</html>