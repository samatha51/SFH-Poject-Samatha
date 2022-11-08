<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halifax Canoe and Kayak</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="nav">
            <img width="1200" height="1200" src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/hamburger.png" alt="hamburger logo" class="nav__hamburger">
            <h1 class="company">Halifax Canoe and Kayak</h1>
            <a href="#" class="nav__logo"><img width="1150" height="1100" src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/paddle-white.png" alt="paddle-logo"></a>
            </nav>
        </header>
        <div class="side__menu">
            <ul class="side__ul">
            <li><a class="side__item" href="index.php">Home</a></li>
                <li><a class="side__item" href="book.php">Book Trip</a></li>
                <li><a class="side__item" href="#">Admin Login</a></li>
            </ul>
        </div>
        <main class="container">
    <section class="main">
        <div>
        <h2 class="brand">Book A Trip</h2>
        </div>
<div class="book-form">
            <form name="booking" action="thankyou.php" method="POST" autocomplete="off">

                <label for="name" class="form-label">Name</label>
                <input type="text" name = "name" id="name" required> </br>

                <label for="email" class="form-label">Email</label>
                <input type="email" name ="email" id="email" required> </br>

                <label for="location" class="form-label">Location</label>
                <select class="options" name="location" id="location" required>
                    <option value="none" selected disabled hidden>Please select</option>
                    <option value="Halifax">Halifax</option>
                    <option value="Sydney">Sydney</option>
                </select> </br>

                <label for="date" class="form-label">Date</label> 
                <input class="options" type="date" name="date" id="date" min="2022-11-09" required>  </br>     
    
                <button class="register-btn">Register</button>
            </form>
        </div>
    </section>
</body>
<script src="main.js"></script>
</html>







































