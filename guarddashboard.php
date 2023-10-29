<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Dashboard</title>
        <link rel="stylesheet" href="style6.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

    </head>
    <body style = "background-image:url('bg.jpg'); background-size:cover;">
        <div class="container">
            <nav>
                <ul>
                    <li><a href="">
                        <i class="fas fa-user-circle"></i>
                        <span class="nav-item">Profile</span>
                    </a></li>
                    
                    <li><a href="malegaurdinfo.php">
                        <i class="fas fa-clipboard-list"></i>
                        <span class="nav-item">Male Guard Info</span>
                    </a></li>
                    <li><a href="femalegaurdinfo.php">
                        <i class="fas fa-clipboard-list"></i>
                        <span class="nav-item">Female Guard Info</span>
                    </a></li>
                    <li><a href="gaurdsupervisor.php">
                        <i class="fas fa-clipboard-list"></i>
                        <span class="nav-item">Gaurd Supervisor</span>
                    </a></li>
                    <li><a href="help.php">
                        <i class="fas fa-question-circle"></i>
                        <span class="nav-item">Help</span>
                    </a></li>
                    <li><a href="guardlogin.php" class="logout">
                        <i class="fas fa-sign-out-alt></i>
                        <span class="nav-item">Logout</span>
                    </a></li>
                </ul>
            </nav>
            <section class="main">
                <section class="Emergency-button-box">
                    <h1>STUDENT SECTION</h1>
                    <div class="Emergency-box">
                        <div class="Emergency">
                            <div class="box">
                                <h3>STUDENT ' S EMERGENCY</h3>
                                <a href="studentlocation.php">
                                <button>Click here</button>
                            </a>
                            </div>
                            <div class="box">
                                <h3>Chat Box</h3>
                                <a href="chatboxhtml.php">
                                <button>Click here</button>
                                </a>
                            </div>
                        </div>
                    </div>

                </section>
                <section class="Emergency-button-box">
                    <h1>report</h1>
                    <div class="Emergency-box">
                        <div class="Emergency">
                            <div class="box">
                                <h3>Student report</h3>
                                <a href="studentcomplain.php">
                                <button>Click here</button>
                            </a>
                            </div>
                            <div class="box">
                                
                                <h3>Material report</h3>
                                <a href="materialreport.php">
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