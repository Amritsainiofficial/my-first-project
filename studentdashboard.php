<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Dashboard</title>
        <link rel="stylesheet" href="style4.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

    </head>
    <body style = "background-image:url('bg.jpg'); background-size:cover;">
        <div class="container">
            <nav>
                <ul>
                    <li><a href="profile.php">
                        <i class="fas fa-user-circle"></i>
                        <span class="nav-item">Profile</span>
                    </a></li>
                    <li><a href="messinfo.php">
                        <i class="fas fa-clipboard-list"></i>
                        <span class="nav-item">Mess Info</span>
                    </a></li>
                    <li><a href="malegaurdinfo.php">
                        <i class="fas fa-clipboard-list"></i>
                        <span class="nav-item">Male Guard Info</span>
                    </a></li>
                    <li><a href="femalegaurdinfo.php">
                        <i class="fas fa-clipboard-list"></i>
                        <span class="nav-item">Female Guard Info</span>
                    </a></li>
                    <li><a href="hostelinfo.php">
                        <i class="fas fa-clipboard-list"></i>
                        <span class="nav-item">hostel office</span>
                    </a></li>
                    <li><a href="help.php">
                        <i class="fas fa-question-circle"></i>
                        <span class="nav-item">Help</span>
                    </a></li>
                    <li><a href="studentlogin.php" class="logout">
                        <i class="fas fa-sign-out-alt></i>
                        <span class="nav-item">Logout</span>
                    </a></li>
                </ul>
            </nav>
                <section class="Emergency-button-box">
                    <h1>Emergency Buttons:</h1>
                    <div class="Emergency-box">
                        
                        <div class="Emergency">
                            <div class="box">
                                <h3>GUARD EMERGENCY BUTTON</h3>
                                <a href="location1.php">
                                <button>Click here</button>
                                <i class="fab fa-phone-alt"></i>
                                </a>
                            </div>
                            <div class="box">
                                <h3>MEDICAl EMERGENCY BUTTON</h3>
                               <a href="location2.php">
                                <button>Click here</button>
                                <i class="fab fa-phone "></i>
                            </a>
                            </div>
                            <div class="box">
                                <h3>chatbox</h3>
                                <a href="chatboxhtml.php">
                                <button>Click here</button>
                                <i class="fab fa-phone "></i>
                                </a>
                            </div>
                    </div>
                </section>
        </div>
    </body>
</html>