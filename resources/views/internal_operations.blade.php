@include('includes.header')
<style>
    ul {
        margin-left: 50px;
        /* Adjust the value as needed */
    }
</style>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" class="bg-light">

    <!-- Jumbotron -->
    <div class="py-5"
        style="
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
                <h1 class="text-white mb-3 display-4">Internal Operations</h1>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->

    <div class="container">
        <div class="row rounded-circle">
            {{-- <p class="lead text-center py-5 ">
                MDF deploys both within and outside the country from time to time.
            </p> --}}
            <h5 class="py-4">LOCAL DEPLOYMENTS</h5>
            <p class="lead">Locally, MDF conducts Border or Malire Operation. Troops are deployed in some of the
                border districts of
                Nsanje, Mulanje, Blantyre, Likoma and Meru in Chitipa to enhance border security.</p>

            <h5>INTERNAL SECURITY OPERATIONS</h5>
            <p class="lead">In line with its constitutional roles, MDF is also tasked with assisting the police when necessary by conducting operations aimed at enhancing internal security to ensure that peace prevails within the country. MDF is from time to time called upon to assist the Civil Police in curbing crime in the cities and towns within the country. MDF also conducts Low Intensity Operations in support of the government to mitigate effects of climate change by flushing out illegal wood cutters and Charcoal burners in some of the forests in Malawi.</p>
           

            <h5>PROVISION OF ASSISTANCE TO CIVIL AUTHORITIES</h5>
            <ul class="lead pb-3">
                <li>This is in line with the roles as enshrined in the Republic Constitution.</li>
                <li>Engineers Battalion involved in the construction of roads, bridges.</li>
                <li>Provision of logistical support and security during National Examinations and Elections.</li>
            </ul>

        </div>

        <h5>LOCAL OPERATIONS</h5>

        <div class="row">
            @foreach ($operation as $ope)
                <div class="card my-2 py-3 col-lg-4 col-sm-12 ">
                    <div>
                        <img src="{{ $ope->image }}" />
                    </div>
                    <div class="card-img-overlay">
                        <a href="{{ route('single.internal.operation', $ope->slug) }}" style="text-decoration: none;">
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
