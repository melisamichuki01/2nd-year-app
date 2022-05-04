<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta id="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css\vol.css">
</head>
<body>
    <!--header section starts-->
    <header class="header">

        <a href="#" class="logo"><i class="fas fa-users">WEvolve.</i></a>
        <nav class="navbar">
          <a href="">Home</a>
          <a href="">About</a>
          <a href="contact.php">Contact</a>
          <a href="contact.php">Volunteer</a>
          <a href="login.php">Login</a>
          <a href="signup.php">Signup</a>
          
          
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
  
    </header>
    <!--header ends-->

        <div class="container">
            <form >
                <h1>Contact Us</h1>
                <input type="text" name="name" id="id" placeholder="Name">
                <input type="text" name="email" id="email" placeholder="Email">
                <input type="text" name="subject" id="subject" placeholder="Subject">
                <textarea id="message" name="message" "rows="4" placeholder="How can we help you?"></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
        <script src="js\script.js"></script>
        
 
</body>
</html>