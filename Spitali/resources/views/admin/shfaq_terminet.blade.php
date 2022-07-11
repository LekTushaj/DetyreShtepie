
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <!--
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
        -->
      </div>
      <!-- partial:partials/_sidebar.html -->
     
      @include('admin.sidebar')
      <!-- partial -->

    @include('admin.navbar')
        <!-- partial -->
<div class="container-fluid page-body-wrapper">

    <div align="center" style="padding-top:100px;">
        <table>
            <tr style="background-color:black;">
                <th style="padding:10px;">Emri Klientit</th>
                <th style="padding:10px;">Email</th>
                <th style="padding:10px;">Tel</th>
                <th style="padding:10px;">Emri Doktorrit</th>
                <th style="padding:10px;">Data</th>
                <th style="padding:10px;">Mesazhi</th>
                <th style="padding:10px;">Statusi</th>
                <th style="padding:10px;">Pranim</th>
                <th style="padding:10px;">Anulim</th>
            </tr>

            @foreach($data as $appoint)

            <tr align="center" style="background-color:#687B8E;">
                <td>{{$appoint->emri}}</td>
                <td>{{$appoint->email}}</td>
                <td>{{$appoint->tel}}</td>
                <td>{{$appoint->emri_doktorrit}}</td>
                <td>{{$appoint->date}}</td>
                <td>{{$appoint->message}}</td>
                <td>{{$appoint->status}}</td>
                <td>
                    <a class="btn btn-success" href="{{url('pranuar',$appoint->id)}}">Pranuar</a>
                </td>
                <td>
                    <a class="btn btn-danger" href="{{url('anuluar',$appoint->id)}}">Anuluar</a>
                </td>
            </tr>

            @endforeach

        </table>
    </div>

</div>

    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>