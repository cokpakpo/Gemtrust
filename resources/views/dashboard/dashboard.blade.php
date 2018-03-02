@extends('dashboard.dashboard_template')

@section('content')

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>

    @if (Session::has('confirm_request'))
      <div class="w3-panel w3-center w3-green w3-display-container" >
        <span onclick="this.parentElement.style.display='none'"  class="w3-button w3-green w3-large w3-display-topright">&times;</span>
        <p>{{ Session::get('confirm_request') }}</p>
      </div>
    @endif

    @if (Session::has('confirm_accept'))
      <div class="w3-panel w3-center w3-green w3-display-container" >
        <span onclick="this.parentElement.style.display='none'"  class="w3-button w3-green w3-large w3-display-topright">&times;</span>
        <p>{{ Session::get('confirm_accept') }}</p>
      </div>
     @endif

  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3></h3>
        </div>
        <div class="w3-clear"></div>
        <h4><a href="{{url('/notifications')}}">Messages</a></h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-bell w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3></h3>
        </div>
        <div class="w3-clear"></div>
        <h4><a href="{{url('/notifications')}}">Notifications</a></h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-link w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3></h3>
        </div>
        <div class="w3-clear"></div>
        <h4><a href="{{url('/generate_links')}}">Links</a></h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-credit-card w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3></h3>
        </div>
        <div class="w3-clear"></div>
        <h4><a href="{{url('/payouts')}}">Payouts</a></h4>
      </div>
    </div>
  </div>



 <div class="w3-container">
    <h5>Guidelines</h5>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
    
      
        <tr><td>Check for beneficiaries</td></tr>
        <tr><td>Make payment to Gemtrust with these details:  <span> 0048655270</span>&nbsp; <span class="w3-text-dark-grey">Union Bank</span></td></tr>
        <tr><td>Request for confirmation from beneficiaries</td></tr>
        <tr><td>Generate links and share: &nbsp; <span class="w3-text-dark-grey">You can only generate links if you have made payments to all beneficiaries!</span></td></tr>
      
      
    </table>
  </div>


  
</div>
</div>

@endsection