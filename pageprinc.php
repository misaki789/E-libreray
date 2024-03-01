<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/csspage.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"  />

    <title>bibliothèque </title>
</head>

<body>
    <header class="header">
            <div class="search-input">
                <a href="" target="_blank" hidden class="logo"></a>
                
                <form action="" class="search-form">
                    <input type="text" placeholder="Search here..">
                    <!-- <div class="icon"><i class="fas fa-search"></i></div> -->
                    <label for="search-box" class="fas fa-search"  class="icon"></label>
                </form>
                <div class="autocom-box"><!-- here list are inserted from javascript --></div>
            </div>
        <div class="navbar">
                    <nav class="menu-list">
                        <a class="menu-list-item" href="#books" ><i class="fa-solid fa-book"></i>novels</a>
                        <a class="menu-list-item" href="#populer"><i class="fa-solid fa-book"></i>philosophy</a>
                        <a class="menu-list-item"  href="#trends"><i class="fa-solid fa-business-time"></i>Business</a>
                        <a class="menu-list-item" href="ajouterlivre.php"><i class="fa-solid fa-plus"></i>add new book </a>
                        

                    </nav>
                </div>
        </div>
    </header>    
    
    <div class="sidebar">

        <a href="user.php"><i class="fa-solid fa-arrow-right-from-bracket"></a></i>
        <a href="eleve.php"><i class="fa-solid fa-graduation-cap"></a></i>

        <div id="login-btn" ></div>
    </div>

    login form
    <div class="login-form-contairer">
        <div id="close-login-btn" class="fas fa-times"></div>
        <form action="">
            <h3>sign in</h3>
            <span>Username</span>
            <input type="email" name="" class="box" placeholder="enter your email" id="">
            <span>Password</span>
            <input type="password" name="" class="box" placeholder="enter your password" id="">
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">remember me</label>
            </div>
            <input type="submit" value="sign in" class="btn"  id="message-alert">
            <p>forget password?<a href="#">click here</a></p>
            <p>don'havean account?<a href="#">create one</a></p>
        </form>
    </div>       
    <!-- the novels books -->
    <div class="container" id="books">
        <div class="content-container">
            <div class="featured-content">
            </div>
            <div class="movie-list-container" >
                <h1 class="movie-list-title">Novels</h1>
                <div class="movie-list-wrapper" >
                    <div class="movie-list" >
                        <div class="movie-list-item"  >
                            <img class="movie-list-item-img" src="pictures/birdd.jpg" alt="" id="img1">
                            <span class="movie-list-item-title" id="span1">to kill a mockingbird</span>
                            <p class="movie-list-item-desc" id="p1">To Kill a Mockingbird is both a young girl's coming-of-age story 
                                and a darker drama about the roots and consequences of racism</p>
                        
                        </div>
                        <div class="movie-list-item" id="movie-list-item">
                            <img class="movie-list-item-img" src="pictures/gaspi.jpg" alt="">
                            <span class="movie-list-item-title">The Great Gatsby
                            </span>
                            <p class="movie-list-item-desc"> follows Jay Gatsby, a man who orders his life around one desire:
                            to be reunited with Daisy Buchanan, the love he lost five years earlier
                            </p>
                            
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="pictures/solitude.jpg" alt="">
                            <span class="movie-list-item-title">One Hundred Years of Solitude</span>
                            <p class="movie-list-item-desc">This is the author's epic tale of seven generations of the Buendía family that also spans a hundred years of turbulent Latin American history, from the postcolonial 1820s to the 1920s.</p>
                            
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="pictures/india.jpg" alt="">
                            <span class="movie-list-item-title">A Passage to India</span>
                            <p class="movie-list-item-desc">an Englishwoman engaged to marry a city magistrate, and an English educator. </p>
                            
                        </div>
                        <div class="movie-list-item" id="id2">
                            <img class="movie-list-item-img" src="pictures/mann.jpg" alt="">
                            <span class="movie-list-item-title">Invisible Man </span>
                            <p class="movie-list-item-desc">The narrator of Invisible Man is a nameless young black man who moves in a 20th-century United States
                            where reality is surreal and who can survive only through pretense.</p>
                            
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="pictures/alchemist.jpg" alt="">
                            <span class="movie-list-item-title">the alchemist</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <div class="movie-list-container" id="populer">
                <h1 class="movie-list-title">Philosophy</h1>
                <div class="movie-list-wrapper" >
                    <div class="movie-list" >
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="pictures/reason.jpg" alt="">
                            <span class="movie-list-item-title">Critique of Pure Reason</span>
                            <p class="movie-list-item-desc">a critique of the pretensions of pure theoretical reason to attain 
                                metaphysical truths beyond the ken of applied theoretical reason</p>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="pictures/idiot.jpg" alt="">
                            <span class="movie-list-item-title">The Idiot</span>
                            <p class="movie-list-item-desc">The Idiot is a novel by the 19th-century Russian author Fyodor Dostoevsky.
                                It was first published serially in the journal The Russian Messenger in 1868–69</p>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="pictures/way.jpg" alt="">
                            <span class="movie-list-item-title">Tao Te Ching</span>
                            <p class="movie-list-item-desc">The Tao Te Ching is a Chinese classic text written 
                                around 400 BC and traditionally credited to the sage Laozi.</p>
                            <a href="imagebib/Tao Te Ching - trans. by J.H.. McDonald.pdf"><button class="movie-list-item-button">Read</button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="pictures/meditation.jpg" alt="">
                            <span class="movie-list-item-title">The Meditations</span>
                            <p class="movie-list-item-desc">Meditations is a series of personal writings by Marcus Aurelius, Roman Emperor from AD 161 to 180, 
                                recording his private notes to himself and ideas on Stoic philosophy</p>
                            
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="pictures/prince.jpg" alt="">
                            <span class="movie-list-item-title">the prince</span>
                            <p class="movie-list-item-desc">The Prince is a 16th-century political treatise written by Italian diplomat and political theorist Niccolò
                            Machiavelli as an instruction guide for new princes and royals</p>
                            
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="pictures/ethic.jpg" alt="">
                            <span class="movie-list-item-title">Ethics</span>
                            <p class="movie-list-item-desc">Demonstrated in Geometrical Order usually known as the Ethics, is a philosophical treatise written in Latin by Baruch Spinoza</p>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            
            <div class="movie-list-container" id="trends">
                <h1 class="movie-list-title">business books</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="pictures/richdad.jpg" alt="">
                            <span class="movie-list-item-title">Rich Dad Poor Dad</span>
                            <p class="movie-list-item-desc">book written by Robert T. Kiyosaki and Sharon Lechter. It advocates the importance of financial literacy, 
                                financial independence and building wealth</p>
                            
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="pictures/job.jpg" alt="">
                            <span class="movie-list-item-title">Steve Jobs</span>
                            <p class="movie-list-item-desc">Steve Jobs is the authorized self-titled biography of
                                American business magnate and Apple co-founder Steve Jobs.</p>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="pictures/grow.jpg" alt="">
                            <span class="movie-list-item-title">Think and Grow Rich</span>
                            <p class="movie-list-item-desc">is a book written by Napoleon Hill in 1937 and promoted as
                                a personal development and self-improvement book</p>

                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="pictures/week.jpg" alt="">
                            <span class="movie-list-item-title">The 4-Hour Workweek</span>
                            <p class="movie-list-item-desc">The 4-Hour Workweek: Escape 9–5, Live Anywhere, and Join the New Rich is a self-help book
                                by Timothy Ferriss, an American writer, educational activist, and entrepreneur.</p>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="pictures/adv.jpg" alt="">
                            <span class="movie-list-item-title">Business Adventures</span>
                            <p class="movie-list-item-desc"> The Wall Street Journal What do the $350 million Ford Motor Company 
                                disaster known as the Edsel, the fast and incredible rise of Xerox,</p>
                            
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="pictures/last.jpg" alt="">
                            <span class="movie-list-item-title">Built to Last : Successful Habits of Visionary Companies</span>
                            <p class="movie-list-item-desc">Built to Last: Successful Habits of Visionary Companies is a book written by Jim Collins and Jerry I. 
                                Porras. It outlines the results of a six-year research project exploring what leads to enduringly great companies.</p>
                           
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
        </div>
        </div>
    </div>
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Our localisations</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Canada</a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> USA</a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Morroco</a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> franche</a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Japan</a>
            </div>
            <div class="box">
                <h3>Our links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> Home</a>
                <a href="#"> <i class="fas fa-arrow-right"></i> featured</a>
                <a href="#"> <i class="fas fa-arrow-right"></i> arrivals</a>
                <a href="#"> <i class="fas fa-arrow-right"></i> Reviews</a>
                <a href="#"> <i class="fas fa-arrow-right"></i> blogs</a>
            </div>
            <div class="box">
                <h3>Extra links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> account info</a>
                <a href="#"> <i class="fas fa-arrow-right"></i> ordered items</a>
                <a href="#"> <i class="fas fa-arrow-right"></i> privavy policy</a>
                <a href="#"> <i class="fas fa-arrow-right"></i> payment method</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>  our serivces</a>
            </div>
            <div class="box">
                <h3>Contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +124-354-453-685</a>
                <a href="#"> <i class="fas fa-phone"></i> +121-094-975-848</a>
                <a href="#"> <i class="fas fa-envelope"></i> ouremail@gmail.com</a>
            </div>
        </div>
    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>
    </section>














    
    <script src="javascript/jspage.js"></script>
</body>
</html>