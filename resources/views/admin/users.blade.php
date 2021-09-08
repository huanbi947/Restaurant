@extends("admin.adminhome")

@section("content")
    <h1 class="d-flex justify-content-center"><span class="badge bg-primary">Danh Sach User </span></h1>


     <div class="container">
    
      <table id="myTable" class="text-center">
        <thead>
                <tr >
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>

          </thead>
          @foreach($datas as $data)
          <tbody>
              
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>

                @if($data->usertype=="0")
                <td>
                 <button class="btn btn-danger"> <a href="{{url('/deleteuser',$data->id)}}"><i class="fas fa-trash-alt"></i></a></button>
                </td>
                @else
                <td>
                  <button class="btn btn-danger"><a href=""><i class="fas fa-trash-alt"></i></a>
                  
                </button>
                </td>
                @endif
              
          </tbody>
          @endforeach
      </table>

   </div>


@endsection

