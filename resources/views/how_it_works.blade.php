@extends('template')

@section('content')
<!-- Header with full-height image -->
<header class="howimg  w3-display-container" >
  <div class=" w3-center w3-text-white" style="padding:15%">
    <span class="intro">How it Works</span>   
  </div>
</header>


<div class="w3-container  w3-center" >
<div style="padding:10% 14%">
<p>
Every client contributes to the trust fund of referral and his ancestry up the chain. The same happens when you refer new clients. Your initial capital is split into five parts and evenly distributed amongst five beneficiaries including Gemtrust. After confirmation of your contributions, you will be provided with five links to invite 5 new clients who will in turn create a sub network of contributors to your trust fund. The same process is repeated and you will exit the trust package after completing level 4 or at your own request for exit.  After exit, all accumulated contributions to your trust fund will be remitted to you by Gemtrust. Read instructions on each <a href="{{url('/packages')}}">Gemtrust Package</a>.
</p>
</div>
</div>


<div class="w3-container w3-light-grey  w3-center" style="padding:10% 16%">
  
  <h4>STEPS TO FOLLOW </h4>
<p>Choose a package</p>
<p>Request for referral link</p>
<p>Register with the link</p>
<p>Make payment to Gemtrust using this account details: <span> 0048655270</span>&nbsp; <span class="w3-text-dark-grey">Union Bank</span></p>
<p>Send request for confirmation to beneficiaries</p>
<p>Generate your links</p>
<p>Share your links</p>
<p>Receive payments and confirm immediately<p>
<p>Request for exit of package</p>
<p>Get your trust fund</p>
<p>Upgrade your package (optional)<p>

</div>


<div class="w3-container   w3-center" style="padding:10% 16%">
  
  <h4> HOW TO MAKE PAYMENTS</h4>

  

Our payment method is created to make payment easy and quick for clients. Payment is made from your mobile phone using a code that allows you credit Gemtrust immediately. Gemtrust in turn uses it's payment software to distribute to other beneficiaries. 


</div>







<div class="w3-container w3-light-grey w3-responsive   w3-center" style="padding:150px 15%">
  
  <h4 style="padding:30px 12%">
  Graphical Representation of the programme illustrates, new member moves up to the next spot after servicing his five refferal links which is the only requirement.</h4>


  <table class="w3-table-all w3-card-4">
    <tr class="w3-dark-grey">
      <th>NAMES</th>
      <th>ACCT DETAILS</th>
      <th>AMOUNT</th>
      <th>NO OF REF</th>
      <th>TOTAL PAYOUTS</th>
    </tr>
    <tr>
      <td>Mr. A</td>
      <td>XXX Bank</td>
       <td>5,000</td>
        <td>625</td>
         <td>3,125,000</td>
      
    </tr>
    <tr>
      <td>Mr. B</td>
      <td>XXX Bank</td>
       <td>5,000</td>
        <td>125</td>
         <td>625,000</td>
      
      
    </tr>
    <tr>
      <td>Mr. C</td>
      <td>XXX Bank</td>
       <td>5,000</td>
        <td>25</td>
         <td>125,000</td>
      
      
    </tr>

    <tr>
      <td>Mr. New Member</td>
      <td>XXX Bank</td>
       <td>5,000</td>
        <td>5</td>
         <td>25,000</td>
      
      
    </tr>

    <tr>
      <td>Gemtrust</td>
      <td>XXX Bank</td>
       <td>5,000</td>
        <td>XXX</td>
         <td>5,000</td>
      
      
    </tr>
  </table>
</div>

<footer class="w3-dark-grey w3-padding-16">

  
  <div style="font-family: 'Roboto', sans-serif; padding-left: 50px; font-weight: 400; color: grey">
  <p><a href="{{url('/terms')}}">Terms & Conditions</a>
  <p>&#169; 2018 - Gemtrust Capital Solution. All rights reserved </p>

  </div>
</footer>

@endsection