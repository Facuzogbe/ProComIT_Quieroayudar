@extends("layouts.app")
@section("content")

    <section class="jumbotron mb-0" >
      <div class="col mb-2">

        <div class="container text-center">
          <h1>Unite a nuestra ONG , Quiero ayudar</h1>
        </div>
      </div>
    </section>
    
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://www.gaceta.unam.mx/wp-content/uploads/2020/08/200831-aca3-des-f1-solidaridad.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://scontent.feze9-1.fna.fbcdn.net/v/t1.0-9/41991798_347684099106944_3895994941922344960_n.jpg?_nc_cat=100&ccb=2&_nc_sid=09cbfe&_nc_ohc=nlDZL1r011sAX-gEa9b&_nc_ht=scontent.feze9-1.fna&oh=edb0f168e82a032fadd0cc54f61f1f13&oe=5FEFF805" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://lamenteesmaravillosa.com/wp-content/uploads/2016/06/hombre-ayudando-a-companero-420x266.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </body>
    </html>
    <div class="row row-cols-1 row-cols-md-3">
      <div class="col mb-4">
        <div class="card h-80">
          <img src="https://scontent.feze9-1.fna.fbcdn.net/v/t1.0-9/41991798_347684099106944_3895994941922344960_n.jpg?_nc_cat=100&ccb=2&_nc_sid=09cbfe&_nc_ohc=nlDZL1r011sAX-gEa9b&_nc_ht=scontent.feze9-1.fna&oh=edb0f168e82a032fadd0cc54f61f1f13&oe=5FEFF805" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">La importancia de ayudar en el mundo.</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card h-80">
          <img src="https://static5.depositphotos.com/1006463/525/i/600/depositphotos_5251650-stock-photo-3d-man-helping-another-3d.jpgg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tu ayuda puede hacer la diferencia.</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card h-80">
          <img src="https://lamenteesmaravillosa.com/wp-content/uploads/2016/06/hombre-ayudando-a-companero-420x266.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">La ayuda a nivel mundial</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
    </div>

     
    @endsection
