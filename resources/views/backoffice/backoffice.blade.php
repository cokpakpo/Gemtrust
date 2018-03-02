
@extends('backoffice.dashboard')



@section('content')

<div class="w3-main" style="margin-left:250px;margin-top:43px;">
<header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Gemtrust Back Office</b></h5>
@if (Session::has('confirm_backoffice'))
      <div class="w3-panel w3-center w3-green w3-display-container" >
        <span onclick="this.parentElement.style.display='none'"  class="w3-button w3-green w3-large w3-display-topright">&times;</span>
        <p>{{ Session::get('confirm_backoffice') }}</p>
      </div>
     @endif
</header>

<div class="w3-row-padding w3-margin-bottom" style="padding: 50px 38px">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>{{count($users)}}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Members</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>{{count($total)}}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Total Requests</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-envelope w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>{{count($message)}}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Messages</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-credit-card w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>{{count($id)}}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Pending Payouts</h4>
      </div>
    </div>
  </div>



     
          
          
      
  
@if(count($id) > 0)

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 68px">
      
    
     
        
        <table class="w3-table w3-striped w3-white">
            <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Date</th>
            </tr>
            @for($i = 0; $i < count($id); $i++)
            @foreach ($id[$i] as $value)
            
            <tr>
            
            <td>{{$i+1}}</td>
              <td><a href ='/details/{{$value->id}}'>{{$value->name}}</a></td>
              <td>{{$value->phone}}</td>
              <td>{{$value->bank}}</td>
              <td>
                <form method="post" action="{{url('/backoffice')}}">
                 {{ csrf_field() }}
                <input type="hidden" name="sender" value="{{$value->id}}">
                <input class="w3-button w3-light-blue w3-padding-16 w3-hover-white w3-card-4"  type="submit" value="Confirm Request">
                </form>

                </td>
            </tr>
            
            @endforeach
            @endfor
            
          
        
        </table>
     
      
    </div>
  </div>
  </div>
@endif
  


        
      
           
           
        
        
            

           

            

            

           
 

   



@endsection
