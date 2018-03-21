<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--my stylesheet-->
        <link href="css/myStylesheet.css" type="text/css" rel="stylesheet"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <header>
            <div class="navbar-fixed">
                <nav>
                    <div class="nav-wrapper container">
                        <a href="#" class="brand-logo">Logo</a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="badges.html">Portfolio</a></li>
                            <li class="active"><a href="message.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <img class="responsive-img" src="assets/headerImg.jpg" max-width="100%" height="auto"/>
        </header>

        <main>
            <div class="container">
                <?php
                $servername = "localhost:3306";
                $username = "Amin123";
                $password = "Amin123";
                $dbname = "materialDb";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 

                $sql = "SELECT firstName, lastName, email, message, colour FROM contactUs";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo '<table class="highlight"><thead><tr><th>Name</th><th>Email</th><th>Message</th><th>Colour</th></tr></thead>';
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tbody><tr><td>".$row["firstName"]." ".$row["lastName"]."</td><td>".$row["email"]."</td><td>".$row["message"]."</td><td>".$row["colour"]."</td></tr></tbody>";
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>
            </div>
        </main>

        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Footer Content</h5>
                        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#">Link 1</a></li>
                            <li><a class="grey-text text-lighten-3" href="#">Link 2</a></li>
                            <li><a class="grey-text text-lighten-3" href="#">Link 3</a></li>
                            <li><a class="grey-text text-lighten-3" href="#">Link 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    &copy; 2017 Copyright Text
                    <a class="grey-text text-lighten-4 right" href="#">More Links</a>
                </div>
            </div>
        </footer>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>
