<?php
?>
<!DOCTYPE html>

<html>
<head>
  <meta charset="UTF-8">
  <title>About Sidhu</title>
  <style>
    body {
      font-family: 'Noto Sans KR', sans-serif;
      text-align: center;
      padding: 50px 0;
    }

    h1 {
      font-size: 3rem;
      margin-bottom: 50px;
    }

    p {
      font-size: 1.2rem;
      line-height: 1.5;
      margin-bottom: 30px;
    }

    .artist-list {
      display: flex;
      justify-content: center;
      margin-top: 50px;
    }

    .artist-item {
      margin: 0 20px;
    }

    .artist-image {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 20px;
    }

    .artist-name {
      font-size: 1.2rem;
      margin-bottom: 10px;
    }

    .artist-description {
      font-size: 1rem;
      color: #666;
    }
  </style>
</head>
<body>
  
</body>
</head>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidhu Fan</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 0;
    }

    .artist-list {
      display: flex;
      justify-content: center;
      margin-top: 50px;
    }

    .artist-item {
      margin: 0 20px;
    }

    .artist-image {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 20px;
    }

    .artist-name {
      font-size: 1.2rem;
      margin-bottom: 10px;
    }

    .artist-description {
      font-size: 1rem;
      color: #666;
    }
    /* Define the styles for the blue-colored table */
.footer-table {
            width: 100%;
            background-color: lightBlue; 
            color: black; 
            padding: 10px 0; 
            margin-top: 50px; 
            text-align: center;
        }

        /* Center the text within the table */
        .footer-table p {
            margin: 0;
           
        }

        /* Style the footer */
        footer.container {
            z-index: 1; /* Ensure the footer is above the blue table */
            margin-top: auto; /* Push the footer to the bottom */
            position: relative; /* Position relative for absolute positioning of footer */
            bottom: 0; /* Stick to the bottom */
        }
        .home-button {
            position: absolute;
            top: 1rem; /* Adjust as needed */
            right: 1rem; /* Adjust as needed */
            background-color: lightblue;
            color: black;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }

        /* Styling for the home button on hover */
        .home-button:hover {
            background-color: lightblue;
        }

  </style>
</head>
<body>
   <!-- Home button -->
   <a href="index.php" class="home-button">Home</a>
  <h1>Sidhu Fan</h1>
  <p>I am gurpreet Singh, Number 1 fan of Sidhu moosewala.</p>
  <p>I am following him from his early days in mjusic industry.</p>
  <p> I have seen him come through ranks with all his hardwork and god-gifted talent.</p>
  <h2>Information about sidhu moosewala is below.</h2> 
  <p>Shubhdeep Singh Sidhu, known professionally as Sidhu Moose Wala, was an Indian singer, songwriter, lyricist and rapper.</p>
  <p> He worked predominantly in Punjabi-language music and cinema.</p>
  <p> Moose Wala was generally regarded to have been one of the greatest Punjabi artists of his generation and to many, amongst the greatest and most controversial Punjabi artists of all time.</p>
  <p> Moreover, he was considered a key figure in opening the door to mainstream music for Punjabi artists. </p>
  <p>He was shot and killed by unidentified assailants in May 2022.</p>
  <div class="artist-list">
    <div class="artist-item">
      <img class="artist-image"src="sidhu.jpg" alt="Number 1 Artist">
          </div>
    </div>
  <!-- Footer -->
  <footer class="container mt-5 text-center">
     <div class="footer-table">
       <p>Designed by Gurpreet Singh</p>
       <p>Student ID: 202106914</p>
     </div>
  </footer>
  <!-- End of Footer -->
</body>
</html>