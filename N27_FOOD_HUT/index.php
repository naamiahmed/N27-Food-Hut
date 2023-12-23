<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="N27_Food_Hut" content="N27_Food_Hut" >

    <title>My Website</title>

    <link rel="stylesheet" href="HomeStyle.css" type="text/css" />

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;800;900&display=swap" rel="stylesheet">




</head>
<body>
    <div class="all">
    <header>
      <a href="#" class="logo"><i class='bx bxs-home'></i>N27 Food Hut</a>

      <ul class="navlist">
        <li><a href="#home" class="active">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#Today_Specials">Today's Specials</a></li>
        <li><a href="#contact">Contact Us</a></li> 
      </ul>

      <div class="nav-icons">
        <a href="menu.php" class="search"><i class='bx bx-search'></i></a>
        <a href="menu.php" class="cart"><i class='bx bx-cart'></i></a>
        <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <main>
        <section class="home" id="home">
            <div class="home-text">
                <h3>Welcome to</h3>
                <h1><span>N27</span> Food Hut</h1>
                <p>Order your  favorite food from your  favorite restaurant</p>
                <a href="Table.php" class="btn1">Reserve Table</a>
                <a href="menu.php" class="btn2">Order Now<i class='bx bxs-food-menu'></i></a>
            </div>

            <div class="home-img">
                <img src="images/Home_intro.jpg" alt="home-img">
        </div>
        </section> 
   
        
        <section class="about" id="about">
            <div class="about-img">
                <img src="images/Pizza-01.jpg" alt="About-img" width="70%">
            </div> 
            <div class="about-text">
                
                <h1>About us</h1>
                <p>Our restaurant is a place where customers can order food and eat it on the premises. The food is normally served at the table, though some restaurants also offer take-out and food delivery services. Restaurants vary greatly in appearance and offerings, including a wide variety of cuisines and service models ranging from inexpensive fast food restaurants and cafeterias, to mid-priced family restaurants, to high-priced luxury establishments.</p>
                <a href="#" class="btn1">Explore Story</a>
            </div>
        </section>

        <h1 class="sub-head">services</h1>
        <section class="services" id="services">
                 
            <div class="services-box">
                
                <a href="menu.php" class="search" ><i class='bx bx-timer'></i></a>
                <h3>Quick</h3>
                <a href="#" >Fastest servetion</a>
            </div>

            <div class="services-box">
                <a href="menu.php" class="search" ><i class='bx bx-conversation' ></i></i></a>
                <h3>Best Customer Sevice</h3>
                <a href="#" >Comminication</a>
            </div>

            <div class="services-box">
                <a href="menu.php" class="search" ><i class='bx bxs-door-open'></i></a>
                <h3>24 Hours open</h3>
                <a href="#" >Always Available</a>
            </div>
        </section> 

        
        <section class="Today_Specials" id="Today_Specials">
            <h1 class="sub-head">Today's Special</h1><br>
            <div class="Today_Special-box">
            <div class="sec-box">
                <h2 class="heading">Pizza</h2>
                 <div class="box">
                    <img src="images/Pizza_Offer1.jpg" alt="Pizza" width="100%">
                    <h3>Buy 1 Large pan Pizza & GET 1 lite medium pan Pizza Free</h3>
                    <p></p>
                    <b><a href="Payment.php" class="btn">Order Now</a></b>
                </div>

                <div class="box">
                    <img src="images/offers/Cristmas-offer.jpg" alt="Pizza" width="100%">
                    <h3>Buy any 2 Large Pizzas & Get Rs 1500.00 OFF</h3>
                    <p></p>
                    <a href="Payment.php" class="btn">Order Now</a>
                </div>
            </div> 
            </div>


            <div class="Today_Special-box">
                <div class="sec-box">
                    <h2 class="heading">Pasta</h2>
                     <div class="box">
                        <img src="images/offers/seefood-pasta-offer.jpg" alt="Pizza" width="100%">
                        <h3>2 Full SeaFood Pasta Just RS. 1390.00</h3>
                        <p></p>
                        <a href="Payment.php" class="btn">Order Now</a>
                    </div>
    
                    <div class="box">
                        <img src="images/offers/Spicy-pasta-offer.jpg" alt="Pizza" width="100%">
                        <h3>New Sipcy Pasta flavor</h3>
                        <p>Rs. 900.00</p>
                        <a href="Payment.php" class="btn">Order Now</a>
                    </div>
                </div> 
            </div>

                <div class="Today_Special-box">
                    <div class="sec-box">
                        <h2 class="heading">Drinks</h2>
                         <div class="box">
                            <img src="images/offers/lime-drink-offer.jpg" alt="Pizza" width="100%">
                            <h3>Lime Drink Offer </h3>
                            <p>Rs. 150.00 only</p>
                            <a href="Payment.php" class="btn">Order Now</a>
                        </div>
        
                        <div class="box">
                            <img src="images/offers/mojito-drink-offer.jpg" alt="Pizza" width="100%">
                            <h3>Multi Color of Mojito </h3>
                            <p>Rs. 500.00</p>
                            <a href="Payment.php" class="btn">Order Now</a>
                        </div>
                    </div>
                    </div> 
                    <a href="menu.php" class="btn1" style="align-items: center;">See More</a>    
        </section>
        

    </main>

    <footer>
        <section class="contact" id="contact">
            
            <div class="contact1">
               
                <div class="contact-text">
                    <h1>Contact Us</h1>
                    <p>Welcome to N27 Food Hut, where culinary delights await your taste buds! We value your feedback and are eager to hear from you. Whether you have a question, suggestion, or just want to say hello, our team is here to assist you. Your satisfaction is our priority, and we're committed to creating a memorable dining experience for you. Reach out to us through the contact information below, and let the flavors of N27 Food Hut continue to delight your senses.</p>
                 <div class="social">
                    <a href="#" class="btn"><i class='bx bxl-facebook-circle'></i></a>
                    <a href="#" class="btn"><i class='bx bxl-instagram-alt'></i></a>
                    <a href="#" class="btn"><i class='bx bxl-twitter'></i></a>
                    <a href="#" class="btn"><i class='bx bxl-youtube' ></i></a>
                    <a href="#" class="btn"><i class='bx bxl-linkedin-square'></i></a>
                 </div>  
                </div>

                <div class="details">
                    <div class="main-d">
                        <a href="#" class="btn"><i class='bx bxs-location-plus'></i>Main Street, Bakinigahwela</a>
                    </div>

                    <div class="main-d">
                        <a href="#" class="btn"><i class='bx bxs-phone'></i>067 290 69 45</a>
                    </div>

                    <div class="main-d">
                        <a href="#" class="btn"><i class='bx bxl-gmail' ></i>N27_Food_Hut@gmail.com</a>
                    </div>
                </div>
                <br>
                <br>

                <div class="contact-img">
                    <div class="c-one">
                        <img src="images/playStore.png" alt="playStore" width="100%">
                    </div>
                    <div class="c-one">
                        <img src="images/Appsstore.png" alt="Appsstore" width="100%">
                    </div>
                </div>
            </div>


    </footer>
</div>    

    <script src="https://unpkg.com/scrollreveal"></script>

    <script src="HomeJS.js"></script>
</body>
</html>
