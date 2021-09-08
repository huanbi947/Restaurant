@extends("admin.adminhome")

@section("content")
  
    <div class="container">
    <table id="myTable">
      <thead>
      <tr >
        <td>Name</td>
        <td>Phone</td>
        <td>Address</td>
        <td>Foodname</td>
        <td>Price</td>
        <td>Quantity</td>
        <td>Total Price</td>
      </tr>
      </thead>
      <tbody>
        @foreach($data as $data)
              <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->foodname}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->quantity}}</td>
                <td>{{$data->price * $data->quantity}}</td>
              </tr>

        @endforeach
</tbody>
    </table>
    </div>

@endsection

