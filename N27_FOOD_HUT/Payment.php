

<?php
require_once 'C:\wamp64\www\N27_FOOD_HUT\Back-end/CreateConnection.php';

if (isset($_POST['submit'])) {
    $V_card = $_POST['visaNumber'];
    $M_card = $_POST['masterNumber'];
    $date = $_POST['expiryDate'];
    $cvv = $_POST['cvv'];

    
    echo "Received Data: ";
    print_r($_POST);

  
    $isPaymentSuccessful = simulatePayment($V_card, $M_card, $date, $cvv);

    if ($isPaymentSuccessful) {
        echo "
        <script>
            alert('Payment successful');
            window.location.href='Payment.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Payment failed. Please try again.');
            window.location.href='Payment.php';
        </script>
        ";
    }
}


function simulatePayment($visaNumber, $masterNumber, $expiryDate, $cvv) {

    return true; 
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
    <link rel="stylesheet" href="payment.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
    <link rel="stylesheet" href="HomeStyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    
</head>
<body>

    <header>
        <a href="#" class="logo"><i class='bx bxs-home'></i>N27 Food Hut</a>
  
        <ul class="navlist">
          <li><a href="#home" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          
          <li><a href="#contact">Contact Us</a></li> 
        </ul>
  
        <div class="nav-icons">
          <a href="#" class="search"><i class='bx bx-search'></i></a>
          <a href="#" class="cart"><i class='bx bx-cart'></i></a>
          <div class="bx bx-menu" id="menu-icon"></div>
      </header> 
      
      <br><br><br><br><br><br><br><br>


    <form action="Payment.php" method="POST">
    <div class="payment-form">
        <h2>Card Payment</h2>
        <div class="card-type-icons">
          <label for="visa"><img src="images/visa-48.png" alt="Visa"></label>
          <input type="radio" id="visa" name="cardType" value="visa">
      
          <label for="mastercard"><img src="images/mastercard-48.png" alt="MasterCard"></label>
          <input type="radio" id="mastercard" name="cardType" value="mastercard">
        </div>
      
        <div class="card-fields" id="visa-fields">
          <label for="visaNumber">Visa Card Number</label>
          <input type="text" id="visaNumber" name="visaNumber" placeholder="1234 5678 9012 3456" required>
        </div>
      
        <div class="card-fields" id="mastercard-fields">
          <label for="mastercardNumber">MasterCard Number</label>
          <input type="text" id="mastercardNumber" name="mastercardNumber" placeholder="5678 9012 3456 1234" required>
        </div>
      
        <label for="expiryDate">Expiry Date</label>
        <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY" required>
      
        <label for="cvv">CVV</label>
        <input type="text" id="cvv" name="cvv" placeholder="123" required>
      
        <input type="submit" value="Submit">
      </div>
      </form>

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

      
      
      <script>
        document.addEventListener('DOMContentLoaded', function() {
          var visaRadio = document.getElementById('visa');
          var mastercardRadio = document.getElementById('mastercard');
          var visaFields = document.getElementById('visa-fields');
          var mastercardFields = document.getElementById('mastercard-fields');
      
          visaRadio.addEventListener('change', function() {
            visaFields.style.display = this.checked ? 'block' : 'none';
            mastercardFields.style.display = 'none';
          });
      
          mastercardRadio.addEventListener('change', function() {
            mastercardFields.style.display = this.checked ? 'block' : 'none';
            visaFields.style.display = 'none';
          });
        });
      </script>

      


    <script src="HomeJS.js"></script>


</body>
</html>
