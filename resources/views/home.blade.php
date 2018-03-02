
<!--
@foreach ($notifications as $notification)
<div class="w3-row-padding w3-margin-bottom" style="padding: 100px 68px">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-signal w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>{{$notification->grade_level}}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Grade Level</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>{{count(explode(",",$notification->confirmed_links))}}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Shared Links</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-envelope w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>{{$notification->notifications}}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Messages</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-credit-card w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>{{$notification->payouts}}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Payouts</h4>
      </div>
    </div>
  </div>
@endforeach


     
          
          
      
  


  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third">
        <h5>Ads</h5>
        <img src="/images/region.jpg" style="width:100%" alt="Gemtrust">
      </div>
      @if($button == 1000)
      <div class="w3-twothird">
        <h5>Refferal Links</h5>
        <table class="w3-table w3-striped w3-white">
         @if(count($ref_links) > 0)
          @for ($i = 0; $i < count($ref_links); $i++)
          <tr>
            <td><i class="fa fa-link w3-text-blue w3-large"></i></td>
            <td><a href="{{$ref_links[$i]}}" target="_blank">{{$ref_links[$i]}}</a></td>
            <td><i>share</i></td>
          </tr>
          @endfor
          @endif
          
        
        </table>
      </div>
      @endif
    </div>
  </div>
  
  


        
      
           
           
        
        
            

           

            

            

           
  @if(count($details) > 0)
  <div class="w3-container w3-responsive" style="padding:100px 30px">
    <h5>Beneficiaries</h5>
      
    <table class="w3-table-all w3-card-4">
      <tr class="w3-teal">
        <th>NAMES</th>
        <th>PHONE</th>
        <th>ACTION</th>
      
    </tr>
         @for ($i =0; $i < count($details); $i++)
           <tr>
              @foreach ($details[$i] as $detail)
                <td>{{$detail->name}}</td>
                <td>{{$detail->phone}}</td>
                <td class="w3-btn w3-red">Send Request</td>
              @endforeach
            </tr>
        @endfor
        </table>
  </div>
   @endif

  <hr>

   
-->


