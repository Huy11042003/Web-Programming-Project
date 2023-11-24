<?php
include '../head.php';
?>

<body>

</body>
<nav>
    <div class="container d-flex flex-column flex-lg-row align-items-center">
        <a href="../main.php">
            <img class="navbar-brand" src="../bachkhoalogo.png" alt="HCMUT logo" width="60" height="68" p-3 m-3>
        </a>

        <ul class="navbar-nav mb-2 mb-lg-0 d-flex flex-row" style="margin-left:50px;">
            <li class="nav-item">
                <a id="searchBtn" class="btn btn-outline-primary btn-lg rounded-pill" style="margin-right:10px; margin-left:10px;" href="../viewCV/viewMain.php">View CV</a>
            </li>
        </ul>

        <p class="h1 d-flex justify-content-center" style="width:40%;">CV Printing</p>

        <ul class="navbar-nav mb-2 mb-lg-0 d-flex flow-row ms-auto" style="margin-right:50px;">
            <li class="nav-item">
                <button id="addBtn" class="btn btn-outline-primary btn-lg rounded-pill" style="margin-right: 10px;">Log out</button>
            </li>
        </ul>
    </div>
</nav>

<div class="row" style="height:85vh; margin:10px;">

    <!-- Input Search Info Area -->
    <div class="col-md-3 border border-primary rounded-3" style="height:100%;">

        <!-- Title Area -->
        <div class="border border-warning rounded-3" style="margin-top:10px;">
            <p class="h2 d-flex justify-content-center bg-warning rounded-3" style="margin:10px;">Search</p>
        </div>

        <!-- Search Area -->
        <div class="border border-primary rounded-3" style="margin: 30% 10%;">
            <form method="post" action="" style="margin:10px">
                <div class="d-flex flex-column align-items-center">
                    <div class="input-group mb-2">
                        <span class="input-group-text">Search info</span>
                        <input class="form-control" placeholder="Insert search info" type='text'></input>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <!-- CV Output Area -->
    <div class="col-md-9 border border-primary rounded-3" style="height:100%;">

        <!-- Title Area -->
        <div class="border border-warning rounded-3" style="margin-top:10px;">
            <p class="h2 d-flex justify-content-center bg-warning rounded-3" style="margin:10px;">CV</p>
        </div>

        <!-- CV Info Area -->
        <div class="d-flex flex-column align-items-center mt-3">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Some example text.</p>
                </div>
            </div>
        </div>

        <!-- Print Button -->
        <div class="d-flex justify-content-center mt-3">
            <button class="btn btn-outline-primary btn-lg">Print</button>
        </div>
    </div>
</div>

</html>