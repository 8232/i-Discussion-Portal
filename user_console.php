<?php include 'login_db.php'; ?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <title>User Console</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css",>
  <link rel="stylesheet" href="style2.css">
  
  <style>
  body{
    background-image: url(skaaullbg.jpg);
    background-size: cover;

  }
  .fa-2x{
    font-size: 2em;

  }
  .fa{
    position: relative;
    display: table-cell;
    width: 60px;
    height: 36px
    text-align: center;
    vertical-align: middle;
    font-size: 20px;



  }
  .main-menu:hover,nav.main-menu.expand{
    width: 250px;
    overflow: visible;
  }
  .main-menu{
    background: #212120;
    border-right: 1px; solid white;
    position: absolute;
    top: 0;
    bottom: 0;
    height: 100%
    left: 0;
    width: 60px;
    overflow: hidden;
    transition: width 0.5s linear;
    z-index: auto 1000;
    -webkit-tranform:translateZ(0)
    scale(1,1);
  }
.main-menu > ul{
  margin: 7px 0;

}
.main-menu li{
  position: relative;
  display: block;
  width: 250px;

}
.main-menu li a{
  position: relative;
  display: table;
  border-collapse: collapse;
  border-spacing: 0;
  color: #999;
  font-family: sans-serif;
  font-size: 14px;
  text-decoration: none;
  -webki-tranform:translateZ(0)
  scale(1,1);
  transition: all .1s linear;

}

.main-menu .nav-icon{
  position: relative;
  display: table-cell;
  width: 60px;
  height: 36px;
  text-align: center;
  vertical-align: middle;
  font-size: 18px;


}

.main-menu .nav-text{

  position: relative;
  display: table-cell;
  vertical-align: middle;
  width: 190px;
  font-family: tahoma;

}

.main-menu ul.logout{
  position: absolute;
  left: 0;
  bottom: 0;

}
.no-touch .scrollable.hover{
  overflow-y: hidden;

}
.no-touch .scrollable.hover:hover{
  overflow-y: auto;
    overflow: visible;

}

a:hover,a:focus{
  text-decoration: none;
}

nav{
  user-select: none;

}

nav ul,nav li{
  outline: 0;
  margin: 0;
  padding: 0;

}
.main-menu li:hover a,
nav.main-menu li.active a,
.dropdown-menu li a:hover,
.dropdown-menu li a:focus,
.dropdown-menu .active a,
.dropdown-menu .active a:hover,
.dropdown-menu .active a:focus,
.no-touch .dashboard-page nav.dashboard-
menu ul li:hovera,
.dashboard-page nav.dashboard-menu ulli



</style>



  </head>
  <body>
      <div class="area"></div>
      <nav class="main-menu">
        <ul>
            <li>
              <a href=""><i class="fa fa-home fa-2x fa-fw"></i>
              <span class="nav-text">
                  Dashboard
              </span>
              </a>
            </li>

            <p></p>

            <li class="has-subnav">
              <a href=""><i class="fa fa-graduation-cap fa-2x fa-fw"></i>
              <span class="nav-text">
              Academic
              </span>
              </a>
            </li>

            <p></p>

            <li class="has-subnav">
              <a href="non-academic.php"><i class="fa fa-laptop fa-2x fa-fw"></i>
              <span class="nav-text">
                Non-Academic
              </span>
              </a>
            </li>

            <p></p>

            <li class="has-subnav">
              <a href=""><i class="fa fa-users fa-2x fa-fw"></i>
              <span class="nav-text">
                Batches
              </span>
              </a>
            </li>

            <p></p>

            <li class="has-subnav">
              <a href=""><i class="fa fa-user-circle-o fa-2x fa-fw"></i>
              <span class="nav-text">
                Clubs
              </span>
              </a>
            </li>

            <p></p>

            <li class="has-subnav">
              <a href=""><i class="fa fa-bullhorn fa-2x fa-fw"></i>
              <span class="nav-text">
                BU Communications
              </span>
              </a>
            </li>

            <p></p>

            <li class="has-subnav">
              <a href="login.php"><i class="fa fa-sign-out fa-2x fa-fw"></i>
              <span class="nav-text">
              Logout
              </span>
              </a>
            </li>

        </ul>
		
		
  </body>
  </html>
