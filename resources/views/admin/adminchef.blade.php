<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.admincss')
  </head>
  <body>
  <div class="container-scroller"> 
   @include('admin.navbar')
  
    <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div align="center">
            <label>Name</label>
            <input type="text" name="name" placeholder="Write a name" style="color:black">
        </div>
        <div>
            <label>Speciality</label>
            <input type="text" name="speciality" placeholder="Write speciality" style="color:black">
        </div>

        <div>
           
            <input type="file" name="image">
        </div>

        <div>
            <input type="submit" value="Save" class="btn btn-success">
        </div>

    </form>
   
   </div>
   @include('admin.adminscript')
 
  </body>
</html>