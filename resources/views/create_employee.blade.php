

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
        <h3 class="bg-gradient mt-3 p-3 text-decoration-underline text-gray-400">CREATE NEW EMPLOYEE</h3>
        <br>
        
        <form method="POST" action="{{url('/upload_employee')}}">
          @csrf
          <div class="col-sm-6">
          <input type="text" class="form-control" value="{{ old('firstname') }}" name='firstname' placeholder="Firstname">
          </div>
          @error("firstname")
          <p class="text-danger m-0">{{$errors->first("firstname")}}</p>
          @enderror
          <br>
          <div class="col-sm-6">
          <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" placeholder="Lastname">
          </div>
          @error("lastname")
          <p class="text-danger m-0">{{$errors->first("lastname")}}</p>
          @enderror
          <br>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="company"  class="form-control custom-select bg-black custom-select text-light" value="{{ old('company') }}">
            <option>-- Select Company --</option>

            @foreach($company as $com)
               <option value="{{$com->id}}">{{$com->name}}</option>
            @endforeach

            </select>
          </div>
          <div class="col-sm-6">
          <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
          </div>
          <br> 
          <div class="col-sm-6">
            <input type="number" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Phone">
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