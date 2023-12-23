
<?php
require_once 'C:\wamp64\www\N27_FOOD_HUT\Back-end/CreateConnection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $count = $_POST['select'];

    echo "INSERT INTO table_reservation (name, email, reservation_date, reservation_time, `count`) VALUES ('$name', '$email', '$date', '$time', '$count')";

    $check_query = $conn->prepare("SELECT * FROM table_reservation WHERE email = ?");
    $check_query->bind_param("s", $email);
    $check_query->execute();
    $result = $check_query->get_result();

    if ($result->num_rows > 0) {
        echo "
        <script>
            alert('This Table already exists.');
            window.location.href='Table.php';
        </script>
        ";
    } else {
        $insert_query = $conn->prepare("INSERT INTO table_reservation (name, email, reservation_date, reservation_time, `count`) VALUES (?, ?, ?, ?, ?)");
        $insert_query->bind_param("sssss", $name, $email, $date, $time, $count);

        
        echo "INSERT INTO table_reservation (name, email, reservation_date, reservation_time, `count`) VALUES ('$name', '$email', '$date', '$time', '$count')";

        if ($insert_query->execute()) {
            echo "
            <script>
                alert('This Table successfully Booked.');
                window.location.href='Table.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('Error: " . $insert_query->error . "');
                window.location.href='Table.php';
            </script>
            ";
        }

        $insert_query->close();
    }

    $check_query->close();
    $conn->close();
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Table Reservations</title>
    <link rel="stylesheet" href="Table.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
    <link rel="stylesheet" href="HomeStyle.css">
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

<div class="TOTAL">
    <div class="reserve">
        <div class="reserve-time">
            <h2 class="sub">Time Open</h2>
            <br>
            <h3 class="sub-days">Monday-Friday</h3>
            <br>
                <p>7am - 11am (breakfast)</p>
                <br>
                 <p>6pmm-10pm (dinner)</p>
            <br>     
            <h3 class="sub-days">Saturday and sunday</h3>
            <br>
                <p>9am 11am (breakfast)</p>
                <br>
                <p>6am-10pm (dinner)</p>
            <br>
            <br>    
        <hr>
            <h4 class="sub-phone">Call Us: 067 290 69 45</h4>
        </div>
        <div class="reserve-form">
            
            <form action="Table.php" method="post" >
                    <h2 class="heading heading-yellow">Reservation Online</h2>
                <div class="form-field">
                    <p>Your Name</p>
                    <input type="text" placeholder="Your Name" id="name" name="name">
                </div>
                <div class="form-field">
                    <p>Your email</p>
                    <input type="email" placeholder= "Your email" id="email" name="email">
                </div>
                <div class="form-field">
                    <p>Date</p>
                    <input type="date" id="date" name="date">
                </div>
                <div class="form-field">
                    <p>Time</p>
                    <input type="time" placeholder="Your time" id="time" name="time">
                </div>
                <div class="form-field">
                    <p>How Many People</p>
                    <select name="select" id="#">
                        <option value="1">1 Person</option>
                        <option value="2">2 People</option>
                        <option value="3">3 People</option>
                        <option value="4">4 People</option>
                        <option value="5">5 People</option>
                        <option value="5+">5+ People</option>
                    </select>
                </div>
                <div class="bttn">
                    <button >Reserve Now</button>
                </div>
            </form>
        </div>
    </div>
</div> 

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

    
</body>
</html>
