<?php
include './head.php';
?>

<body>

</body>
<nav>
    <div class="container d-flex flex-column flex-lg-row align-items-center">
        <img class="navbar-brand" src="bachkhoalogo.png" alt="HCMUT logo" width="60" height="68" p-3 m-3>

        <ul class="navbar-nav mb-2 mb-lg-0 d-flex flex-row" style="margin-left:50px;">
            <li class="nav-item">
                <a id="searchBtn" class="btn btn-outline-primary btn-lg rounded-pill" style="margin-right:10px; margin-left:10px;" href="viewCV/viewMain.php">View CV</a>
            </li>
            <li class="nav-item">
                <a id="addBtn" class="btn btn-outline-primary btn-lg rounded-pill" style="margin-right: 10px;" href="printCV/printMain.php">Print CV</a>
            </li>
        </ul>

        <ul class="navbar-nav mb-2 mb-lg-0 d-flex flow-row ms-auto" style="margin-right:50px;">
            <li class="nav-item">
                <button id="addBtn" class="btn btn-outline-primary btn-lg rounded-pill" style="margin-right: 10px;">Log out</button>
            </li>
        </ul>
    </div>
</nav>

</html>