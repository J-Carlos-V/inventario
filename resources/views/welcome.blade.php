<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inventario</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Bitter:400,700"
    />
    <link rel="stylesheet" href="./css/estilos.css" />

</head>
<style>
 @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500');

    body {
    overflow-x: hidden;
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    }

    /* Toggle Styles */

    #viewport {
    padding-left: 250px;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
    }

    #content {
    width: 100%;
    position: relative;
    margin-right: 0;
    }

    /* Sidebar Styles */

    #sidebar {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 250px;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    background: #37474F;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
    }

    #sidebar header {
    background-color: #263238;
    font-size: 20px;
    line-height: 52px;
    text-align: center;
    }

    #sidebar header a {
    color: #fff;
    display: block;
    text-decoration: none;
    }

    #sidebar header a:hover {
    color: #fff;
    }

    #sidebar .nav{
    
    }

    #sidebar .nav a{
    background: none;
    border-bottom: 1px solid #455A64;
    color: #CFD8DC;
    font-size: 14px;
    padding: 16px 24px;
    }

    #sidebar .nav a:hover{
    background: none;
    color: #ECEFF1;
    }

    #sidebar .nav a i{
    margin-right: 16px;
    }
</style>
<body>
    <div id="viewport">
        <!-- Sidebar -->
        <div id="sidebar">
          <header>
            <a href="#">My App</a>
          </header>
          <ul class="nav">
            <li>
              <a href="#">
                <i class="zmdi zmdi-view-dashboard"></i> Dashboard
              </a>
            </li>
            <li>
              <a href="#">
                <i class="zmdi zmdi-link"></i> Shortcuts
              </a>
            </li>
            <li>
              <a href="#">
                <i class="zmdi zmdi-widgets"></i> Overview
              </a>
            </li>
            <li>
              <a href="#">
                <i class="zmdi zmdi-calendar"></i> Events
              </a>
            </li>
            <li>
              <a href="#">
                <i class="zmdi zmdi-info-outline"></i> About
              </a>
            </li>
            <li>
              <a href="#">
                <i class="zmdi zmdi-settings"></i> Services
              </a>
            </li>
            <li>
              <a href="#">
                <i class="zmdi zmdi-comment-more"></i> Contact
              </a>
            </li>
          </ul>
        </div>
        <!-- Content -->
        <div id="content">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <a href="#"><i class="zmdi zmdi-notifications text-danger"></i>
                  </a>
                </li>
                <li><a href="#">Test User</a></li>
              </ul>
            </div>
          </nav>
          <div class="container-fluid">
            <h1>Simple Sidebar</h1>
            <p>
              Make sure to keep all page content within the 
              <code>#content</code>.
            </p>
          </div>
        </div>
      </div>
    @yield('content')
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</html>