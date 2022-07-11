
<!DOCTYPE html>
<html lang="en">
  <head>

  <base href="/public">

  <style>
    label {
      display: inline-block;
      width: 200px;
    }
  </style>
    <!-- Required meta tags -->
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!--
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
       partial:partials/_sidebar.html -->
     
      @include('admin.sidebar')
      <!-- partial -->

    @include('admin.navbar')
        <!-- partial -->

<div class="container-fluid page-body-wrapper">

    
              

  <div class="container" align="center" style="padding:60px">
            @if(session()->has('message'))

          <div class="alert alert-success alert-dismissible">

            
          {{session()->get('message')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert">
                X 
              </button>

          </div>


          @endif
  <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding:15px;">
              <label for="">Emri Doktorrit</label>
              <input type="text" style="color:black;" name="emri" value="{{$data->emri}}">
            </div>
            <div style="padding:15px;">
              <label for="">Tel</label>
              <input type="number" style="color:black;" name="numri" value="{{$data->numri}}">
            </div>
            <div style="padding:15px;">
              <label for="">Specializimi</label>
              <input type="text" style="color:black;" name="specializimi" value="{{$data->specializimi}}">
            </div>
            <div style="padding:15px;">
              <label for="">Dhoma</label>
              <input type="text" style="color:black;" name="dhoma" value="{{$data->dhoma}}">
            </div>
            <div style="padding:15px;">
              <label for="">Foto e Vjetër</label>
              <img height="150" width="150" src="doctorimage/{{$data->image}}" alt="">
            </div>
            <div style="padding:15px;">
              <label for="">Ndrysho foto-n</label>
              <input type="file" name="file">
            </div>
            <div style="padding:15px;">
              <input type="submit" class="btn btn-primary">
            </div>

          </form>
  </div>

</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>