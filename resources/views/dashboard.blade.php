
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
      <div class="row">
        
      <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <div class="bg-warning card-body">
              <center>
                <h5 class="card-title">OUR COMPANIES</h5>
                <a href="/company" class="btn btn-primary">view More..</a>
              </center>
              
            </div>
          </div>
        </div>
        <div class="col-sm-2"></div>
      {{-- </div>
      <div class="row"> --}}
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body bg-success">
              <center>
                <h5 class="card-title">OUR EMPLOYEES</h5>
                <a href="/employee" class="btn btn-primary">view More..</a>
              </center>
            </div>
          </div>
        </div>
      </div>

    </div>
    

    

  </div>
    @include('adminscript')

  </body>
</html>
