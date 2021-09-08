
@extends("admin.adminhome")

@section("content")
    <h1 class="d-flex justify-content-center"><span class="badge bg-primary">Sua Mon an </span></h1>

    <div class="container">
          <form action="{{url('/updatemenu',$data->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
            <div>
              <label>title</label>
              <input style="color: blue" type="text" class="form-control" name="title" placeholder="Write a title" value="{{$data->title}}" required="">
            </div>
            <div>
              <label>Price</label>
              <input style="color: black" type="num" class="form-control" name="price" placeholder="price" value="{{$data->price}}" required="">
            </div>
            
            <div>
              <label>Description</label>
              <input style="color: blue" type="text" class="form-control" name="description" placeholder="Description" value="{{$data->description}}" required="">
            </div>

            <div>
              <label>Old Image</label>
              <img height="200px" width="200px" src="/foodimage/{{$data->image}}">
            </div>

            <div>
              <label>Image</label>
              <input type="file" name="image">
            </div>
            <div>
              <input class="btn btn-primary" style="color: black" type="submit" value="Seve">
            </div>
          </form>
                
            
        </div>
@endsection

