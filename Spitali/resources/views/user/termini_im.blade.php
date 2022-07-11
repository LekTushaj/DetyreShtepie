<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
   

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}"><span class="text-primary">Q.M</span>SHËNDETI</a>

      

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>

            @if(Route::has('login'))

            @auth 

            <li class="nav-item">
              <a class="nav-link" style="background-color: greenyellow; color: white;" href="{{url('termini_im')}}">Termini im</a>
            </li>

            <x-app-layout>
   
            </x-app-layout> 

            @else 

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Regjistrimi</a>
            </li>

            @endauth
            @endif

          </ul>

        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div align="center" style="padding:70px;" >
    <table>
        <tr style="background-color:black;">
            <th style="padding:10px; font-size:20px; color:white;">Emri Doktorrit</th>
            <th style="padding:10px; font-size:20px; color:white;">Data Terminit</th>
            <th style="padding:10px; font-size:20px; color:white;">Mesazhi</th>
            <th style="padding:10px; font-size:20px; color:white;">Statusi</th>
            <th style="padding:10px; font-size:20px; color:white;">Anulo Terminin</th>

        </tr>

            @foreach($appoint as $appoints)
        <tr style="background-color: black;" align="center">
            <td style="padding:10px; color:white;">{{$appoints->emri_doktorrit}}</td>
            <td style="padding:10px; color:white;">{{$appoints->date}}</td>
            <td  style="padding:10px; color:white;">{{$appoints->message}}</td>
            <td style="padding:10px; color:white;">{{$appoints->status}}</td>
            <td><a class="btn btn-danger" onclick="return confirm('Deshironi te anuloni')"
             href="{{url('cancel_appoint',$appoints->id)}}"> Anulo</td>

        </tr>
          @endforeach

    </table>
  </div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>