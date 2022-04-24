

<x-app-layout >
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
  @include('admincss')

  </head>
  <body>
  <div class="container-scroller"> 
  
  
  
    @include('adminnavbar')
    <!-- right side -->
    
    <div class="container">
        <h3 class="bg-gradient mt-3 p-3 text-decoration-underline text-gray-400">EDIT EMPLOYEE</h3>
        <br>
        <form method="POST" action="{{url('/update_company',$company->id)}}" enctype="multipart/form-data">
          @csrf
          <div class="col-sm-6">
          <input type="text" class="form-control" id="" name='name' value="{{$company->name}}">
          </div>
          <br>
          <div class="col-sm-6">
          <input type="text" class="form-control" name="website" id="" value="{{$company->website}}">
          </div>
          <br>
          <div class="col-sm-6">
          <input type="email" class="form-control" name="email" id="" value="{{$company->email}}">
          </div>
          <br> 
            <div class="col-sm-6">
            <img src="storage/images/logo/{{$company->logo}}" height="100" width="100">
            </div> 
          <br> 
          <div class="col-sm-6">
            <input type="file" class="form-control" id="" name='logo' placeholder="Logo">
           </div>
          <br> 
          <div class="col">
          <input type="submit" class="btn btn-success" name="submit" id="" value="Submit">
          </div>
      </form>
        

    </div>

    
      
    

  </div>
    @include('adminscript')

  </body>
</html>