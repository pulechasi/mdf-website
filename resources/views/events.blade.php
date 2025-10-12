@include('includes.header')

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" class="bg-light">

    <!-- Jumbotron -->
    <div class="py-5" style="
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.7),
            rgba(0, 0, 0, 0.1)
          ),
          url(app/img/army1.jpg);
          background-size: cover; 
        height: 260px;
      ">
        <div class="container">
            <div class="row">
                <h1 class="text-white py-5 display-4">Events</h1>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <a href="#" class="btn btn-success"> 30 SEPT</a>
                        <h4>Chakwera vists MDF</h4>
                        <p>
                            Contrary to popular belief, Lorem Ipsum is not simply random
                            text. It has roots in a piece of classical Latin literature from
                            45 BC.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <span><a href="#" class="btn btn-success">18 JUNE</a></span>
                        <h5>MDF Festival</h5>
                        <p>
                            Contrary to popular belief, Lorem Ipsum is not simply random
                            text. It has roots in a piece of classical Latin literature from
                            45 BC.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <span><a href="#" class="btn btn-success">6 JULY</a></span>
                        <h5>Indepence Day</h5>
                        <p>
                            Contrary to popular belief, Lorem Ipsum is not simply random
                            text. It has roots in a piece of classical Latin literature from
                            45 BC.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('includes.footer')