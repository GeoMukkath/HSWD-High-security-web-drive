<html>
    <title>
        Welcome!
</title>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <style>


        
        .ui container{
            height: 50%;
            width: 100%;
        }

        .header
        {
            margin-top: 200px;
            margin-left:200px;
            font-size:65px;
            color: white;
            font-family: 'Poppins';

        }

        

        .ui.inverted.button 
        {
            background-color: #fff;
            color :black;
            font-size: 20px;
            height :90px;
            width:200px;
            border-radius :10px;
            align-content: center;
            margin-left:460px;
            font-family: 'Poppins';
            margin-top: 15px;
                  }

        body
        {
            background-image: linear-gradient(to right, #008080, #3364FF,  #008080 );
            
        }


        p
        {
            margin-left :750px;
            margin-top: 15px;
            font-size: 17px;
            color: white;
            font-style:italic;
        }

        .ui.inverted.teal.button
        {
            margin-left: 600px;
            margin-top : -90px;
        }

        hr
        {
            margin-top: 100px;
          
        }

        .social
        {
            margin-top:100px;
            margin-left: 180px;
        }

        
        .sidebar {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0;
  left: 0;
  background-color: transparent; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidebar */
}

/* The sidebar links */
.sidebar a {
  padding: 30px 30px 30px 30px;
  text-decoration: none;
  font-size: 20px;
  font-family: 'Poppins';
  color: white;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidebar a:hover {
  color: #000;
}

/* Position and style the close button (top right corner) */
.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}



/* The button used to open the sidebar */
.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: transparent;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: transparent;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s; /* If you want a transition effect */
  padding: 20px;
  margin-left: -100px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
        
        </style>
    </head>




<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
</body>
<div class="ui container">

        <div id="mySidebar" class="sidebar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#">About Us</a>
                <a href="#">Services</a>
                <a href="#">Clients</a>
                <a href="#">Contact Us</a>
                <a href="#">Support</a>
              </div>
              
              <div id="main">
                <button class="openbtn" onclick="openNav()">&#9776;</button> 
              </div>


    <div class="header">
        <b>High Security Web Drive</b>
    </div>
    <p><b>Your Security, Our Guarantee!</b></p>
            <button class="ui inverted blue button" onclick="location.href='login.html'">Login / Signup</button>

            <!--<button class="ui inverted teal button">Signup</button>-->
    


<div class="social">
<button class="ui facebook button">
    <i class="facebook icon"></i>
    Facebook
  </button>
  <button class="ui twitter button">
    <i class="twitter icon"></i>
    Twitter
  </button>
  <button class="ui google plus button">
    <i class="google plus icon"></i>
    Google Plus
  </button>
  <button class="ui linkedin button">
    <i class="linkedin icon"></i>
    LinkedIn
  </button>
  <button class="ui instagram button">
    <i class="instagram icon"></i>
    Instagram
  </button>
  <button class="ui youtube button">
    <i class="youtube icon"></i>
    YouTube
  </button>
  
</div>
<script>
/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.getElementById('main').style.visibility = 'hidden';
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "-100";
  document.getElementById('main').style.visibility = 'visible';
}
</script>


</html>