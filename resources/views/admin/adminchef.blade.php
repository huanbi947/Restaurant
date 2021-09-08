@extends("admin.adminhome")

@section("content")
    <h1 class="d-flex justify-content-center"><span class="badge bg-primary">Danh Sach Chef </span></h1>
       <div class="container">
            <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
              @csrf
             <div class="mb-3">
                      <label>Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Name" required="">
              </div>

               <div class="mb-3">
                  
                  <label>speciality</label>
                  <input style="color: blue" type="text" class="form-control"  name="speciality" required="" placeholder="Enter speciality">

              </div>

               <div class="mb-3">
                
                  <input type="file" name="image" required="" >

              </div>

              <div>
                
                  <input class="btn btn-primary" style="color: black" type="submit" value="Seve">

              </div>

            </form>
</div>

      <div class="container">
        <table id="myTable">
          <thead>
            <tr>
              <th>Chef Name</th>
              <th>Speciality</th>
              <th>Image</th>
              <th>Update</th>
              <th>Delete</th>
            </tr>
           </thead>
           <tbody>
           @foreach($data as $data)
              <tr>
                  <td>{{$data->name}}</td>
                  <td>{{$data->speciality}}</td>
                  
                  <td><img height="200px" width="200px" src="/chefimage/{{$data->image}}"></td>
                  
                  <td>
                    <button class="btn btn-danger"><a href="{{url('/updatechef',$data->id)}}">
                      <i class="fas fa-edit"></i>
                        </a>
                        
                      </button>
                      </td> 
                  <td>
                 <button class="btn btn-danger"> <a href="{{url('/deletechef',$data->id)}}"><i class="fas fa-trash-alt"></i></a></button>
                </td>
                
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    
@endsection
