

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">UWU COLLAB</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            
            <?php
            if(isset($_SESSION['type'])) {
                if ($_SESSION['type'] == "student") {

                    echo "<li class='active'><a href='#'>Student</a></li>";
                }



                if ($_SESSION['type'] == "company") {

                    echo "<li class='active'><a href='#'>Company</a></li>";
                }
                
                 if ($_SESSION['type'] == "admin") {

                    echo "<li class='active'><a href='#'>Admin</a></li>";
                }

            }
            ?>
            
        </ul>


        <ul class="nav navbar-nav navbar-right">
            <?php if (isset($_SESSION['name'])) { ?>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['name']; ?> </a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>   Logout </a></li>
                <?php } else { ?>
                <li><a href="login.php">Login</a></li>
            <?php } ?>
        </ul>

    </div>
</div>
</nav>
