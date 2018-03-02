   

<!DOCTYPE html>
<html>
<title>Gemtrust | Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.iconpad{
  padding-right: 30px;
}
.logo{
  font-family: 'Roboto', sans-serif;
  font-weight: 700;
  font-size: 17px;
}
</style>
<body class="w3-light-grey">

<!-- Top container -->

<div class="w3-bar w3-top w3-blue w3-large" style="z-index:4; ">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
   <!--<a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
 <a href="{{url('/message')}}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i><span class="w3-badge w3-right w3-small w3-red">2</span></a>
  <a href="{{url('/notifications')}}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">2</span></a>-->
  <a href="{{url('/dashboard')}}" class="w3-bar-item w3-button w3-hover-none w3-right logo">GEMTRUST</a>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-black w3-animate-left" style="z-index:3;width:230px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4 ">
    <i class="fa fa-user"></i>
      <!--<img src="/w3images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">-->
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>{{auth()->user()->name}}</strong></span><br>
      
     <!-- <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog">&nbsp;&nbsp;</i>Edit</a>-->
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large  w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="w3-bar-item w3-button w3-padding"><i class="fa fa-power-off fa-fw iconpad w3-text-red"></i> Logout</a>
 <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;"> {{ csrf_field() }}
</form>
    
     
    <br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
@yield('content')

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>

