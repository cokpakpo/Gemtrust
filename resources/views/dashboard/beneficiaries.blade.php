

@extends('dashboard.dashboard_template')

@section('content')

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

    
      <div class="w3-container w3-responsive" style="padding:10px 30px">
        <h5><b>Beneficiaries</b></h5>
          
        <table class="w3-table-all w3-card-4">
              <tr class="w3-light-grey">
                <th>NAMES</th>
                <th>PHONE</th>
                <th>ACTION</th>
              </tr>
             @if(count($details) > 0)
             @for ($i =0; $i < count($details); $i++)
               <tr>
                  @foreach ($details[$i] as $detail)
                    <td>{{$detail->name}}</td>
                    <td>{{$detail->phone}}</td>
                    <td>
                      <form method="post" action="{{url('/beneficiaries')}}">
                         {{ csrf_field() }}
                        <input type="hidden" name="reciever" value="{{$detail->id}}">
                        <input class="w3-button w3-light-blue w3-padding-16 w3-hover-white w3-card-4"  type="submit" value="Send Request">
                      </form>
                    </td>
                  @endforeach
                </tr>
              @endfor
              @endif
                    <tr> 
                      <!--Check if gemtrust has confirmed payment -->
                        @if(!count($gemtrust) > 0)

                        
                          <td>Gemtrust Capital Solution</td>
                          <td>08137004275</td>
                          <td>
                            <form method="post" action="{{url('/gemtrust')}}">
                             {{ csrf_field() }}
                            <input type="hidden" name="reciever" value="{{auth()->user()->id}}">
                            <input class="w3-button w3-light-blue w3-padding-16 w3-hover-white w3-card-4"  type="submit" value="Send Request">
                            </form>
                          </td>
                        @endif       
                    </tr>
          </table>
      </div>
    



  
      
 

@endsection