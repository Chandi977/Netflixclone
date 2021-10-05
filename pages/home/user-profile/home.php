<?php
session_start();
if($_SESSION["uname"])
{
	echo '';
// echo "Welcome ".$_SESSION["uname"]. " to Home Page";
}
else
{
	header("Location:../../../dbconn/logout.php");
}
?>
    <!DOCTYPE html>
    <html class="no-js">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" href="../../../source/img/logo.png">
        <title>Netflix world – Watch TV Shows Online, Watch Movies Online</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="../../../frameworkLib/icons.js"></script>
        <link rel="stylesheet" href="../../../styles/global.css">
        <link rel="stylesheet" href="../../../styles/thegod.css">
        <link rel="stylesheet" href="../../../styles/userprofile.css">
    </head>

    <body>
        <main id="mainContainer" class="p-b-40">
            <header class="d-flex space-between flex-center flex-middle">
                <div class="nav-links d-flex flex-center flex-middle">
                    <a href="/">
                        <h2 class="logo logo-text red-color f-s-28 m-r-25">NETFLIX</h2>
                        <h2 class="second-logo-text red-color f-s-28">N</h2>
                    </a>
                    <a href="../browse.php" class="nav-item home">Home</a>
                    <a href="../tvshow.php" class="nav-item">TV Show</a>
                    <a href="../movies.php" class="nav-item">Movies</a>
                    <a href="../latest.php" class="nav-item latest">Latest</a>
                    <a href="../mylist.php" class="nav-item">My List</a>
                </div>
                <div class="righticons d-flex flex-end flex-middle">
                    <i class="fas fa-search" style="font-size:30px; margin-right:15px; color:white;"></i>
                    <div class="dropdown notification">
                        <i class="fas fa-bell" style="font-size:30px; margin-right:15px; color:white;"></i>
                        <div class="dropdown-content">
                            <a href="#" class="profile-item d-flex flex-middle">
                                <img src="../../../source/images/icons/user2.png" alt="user profile icon" class="user-icon">
                                <span>You have new notification from <input type="text" disabled
                                    style="color:white; background:transparent; border: none; cursor:pointer;"
                                    value="<?php echo @$_SESSION[" uname"]; ?>"></span>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <img src="../../../source/images/icons/user-image-green.png" alt="user profile icon" class="user-icon">
                        <span class="profile-arrow"></span>

                        <div class="dropdown-content">
                            <div class="profile-links">
                                <a href="#" class="profile-item d-flex flex-middle">
                                    <img src="../../../source/images/icons/user1.png" alt="user profile icon" class="user-icon">
                                    <input type="text" disabled style="color:white; background:transparent; border: none; cursor:pointer;" value="<?php echo @$_SESSION["uname"]; ?>">
                                </a>
                                <a href="#" class="profile-item last">Manage Profiles</a>
                            </div>
                            <div class="line"></div>
                            <div class="links d-flex direction-column">
                                <a href="user-profile/home.php">Account</a>
                                <a href="#">Help Center</a>
                                <a href="../../../dbconn/logout.php">Sign Out of Netflix</a>
                            </div>

                        </div>
                    </div>

                </div>
            </header>



            <!--profile section-->
            <section class="userprofile" id="userprofilecontainer">
                <div>
                    <h2 class="heading f-s-40">
                        Account
                    </h2>
                </div>
                <div class="line"></div>
                <div class="membership d-flex flex-no-wrap space-between">
                    <div class="left">
                        <h4 class="headline">
                            MEMBERSHIP & BILLING
                        </h4>
                        <button class="button">Cancel Membership</button>
                    </div>
                    <div class="right">
                        <div class="d-flex space-between">
                            <div class="email">
                                <strong><input type="text" disabled
                                    style="color:black; background:transparent; border: none; cursor:pointer;"
                                    value="<?php echo @$_SESSION["uid"]; ?>"></strong>
                            </div>
                            <div class="link">
                                <a href="#" class="link-item">
                                Change account email
                            </a>
                            </div>
                        </div>

                        <div class="d-flex space-between">
                            <div class="password">
                                Password: *********
                            </div>
                            <div class="link">
                                <a href="#" class="link-item">
                                Change password
                            </a>
                            </div>
                        </div>

                        <div class="d-flex space-between">
                            <div class="email">
                                Phone: 987643210
                            </div>
                            <div class="link">
                                <a href="#" class="link-item">
                                Change phone number
                            </a>
                            </div>
                        </div>
                        <div class="line"></div>

                        <div class="carddetail d-flex space-between flex-middle">
                            <div class="card">
                                <h4><span class="icon-visa">VISA</span> •••• •••• •••• 5350</h4>
                            </div>
                            <div class="link">
                                <a href="#" class="link-item">
                                Update payment info
                            </a>
                                <a href="#" class="link-item">
                                Biling detials
                            </a>
                            </div>
                        </div>
                        <div class="line"></div>

                        <div class="gift-card d-flex direction-column">
                            <a href="#" class="link-item">
                            Redeem gift card or promo code
                        </a>
                            <a href="#" class="link-item">
                            Where to buy gift cards
                        </a>
                        </div>
                    </div>
                </div>
                <div class="line"></div>

                <!--plan details-->
                <div class=" plan-details d-flex flex-middle space-between">
                    <div class="left">
                        <h4 class="headline">PLAN DETAILS</h4>
                    </div>
                    <div class="right d-flex space-between">
                        <p>Mobile</p>
                        <a href="#" class="link-item">Change plan</a>
                    </div>
                </div>
                <div class="line"></div>

                <!--settings-->
                <div class="settings d-flex ">
                    <div class="left">
                        <h4 class="headline">SETTINGS</h4>
                    </div>
                    <div class="right d-flex direction-column">
                        <a href="#" class="link-item">Test participation</a>
                        <a href="#" class="link-item">Manage download devices</a>
                        <a href="#" class="link-item">Activate a device</a>
                        <a href="#" class="link-item">Recent device streaming activity</a>
                        <a href="#" class="link-item">Sign out of all devices</a>
                        <a href="#" class="link-item">Download your personal information</a>
                    </div>
                </div>
                <div class="line"></div>

                <!--parental control-->

                <div class="parental-control d-flex">
                    <div class="left">
                        <h4 class="headline">PROFILE & PARENTAL CONTROLS</h4>
                    </div>
                    <div class="right">
                        <div class="">
                            <div class="info-container d-flex flex-middle space-between">
                                <div class="name d-flex">
                                    <img src="../../../source/images/icons/user1.png" alt="user" class="user-icon" />
                                    <div class="content">
                                        <input type="text" disabled style="color:black; background:transparent; border: none; cursor:pointer;" value="<?php echo @$_SESSION["uname"]; ?>">
                                        <p class="maturity">All Maturity Rating</p>
                                    </div>
                                </div>

                                <div class="righticon">
                                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
            </section>

            <!--footer section and footer fixed menu mobile-->

            <footer class="mainfooter d-flex direction-column space-between" id="footer">
                <div class="container footer-container flex-start">
                    <div class="widgets d-flex space-between">
                        <div class="first-widget">
                            <ul>
                                <li class="list-item">Audio and Subtitles</li>
                                <li class="list-item">Media Center</li>
                                <li class="list-item">Privacy</li>
                                <li class="list-item">Contact us</li>
                            </ul>
                        </div>
                        <div class="second-widget">
                            <ul>
                                <li class="list-item">Help Center</li>
                                <li class="list-item">Cookie</li>
                                <li class="list-item">Jobs</li>
                            </ul>
                        </div>
                        <div class="third-widget">
                            <ul>
                                <li class="list-item">Audio Description</li>
                                <li class="list-item">Investor Relations</li>
                                <li class="list-item">Legal Notice</li>
                            </ul>
                        </div>
                        <div class="forth-widget">
                            <ul>
                                <li class="list-item">Gift Card</li>
                                <li class="list-item">Term Of Use</li>
                                <li class="list-item">Corporate Information</li>
                            </ul>
                        </div>
                    </div>

                    <p class="copyright">@copyright 2021 Chandi Charan Mahato</p>
                </div>
            </footer>
            </div>
        </main>
    </body>

    </html>