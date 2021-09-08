@extends("admin.adminhome")

@section("content")
  <div class="container">
     <h3 align="center" style="color: pink">Quản Lý Món Ăn</h3>
     <form action="{{url('/updatefoodchef',$data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            
            <label>Chef Name</label>
            <input style="color: blue" type="text" class="form-control" name="name" value="{{$data->name}}">

        </div>

         <div>
            
            <label>speciality</label>
            <input style="color: blue" type="text" class="form-control" name="speciality" value="{{$data->speciality}}">

        </div>

         <div>
          <label>Old image</label>
            <img height="200px" width="200px" src="/chefimage/{{$data->image}}">

        </div>

        <div>
            <label>new image
              <input type="file" name="image">
            </label>
            

        </div>
        <div>
          <input class="btn btn-success"type="submit" value="update" required="">
        </div>

      </form>
      </div>
        <!-- main-panel ends -->
     </div>
@endsection
