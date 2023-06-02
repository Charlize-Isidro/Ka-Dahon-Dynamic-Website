<?php
// session_start();

// $user_id = $_SESSION['user_id']; 
// if(isset($message)){
//    foreach($message as $message){
//       echo '
//       <div class="message">
//          <span>'.$message.'</span>
//          <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
//       </div>
//       ';
//    }
// }
?>

<header class="header">

   <!-- <div class="header-1">
      <div class="flex">
          <div class="share">
             <a href="https://www.facebook.com/kadahonstore" class="fab fa-facebook-f"></a> 
             <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a> -->
         <!-- </div>
         <p> new <a href="login.php">login</a> | <a href="register.php">register</a> </p>
      </div>
   </div>  -->

   <div class="header-2">
      <div class="flex">
         <!-- <a href="index.php" class="logo">Ka-Dahon.</a> -->
         <!-- <link href="images/header.png" rel="icon" class="logo"> -->
         <a href="index.php"><img src="images/header.png" alt="" title="" width="300px"/></a>
         <!-- <link href="../images/logo.png" rel="icon"> -->

         <nav class="navbar">
            <a href="index.php">home</a>
            <a href="about.php">about</a>
            <a href="shop.php">shop</a>
            <a href="contact.php">contact</a>
            <a href="orders.php">orders</a>
         </nav>
         <!-- <li class="dropdown"><a href="#"><span>More</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="index.php">Home</a></li>
              </li>
              <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
              <li><a class="nav-link scrollto" href="#team">Team</a></li>
              <li><a class="nav-link scrollto" href="#features">Service</a></li>
            </ul>
          </li> -->

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <!-- <div id="user-btn" class="fas fa-user"></div> -->
            <?php
               // $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               // $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <!-- <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>()</span> </a> -->
         </div>

         <!-- <div class="user-box">
            <p>username : <span></span></p>
            <p>email : <span></span></p>
            <a href="http://localhost/project/admin/login.php" class="delete-btn">logout</a>
         </div> -->
      </div>
   </div>

</header>

