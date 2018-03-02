@extends('template')

@section('content')


<?php
if(isset($_GET['error']) && isset($_GET['load'])){
 session(['link' => $_GET["error"]]);
 session(['package' => $_GET["load"]]);
}
?>
 


<div style="padding-top: 10%">

@if (Session::has('login_error'))
<div class="w3-panel w3-center w3-red w3-display-container" >
  <span onclick="this.parentElement.style.display='none'"  class="w3-button w3-red w3-large w3-display-topright">&times;</span>
  <p>{{ Session::get('login_error') }}</p>
</div>
 @endif

 <div class="w3-row">
 
  <div class="w3-col m3  w3-center"><p></p>

  </div>

  <div class="w3-col m6 w3-light-grey">
    <form class="w3-container w3-card-4 w3-dark-grey" method="POST" action="{{url('/login') }}">
     {{ csrf_field() }}
  <h3 class="w3-center">Login  </h3>         
  <p class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">      
  <label>Email <div>
 
 </div></label>
  <input class="w3-input w3-border-0" id="email" name="email" type="text" required autofocus>
        @if ($errors->has('email'))
            <span class="w3-text-red">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
  </p>

  <p class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">      
  <label>Password</label>
  <input class="w3-input w3-border-0" id="password" name="password" type="password">
    @if ($errors->has('password'))
        <span class="w3-text-red">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
  </p>

  
        <div class="w3-padding-16">
            <div class="checkbox">
                <label>
        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label>
            </div>
        </div>
    

   
        <div class="w3-padding-16">
            <button type="submit" class="w3-button w3-red">
                Login
            </button>
              &nbsp;&nbsp;&nbsp;
            <a class="btn btn-link" href="{{url('/login')}}">
                Forgot Your Password?
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            Or
              &nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn btn-link" href="{{url('/register')}}">
                Sign Up
            </a>
        </div>
    

</form>
  </div>
  <div class="w3-col m3  w3-center"><p></p></div>
</div> 
</div>


      
@endsection
