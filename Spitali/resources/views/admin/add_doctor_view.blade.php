
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
    <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div style="padding: 15px;">
        <label for="">Emri Doktorrit</label>
        <input type="text" style="color:black;" name="emri" placeholder="Shkruani Emrin" required="">
      </div>
      <div style="padding: 15px;">
        <label for="">Tel</label>
        <input type="number" style="color:black;" name="numri" placeholder="Shkruani Nr Tel" required="" >
      </div>
      <div style="padding: 15px;">
        <label for="">Specializimi</label>
        <select name="specializimi" style="color: black; width: 200px;" required="" >
          <option>--Zgjedhni--</option>
          <option value="dermatolog">Dermatolog</option>
          <option value="cardiolog">Cardiolog</option>
          <option value="oftalmolog">Oftalmolog</option>
          <option value="i_pergjithshem">I_Pergjithshem</option>
        </select>
      </div>
      <div style="padding: 15px;">
        <label for="">Nr Dhomes</label>
        <input type="text" style="color:black;" name="dhoma" placeholder="Shkruani Nr Dhomes">
      </div>

       
      
      <div style="padding: 15px;">
        <label for="">Foto-ja e Doktorrit</label>
        <input type="file" name="file">
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