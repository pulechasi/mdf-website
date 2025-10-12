@include('includes.header')

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" class="bg-light">

    <!-- Jumbotron -->
    <div class="py-5" style="
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.7),
            rgba(0, 0, 0, 0.1)
          ),
          url(app/img/DISMOUNTEDPATROL.jpg);
          background-size: cover; 
        height: 260px;
      ">
        <div class="container">
            <div class="row">
                <h1 class="text-white mb-3 display-4">External Operations</h1>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->

    <div class="container">
        <div class="row  rounded-circle">
             <p class="lead text-start pt-5 " style="text-align: justify;">
                MDF deploys both within and outside the country from time to time. Currently, Malawi has a contingent operating under the United Nations Organisation Stabilisation Mission in the Democratic Republic of the Congo (MONUSCO) Force Intervention Brigade (FIB). This is mandated to conduct targetted offensive operations against Illegal Armed Groups (IAGs) operating in Eastern Democratic Republic of the Congo (DRC).

            </p>
            <p class="lead text-start" style="text-align: justify;">

                Malawi also has a battalion under the Southern African Community Mission in the Demorcatic Republic of the Congo (SAMIDRC)



            </p>
            <p class="lead text-start" style="text-align: justify;">


                Besides the contingents, Malawi has Military Observers and Staff Officers in various countries.

            </p>
        </div>


        <div class="row">
            @foreach ($operation as $ope)

            <div class="card my-2 py-3 col-lg-4 col-sm-12 ">
                <div>
                    <img src="{{ $ope->image }}" />
                </div>
                <div class="card-img-overlay">
                    <a href="{{ route('single.external.operation', $ope->slug) }}" style="text-decoration: none;">
                        <h4 class="text-white text-center py-5">
                            <i class="text-success"></i> {{ $ope->name }}
                        </h4>

                    </a>
                </div>
            </div>



            @endforeach


        </div>


    </div>



    @include('includes.footer')