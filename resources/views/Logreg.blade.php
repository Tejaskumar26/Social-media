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
      <p class="brand-title"><a href="">Post your Feed</a></p>

      <div class="side-links">
        <ul>
          <li><a class="active" href="/">Home</a></li>
          <!-- <li><a href="create">Posts</a></li> -->
          <li><a href="login">Login</a></li>
          <li><a href="register">Register</a></li>
        </ul>
      </div>
      <!-- sidebar footer -->
      <footer class="sidebar-footer">
        <small>Post your creations</small>
      </footer>
    </div>
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