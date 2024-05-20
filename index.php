<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logoipsum</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>


     <header class="header">
        <nav class="navbar">
            <!-- <a href="#" class="nav-logo">WebDev.</a> -->
           <a href="#" class="nav-logo"> <img src="images/logo.png" alt="Menu" ></a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">OUR SCREENS</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">SCHEDULE</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">MOVIE LIBRARY</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">LOCATION AND CONTACT</a>
                </li>
                <div class="hamburger-menu">
                    <!-- <img src="hamburger-menu.png" alt="Menu" width="30" height="30"> -->
                    <span class="bar-menu"></span>
                    <span class="bar-menu"></span>
                    <span class="bar-menu"></span>
                </div>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>

    </header> 
    
    <div class="slideshow-container">
        <div class="slides">
            <img src="images/banner.png" alt="Image 1">
            <img src="images/banner-1.png" alt="Image 2">
            <img src="images/banner-2.png" alt="Image 3">
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <div class="container">
        <div class="left-section">
            <h1 class="movie-title">MOVIE LIBRARY</h1>
            <p class="movie-paragrph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat velit ac lorem efficitur, ut ullamcorper ex scelerisque. Duis tincidunt consequat feugiat. Nulla facilisi. Sed malesuada odio a nisi congue interdum.</p>
        </div>
        <div class="right-section">
           
        </div>
    </div>

    
    <div class="container movie-section" >
        <div class="left-section">
            <h2>Collect your favourites</h2>
        </div>
        <div class="right-section">
            <form class="nosubmit">
              <!-- <input class="nosubmit" type="search" placeholder="Search..."> -->
              <input class="nosubmit" type="search" id="searchInput" placeholder="Search movies...">
                <div class="container movie-grid" id="movieGrid">
                    <!-- Movie items will be dynamically added here -->
                </div>
                <button id="removeSelected">Remove Selected</button>
            </form>
        </div>
        
    </div>
     

     <div class="container line">
        <hr class="media-line" >
    </div>


    <div class="container movie-description-section">
            <?php
            // Sample data for demonstration
            $api_url = "http://api.tvmaze.com/shows";

            // Make GET request to the API
            $response = file_get_contents($api_url);


                if ($response === FALSE) {
                // Request failed
                echo "Failed to fetch data from the API.";
            } else {
                // Request successful
                // Decode the JSON response into an associative array
                $data = json_decode($response, TRUE);

                // Initialize a counter variable
                $counter = 0;


                // Loop through the movies array and generate HTML for each movie
                foreach ($data as $show) {
                     if ($counter < 3){ 
                    echo '<div class="item">';
                    
                    echo "<img src='" . $show['image']['medium'] . "'>";
                    echo '<h2>' . $show['name'] . '</h2>';
                    echo '<p>' . $show['type'] . '</p>';
                    echo '<p>' . $show['language'] . '</p>';
                    echo '</div>';
                     $counter++;
                }
                 else {
                        // Exit the loop once 3 items are fetched
                        break;
                    }
                }}
            ?>
    </div>






    <div class="container">
        <div class="left-section">
            <h2>How to reach Us</h2>
            <p class="movie-paragrph">Lorem ipsum dolor sit amet, consetetur.</p>
        </div>
        <div class="right-section">
            
        </div>
    </div>

   <div class="container">
        <div class="left-section">

            <form id="contactForm" action="process_form.php" method="post" onsubmit="return validateForm()">    
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstName">First Name<span class="required">*</span></label>
                        <input type="text" id="firstName" name="firstName" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name<span class="required">*</span></label>
                        <input type="text" id="lastName" name="lastName" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email<span class="required">*</span></label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Telephone</label>
                    <input type="tel" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="comments">Message<span class="required">*</span></label>
                    <textarea id="comments" name="comments" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="comments">*required ﬁelds<span class="required">*</span></label>
                </div>
               <div class="form-group submit-button">
                    <button type="submit">SUBMIT</button>
                </div>
            </form>
        </div>
        <div class="right-section">
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.3807403172596!2d79.940426!3d6.8448775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25069caa2f53b%3A0xe7eae3a8b1f1214d!2seBEYONDS%20eBusiness%20%26%20Digital%20Solutions!5e0!3m2!1sen!2slk!4v1715488806647!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>


    <div class="container contact-footer">
        <div class="address">
            <h2>IT Group </h2>
            <p>C. Salvador de Madariaga,</p> 
            <p>1 28027 Madrid</p>
            <p>Spain</p>
        </div>
        <div class="social-icons-1">
            <p>Follow us on 
           <a href="#"><img src="images/twitter.png" alt="Twitter"></a>
            <a href="#"><img src="images/youtube.png" alt="Youtube"></a> </p>
        </div>
    </div>


    <div class="container contact-footer">
        <div class="left-section-contact">
            <p>Copyright © 2022 IT Hote ls. All rights reserved. </p>
        </div>
        <div class="right-section-contact">
            <p>Photos by Felix Mooneeram  & Serge Kutuzov  on Unsplash </p>
        </div>
    </div>


    <script src="script.js"></script>
</body>
</html>
