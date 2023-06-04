
<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">


   <div class="header-2">
      <div class="flex">
         
         <a href="index.php"><img src="images/logo.png" alt="" title="" width="200px"/></a>
         <!-- <link href="../images/logo.png" rel="icon"> -->

         <nav class="navbar">
            <a href="index.php">home</a>
            <a href="about.php">about</a>
            <a href="shop.php">shop</a>
            <a href="contact.php">contact</a>
            
         </nav>
        

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
             </div>

      </div>
   </div>

</header>

