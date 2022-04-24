

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
        <form method="POST" action="{{url('/update_employee',$employee->id)}}" >
          @csrf
          <div class="col-sm-6">
          <input type="text" class="form-control" id="" name='firstname' value="{{$employee->firstname}}">
          </div>
          <br>
          <div class="col-sm-6">
          <input type="text" class="form-control" name="lastname" id="" value="{{$employee->lastname}}">
          </div>
          <br>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="company"  class="form-control custom-select bg-black custom-select text-light" >
              <option value="{{$employee->company_id}}" selected>{{$employee->company_id}}</option>

              @foreach($company as $com)
               <option value="{{$com->id}}">{{$com->name}}</option>
              @endforeach


            </select>
          </div>
          <br>
          <div class="col-sm-6">
          <input type="text" class="form-control" name="email" id="" value="{{$employee->email}}">
          </div>
          <br> 
          <div class="col-sm-6">
            <input type="number" class="form-control" name="phone" id="" value="{{$employee->phone}}">
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