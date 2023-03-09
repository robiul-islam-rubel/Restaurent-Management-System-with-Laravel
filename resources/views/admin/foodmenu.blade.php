<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.admincss')
   <style>
    th 
    {
        padding:30px;
        
    }
  
   </style>
  </head>
  <body>
  <div class="container-scroller">
   @include('admin.navbar')
   <div style="position:relative;top:60px;right:-150px">
    <form action="{{url('/uploadfood')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label >Title</label>
            <input type="text" name="title" placeholder="Write a title" style="color:black">
        </div>
        <div>
            <label >Price</label>
            <input type="number" name="price" placeholder="Write a price" style="color:black">
        </div>
        <div>
            <label >Image</label>
            <input type="file" name="image">
        </div>
        <div>
            <label >Description</label>
            <input type="text" name="description" placeholder="Write a description" style="color:black">
        </div>

        <div>
           
            <input type="submit" value="Save" class="btn btn-primary">
        </div>
    </form>
    <div>
        <table bgcolor="black">
            <tr>
                <th >Food Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Image</th>
                <th colspan="2">Action</th>
            </tr>
             @foreach($data as $data)
            <tr align="center">
                <td>{{$data->title}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->description}}</td>
                <td><img src="/foodimage/{{$data->image}}" alt="" height="100px" width="80px"></td>
                <td><a href="{{url('delete_food',$data->id)}}" class="btn btn-danger">Delete</a></td>
                <td><a href="{{url('update_food',$data->id)}}" class="btn btn-success">Update</a></td>
            </tr>
            @endforeach
        </table>
    </div>
   </div>
  
</div>
@include('admin.adminscript')
 
  </body>
</html>