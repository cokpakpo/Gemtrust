   
@extends('template')

@section('content')
<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container" id="home">
  <div class="w3-display-left w3-center w3-text-white" style="padding:48px 20%">
    <span class="w3-jumbo w3-hide-small caption">Simple solutions to wealth creation</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Simple solutions to wealth creation</span><br>
    <span class="intro">Earn more with little effort.</span>
    <p><a href="{{url('/signup')}}" class="w3-button w3-red w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-sepia">Start today</a></p>

      @if(session()->has('refferal'))
       <div class="w3-panel w3-red w3-display-container">
       <span onclick="this.parentElement.style.display='none'"
       class="w3-button w3-red w3-large w3-display-topright">&times;</span>
       <p> {{session('refferal')}}</p>
        </div>
      @endif
    
      @if(session()->has('expired'))
        <div class="w3-panel w3-red w3-display-container">
        <span onclick="this.parentElement.style.display='none'"
        class="w3-button w3-red w3-large w3-display-topright">&times;</span>
        <p>  {{session('expired')}}</p>
        </div>
      @endif


      @if (Session::has('message'))
      <div class="w3-panel w3-center w3-green w3-display-container" >
        <span onclick="this.parentElement.style.display='none'"  class="w3-button w3-green w3-large w3-display-topright">&times;</span>
        <p>{{ Session::get('message') }}</p>
      </div>
    @endif

  </div> 
  
  <div class="w3-display-bottomleft w3-text-sepia w3-large" style="padding:24px 48px">
    <a href="https://www.facebook.com/GemTrustlife-126617124833798/" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <!--
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
     -->
  </div> 
 
</header>

<!-- About Section -->
<div class="w3-container gem" style="padding:128px 16%" id="about">

  <h3 class="w3-center">GEMTRUST FINANCIAL PACKAGE</h3>
  <p class="w3-center ">Gemtrust financial package is a dynamic money plan that allows your one-time investment yield enormous returns for you. The program was created by merging two  money management schemes:
<br>The Mutual Contribution Scheme (ESUSU)  &
Conventional Network Marketing
  </p>
</div>



<!-- Discrepancy tab -->
<div class="w3-container w3-light-grey" style="padding:160px 18%">
      <h3 class="w3-center">Why We're Better</h3>
    <div class="w3-bar w3-dark-grey">
    <button class="w3-bar-item w3-button tablink w3-red w3-hover-light-grey" onclick="openCity(event,'London')">Mutual Contribution Groups</button>
    <button class="w3-bar-item w3-button tablink w3-hover-light-grey" onclick="openCity(event,'Paris')">Gemtrust Capital Solution</button>
    
  </div>
  
  <div id="London" class="w3-container w3-padding-large w3-border w3-card city">
    <h4>Mutual Contribution Groups</h4>
    <ul class="w3-ul">
    <li>A group created by common identity e.g Job, Social Interest, Religion, etc.</li>
    <li>Commit a fixed amount of money for a period of time.</li>
    <li>One member collects everybody's money each month, and another the following month. Sharing continues til all members of the group gets paid.</li>
    <li>The process is repeated.</li>
    </ul>
  </div>

  <div id="Paris" class="w3-container w3-padding-large w3-border w3-card city" style="display:none">
    <h4>Gemtrust Capital Solution</h4>
    <ul class="w3-ul">
       <li> A group of persons not limited by a common identity.</li>
<li>No fixed amount of members. Clients increase as the circle continues to grow</li>
<li>Each client commits a one time fund</li>
<li>His/Her fund is split into 5 equal parts and paid to other members within his category.</li>
<li>Finally, with little networking, his earnings grow exponentially.</li>
    </ul>
  </div>

  
</div>

     




<!-- Package Section -->
<div class="w3-container w3-text-light-grey  special " style="padding:90px 3%; font-size: 16px;" id="team">
<div class="w3-half">
</div>
<div class="w3-half ">
  <h2 class="w3-center">SPECIAL PACKAGE</h2>
  <p class="w3-center">Gemtrust sets up a Trust Fund for every client. The trust fund for each client increases as he  expands his network of refferals and funds are kept for future purposes. The trust is 20% of total earrnings at each grade level </p>
  </div>
</div>

<!--  "Features" -->
<div class="w3-container w3-row w3-center w3-black w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xxlarge">4</span>
    <br>Grade Levels 
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">5</span>
    <br>Refferals
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">20%</span>
    <br>Retained Capital
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">0</span>
    <br>Periodic Renewals
  </div>
</div>




<!-- Trust Funds Section -->
<div class="w3-container w3-center w3-light-grey" style="padding:128px 16px" id="pricing">
  <h3>CHOOSE A TRUST FUND</h3>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-quarter w3-section">
      <ul class="w3-ul w3-white w3-card w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">SILVER</li>
        <li class="w3-padding-16"><b>5</b> Contributors</li>
        <li class="w3-padding-16"><b>4</b> Grade Levels</li>
        <li class="w3-padding-16"><b>Exit</b> Anytime</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">N25,000</h2>
          
        </li>
        <li class="w3-light-grey w3-padding-24">
          <a href="{{url('/packages')}}" class="w3-button w3-black w3-padding-large">Learn More</a>
        </li>
      </ul>
    </div>
    <div class="w3-quarter w3-section">
      <ul class="w3-ul w3-white w3-card w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">GOLD</li>
        <li class="w3-padding-16"><b>5</b> Contributors</li>
        <li class="w3-padding-16"><b>4</b> Grade Levels</li>
        <li class="w3-padding-16"><b>Exit</b> Anytime</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">50,000</h2>
          
        </li>
        <li class="w3-light-grey w3-padding-24">
          <a href="{{url('/packages')}}" class="w3-button w3-black w3-padding-large">Learn More</a>
        </li>
      </ul>
    </div>
    <div class="w3-quarter w3-section">
      <ul class="w3-ul w3-white w3-card w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">PLATINUM</li>
        <li class="w3-padding-16"><b>5</b> Contributors</li>
        <li class="w3-padding-16"><b>4</b> Grade Levels</li>
        <li class="w3-padding-16"><b>Exit</b> Anytime</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">N100,000</h2>
                  </li>
        <li class="w3-light-grey w3-padding-24">
          <a href="{{url('/packages')}}" class="w3-button w3-black w3-padding-large">Learn More</a>
        </li>
      </ul>
    </div>
    <div class="w3-quarter w3-section">
      <ul class="w3-ul w3-white w3-card w3-hover-shadow">
        <li class="w3-red w3-xlarge w3-padding-32">DIAMOND</li>
        <li class="w3-padding-16"><b>5</b> Contributors</li>
        <li class="w3-padding-16"><b>4</b> Grade Levels</li>
        <li class="w3-padding-16"><b>Exit</b> Anytime</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">N200,000</h2>
                  </li>
        <li class="w3-light-grey w3-padding-24">
          <a href="{{url('/packages')}}" class="w3-button w3-black w3-padding-large">Learn More</a>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">Contact Us</h3>
  
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-half">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Yenagoa, Nigeria</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> 08134987658</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> info@gemtrust.life</p>
      <br>
      <form method="POST" action="{{url('/') }}">
      {{ csrf_field() }}
        <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="name"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="email"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="subject"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="message"></p>
        <p>
          <button class="w3-button w3-black" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
          </button>
        </p>
      </form>
    </div>
    <div class="w3-half">
      <!-- Add image -->
      
    </div>
  </div>
</div>

<footer class="w3-dark-grey w3-padding-16">

  
  <div style="font-family: 'Roboto', sans-serif; padding-left: 50px; font-weight: 400; color: grey">
  <p><a href="{{url('/terms')}}">Terms & Conditions</a>
  <p>&#169; 2018 - Gemtrust Capital Solution. All rights reserved </p>

  </div>
</footer>
 
@endsection


<script>

function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}







</script>

</body>
</html>
