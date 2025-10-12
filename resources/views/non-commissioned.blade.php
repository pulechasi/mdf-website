@include('includes.header')

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" class="bht">

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
                <h1 class="text-white display-4">Non-Commissioned Officers</h1>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
    <div class="container pt-5">
        <div class="row ">
            <!-- Recruit -->
            <div class="col-lg-4 col-md-12 ">
                <div class="card mb-3">
                    <div class="card-header text-center">
                        <h3>Recruit</h3>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-4">
                            <!-- Placeholder for Recruit Image -->
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <p class="card-text">
                                Soldiers hold this rank whilst undergoing basic military training at MAFCO and once qualified will hold the rank of Private.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Private Soldier -->
            <div class="col-lg-4 col-md-12 ">
                <div class="card mb-3">
                    <div class="card-header text-center">
                        <h3>Private Soldier</h3>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-4">
                            <!-- Placeholder for Private Soldier Image -->
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <p class="card-text">
                                Rank held on completion of Basic Training.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lance Corporal -->
            <div class="col-lg-4 col-md-12">
                <div class="card mb-3">
                    <div class="card-header text-center">
                        <h3>Lance Corporal</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('app/img/lcpl.jpg') }}" class="mx-auto d-block" alt="Lance Corporal" />
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="card-body">
                                <p class="card-text">
                                    Lance Corporals are required to supervise a small team of up to four soldiers. They also have opportunities to specialize and undertake specialist military training.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Corporal -->
            <div class="col-lg-4 col-md-12">
                <div class="card mb-3">
                    <div class="card-header text-center">
                        <h3>Corporal</h3>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('app/img/cpl.jpg') }}" class="mx-auto d-block" alt="Corporal" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">
                                    After serving satisfactorily on the rank of Lance Corporal and depending on ability to lead, promotion to Corporal typically follows. Corporals are given command of a section with about 8 soldiers.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sergeant -->
            <div class="col-lg-4 col-md-12">
                <div class="card mb-3">
                    <div class="card-header text-center">
                        <h3>Sergeant</h3>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('app/img/sgt.jpg') }}" class="mx-auto d-block" alt="Sergeant" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">
                                    Sergeant is a senior role of responsibility, promotion to which typically takes place after three years as a Corporal depending on ability. Sergeants typically are second in command of a troop or platoon of up to 35 soldiers, with the important responsibility for advising and assisting junior officers.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Staff Sergeant -->
            <div class="col-lg-4 col-md-12">
                <div class="card mb-3">
                    <div class="card-header text-center">
                        <h3>Staff Sergeant</h3>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('app/img/ssgt.jpg') }}" class="mx-auto d-block" alt="Staff Sergeant" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">
                                    This is a senior role combining man and resource management of around 120 soldiers, or even command of a platoon.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Warrant Officer Class II -->
            <div class="col-lg-4 col-md-12">
                <div class="card mb-3">
                    <div class="card-header text-center">
                        <h3>Warrant Officer Class II</h3>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('app/img/wo2.jpg') }}" class="mx-auto d-block" alt="Warrant Officer Class II" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">
                                    This is a senior management role focusing on the training, welfare, and discipline of a company, squadron, or battery of up to 120 soldiers. WOII acts as the senior advisor to the Major in command of the sub-unit. Usually appointed Company Sergeant Majors (CSMs) where he or she is fitted in every respect.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Warrant Officer Class I -->
            <div class="col-lg-4 col-md-12">
                <div class="card mb-3">
                    <div class="card-header text-center">
                        <h3>Warrant Officer Class I</h3>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('app/img/wo1.jpg') }}" class="mx-auto d-block" alt="Warrant Officer Class I" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">
                                    The most senior soldier rank in the Malawi Defence Force, typically reached after years of outstanding service. WOI are the senior advisors of their unit's Commanding Officer, with leadership, discipline, and welfare responsibilities of all officers, soldiers, and equipment in the Unit. Usually appointed Defence Force Sergeant Major, Service Sergeant Major, Brigade Sergeant Major, and Regimental Sergeant Major. Also appointed Chief Clerks of various directorates and departments as well as In-Charge of departments.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')

</body>
