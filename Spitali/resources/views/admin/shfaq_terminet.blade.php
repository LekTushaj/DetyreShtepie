
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        
      
      </div>
     
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