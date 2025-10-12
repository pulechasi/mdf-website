@include('includes.header')

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" class="bg-light">


    <!-- Jumbotron -->
    <div class="py-5" style="
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.7),
            rgba(0, 0, 0, 0.1)
          ),
          url(app/img/match.jpg);
          background-size: cover;
        height: 260px;
      ">
        <div class="container">
            <div class="row">
                <h1 class="text-white py-5 display-4">OUR LEADERS</h1>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->



    <div class="row mb-5 mt-5">

        <div class="col-lg-2"></div>
        <div class="col-lg-8">

    <div class="row py-5">
        <div class="col-lg-10">
			<h4 class="text-start mx-2 p-1 pb-0">ESTABLISHMENT AND ORGANISATION</h4>
            <p class="lead" style="text-align:justify">				
                The Malawi Defence Force falls within the hierarchy of Ministry of Defence (MoD) with the Commander-In-Chief, who is the President, 
				at the top, followed by the Minister of Defence. Next in line is the Ministry of Defence Headquarters led by the Secretary for Defence (PS) 
                who oversees policy, finance, and administration. Additionally, there is the Defence Force Headquarters headed by the Defence Force Commander, 
				who manages operational and daily military activities. Below the Commander is his Deputy. In the Office of the Commander, there is the Chief of 
                Staff in whose office is the Military Advisor, Provost Marshal, Public Information Officer, Aide-de-camp, and the Defence Force Sergeant Major. 
                Below the Deputy Defence Force Commander are Service Commanders, Chiefs of Directorates and the Inspector General (IG).

            </p>
            <img src="{{ asset('app/img/structure.jpg') }}" alt="" class="img-fluid" />
        </div>

    </div>
            <div id="accordion">
                <div class="card">

                    <div class="card-header text-end">
                        <a class="accordion-button" style="text-decoration: none;" data-bs-toggle="collapse"
                            href="#collapseOne">
                            <h4 class="text-start mx-2 p-2 pb-0">Commander in chief</h4>
                        </a>
                    </div>
                    @if ($commanderInChief)

                        <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                            <div class="card-body">
                               <section id="who" class="pb-0 pt-0">
    <div class="container bg-light">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                <img src="{{ asset($commanderInChief->commander->picture) }}" alt="" class="img-fluid" />
                <p class="h6 pt-2">
                    {{ $commanderInChief->commander->name }} <br/>
                	President of the Republic of Malawi and commander-in-Chief of Malawi Defence Force

                </p>
                <p class="pt-4 text-left" style="text-align: justify;">
                    {{ str_replace(' ', '', strip_tags($commanderInChief->commander->commander_roles)) }}
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
                        <a class="accordion-button" style="text-decoration: none;" data-bs-toggle="collapse"
                            href="#collapsetwo">
                            <h4 class="text-start mx-2 p-2 pb-0">Commander</h4>
                        </a>
                    </div>
                    <div id="collapsetwo" class="collapse " data-bs-parent="#accordion">
                        <div class="card-body">
                            <section id="who" class="pb-0 pt-0">
                                <div class="container bg-light">
                                    <div class="row">

                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            {{-- <img src="#" class="img-thumbnail" alt="" /> --}}
                                            <p class=" ">
                                                The Defence Force Commander is responsible for all operational matters as well as the day to day
                                                running of the military.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="card">

                    <div class="card-header text-end">
                        <a class="accordion-button" style="text-decoration: none;" data-bs-toggle="collapse"
                            href="#collapsethree">
                            <h4 class="text-start mx-2 p-2 pb-0">Deputy commander </h4>
                        </a>
                    </div>
                    <div id="collapsethree" class="collapse " data-bs-parent="#accordion">
                        <div class="card-body">
                            <section id="who" class="pb-0 pt-0">
                                <div class="container bg-light">
                                    <div class="row">

                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            {{-- <img src="#" class="img-thumbnail" alt="" /> --}}
                                            <p class=" text-align-left">
                                                The deputy commander comes below the Commander, according to the constitution
                                                of the republic this is a deligated appointment as such it has no defined duties.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="card">

                    <div class="card-header text-end">
                        <a class="accordion-button" style="text-decoration: none;" data-bs-toggle="collapse"
                            href="#collapsefour">
                            <h4 class="text-start mx-2 p-2 pb-0">Service Commanders </h4>
                        </a>
                    </div>
                    <div id="collapsefour" class="collapse " data-bs-parent="#accordion">
                        <div class="card-body">
                            <section id="who" class="pb-0 pt-0">
                                <div class="container bg-light">
                                    <div class="row">

                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            {{-- <img src="#" class="img-thumbnail" alt="" /> --}}
                                            <p class=" text-align-left">
                                                Malawi Defence Force has four services which include land forces, Navy Forces, air force and Malawi National Service.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>


    @include('includes.footer')
