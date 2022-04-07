<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="homestyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Home</title>

</head>

<body>
    <!--Navbar-->
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container"><h1 class="logo">Blake</h1></div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li class="menu-item"><a class="home" href="home1.php">Home</a></li>
                    <li class="menu-item"><a class="movie" href="https://www.netflix.com/bd/browse/genre/34399">Movies</a></li>
                    <li class="menu-item"><a class="series" href="https://www.netflix.com/bd/browse/genre/83">Series</a></li>
                    <li class="menu-item"><a class="trending" href="https://www.netflix.com/bd/browse/genre/839338">Trending</a></li>
                    <li class="menu-item"><a class="contact" href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="profile-container">
                <ul class="option-list">
                    <li class="option-list-item"><a href="login.php" class="loginbtn">Login</a></li>
                    <li class="option-list-item"><a href="register.php" class="regbtn">Register</a></li>

                </ul>
            </div>
        </div>
    </div>

    <!--sidebar-->
    <div class="sidebar">
        <div class="left-menu-icon">
            <a class="sidebar-logo" href="home1.php"><i class="fas fa-search"></i></a>
            <p class="sidebar-text">Search</p>
        </div>
        <div class="left-menu-icon">
            <a class="sidebar-logo" href="home1.php"><i class="fas fa-home"></i></a>
            <p class="sidebar-text">Home</p>
        </div>
        <div class="left-menu-icon">
            <a class="sidebar-logo" href="home1.php"><i class="fas fa-users"></i></a>
            <p class="sidebar-text">Users</a>
        </div>
        <div class="left-menu-icon">
            <a class="sidebar-logo" href="home1.php"><i class="fas fa-bookmark"></i></a>
            <p class="sidebar-text">Mark</p>
        </div>
        <div class="left-menu-icon">
            <a class="sidebar-logo" href="https://www.netflix.com/bd/browse/genre/83"><i class="fas fa-tv"></i></a>
            <p class="sidebar-text">Tv</p>
        </div>
        <div class="left-menu-icon">
            <a class="sidebar-logo" href="home1.php"><i class="fas fa-hourglass-start"></i></a>
            <p class="sidebar-text">Time</p>
        </div>
        <div class="left-menu-icon">
            <a class="sidebar-logo" href="home1.php"><i class="fas fa-shopping-cart"></i></a>
            <p class="sidebar-text">Shop</p>
        </div>
    </div>

    <div class="container"> 
        <!--featured-->
        <div class="content-container">
            <div class="featured-content" style="background: linear-gradient(to bottom, rgba(0,0,0,0),#151515), url('img/b.jpg')">
                <img class="featured-title" src="img/logo.png" alt="">
                <p class="featured-desc">Riverdale is the story of a small American town rocked by the 
                murder of a high school student. Archie Andrews is a football player-slash-aspiring 
                musician, the heartthrob counterpart to the perfect girl-next-door Betty and the sultry
                new girl, Veronica.</p>
                <button class="featured-button" onclick="location.href ='https://www.netflix.com/bd/title/80133311'">WATCH</button>
            </div>
            <!--movieList-->
            <div class="movie-list-container">
                <h1 class="movie-list-title">NEW RELEASES</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/1.jpg" alt="">
                            <p class="movie-list-item-desc">Desperate to secure funding for her med tech 
                            startup, an idealistic scientist and her husband strike an outrageous deal 
                            with a mysterious investor.</p>
                            <button class="movie-list-item-button" onclick="location.href ='https://www.netflix.com/bd/title/80197889'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/2.jpg" alt="">
                            <p class="movie-list-item-desc">Noah Baumbach directs this incisive 
                            & compassionate look at a marriage coming apart & a family staying
                            together.</p>
                            <button class="movie-list-item-button"  onclick="location.href ='https://www.netflix.com/bd/title/80223779'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/3.jpg" alt="">
                            <p class="movie-list-item-desc">Bored with being the Lord of Hell, the 
                            devil relocates to Los Angeles, where he opens a nightclub and forms a 
                            connection with a homicide detective.
                        </p>
                            <button class="movie-list-item-button" onclick="location.href ='https://www.netflix.com/bd/title/80057918'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/4.jpg" alt="">
                            <p class="movie-list-item-desc">Dark is a German science fiction thriller 
                            streaming television series co-created by Baran bo Odar and Jantje Friese.
                            In the aftermath of a child's disappearance.</p>
                            <button class="movie-list-item-button" onclick="location.href ='https://www.netflix.com/bd/title/80100172'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/5.png" alt="">
                            <p class="movie-list-item-desc">Geralt of Rivia, a mutated monster-hunter 
                            for hire, journeys toward his destiny in a turbulent world where people 
                            often prove more wicked than beasts.</p>
                            <button class="movie-list-item-button" onclick="location.href ='https://www.netflix.com/bd/title/80189685'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/6.jpg" alt="">
                            <p class="movie-list-item-desc">High school student Clay Jensen lands in the 
                            center of a series of heartbreaking mysteries set in motion by a friend's 
                            tragic suicide.</p>
                            <button class="movie-list-item-button" onclick="location.href ='https://www.netflix.com/bd/title/80117470'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/7.jpg" alt="">
                            <p class="movie-list-item-desc">A neo-noir social thriller that explores
                            the ripple effects of what happens when acceptable people start doing 
                            unacceptable things</p>
                            <button class="movie-list-item-button" onclick="location.href ='https://www.netflix.com/bd/title/80245450'">Watch</button>
                        </div>
                    </div>
                    <i class="far fa-arrow-alt-circle-right arrow"></i>
                </div>
            </div>
            <!--movieList-->
            <div class="movie-list-container">
                <h1 class="movie-list-title">NEW RELEASES</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/8.jpg" alt="">
                            <p class="movie-list-item-desc">When a young boy vanishes, a small town 
                            uncovers a mystery involving secret experiments, terrifying supernatural 
                            forces and one strange little girl.</p>
                            <button class="movie-list-item-button" onclick="location.href ='https://www.netflix.com/bd/title/80057281'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/9.jpg" alt="">
                            <p class="movie-list-item-desc">The extraordinary Baudelaire orphans face trials, 
                            tribulations and the evil Count Olaf in their fateful quest to unlock long-held family 
                            secrets.</p>
                            <button class="movie-list-item-button" onclick="location.href ='https://www.netflix.com/bd/title/80050008'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/10.jpg" alt="">
                            <p class="movie-list-item-desc">While navigating the troubled waters of 
                            romance, school and family, teen Archie and his gang become entangled in a 
                            dark Riverdale mystery.</p>
                            <button class="movie-list-item-button" onclick="location.href ='https://www.netflix.com/bd/title/80133311'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/11.jpg" alt="">
                            <p class="movie-list-item-desc">A notorious gang in 1919 Birmingham, England,
                            is led by the fierce Tommy Shelby, a crime boss set on moving up in the world 
                            no matter the cost.</p>
                            <button class="movie-list-item-button" onclick="location.href ='https://www.netflix.com/bd/title/80002479'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/12.jpg" alt="">
                            <p class="movie-list-item-desc">Reunited by their father's death, estranged siblings with
                            extraordinary powers uncover shocking family secrets -- and a looming threat to 
                            humanity.</p>
                            <button class="movie-list-item-button" onclick="location.href ='https://www.netflix.com/bd/title/80186863'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/13.png" alt="">
                            <p class="movie-list-item-desc">During a visit to his motherland, a 
                            Korean-Italian mafia lawyer gives an unrivaled conglomerate a taste of 
                            its own medicine with a side of justice.</p>
                            <button class="movie-list-item-button" onclick="location.href ='https://www.netflix.com/bd/title/81365087'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/14.jpg" alt="">
                            <p class="movie-list-item-desc">Armed with mysterious powers and a legendary 
                            sword, young rebel Nimue joins forces with charming mercenary Arthur on a 
                            mission to save her people.</p>
                            <button class="movie-list-item-button" onclick="location.href ='https://www.netflix.com/bd/title/80199393'">Watch</button>
                        </div>
                    </div>
                    <i class="far fa-arrow-alt-circle-right arrow"></i>
                </div>
            </div>
            <!--featured-->
            <div class="featured-content" style="background: linear-gradient(to bottom, rgba(0,0,0,0),#151515), url('img/b2.jpg')">
                <img class="featured-title" src="img/logo2.png" alt="">
                <p class="featured-desc">Dark is a German science fiction thriller streaming television 
                series co-created by Baran bo Odar and Jantje Friese.In the aftermath of a child's 
                disappearance, Dark follows characters from the fictional German town of Winden as 
                they pursue the truth.</p>
                <button class="featured-button" onclick="location.href ='https://www.netflix.com/bd/title/80100172'">WATCH</button>
            </div>
            <!--movieList-->
            <div class="movie-list-container">
                <h1 class="movie-list-title">TV Sci-Fi & Fantasy</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/5.png" alt="">
                            <p class="movie-list-item-desc">Geralt of Rivia, a mutated monster-hunter for
                            hire, journeys toward his destiny in a turbulent world where people often prove 
                            more wicked than beasts.</p>
                            <button class="movie-list-item-button" onclick="location.href ='https://www.netflix.com/bd/title/80189685'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/12.jpg" alt="">
                            <p class="movie-list-item-desc">Reunited by their father's death, estranged 
                            siblings with extraordinary powers uncover shocking family secrets -- and a 
                            looming threat to humanity.</p>
                            <button class="movie-list-item-button" onclick="location.href ='https://www.netflix.com/bd/title/80186863'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/15.jpg" alt="">
                            <p class="movie-list-item-desc">After three years in a coma, Vanessa awakens 
                            to a world ravaged by vampires. Now, she and a motley band of fellow survivors
                            fight to stay alive</p>
                            <button class="movie-list-item-button" onclick="location.href ='https://www.netflix.com/bd/title/80121349'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/16.jpg" alt="">
                            <p class="movie-list-item-desc">In a Norwegian town poisoned by pollution and rattled by melting 
                            glaciers, the End Times feel all too real. It’ll take a legend to battle an old evil</p>
                            <button class="movie-list-item-button" onclick="location.href ='https://www.netflix.com/bd/title/80232926'">Watch</button>                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/17.jpg" alt="">
                            <p class="movie-list-item-desc">Dark forces conspire against orphan mapmaker
                            Alina Starkov when she unleashes an extraordinary power that could change 
                            the fate of her war-torn world.</p>
                            <button class="movie-list-item-button" onclick="location.href ='https://www.netflix.com/bd/title/80236319'">Watch</button>                        
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/18.jpg" alt="">
                            <p class="movie-list-item-desc">Magic and mischief collide as half-human,
                            half-witch Sabrina navigates between two worlds: mortal teen life and her 
                            family's legacy, the Church of Night.</p>
                            <button class="movie-list-item-button" onclick="location.href ='https://www.netflix.com/bd/title/80223989'">Watch</button>
                        </div>
                    </div>
                    <i class="far fa-arrow-alt-circle-right arrow"></i>
                </div>
            </div>
            <!--movieList-->
            <div class="movie-list-container">
                <h1 class="movie-list-title">Award-Winning TV Shows</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/11.jpg" alt="">
                            <p class="movie-list-item-desc">A neo-noir social thriller that explores
                            the ripple effects of what happens when acceptable people start doing 
                            unacceptable things</p>
                            <button class="movie-list-item-button" onclick="location.href ='https://www.netflix.com/bd/title/80002479'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/19.jpg" alt="">
                            <p class="movie-list-item-desc">A notorious gang in 1919 Birmingham, England, 
                            is led by the fierce Tommy Shelby, a crime boss set on moving up in the world 
                            no matter the cost.</p>
                            <button class="movie-list-item-button" onclick="location.href ='https://www.netflix.com/bd/title/80025678'">Watch</button>                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/20.jpg" alt="">
                            <p class="movie-list-item-desc">As Delhi reels in the aftermath of a gang rape,
                            DCP Vartika Chaturvedi leads a painstaking search for the culprits.
                            Based on the 2012 Nirbhaya case.</p>
                            <button class="movie-list-item-button" onclick="location.href ='https://www.netflix.com/bd/title/81076756'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/21.jpg" alt="">
                            <p class="movie-list-item-desc">In this updated take on Sir Arthur Conan Doyle's
                            beloved mystery tales, the eccentric sleuth prowls the streets of modern London 
                            in search of clues</p>
                            <button class="movie-list-item-button"  onclick="location.href ='https://www.netflix.com/bd/title/70202589'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/22.jpg" alt="">
                            <p class="movie-list-item-desc">In a 1950s orphanage, a young girl reveals an
                            astonishing talent for chess and begins an unlikely journey to stardom while 
                            grappling with addiction.</p>
                            <button class="movie-list-item-button" onclick="location.href ='https://www.netflix.com/bd/title/80234304'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/23.jpg" alt="">
                            <p class="movie-list-item-desc">Decades after the tournament that changed their
                            lives, the rivalry between Johnny and Daniel reignites in this sequel to the 
                            "Karate Kid" films.</p>
                            <button class="movie-list-item-button" onclick="location.href ='https://www.netflix.com/bd/title/81002370'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-image" src="img/24.jpg" alt="">
                            <p class="movie-list-item-desc">This family-oriented retelling of the King 
                            Arthur legend finds Merlin arriving in Camelot, where he hones his magic 
                            skills with the help of his uncle</p>
                            <button class="movie-list-item-button" onclick="location.href ='https://www.netflix.com/bd/title/70142436'">Watch</button>
                        </div>
                    </div>
                    <i class="far fa-arrow-alt-circle-right arrow"></i>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <h3 class="footer-title">Movies & Series</h3>
            <p class="footer-title-desc">A website see movies & tv series of your favorite genre</p>
            <ul class="sociallinks">
                <li class="sociallinks-items"><a  href="https://www.facebook.com/proshanto.rivera.3/"><i class="fab fa-facebook-square"></i></a></li>
                <li class="sociallinks-items"><a  href="https://www.instagram.com/prashanth_rivera/"> <i class="fab fa-instagram"></i></a></li>  
                <li class="sociallinks-items"><a  href="https://twitter.com/proshant44"> <i class="fab fa-twitter"></i></a></li>
                <li class="sociallinks-items"><a  href="https://www.facebook.com/profile.php?id=100005320909053"><i class="fab fa-facebook-square"></i></a></li>
                <li class="sociallinks-items"><a  href="https://www.instagram.com/_maaahfuzzz__/"> <i class="fab fa-instagram"></i></a></li>   
                <li class="sociallinks-items"><a  href="https://www.snapchat.com/add/barentssec"><i class="fab fa-snapchat-ghost"></i></a></li>   
                
            </ul>
        </div>
        <div class="footer-bottom">
            <p class="footer-bottom-text">copyright &copy;2021. Designed by <span class="footer-special-text">Proshanto Lal & Mahfuz Tinab</span></p>
        </div>
    </footer>

    <script src="app.js"></script>

</body>
</html>