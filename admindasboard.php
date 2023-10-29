<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>AdminDashboard</title>
        <link rel="stylesheet" href="style6.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

    </head>
    <body style = "background-image:url('bg.jpg'); background-size:cover;">
        <div class="container">
            <nav>
                <ul>
                    <li><a href="help.php">
                        <i class="fas fa-question-circle"></i>
                        <span class="nav-item">Help</span>
                    </a></li>
                    <li><a href="developer.php">
                        <i class="fas fa-question-circle"></i>
                        <span class="nav-item">contact developer</span>
                    </a></li>
                    <li><a href="adminlogin.php" class="logout">
                        <i class="fas fa-sign-out-alt></i>
                        <span class="nav-item">Logout</span>
                    </a></li>
                </ul>
            </nav>
            <section class="main">
                <section class="Emergency-button-box">
                    <h1>reports</h1>
                    <div class="Emergency-box">
                        <div class="Emergency">
                            <div class="box">
                                <h3>Student Reports</h3>
                                <a href="index3.php">
                                <button>Click here</button>  
                            </a>
                            </div>
                            <div class="box">
                                <h3>Material Reports</h3>
                                <a href="index4.php">
                                <button>Click here</button>
                            </a>
                            </div>
                        </div>
                    </div>

                </section>
                <section class="Emergency-button-box">
                    <h1>Emergency</h1>
                    <div class="Emergency-box">
                        <div class="Emergency">
                        <div class="box">
                                <h3>STUDENT ' S EMERGENCY</h3>
                                <a href="studentlocation.php">
                                <button>Click here</button>
                            </a>
                            </div>
                            <div class="box">
                                <h3>Medical Emergency</h3>
                                <a href="studentlocation2.php">
                                <button>Click here</button>
                                </a>
                            </div>
                        </div>
                    </div>

                </section>
                <section class="main">
                <section class="Emergency-button-box">
                    <h1>Database</h1>
                    <div class="Emergency-box">
                        <div class="Emergency">
                            <div class="box">
                                <h3>Student database</h3>
                                <a href="index2.php">
                                <button>Click here</button>  
                            </a>
                            </div>
                            <div class="box">
                                <h3>gaurd database</h3>
                                <a href="index.php">
                                <button>Click here</button>
                            </a>
                            </div>
                        </div>
                    </div>

                </section>
            </section>
        </div>
    </body>
</html>