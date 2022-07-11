
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">

    <style type="text/css">
      label {
        display: inline-block;
        width: 200px;
      }
    </style>
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
    
    
      
     <!--  partial:partials/_sidebar.html -->
     
      @include('admin.sidebar')
      <!-- partial -->

    @include('admin.navbar')
        <!-- partial -->
<div class="container-fluid page-body-wrapper">

     

  <div class="container" align="center" style="padding-top: 100px;">
  

  @if(session()->has('message'))

  <div class="alert alert-success alert-dismissible">

     
{{session()->get('message')}}
<button type="button" class="btn-close" data-bs-dismiss="alert">
        X 
      </button>

   </div>


@endif

<div class="container">
    <form action="{{url('dergo_email',$data->id)}}" method="POST">
      @csrf
      <div style="padding: 15px;">
        <label for="">Pershendetja</label>
        <input type="text" style="color:black;" name="greeting" placeholder="Shkruani Emrin" required="">
      </div>
      <div style="padding: 15px;">
        <label for="">Njoftimi</label>
        <input type="text" style="color:black;" name="body" required="" >
      </div>
     
      <div style="padding: 15px;">
        <label for="">Rekomandimi</label>
        <input type="text" style="color:black;" name="actiontext" required="">
      </div>

      <div style="padding: 15px;">
        <label for="">Rekomandimi url</label>
        <input type="text" style="color:black;" name="actionurl" required="">
      </div>

      <div style="padding: 15px;">
        <label for="">Perfundimi</label>
        <input type="text" style="color:black;" name="endpart" required="">
      </div>
      <div style="padding: 15px;">
        <input type="submit" class="btn btn-success">
      </div>
      
    </form>
  </div>

</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
    </div>
  </body>
</html>