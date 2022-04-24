

<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
  
  @include('admincss')

  </head>
  <body>
  <div class="container-scroller"> 
  
  
  
    @include('adminnavbar')
    <!-- right side -->
    
    <div class="container" style="zoom: 90%;">
      {{-- <div>
          <a href="/create_employee"><p class="btn btn-success">Add New Employee</p></a>
      </div> --}}
      <div class="row">
      <h3 class="bg-gradient mt-3 p-3 text-center text-decoration-underline text-gray-400">EMPLOYEE DETAILS</h3>
        <div class="col">
          <table class="table table-striped ml-5">
              <thead>
                  <tr>
                  <th scope="col">S.No</th>
                  <th scope="col">Firstname</th>
                  <th scope="col">Lastname</th>
                  <th scope="col">Company</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Action</th>
                  <th scope="col">Action</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                $count=1;
                ?>
                @foreach($datas as $data)
                <tr>
                <td class="text-white"><?php echo $count++ ?></td>
                <td class="text-white">{{$data->firstname}}</td>
                <td class="text-white">{{$data->lastname}}</td>
                <td class="text-white">{{$data->company_id}}</td>
                <td class="text-white">{{$data->email}}</td>
                <td class="text-white">{{$data->phone}}</td>
                
                <td class=""><a href="{{url('/delete_emp',$data->id)}}" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-pinterest btn-sm">Delete</a></td>
                <td class=""><a href="{{url('/edit_emp',$data->id)}}" class="btn btn-primary btn-sm">Edit</a></td>
                </tr>
                @endforeach
              </tbody>
          </table>
        </div>
    </div>
    <div class="row mt-3 mr-5">
      {{$datas->links()}}
    </div>
    

    

  </div>
    @include('adminscript')

  </body>
</html>