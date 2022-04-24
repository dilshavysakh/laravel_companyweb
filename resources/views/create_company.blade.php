

<x-app-layout >
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
    
    <div class="container">
        <h3 class="bg-gradient mt-3 p-3 text-decoration-underline text-gray-400">ADD NEW COMPANY</h3>
        <br>
        
        <form method="POST" action="{{url('/upload_company')}}" enctype="multipart/form-data">
          @csrf
          <div class="col-sm-6">
            <input type="text" class="form-control" name="name"value="{{ old('name') }}" id="" placeholder="Company Name">
          </div>

          @error("name")
          <p class="text-danger m-0">{{$errors->first("name")}}</p>
          @enderror
           <br>
          <div class="col-sm-6">
          <input type="text" class="form-control"value="{{ old('website') }}" name="website" id="" placeholder="Website">
          </div>
          <br>
          <div class="col-sm-6">
          <input type="email" class="form-control"value="{{ old('email') }}" name="email" id="" placeholder="Email">
          </div>
          <br> 
          <div class="col-sm-6">
            <input type="file" class="form-control"value="{{ old('logo') }}" id="" name='logo' placeholder="Logo">
           </div>
           @error("logo")
          <p class="text-danger m-0">{{$errors->first("logo")}}(min size:100*100)</p>
          @enderror

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