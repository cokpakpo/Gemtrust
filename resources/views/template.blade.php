   
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<title>Gemtrust Capital Solution</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
    font-family: 'Roboto', sans-serif;
    font-weight: 300;
    font-size: 15px;
}
h4{
    font-family: 'Roboto', sans-serif;
    font-weight: 200;
}

.icon{
  font-size:40px;
  padding-right:25px;

}
.logo{
  font-family: 'Roboto', sans-serif;
  font-weight: 700;
  font-size: 15px;
}

.caption{
    font-family: 'Roboto', sans-serif;
    font-weight: 600;
    line-height: 1.3;
    width: 400px;
}

.gem {
    line-height: 1.2;
}

.intro{
  font-family: 'Roboto', sans-serif;
  font-weight: 200;
  font-size: 35px;
}
/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-color: black; 
    background-size: cover;
    background-image: url("/images/gemtrust.jpg");
    min-height: 100%;
}


.aboutimg {
   background-color: black; 
      color: #fff; 
      padding: 100px 25px;
      background-repeat: no-repeat;
      min-height: 50%;
}

.special {
    
      background-color: black;
      background-position: center;
      color: #fff;
      background-image: url("/images/special.jpg");
      background-size: cover;
      padding: 100px 25px;
      background-repeat: no-repeat;
      min-height: 80%;
      font-family: 'Roboto', sans-serif;
  font-weight: 300;
}

.special h2 {
    
      font-family: 'Roboto', sans-serif;
  font-weight: 600;
  font-size: 35px;
}


.howimg {
   background-color: black;
      background-position: center;
      color: #fff;
      background-image: url("/images/how.jpg");
      background-size: cover;
      padding: 100px 25px;
      background-repeat: no-repeat;
      min-height: 80%;
}

.ideaimg {
   background-color: black;
      background-position: center;
      color: #fff;
      background-image: url("/images/idea.jpg");
      background-size: cover;
      padding: 100px 25px;
      background-repeat: no-repeat;
      min-height: 80%;
}

.about1img {
   background-color: black;
      background-position: center;
      color: #fff;
      background-image: url("/images/about.jpg");
      background-size: cover;
      padding: 100px 25px;
      background-repeat: no-repeat;
      min-height: 80%;
}

.w3-bar .w3-button {
    padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="{{url('/')}}" class="w3-bar-item w3-button w3-wide w3-hover-none logo">GEMTRUST</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="{{url('/about')}}" class="w3-bar-item w3-button w3-hover-red">ABOUT</a>
      <a href="{{url('/ideology')}}" class="w3-bar-item w3-button w3-hover-red">IDEOLOGY</a>
      <a href="{{url('/packages')}}" class="w3-bar-item w3-button w3-hover-red">PACKAGES</a>
      <a href="{{url('/how_it_works')}}" class="w3-bar-item w3-button w3-hover-red"> HOW IT WORKS</a> 
         <a href="{{ url('/signup') }}" class="w3-bar-item w3-button w3-hover-red">REGISTER</a>
           <a href="{{ url('/login') }}" class="w3-bar-item w3-button w3-hover-red"> LOGIN</a>             
                      
            
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close X</a>
  <a href="{{url('/about')}}" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="{{url('/ideology')}}" onclick="w3_close()" class="w3-bar-item w3-button">IDEOLOGY</a>
   <a href="{{url('/packages')}}" onclick="w3_close()" class="w3-bar-item w3-button">PACKAGES</a>
  <a href="{{url('/how_it_works')}}" onclick="w3_close()" class="w3-bar-item w3-button">HOW IT WORKS</a>
         <a href="{{ url('/signup') }}" class="w3-bar-item w3-button w3-red">REGISTER</a>        
       <a href="{{url('/login') }}" class="w3-bar-item w3-button"> LOGIN</a>             
     
                        
                    
</nav>



@yield('content')



<!-- Add Google Maps -->
<script>




// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}




</script>

</body>
</html>
