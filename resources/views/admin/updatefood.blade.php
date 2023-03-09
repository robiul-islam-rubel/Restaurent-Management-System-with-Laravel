<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
   @include('admin.admincss')
  </head>
  <body>
  <div class="container-scroller">
    
   @include('admin.navbar')
   <div style="position:relative;top:60px;right:-150px">
    <form action="{{url('/updatefood',$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label >Title</label>
            <input type="text" name="title" placeholder="Write a title" style="color:black" value="{{$data->title}}">
        </div>
        <div>
            <label >Price</label>
            <input type="number" name="price" placeholder="Write a price" style="color:black" value="{{$data->price}}">
        </div>
     
        <div>
            <label >Description</label>
            <input type="text" name="description" placeholder="Write a description" style="color:black" value="{{$data->description}}">
        </div>
        <div>
            <label >OldImage</label>
         <img src="/foodimage/{{$data->image}}" alt="" height="100px" width="80px">
        </div>

        <div>
            <label >New Image</label>
            <input type="file" name="image">
        </div>

        <div>
           
            <input type="submit" value="Save" class="btn btn-primary">
        </div>
    </form>
   @include('admin.adminscript')
 
  </body>
</html>