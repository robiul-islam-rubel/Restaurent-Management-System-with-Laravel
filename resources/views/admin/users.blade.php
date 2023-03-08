<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.admincss')
   <style>
    th,td
    {
        padding:10px;
    }
   </style>
  </head>
  <body>
  <div class="container-scroller">
    
   @include('admin.navbar')
   <div style="position:relative;top:60px;right:-150px">

   <table bgcolor="grey" border="3px">


   <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
   </tr>
   @foreach($user as $user)
   <tr>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    @if($user->usertype=="0")
    <td><a href="{{url('/delete_user',$user->id)}}" class="brn btn-danger"></>Delete</td>
    @else
    <td><a href="" class="btn btn-primary"></>Not Allowed</td>
    @endif

   </tr>
   @endforeach
   </table>


   </div>
</div>
   @include('admin.adminscript')
 
  </body>
</html>