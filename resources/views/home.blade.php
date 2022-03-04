@extends('base')
@section('head')
    
@endsection
@section("content")
    

    <!-- ABOUT -->

    <section id="about" class="light">
      <header class="title">
        <h2>À propos</h2>
        <p>Chez <b>RentalCar</b>, vous pouvez louer votre voiture et obtenir un prix avantageux</p>
      </header>

      <div class="container">`
        <div class="row table-row">
          <div class="col-sm-6 ">
            <div class="section-content">
              <div class="big-image" style="background-image:url(home/images/1.png)"></div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="section-content">
              <div class="about-content left animated" data-animate="fadeInLeft">
                <div class="about-detail">
                  <p>Des millions de voitures sont exclues par notre processus de vérification, et nous ne vendons jamais de voitures endommagées par les inondations, les châssis endommagés ou les antécédents de récupération.</p>
                </div>
              </div>

              <div class="about-content left animated" data-animate="fadeInLeft">
                <div class="about-detail">
                  <p>Avec un choix de 50 000 voitures certifiées de qualité RentalCar , il y a un match parfait pour votre budget et votre vie.</p>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- /.row table-row -->
      </div> <!-- /.container -->
    </section>
	

@endsection
@section("scripts")
    
@endsection