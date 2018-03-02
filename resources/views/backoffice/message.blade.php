 @extends('backoffice.dashboard')



@section('content')         
 




  @if(count($message) > 0)
  <div class="w3-container w3-responsive" style="padding:100px 30px">
    <h5>Messages</h5>
      
    <table class="w3-table-all w3-card-4">
      <tr class="w3-teal">
        <th>NAMES</th>
        <th>EMAIL</th>
        <th>SUBJECT N0</th>
         <th>MESSAGE</th>
      
    </tr>
         @for ($i =0; $i < count($message); $i++)
           <tr>
              @foreach ($message as $data)
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->subject}}</td>
                <td>{{$data->message}}</td>
                
              @endforeach
            </tr>
        @endfor
        </table>
  
   @endif
      <br/><br/>
     <a href="/backoffice"><button class="w3-btn w3-red">Back</button></a>

  </div>

@endsection