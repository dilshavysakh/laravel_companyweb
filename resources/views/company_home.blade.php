

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
    
    <div class="container" style="zoom: 90%;>
      {{-- <div>
          <a href="/create_employee"><p class="btn btn-success">Add New Employee</p></a>
      </div> --}}
      <div class="row">
      <h3 class="bg-gradient mt-3 p-3 text-center text-decoration-underline text-gray-400">COMPANY DETAILS</h3>
        <div class="col">
          <table class="table table-striped ml-5">
              <thead>
                  <tr>
                  <th scope="col">S.No</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Logo</th>
                  <th scope="col">Website</th>
                  <th scope="col">Action</th>
                  <th scope="col">Action</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                $count=1;
                ?>
                @foreach($company as $data)
                <tr>
                <td class="text-white"><?php echo $count++ ?></td>
                <td class="text-white">{{$data->name}}</td>
                <td class="text-white">{{$data->email}}</td>
                <td><img src="storage/images/logo/{{$data->logo}}" style="border-radius: 0;width:100px;height:100px"></td>
                <td class="text-white">{{$data->website}}</td>
                
                <td class=""><a href="{{url('/delete_company',$data->id)}}" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-pinterest btn-sm">Delete</a></td>
                <td class=""><a href="{{url('/edit_company',$data->id)}}" class="btn btn-primary btn-sm">Edit</a></td>
                </tr>
                @endforeach
              </tbody>
          </table>
        </div>
    </div>
    <div class="row mt-3 mr-5">
      {{$company->links()}}
    </div>
    

    

  </div>
    @include('adminscript')

  </body>
</html>