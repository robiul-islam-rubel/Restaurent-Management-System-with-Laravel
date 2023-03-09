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

   <div>
    <table border="1">
        <tr bgcolor="green">
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Guest</th>
            <th>Date</th>
            <th>Time</th>
            <th>Message</th>
        </tr>
        @foreach($data as $data)
        <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->guest}}</td>
            <td>{{$data->date}}</td>
            <td>{{$data->time}}</td>
            <td>{{$data->message}}</td>
        </tr>
        @endforeach
    </table>
   </div>
   @include('admin.adminscript')
 
  </body>
</html>