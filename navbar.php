<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="movies123"><b>CISCO MOVIE SHOP</b></a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="save.php">Add movie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="show.php">show movie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="reports.php">sales reports</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link"href="#"><?=$_SESSION["info"]["names"]?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">logout</a>
            </li>
        </ul>

    </div>
</nav>
