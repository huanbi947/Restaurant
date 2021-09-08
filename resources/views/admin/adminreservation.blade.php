@extends("admin.adminhome")

@section("content")
    <h1 class="d-flex justify-content-center"><span class="badge bg-primary">Danh Sach Nguoi Dat Ban</span></h1>
    <div class="container mt-5">
          <table id="myTable">
            <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Guest</th>
              <th>Date</th>
              <th>time</th>
              <th>Message</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $data)
            <tr align="center">
              <td>{{$data->name}}</td>
              <td>{{$data->email}}</td>
              <td>{{$data->phone}}</td>
              <td>{{$data->guest}}</td>
              <td>{{$data->date}}</td>
              <td>{{$data->time}}</td>
              <td>{{$data->message}}</td>
              <td>
                  <button class="btn btn-danger"><a href="{{url('/deleteReservation',$data->id)}}"><i class="fas fa-trash-alt"></i></a>
                  
                </button>
                </td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
@endsection
