<nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="chefview.php">Chef Panel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="chefview.php">My Dishes</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="adddish.php">Add Dish</a>
                        </li>

                        <li class="mr-5 nav-item">
                            <a class="nav-link" href="pend.php">Pending orders</a>
                        </li>

                        <li class="mr-5 nav-item">
                            <a class="nav-link" href="sales.php">Sales</a>
                        </li>
                        
                        <li class="ml-5 mr-5 nav-item">
                            <h4 class="nav-link" href="#"><?php  echo "Welcome " . $_SESSION['cname']; ?></h4>
                        </li>

                        <li class="nav-item ml-5">
                        <p style="color:black;font-size:150%; border:1px solid blue ; border-radius:5px; padding:5px;"><a href="logout.php" class="text-primary"> Log Out</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
