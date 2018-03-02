 @extends('backoffice.dashboard')



@section('content')         
 




  @if(count($details) > 0)
  <div class="w3-main" style="margin-left:250px;margin-top:43px;">
  <div class="w3-container w3-responsive" style="padding:10px 30px">
    <h5>Beneficiaries</h5>
      
    <table class="w3-table-all w3-card-4">
      <tr class="w3-teal">
        <th>NAMES</th>
        <th>PHONE</th>
        <th>ACCOUNT N0</th>
         <th>BANK</th>
      
    </tr>
         @for ($i =0; $i < count($details); $i++)
           <tr>
              @foreach ($details[$i] as $detail)
                <td>{{$detail->name}}</td>
                <td>{{$detail->phone}}</td>
                <td>{{$detail->account_no}}</td>
                <td>{{$detail->bank}}</td>
              @endforeach
            </tr>
        @endfor
        </table>
  
   @endif
      <br/><br/>
     <a href="/backoffice"><button class="w3-btn w3-red">Back</button></a>

  </div>
  </div>

@endsection