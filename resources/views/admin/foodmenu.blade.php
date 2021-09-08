@extends("admin.adminhome")

@section("content")

 <h1 class="d-flex justify-content-center"><span class="badge bg-primary">Thêm Món Ăn</span></h1>

<div class="container">
  <form action="{{url('/uploadfood')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label>Title</label>
      <input type="text" name="title" class="form-control" placeholder="Title" required="">   
    </div>   
    <div class="mb-3">
        <label>Price</label>
        <input style="color: black" type="num" name="price" class="form-control" placeholder="price" required="">
    </div>
    <div class="mb-3">
        <label>Image</label>
        <input style="color: blue" type="file" name="image">
    </div>
    <div class="mb-3">
        <label>Description</label>
        <input style="color: blue" type="text" class="form-control" name="description" placeholder="Description" required="">
    </div>
    <div class="mb-3">
        <input class="btn btn-primary" style="color: black" type="submit" value="Seve">
    </div>
    </form>
</div>
<h1 class="d-flex justify-content-center"><span class="badge bg-primary">Danh Sách Món Ăn</span></h1>
  <div class="container">      
    <table id="myTable">
      <thead>
        <tr>
            <th>Food Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action</th>
            <th>Action2</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $data)
        <tr align="center">
            <td>{{$data->title}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->description}}</td>
            <td><img height="200px" width="200px" src="/foodimage/{{$data->image}}"></td>
            <td>
              <button class="btn btn-danger"><a href="{{url('/deletemenu',$data->id)}}"><i class="fas fa-trash-alt"></i></a>
              
            </button>
            </td>
            <td>
              <button class="btn btn-danger"><a href="{{url('/showmenu',$data->id)}}">
                <i class="fas fa-edit"></i>
              </a>
              
            </button>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div> 
                    
@endsection
