

@extends('dashboard.dashboard_template')

@section('content')

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

@if(count($details) > 0)
  <div class="w3-container w3-responsive" style="padding:10px 30px">
    <h5><b>Refferrals</b></h5>
      
    <table class="w3-table-all w3-card-4">
      <tr class="w3-light-grey">
        <th>NAMES</th>
        <th>PHONE</th>
        
        
      
    </tr>
         @for ($i =0; $i < count($details); $i++)
           <tr>
              @foreach ($details[$i] as $detail)
                <td>{{$detail->name}}</td>
                <td>{{$detail->phone}}</td>
               
              @endforeach
            </tr>
        @endfor
        
        </table>
         </div>
  
  
@else
  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
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

  
  
  
     @endif

@endsection