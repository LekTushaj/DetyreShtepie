
  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Caktimi Terminit</h1>

      <form class="main-form" action="{{url('termini')}}" method="POST">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="emri" class="form-control" placeholder="Emri">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Email-i..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="emri_doktorrit" id="departement" class="custom-select">

            <option> Zgjedhni doktorrin </option>
            
              @foreach($doctor as $doctors)
          
              <option value="{{$doctors->emri}}">{{$doctors->emri}} ---specializimi--- {{$doctors->specializimi}}</option>

              @endforeach
             
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="tel" class="form-control" placeholder="Numri..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Mesazhi Juaj.."></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Dergo </button>
       <!-- <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button> -->
      </form>
    </div>
  </div> 