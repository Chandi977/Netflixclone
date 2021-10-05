<?php
session_start();
if($_SESSION["uname"])
{
	echo '';
// echo "Welcome ".$_SESSION["uname"]. " to Home Page";
}
else
{
	header("Location:../login/index.html");
}
?>
    <!DOCTYPE html>
    <html class="no-js">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="../../source/img/logo.png">
        <title>Netflix world- Frontend Clone – Watch TV Shows Online, Watch Movies Online</title>

        <script src="../../frameworkLib/icons.js"></script>
        <link rel="stylesheet" href="../../frameworkLib/owl.carousel.css" />
        <script src="../../frameworkLib/jquery 3.5.0.js"></script>
        <script src="../../frameworkLib/owl.carousel.js"></script>
        <script src="../../js/main-script.js"></script>
        <script src="../../js/show.js"></script>

        <link rel="stylesheet" href="../../styles/global.css">
        <link rel="stylesheet" href="../../styles/thegod.css">
    </head>

    <body>
        <main id="mainContainer" class="p-b-40">
            <header class="d-flex space-between flex-center flex-middle">
                <div class="nav-links d-flex flex-center flex-middle">
                    <a href="#">
                        <h2 class="logo logo-text red-color f-s-28 m-r-25">NETFLIX</h2>
                        <h2 class="second-logo-text red-color f-s-28">N</h2>
                    </a>
                    <p class="nav-item home" onclick="home();">Home</p>
                    <p class="nav-item" onclick="tvshow();">TvShows</p>
                    <p onclick="movies();">Movies</p>
                    <p class="nav-item latest" onclick="latest();">Latest</p>
                    <p class="nav-item" onclick="myList();">MyList</p>
                </div>
                <div class="righticons d-flex flex-end flex-middle">
                    <i class="fas fa-search" style="font-size:30px; margin-right:15px"></i>
                    <div class="dropdown notification">
                        <i class="fas fa-bell" style="font-size:30px; margin-right:15px"></i>
                        <div class="dropdown-content">
                            <a href="#" class="profile-item d-flex flex-middle">
                                <img src="../../source/images/icons/user2.png" alt="user profile icon" class="user-icon">
                                <span>You have new notification from <input type="text" disabled
                                    style="color:white; background:transparent; border: none; cursor:pointer;"
                                    value="<?php echo @$_SESSION[" uname"]; ?>"></span>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <img src="../../source/images/icons/user-image-green.png" alt="user profile icon" class="user-icon">
                        <span class="profile-arrow"></span>

                        <div class="dropdown-content">
                            <div class="profile-links">
                                <a href="#" class="profile-item d-flex flex-middle">
                                    <img src="../../source/images/icons/user1.png" alt="user profile icon" class="user-icon">
                                    <input type="text" disabled style="color:white; background:transparent; border: none; cursor:pointer;" value="<?php echo @$_SESSION[" uname "]; ?>">
                                </a>
                                <a href="#" class="profile-item last">Manage Profiles</a>
                            </div>
                            <div class="line"></div>
                            <div class="links d-flex direction-column">
                                <a href="user-profile/home.php">Account</a>
                                <a href="#">Help Center</a>
                                <a href="../../dbconn/logout.php">Sign Out of Netflix</a>
                            </div>
                        </div>
                    </div>

                </div>
            </header>
            <div id="main-home">
                <div>
                    <section id="browse-dashboard" class=" d-flex direction-column flex-start middle-align">
                        <div>
                            <!--trailer video-->
                            <video class="hero-background-image" id="hero-video" poster="../../source/images/movies/extraction-poster.jpg">
                            <source
                                src="../../source/images/movies/videos/Extraction Official Trailer Screenplay by JOE RUSSO Directed by SAM HARGRAVE Netflix_720P HD.mp4"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                            <div class="shadow-layer"></div>
                        </div>

                        <div class="container text-container" style="z-index: 5;">
                            <div class="contentlogo">
                                <img src="../../source/images/movies/extraction.png" alt="content logo" class="show-logo" />
                            </div>

                            <div class="ranking d-flex m-t-20 flex-middle">
                                <span class="p-l-10">#2 in India Today</span>
                            </div>

                            <div class="synopsis m-t-20" style="max-width: 500px;">
                                <p>
                                    Getting the grades? Too easy. Getting through grief? Too hard. This year, there’s just one goal on her mind: getting the guy.
                                </p>
                            </div>
                            <div class="buttons-container m-t-20">

                                <button class="play-button"><i class="fas fa-play"></i> Play</button>
                                <button class="more-info-button m-t-20"><i class="fas fa-info-circle"
                                    aria-hidden="true"></i>
                                More Info</button>
                            </div>
                        </div>
                    </section>
                </div>


                <div class="black-background">

                    <section id="mylist" class="container">

                        <h4 class="mylist-heading">
                            My List
                        </h4>
                        <div class="mylist-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/tv-show/poster/never-have-ever-short poster.jpg">
                                <source
                                    src="../../source/images/tv-show/videos/Never Have I Ever - Official Trailer - Netflix_2.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play-circle" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            Never Have I Ever
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow"> 1 Season</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Nudeity</p>
                                        <p>#Romance</p>
                                        <p>#Love</p>
                                    </div>
                                </div>
                            </div>

                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/movies/we-are-the-milers-poster-little.webp">
                                <source
                                    src="../../source/images/movies/videos/We're the Millers - Official Trailer [HD].mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play-circle" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            WE'RE THE MILERS
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow">Movie</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Nudeity</p>
                                        <p>#fiction</p>
                                        <p>#Comedy</p>
                                    </div>
                                </div>
                            </div>

                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/movies/extraction-poster.jpg">
                                <source
                                    src="../../source/images/movies/videos/Extraction Official Trailer Screenplay by JOE RUSSO Directed by SAM HARGRAVE Netflix_720P HD.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play-circle" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            Extraction
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow">Movie</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Adrenalin</p>
                                        <p>#Wild</p>
                                        <p>#Action</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </section>



                    <!--continure watching-->
                    <section id="continue-watching" class="container p-t-40">
                        <h4 class="continue-watching-heading">
                            Continue watching for Chandi Charan
                        </h4>
                        <div class="continue-watching-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">

                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/movies/horrible-bosses-middle-poster.webp">
                                <source
                                    src="../../source/images/tv-show/videos/Never Have I Ever - Official Trailer - Netflix_2.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play-circle" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            Horrible Bosses
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow">Movie</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Nudeity</p>
                                        <p>#sex</p>
                                        <p>#Comedy</p>
                                    </div>
                                </div>
                            </div>


                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/movies/kabir-singh-poster.webp">
                                <source
                                    src="../../source/images/tv-show/videos/Never Have I Ever - Official Trailer - Netflix_2.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play-circle" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            Kabir Singh
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow">Movie</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Nudeity</p>
                                        <p>#crime</p>
                                        <p>#Love</p>
                                    </div>
                                </div>
                            </div>

                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/tv-show/poster/never-have-ever-short poster.jpg">
                                <source
                                    src="../../source/images/tv-show/videos/Never Have I Ever - Official Trailer - Netflix_2.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play-circle" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            Never Have I Ever
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow"> 1 Season</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Nudeity</p>
                                        <p>#Romance</p>
                                        <p>#Love</p>
                                    </div>
                                </div>
                            </div>

                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/movies/we-are-the-milers-poster-little.webp">
                                <source
                                    src="../../source/images/movies/videos/We're the Millers - Official Trailer [HD].mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play-circle" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            WE'RE THE MILERS
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow">Movie</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Nudeity</p>
                                        <p>#fiction</p>
                                        <p>#Comedy</p>
                                    </div>
                                </div>
                            </div>

                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/movies/extraction-poster.jpg">
                                <source src="../../source/images/movies/videos/Murder Mystery - Trailer - Netflix.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            Extraction
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow">Movie</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Adrenalin</p>
                                        <p>#Wild</p>
                                        <p>#Action</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>

                    <!--Romantic Movies-->
                    <section id="romantic" class="container p-t-40">
                        <h4 class="romantic-heading">
                            Romantic Movies
                        </h4>
                        <div class="romantic-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                            <a href="#">
                                <img src="../../source/images/movies/horrible-bosses-middle-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/kabir-singh-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/extraction-poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/tv-show/poster/never-have-ever-short poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/we-are-the-milers-poster-little.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>

                            <a href="#">
                                <img src="../../source/images/movies/we-are-the-milers-poster-little.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>

                        </div>
                    </section>
                    <section class="big-section d-flex flex-start container">
                        <img src="../../source/images/tv-show/poster/sex-education.webp" alt="">

                        <div class="right-side">
                            <div class="contentlogo">
                                <img src="../../source/images/tv-show/poster/sex-education-logo.webp" alt="content logo" class="show-logo" />
                            </div>
                            <div class="ranking d-flex m-t-20 flex-middle">
                                <span class="p-l-10 f-s-24 f-w-8">#6 in India Today</span>
                            </div>

                            <div class="synopsis m-t-20" style="max-width: 500px;">
                                <p class="f-s-20">
                                    Sex. It's on teenage minds. It's messing with their heads. And this kid is the least likely sexpert in the schoolyard.
                                </p>
                            </div>
                            <div class="buttons-container m-t-20">
                                <button class="play-button"><span>
                                    <i class="fas fa-play"></i>
                                </span> Play</button>

                                <button class="more-info-button m-t-20"><span>
                                    <i class="fas fa-info-circle" aria-hidden="true"></i>
                                </span> More Info</button>
                            </div>
                        </div>
                    </section>


                    <!--Get In On the Action-->
                    <section id="romantic" class="container p-t-40">
                        <h4 class="romantic-heading">
                            Get In On the Action
                        </h4>
                        <div class="romantic-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                            <a href="#">
                                <img src="../../source/images/movies/horrible-bosses-middle-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/kabir-singh-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/extraction-poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/tv-show/poster/never-have-ever-short poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/we-are-the-milers-poster-little.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>

                            <a href="#">
                                <img src="../../source/images/movies/we-are-the-milers-poster-little.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                        </div>
                    </section>

                    <!--Bingeworthy TV Shows-->
                    <section id="romantic" class="container p-t-40">
                        <h4 class="romantic-heading">
                            Bingeworthy TV Shows
                        </h4>
                        <div class="romantic-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                            <a href="#">
                                <img src="../../source/images/movies/horrible-bosses-middle-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/kabir-singh-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/extraction-poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/tv-show/poster/never-have-ever-short poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/we-are-the-milers-poster-little.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                        </div>
                    </section>


                    <!--Hollywood Action movies-->
                    <section id="romantic" class="container p-t-40">
                        <h4 class="romantic-heading">
                            Hollywood Action Movies
                        </h4>
                        <div class="romantic-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                            <a href="#">
                                <img src="../../source/images/movies/horrible-bosses-middle-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/kabir-singh-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/extraction-poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/tv-show/poster/never-have-ever-short poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/we-are-the-milers-poster-little.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                        </div>
                    </section>
                </div>
            </div>
            <div id="latest-div">
                <div class="black-background" style="margin: 0;">
                    <!--new tv show-->
                    <section id="newtvshow" class="container p-t-40" style="padding-top: 120px;">
                        <h4 class="romantic-heading">
                            Trending TV Shows
                        </h4>
                        <div class="romantic-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                            <a href="#">
                                <img src="../../source/images/movies/horrible-bosses-middle-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/kabir-singh-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/extraction-poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/tv-show/poster/never-have-ever-short poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/we-are-the-milers-poster-little.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>

                            <a href="#">
                                <img src="../../source/images/movies/we-are-the-milers-poster-little.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                        </div>
                    </section>
                    <!--big poster screen left poster right content-->
                    <section class="big-section d-flex flex-start container">
                        <img src="../../source/images/movies/swat poster.jpg" alt="">
                        <div class="right-side">
                            <div class="contentlogo">
                                <img src="../../source/images/movies/swat coming soon.webp" alt="content logo" class="show-logo" />
                            </div>

                            <!--top 10 ranking badge svg-->
                            <div class="ranking d-flex m-t-20 flex-middle">

                                <span class="p-l-10 f-s-24 f-w-8">#1 in USA</span>
                            </div>

                            <div class="synopsis m-t-20" style="max-width: 500px;">
                                <p class="f-s-20">
                                    When a S.W.A.T. team takes in a mysterious, high-profile prisoner, international threats unleash a barrage of attacks on their compound to retrieve him.
                                </p>
                            </div>
                            <div class="buttons-container m-t-20">
                                <button class="play-button"><span>

                                </span> <i class="fas fa-play" aria-hidden="true"></i> Play</button>

                                <button class="more-info-button m-t-20"><span>

                                </span><i class="fas fa-info-circle" aria-hidden="true"></i> More Info</button>
                            </div>
                        </div>
                    </section>
                    <!--Get In On the Action-->
                    <section id="romantic" class="container p-t-40">
                        <h4 class="romantic-heading">
                            Get In On the Action
                        </h4>
                        <div class="romantic-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                            <a href="#">
                                <img src="../../source/images/movies/horrible-bosses-middle-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/kabir-singh-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/extraction-poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/tv-show/poster/never-have-ever-short poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/we-are-the-milers-poster-little.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/we-are-the-milers-poster-little.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                        </div>
                    </section>

                    <!--Bingeworthy TV Shows-->
                    <section id="romantic" class="container p-t-40">
                        <h4 class="romantic-heading">
                            Bingeworthy TV Shows
                        </h4>
                        <div class="romantic-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                            <a href="#">
                                <img src="../../source/images/movies/horrible-bosses-middle-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/kabir-singh-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/extraction-poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/tv-show/poster/never-have-ever-short poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/we-are-the-milers-poster-little.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                        </div>
                    </section>


                    <!--Hollywood Action movies-->
                    <section id="romantic" class="container p-t-40">
                        <h4 class="romantic-heading">
                            Hollywood Action Movies
                        </h4>
                        <div class="romantic-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                            <a href="#">
                                <img src="../../source/images/movies/horrible-bosses-middle-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/kabir-singh-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/extraction-poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/tv-show/poster/never-have-ever-short poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/we-are-the-milers-poster-little.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                        </div>
                    </section>
                </div>
            </div>
            <div id="movies-div">
                <!-- hero section -->
                <div class="">
                    <section id="browse-dashboard" class=" d-flex direction-column flex-start middle-align">
                        <div>
                            <!--trailer video-->
                            <video class="hero-background-image" id="hero-video" poster="../../source/images/movies/murder mystery.jpg">
                            <source src="../../source/images/movies/videos/Murder Mystery - Trailer - Netflix.mp4"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                            <!--left shadow-->
                            <div class="shadow-layer"></div>
                        </div>

                        <div class="container text-container" style="z-index: 5;">
                            <div class="contentlogo">
                                <img src="../../source/images/movies/murder mystery logo.webp" alt="content logo" class="show-logo" />
                            </div>
                            <!--top 10 ranking badge svg-->
                            <div class="ranking d-flex m-t-20 flex-middle">
                                <span class="p-l-10">#16 in India Today</span>
                            </div>

                            <div class="synopsis m-t-20" style="max-width: 500px;">
                                <p>
                                    An overdue honeymoon. A shocking crime. A roomful of suspects. If Nick and Audrey can stay alive, this could be their best vacation ever.
                                </p>
                            </div>
                            <div class="buttons-container m-t-20">
                                <button class="play-button"><i class="fas fa-play" aria-hidden="true"></i> Play</button>

                                <button class="more-info-button m-t-20"><i class="fas fa-info-circle"
                                    aria-hidden="true"></i> More
                                Info</button>
                            </div>
                        </div>
                    </section>
                </div>

                <!--paretn div with black bg after main hero section-->
                <div class="black-background">


                    <!--hollywood new release -->
                    <section id="mylist" class="container">

                        <h4 class="mylist-heading">
                            Hollywood Movies / Action, Mystery
                        </h4>
                        <div class="mylist-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/tv-show/poster/never-have-ever-short poster.jpg">
                                <source
                                    src="../../source/images/tv-show/videos/Never Have I Ever - Official Trailer - Netflix_2.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            Never Have I Ever
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow"> 1 Season</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Nudeity</p>
                                        <p>#Romance</p>
                                        <p>#Love</p>
                                    </div>
                                </div>
                            </div>

                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/movies/we-are-the-milers-poster-little.webp">
                                <source
                                    src="../../source/images/movies/videos/We're the Millers - Official Trailer [HD].mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            WE'RE THE MILERS
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow">Movie</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Nudeity</p>
                                        <p>#fiction</p>
                                        <p>#Comedy</p>
                                    </div>
                                </div>
                            </div>

                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/movies/extraction-poster.jpg">
                                <source src="../../source/images/movies/videos/Murder Mystery - Trailer - Netflix.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            Extraction
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow">Movie</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Adrenalin</p>
                                        <p>#Wild</p>
                                        <p>#Action</p>
                                    </div>
                                </div>
                            </div>
                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/tv-show/poster/never-have-ever-short poster.jpg">
                                <source
                                    src="../../source/images/tv-show/videos/Never Have I Ever - Official Trailer - Netflix_2.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            Never Have I Ever
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow"> 1 Season</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Nudeity</p>
                                        <p>#Romance</p>
                                        <p>#Love</p>
                                    </div>
                                </div>
                            </div>

                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/tv-show/poster/never-have-ever-short poster.jpg">
                                <source
                                    src="../../source/images/tv-show/videos/Never Have I Ever - Official Trailer - Netflix_2.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            Never Have I Ever
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow"> 1 Season</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Nudeity</p>
                                        <p>#Romance</p>
                                        <p>#Love</p>
                                    </div>
                                </div>
                            </div>
                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="images/tv-show/poster/never-have-ever-short poster.jpg">
                                <source
                                    src="../../source/images/tv-show/videos/Never Have I Ever - Official Trailer - Netflix_2.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            Never Have I Ever
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow"> 1 Season</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Nudeity</p>
                                        <p>#Romance</p>
                                        <p>#Love</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </section>



                    <!--new release -->
                    <section id="continue-watching" class="container p-t-40">
                        <h4 class="continue-watching-heading">
                            New release original netflix
                        </h4>
                        <div class="continue-watching-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">

                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/movies/horrible-bosses-middle-poster.webp">
                                <source
                                    src="../../source/images/tv-show/videos/Never Have I Ever - Official Trailer - Netflix_2.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            Horrible Bosses
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow">Movie</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Nudeity</p>
                                        <p>#sex</p>
                                        <p>#Comedy</p>
                                    </div>
                                </div>
                            </div>


                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/movies/kabir-singh-poster.webp">
                                <source
                                    src="../../source/images/tv-show/videos/Never Have I Ever - Official Trailer - Netflix_2.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            Kabir Singh
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow">Movie</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Nudeity</p>
                                        <p>#crime</p>
                                        <p>#Love</p>
                                    </div>
                                </div>
                            </div>

                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/tv-show/poster/never-have-ever-short poster.jpg">
                                <source
                                    src="../../source/images/tv-show/videos/Never Have I Ever - Official Trailer - Netflix_2.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            Never Have I Ever
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow"> 1 Season</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Nudeity</p>
                                        <p>#Romance</p>
                                        <p>#Love</p>
                                    </div>
                                </div>
                            </div>

                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/movies/we-are-the-milers-poster-little.webp">
                                <source
                                    src="../../source/images/movies/videos/We're the Millers - Official Trailer [HD].mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            WE'RE THE MILERS
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow">Movie</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Nudeity</p>
                                        <p>#fiction</p>
                                        <p>#Comedy</p>
                                    </div>
                                </div>
                            </div>

                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/movies/extraction-poster.jpg">
                                <source src="../../source/images/movies/videos/Murder Mystery - Trailer - Netflix.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            Extraction
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow">Movie</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Adrenalin</p>
                                        <p>#Wild</p>
                                        <p>#Action</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>

                    <!--Romantic Movies-->
                    <section id="romantic" class="container p-t-40">
                        <h4 class="romantic-heading">
                            Romantic Movies
                        </h4>
                        <div class="romantic-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                            <a href="#">
                                <img src="../../source/images/movies/horrible-bosses-middle-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/kabir-singh-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/extraction-poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/tv-show/poster/never-have-ever-short poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/we-are-the-milers-poster-little.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>

                            <a href="#">
                                <img src="../../source/images/movies/we-are-the-milers-poster-little.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>

                        </div>
                    </section>

                    <!--big poster screen left poster right content-->
                    <section class="big-section d-flex flex-start container">
                        <img src="../../source/images/movies/we are the milers big poster.jpg" alt="">

                        <div class="right-side">
                            <div class="contentlogo">
                                <img src="../../source/images/movies/milers logo.webp" alt="content logo" class="show-logo" />
                            </div>


                            <div class="ranking d-flex m-t-20 flex-middle">

                                <span class="p-l-10 f-s-24 f-w-8">#1 in India Today</span>
                            </div>

                            <div class="synopsis m-t-20" style="max-width: 500px;">
                                <p class="f-s-20">
                                    Sex. It's on teenage minds. It's messing with their heads. And this kid is the least likely sexpert in the schoolyard.
                                </p>
                            </div>
                            <div class="buttons-container m-t-20">
                                <button class="play-button"><i class="fas fa-play" aria-hidden="true"></i> Play</button>

                                <button class="more-info-button m-t-20"><i class="fas fa-info-circle"
                                    aria-hidden="true"></i> More
                                Info</button>
                            </div>
                        </div>
                    </section>


                    <!--Get In On the Action-->
                    <section id="romantic" class="container p-t-40">
                        <h4 class="romantic-heading">
                            Get In On the Action
                        </h4>
                        <div class="romantic-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                            <a href="#">
                                <img src="../../source/images/movies/horrible-bosses-middle-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/kabir-singh-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/extraction-poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/tv-show/poster/never-have-ever-short poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/we-are-the-milers-poster-little.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>

                            <a href="#">
                                <img src="../../source/images/movies/we-are-the-milers-poster-little.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>

                        </div>
                    </section>

                    <!--Bingeworthy TV Shows-->
                    <section id="romantic" class="container p-t-40">
                        <h4 class="romantic-heading">
                            Bingeworthy TV Shows
                        </h4>
                        <div class="romantic-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                            <a href="#">
                                <img src="../../source/images/movies/horrible-bosses-middle-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/kabir-singh-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/extraction-poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/tv-show/poster/never-have-ever-short poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/we-are-the-milers-poster-little.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>



                        </div>
                    </section>


                    <!--Hollywood Action movies-->
                    <section id="romantic" class="container p-t-40">
                        <h4 class="romantic-heading">
                            Hollywood Action Movies
                        </h4>
                        <div class="romantic-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                            <a href="#">
                                <img src="../../source/images/movies/horrible-bosses-middle-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/kabir-singh-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/extraction-poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/tv-show/poster/never-have-ever-short poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/we-are-the-milers-poster-little.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                        </div>
                    </section>

                </div>
            </div>
            <div id="mylist-div">
                <section id="mylist" class="container p-t-40" style="padding-top: 180px;">
                    <h4 class="romantic-heading">
                        My List
                    </h4>
                    <div class="my-list-page-container d-flex flex-start flex-middle">
                        <a href="#">
                            <img src="../../source/images/movies/horrible-bosses-middle-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                        <a href="#">
                            <img src="../../source/images/movies/kabir-singh-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                        <a href="#">
                            <img src="../../source/images/movies/extraction-poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                        <a href="#">
                            <img src="../../source/images/tv-show/poster/never-have-ever-short poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                        <a href="#">
                            <img src="../../source/images/movies/we-are-the-milers-poster-little.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                        <a href="#">
                            <img src="../../source/images/movies/kabir-singh-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>



                    </div>
                </section>

            </div>
            <div id="tvshow-div">
                <section id="browse-dashboard" class=" d-flex direction-column flex-start middle-align">
                    <div>
                        <!--trailer video-->
                        <video class="hero-background-image" id="hero-video" poster="../../source/images/movies/we are the milers big poster.jpg">
                        <source src="../../source/images/movies/videos/We're the Millers - Official Trailer [HD].mp4"
                            type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                        <!--left shadow-->
                        <div class="shadow-layer"></div>
                    </div>

                    <div class="container text-container" style="z-index: 5;">
                        <div class="contentlogo">
                            <img src="../../source/images/movies/milers logo.webp" alt="content logo" class="show-logo" />
                        </div>
                        <!--top 10 ranking badge svg-->
                        <div class="ranking d-flex m-t-20 flex-middle">

                            <span class="p-l-10">#8 in India Today</span>
                        </div>

                        <div class="synopsis m-t-20" style="max-width: 500px;">
                            <p>
                                Here's his to-do list: rent an RV; get a phony family; outsmart the DEA, ICE and lunatic drug lords. Seems doable.
                            </p>
                        </div>
                        <div class="buttons-container m-t-20">
                            <button class="play-button"><i class="fas fa-play" aria-hidden="true"></i> Play</button>

                            <button class="more-info-button m-t-20"><i class="fas fa-info-circle" aria-hidden="true"></i>
                            More
                            Info</button>
                        </div>
                    </div>
                </section>


                <!--paretn div with black bg after main hero section-->
                <div class="black-background">


                    <!--hollywood new release -->
                    <section id="mylist" class="container">

                        <h4 class="mylist-heading">
                            Hollywood TV show / Action, Mystery
                        </h4>
                        <div class="mylist-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/tv-show/poster/never-have-ever-short poster.jpg">
                                <source
                                    src="../../source/images/tv-show/videos/Never Have I Ever - Official Trailer - Netflix_2.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            Never Have I Ever
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow"> 1 Season</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Nudeity</p>
                                        <p>#Romance</p>
                                        <p>#Love</p>
                                    </div>
                                </div>
                            </div>

                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/movies/we-are-the-milers-poster-little.webp">
                                <source
                                    src="../../source/images/movies/videos/We're the Millers - Official Trailer [HD].mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            WE'RE THE MILERS
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow">Movie</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Nudeity</p>
                                        <p>#fiction</p>
                                        <p>#Comedy</p>
                                    </div>
                                </div>
                            </div>

                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/movies/extraction-poster.jpg">
                                <source src="../../source/images/movies/videos/Murder Mystery - Trailer - Netflix.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            Extraction
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow">Movie</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Adrenalin</p>
                                        <p>#Wild</p>
                                        <p>#Action</p>
                                    </div>
                                </div>
                            </div>
                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/tv-show/poster/never-have-ever-short poster.jpg">
                                <source
                                    src="../../source/images/tv-show/videos/Never Have I Ever - Official Trailer - Netflix_2.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            Never Have I Ever
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow"> 1 Season</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Nudeity</p>
                                        <p>#Romance</p>
                                        <p>#Love</p>
                                    </div>
                                </div>
                            </div>

                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/tv-show/poster/never-have-ever-short poster.jpg">
                                <source
                                    src="../../source/images/tv-show/videos/Never Have I Ever - Official Trailer - Netflix_2.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            Never Have I Ever
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow"> 1 Season</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Nudeity</p>
                                        <p>#Romance</p>
                                        <p>#Love</p>
                                    </div>
                                </div>
                            </div>
                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/tv-show/poster/never-have-ever-short poster.jpg">
                                <source
                                    src="../../source/images/tv-show/videos/Never Have I Ever - Official Trailer - Netflix_2.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            Never Have I Ever
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow"> 1 Season</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Nudeity</p>
                                        <p>#Romance</p>
                                        <p>#Love</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </section>



                    <!--new release -->
                    <section id="continue-watching" class="container p-t-40">
                        <h4 class="continue-watching-heading">
                            New release original netflix
                        </h4>
                        <div class="continue-watching-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">

                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/movies/horrible-bosses-middle-poster.webp">
                                <source
                                    src="../../source/images/tv-show/videos/Never Have I Ever - Official Trailer - Netflix_2.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            Horrible Bosses
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow">Movie</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Nudeity</p>
                                        <p>#sex</p>
                                        <p>#Comedy</p>
                                    </div>
                                </div>
                            </div>


                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/movies/kabir-singh-poster.webp">
                                <source
                                    src="../../source/images/tv-show/videos/Never Have I Ever - Official Trailer - Netflix_2.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            Kabir Singh
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow">Movie</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Nudeity</p>
                                        <p>#crime</p>
                                        <p>#Love</p>
                                    </div>
                                </div>
                            </div>

                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/tv-show/poster/never-have-ever-short poster.jpg">
                                <source
                                    src="../../source/images/tv-show/videos/Never Have I Ever - Official Trailer - Netflix_2.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            Never Have I Ever
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow"> 1 Season</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Nudeity</p>
                                        <p>#Romance</p>
                                        <p>#Love</p>
                                    </div>
                                </div>
                            </div>

                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/movies/we-are-the-milers-poster-little.webp">
                                <source
                                    src="../../source/images/movies/videos/We're the Millers - Official Trailer [HD].mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            WE'RE THE MILERS
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow">Movie</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Nudeity</p>
                                        <p>#fiction</p>
                                        <p>#Comedy</p>
                                    </div>
                                </div>
                            </div>

                            <div class="video">
                                <video class="mylist-img p-r-10 p-t-10 video-item" poster="../../source/images/movies/extraction-poster.jpg">
                                <source src="../../source/images/movies/videos/Murder Mystery - Trailer - Netflix.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                                <div class="video-description d-flex flex-end direction-column">
                                    <div class="play-button">
                                        <i class="fas fa-play" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h4 class="heading f-w-8 text-shadow">
                                            Extraction
                                        </h4>
                                    </div>
                                    <div class="info d-flex flex-middle flex-no-wrap">
                                        <p class="rated text-shadow"><strong>18+</strong></p>
                                        <p class="season-count text-shadow">Movie</p>
                                    </div>
                                    <div class="genere d-flex flex-no-wrap text-shadow">
                                        <p>#Adrenalin</p>
                                        <p>#Wild</p>
                                        <p>#Action</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>

                    <!--Romantic Movies-->
                    <section id="romantic" class="container p-t-40">
                        <h4 class="romantic-heading">
                            Romantic Movies
                        </h4>
                        <div class="romantic-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                            <a href="#">
                                <img src="../../source/images/movies/horrible-bosses-middle-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/kabir-singh-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/extraction-poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/tv-show/poster/never-have-ever-short poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/we-are-the-milers-poster-little.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>

                            <a href="#">
                                <img src="../../source/images/movies/we-are-the-milers-poster-little.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>

                        </div>
                    </section>

                    <!--big poster screen left poster right content-->
                    <section class="big-section d-flex flex-start container">
                        <img src="../../source/images/movies/we are the milers big poster.jpg" alt="...............">

                        <div class="right-side">
                            <div class="contentlogo">
                                <img src="../../source/images/movies/milers logo.webp" alt="content logo" class="show-logo" />
                            </div>
                            <div class="ranking d-flex m-t-20 flex-middle">
                                <span class="p-l-10 f-s-24 f-w-8">#1 in India Today</span>
                            </div>

                            <div class="synopsis m-t-20" style="max-width: 500px;">
                                <p class="f-s-20">
                                    Sex. It's on teenage minds. It's messing with their heads. And this kid is the least likely sexpert in the schoolyard.
                                </p>
                            </div>
                            <div class="buttons-container m-t-20">
                                <button class="play-button"><span>
                                    <i class="fas fa-play" aria-hidden="true"></i>
                                </span> Play</button>

                                <button class="more-info-button m-t-20"><i class="fas fa-info-circle"
                                    aria-hidden="true"></i>
                                More
                                Info</button>
                            </div>
                        </div>
                    </section>


                    <!--Get In On the Action-->
                    <section id="romantic" class="container p-t-40">
                        <h4 class="romantic-heading">
                            Get In On the Action
                        </h4>
                        <div class="romantic-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                            <a href="#">
                                <img src="../../source/images/movies/horrible-bosses-middle-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/kabir-singh-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/extraction-poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/tv-show/poster/never-have-ever-short poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/we-are-the-milers-poster-little.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>

                            <a href="#">
                                <img src="../../source/images/movies/we-are-the-milers-poster-little.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>

                        </div>
                    </section>

                    <!--Bingeworthy TV Shows-->
                    <section id="romantic" class="container p-t-40">
                        <h4 class="romantic-heading">
                            Bingeworthy TV Shows
                        </h4>
                        <div class="romantic-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                            <a href="#">
                                <img src="../../source/images/movies/horrible-bosses-middle-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/kabir-singh-poster.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/extraction-poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/tv-show/poster/never-have-ever-short poster.jpg" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/we-are-the-milers-poster-little.webp" alt="" class="mylist-img p-r-10 p-t-10 image-size item"></a>
                        </div>
                    </section>
                    <!--Hollywood Action movies-->
                    <section id="romantic" class="container p-t-40">
                        <h4 class="romantic-heading">
                            Hollywood Action Movies
                        </h4>
                        <div class="romantic-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                            <a href="#">
                                <img src="../../source/images/movies/horrible-bosses-middle-poster.webp" alt="............." class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/kabir-singh-poster.webp" alt="...." class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/extraction-poster.jpg" alt="....." class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/tv-show/poster/never-have-ever-short poster.jpg" alt="....." class="mylist-img p-r-10 p-t-10 image-size item"></a>
                            <a href="#">
                                <img src="../../source/images/movies/we-are-the-milers-poster-little.webp" alt="....." class="mylist-img p-r-10 p-t-10 image-size item"></a>
                        </div>
                    </section>

                </div>
            </div>
            <footer class="mainfooter d-flex direction-column space-between" id=" footer">
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