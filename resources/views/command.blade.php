@include('includes.header')

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" class="bg-light">

  <!-- Jumbotron -->
<div class="py-5 jumbotron" style="
    width: 100%; /* Ensures full width */
    max-width: 100vw; /* Prevents overflow beyond the viewport width */
    background-image: linear-gradient(
        rgba(0, 0, 0, 0.7),
        rgba(0, 0, 0, 0.1)
      ),
      url(app/img/joint.jpg);
    background-size: contain;
    background-repeat: repeat;
    background-position: center;
    height: 260px; /* Adjust height for better image fit */
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px; /* Adds padding for spacing */
    overflow: hidden; /* Prevents any content overflow */
    box-sizing: border-box; /* Includes padding and border in the element's total width and height */
">
    <div class="container text-start">
        <div class="row">
            <h1 class="text-white py-5 display-4">JOINT HEADQUARTERS</h1>
        </div>
    </div>
</div>
<!-- Jumbotron -->


    <!-- Start of Command -->
    <div class="container mt-5 mb-5">

        <div class="row">

            <div class="col-lg-12">
                <div id="accordion">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header text-end">
                                    <a class="accordion-button" style="text-decoration: none;" data-bs-toggle="collapse" href="#collapseOne">
                                        <h4 class="text-start mx-2 p-2 pb-0">Commander</h4>
                                    </a>
                                </div>
                                @if ($commander)
                                    <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <section id="who" class="pb-0 pt-0">
                                                <div class="container bg-light">
                                                    <div class="row mb-0">
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <img src="{{ asset($commander->picture) }}" class="img-responsive" alt="" />
                                                            <h5 class="pt-4">{{ $commander->name }}</h5>
                                                            <p class="lead">
                                                                {!! nl2br(e($commander->description)) !!}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                @endif

                            </div>

                            <div class="card">
                                <div class="card-header text-end">
                                    <a class="accordion-button" style="text-decoration: none;" data-bs-toggle="collapse" href="#collapsetwo">
                                        <h4 class="text-start mx-2 p-2 pb-0">Deputy Commander</h4>
                                    </a>
                                </div>
                                @if ($deputy)

                                <div id="collapsetwo" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        <section id="who" class="pb-0 pt-0">
                                            <div class="container bg-light">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <img src="{{ asset($deputy->picture) }}" class="img-thumbnail" alt="" />
                                                        <h5 class="pt-4">{{ $deputy->name }}</h5>
                                                        <p class="lead text-align-left">
                                                            {!! nl2br(e($deputy->description)) !!}

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header text-end">
                                    <a class="accordion-button" style="text-decoration: none;" data-bs-toggle="collapse" href="#collapsethree">
                                        <h4 class="text-start mx-2 p-2 pb-0">Chief of Staff</h4>
                                    </a>
                                </div>
                                @if ($chief_of_staff)

                                <div id="collapsethree" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        <section id="who" class="pb-0 pt-0">
                                            <div class="container bg-light">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <img src="{{ asset($chief_of_staff->picture) }}" class="img-thumbnail" alt="" />
                                                        <h5 class="pt-4">{{ $chief_of_staff->name }}</h5>
                                                        <p class="lead text-align-left">
                                                            {!! nl2br(e($chief_of_staff->description)) !!}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class="card">
                                <div class="card-header text-end">
                                    <a class="accordion-button" style="text-decoration: none;" data-bs-toggle="collapse" href="#collapsefive">
                                        <h4 class="text-start mx-2 p-2 pb-0">Deputy Chief of Staff</h4>
                                    </a>
                                </div>
                                @if ($deputy_chief_of_staff)

                                <div id="collapsefive" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        <section id="who" class="pb-0 pt-0">
                                            <div class="container bg-light">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <img src="{{ asset($deputy_chief_of_staff->picture) }}" class="img-thumbnail" alt="" />
                                                        <h5 class="pt-4">{{ $deputy_chief_of_staff->name }}</h5>
                                                        <p class="lead text-align-left">
                                                            {!! nl2br(e($deputy_chief_of_staff->description)) !!}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                @endif
                            </div>

                            <div class="card">
                                <div class="card-header text-end">
                                    <a class="accordion-button" style="text-decoration: none;" data-bs-toggle="collapse" href="#collapsefour">
                                        <h4 class="text-start mx-2 p-2 pb-0">Defence Force Sergeant Major</h4>
                                    </a>
                                </div>
                                @if($sergeant_major)
                                    <div id="collapsefour" class="collapse" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <section id="who" class="pb-0 pt-0">
                                                <div class="container bg-light">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 mb-0">
                                                            <img src="{{ asset($sergeant_major->picture) }}" class="img-thumbnail" alt="" />
                                                            <h5 class="pt-4">{{ $sergeant_major->name }}</h5>
                                                            <p class="lead text-align-left">
                                                                {!! nl2br(e($sergeant_major->description)) !!}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('includes.footer')
