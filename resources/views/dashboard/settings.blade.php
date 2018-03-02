@extends('dashboard.dashboard_template')

@section('content')
<div class="w3-main" style="margin-left:300px;margin-top:48px;">



 <div class="w3-row">
  <div class="w3-col m3  w3-center"><p></p></div>
  <div class="w3-col m6 w3-dark-grey">
    <form class="w3-container w3-card-4 w3-light-grey" method="POST" action="{{ url('/settings') }}">
     {{ csrf_field() }}

  @foreach($value as $data)
  
  <p >      
    <label>Phone</label>
    <input class="w3-input w3-border-0" id="phone" name="phone" type="text" maxlength="11" value="{{$data->phone}}" required>
  </p>
            
    <p >      
    <label>Account Number</label>
    <input class="w3-input w3-border-0" id="account_no" name="account_no" type="text" maxlength="10" value="{{$data->account_no}}" required>
  </p>               

  <p >      
    <label>Bank</label>
    <input class="w3-input w3-border-0" id="bank" name="bank" type="text" value="{{$data->bank}}" required>
  </p>

     
  
  <p >      
    <label>Address</label>
    <input class="w3-input w3-border-0" id="address" name="address" type="text" value="{{$data->address}}" required>
  </p>
   

  <p >      
    <label>City</label>
    <input class="w3-input w3-border-0" id="city" name="city" type="text" value="{{$data->city}}" required>
  </p>

  <p >      
    <label>State</label>
    <input class="w3-input w3-border-0" id="state" name="state" type="text" value="{{$data->state}}" required>
  </p>

  <p >      
    <label>Country</label>
    <input class="w3-input w3-border-0" id="country" name="country" type="text" value="{{$data->country}}" required>
  </p>

  <p >      
    <label>Occupation</label>
    <input class="w3-input w3-border-0" id="occupation" name="occupation" type="text" value="{{$data->occupation}}"required>
  </p>


  @endforeach

        <div class="w3-padding-16">
            <button type="submit" class="w3-button w3-red">
                Save
            </button>
        </div>
                                
</form>
  </div>
 
</div> 
</div>




@endsection