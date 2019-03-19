

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">UWU COLLAB</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="companyDashboard.php">Dashboard</a></li>
          
           
        </ul>


        <ul class="nav navbar-nav navbar-right">
            <?php if (isset($_SESSION['name'])) { ?>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['name']; ?> </a></li>
                <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span>   Logout </a></li>
                <?php } ?>

    </div>
</div>
</nav>
