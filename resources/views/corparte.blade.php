@include('includes.header')

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" class="bg-light">

    <!-- Jumbotron -->
    <div class="py-5 text-center" style="
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.7),
            rgba(0, 0, 0, 0.1)
          ),
          url(app/img/match.jpg);
          background-size: cover;
          background-position: center;
        height: 300px;
      ">
        <div class="container">
            <h1 class="text-white display-4 fw-bold">Defence Industry and Corporate Services</h1>
        </div>
    </div>
    <!-- Jumbotron -->

    <div class="container my-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <!-- Existing Cards -->
          

            <div class="col">
                <div class="card border-light shadow-sm h-100">
                    <img src="{{ asset('app/img/museums.png') }}" class="card-img-top" alt="Malawi Defence Force Museums">
                    <div class="card-body">
                        <h5 class="card-title">Malawi Defence Force Museums</h5>
                        <p class="card-text">
                            This is a brainchild of the Malawi Defence Force Command and is based in Zomba where work is still in progress. The museum intends to preserve Malawi Defence Force history from pre-colonial, colonial and post-colonial to the new dispensation. The museum will display military hardware dating from the colonial era. It will also present an opportunity for civil and local authorities as well as the general public to interact with military personnel.
                        </p>
                    </div>
                </div>
            </div>

            

            <div class="col">
                <div class="card border-light shadow-sm h-100">
                    <img src="{{ asset('app/img/construction.jpg') }}" class="card-img-top" alt="Engineers Construction Company Limited">
                    <div class="card-body">
                        <h5 class="card-title">Engineers Construction Company Limited</h5>
                        <p class="card-text">
                            • Started as the Engineers Battalion to support fighting units<br>
                            • Commercialised and registered as Engineers Construction Company<br>
                            • Has worked on several construction works like the road in Area 43, Lilongwe and Cobbe Barracks Roads in Zomba<br>
                            • Currently working on Mwanza - Tsangano Road in Ntcheu
                        </p>
                    </div>
                </div>
            </div>

            <!-- New Cards -->
            <div class="col">
                <div class="card border-light shadow-sm h-100">
                    <img src="{{ asset('app/img/medical_corps.jpeg') }}" class="card-img-top" alt="Medical Corps">
                    <div class="card-body">
                        <h5 class="card-title">Malawi Defence Force Medical Corps</h5>
                        <p class="card-text">
                            Established to provide professional Health Services to service members and their families as well as the surrounding communities during both peace and war-times with efficiency and effectiveness. The Corp also trains and facilitates training of health personnel in the military, enforces maintenance of health in the MDF, medical fitness during recruitment, service and at retirement.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card border-light shadow-sm h-100">
                    <img src="{{ asset('app/img/musical_corps.jpeg') }}" class="card-img-top" alt="Musical Corps">
                    <div class="card-body">
                        <h5 class="card-title">Malawi Defence Force Musical Corps</h5>
                        <p class="card-text">
                            The roles of the Malawi Defence Force Musical Corps is responsible for the Morale and Esprit de Corps as music contributes significantly to the morale of troops. They are also responsible for Public Relations and Outreach in that musical performances are integral to major military events—ceremonies, parades, concerts, festivals, and dances. It connects the military with the public and showcases its talent.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card border-light shadow-sm h-100">
                    <img src="{{ asset('app/img/education_corps.jpeg') }}" class="card-img-top" alt="Education Corps">
                    <div class="card-body">
                        <h5 class="card-title">Malawi Defence Force Education Corps</h5>
                        <p class="card-text">
                            This specialized branch plays a crucial role in ensuring that military personnel receive continuous education, vocational training, and intellectual development throughout their service.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('includes.footer')

    <style>
        /* Custom Styles */
        .card-img-top {
            object-fit: cover;
            height: 200px;
        }
        .card-body {
            padding: 1.25rem;
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: 500;
        }
        .card-text {
            font-size: 1rem;
        }
        .jumbotron {
            position: relative;
            text-align: center;
            color: white;
            padding: 5rem 1rem;
            background: rgba(0, 0, 0, 0.5);
        }
    </style>
