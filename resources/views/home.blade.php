<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Create your posts!!</title>

  <!-- Css -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body>
  <div id="wrapper">
    <!-- sidebar -->
    <div class="sidebar">
      <span class="closeButton">&times;</span>
      <p class="brand-title">Post your Creations</p>

      <div class="side-links">
        <ul>
          <li><a class="active" href="posts">Home</a></li>
          <li><a href="login">Login</a></li>
          <li><a href="register">Register</a></li>
        </ul>
      </div>
      <!-- sidebar footer -->
      <footer class="sidebar-footer">
       

        <small>Post your creations</small>
      </footer>
    </div>
    <!-- Menu Button -->
    <div class="menuButton">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>

    <!-- main -->
    <main class="container">
      <h2 class="header-title">All Posts</h2>
     
      <div class="card-blog-content">
          
      <section class="cards-blog latest-blog">
        <div class="card-blog-content">
          <img src="images/pic1.jpg" alt="" />
          <p>
            2 hours ago
            <span>Written By Someone </span>
          </p>
          <h4>
            <a href="#">Benefits of getting covid 19 vaccination</a>
          </h4>
        </div>

        <div class="card-blog-content">
          <img src="images/pic2.jpg" alt="" />
          <p>
            23 hours ago
            <span>Written By Someone</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="/single-blogpost">Top 10 Music Stories Never Told</a>
          </h4>
        </div>

        <div class="card-blog-content">
          <img src="images/pic3.jpg" alt="" />
          <p>
            2 days ago
            <span>Written By  Someone</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="#">WRC Safari Rally Back To Kenya After 19 Years</a>
          </h4>
        </div>

        <div class="card-blog-content">
          <img src="images/pic4.jpg" alt="" />
          <p>
            3 days ago
            <span>Written By Someone</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="/single-blogpost">Premier League 2021/2022 Fixtures</a>
          </h4>
        </div>

        <div class="card-blog-content">
          <img src="images/pic5.jpg" alt="" />
          <p>
            2 weeks ago
            <span>Written By Me</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="#">12 Health Benefits Of Pomegranate Fruit</a>
          </h4>
        </div>

        <div class="card-blog-content">
          <img src="images/pic6.jpg" alt="" />
          <p>
            1 month ago
            <span>Written By Me</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="#">Nairobi, The Only City In The World With A National Park</a>
          </h4>
        </div>
      </section>
      <!--Main footer -->
      <footer class="main-footer">
        <div>
          <a href=""><i class="fab fa-facebook-f"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
        </div>
        <small>Posts are here</small>
      </footer>
    </main>
  </div>
  <!-- Click events to menu and close buttons using javaascript-->
  <script>
    document
      .querySelector(".menuButton")
      .addEventListener("click", function () {
        document.querySelector(".sidebar").style.width = "100%";
        document.querySelector(".sidebar").style.zIndex = "5";
      });

    document
      .querySelector(".closeButton")
      .addEventListener("click", function () {
        document.querySelector(".sidebar").style.width = "0";
      });
  </script>
</body>

</html>