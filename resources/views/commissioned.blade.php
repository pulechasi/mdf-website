@include('includes.header')

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">

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
                <h1 class="text-white display-4">Commissioned Officers</h1>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->

    <div class="container pt-5">
        <div class="row">
            <!-- Officer Cadet -->
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Officer Cadet</h3>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('app/img/Officer-Cadet.jpg') }}" class="img-fluid mx-auto d-block" alt="Officer Cadet" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">
                                    An officer cadet is someone who aspires to become a Malawi Defence Force officer and is undergoing initial officer training at Malawi Armed Forces College (MAFCO) or any other international institution. He/She undergoes rigorous training, which includes academic study, physical fitness, leadership development, and practical military skills.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Lieutenant -->
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Second Lieutenant</h3>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('app/img/2lieutenant.jpg') }}" class="img-fluid mx-auto d-block" alt="Second Lieutenant" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">
                                    An officer is appointed to the rank of second lieutenant on commissioning from Malawi Armed Forces College (MAFCO) or any other international military institution. Promotion to the rank of lieutenant is made not less than three years after the date of enlistment as a cadet officer.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lieutenant -->
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Lieutenant</h3>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('app/img/lieutenant.jpg') }}" class="img-fluid mx-auto d-block" alt="Lieutenant" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">
                                    Normally commands a platoon or troop of around 30 soldiers. Promotion to the rank of Captain is made after not less than four years satisfactory service in the substantive rank of lieutenant and after the officer has passed the examination provided for promotion from lieutenant to captain and many other factors like successful completion of courses.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Captain -->
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Captain</h3>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('app/img/Captain.jpg') }}" class="img-fluid mx-auto d-block" alt="Captain" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">
                                    Normally made second-in-command of a Company of up to 120 soldiers. Key players in the planning and decision-making process, with tactical responsibility for operations on the ground as well as equipment maintenance, logistic support and manpower.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Major -->
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Major</h3>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('app/img/Major.jpg') }}" class="img-fluid mx-auto d-block" alt="Major" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">
                                    Typically second-in-command of a battalion. Responsible for training, welfare, administration as well as the management of equipment in a battalion. Majors are also Officer Commanding for sub-units specifically a Company within a battalion. Also serve as Staff Officer Grade II in various directorates and departments after successful completion of the Senior Command and Staff Course.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lieutenant Colonel -->
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Lieutenant Colonel</h3>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('app/img/Lieutenant-Colonel.jpg') }}" class="img-fluid mx-auto d-block" alt="Lieutenant Colonel" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">
                                    Typically commands battalion units containing four or five sub-units - known as the Commanding Officer. As Commanding Officers, they are responsible for the overall operational effectiveness of their unit in terms of military capability, welfare, and general discipline. Lieutenant Colonels also serve as Staff Officer Grade 1 in various directorates and departments.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Colonel -->
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Colonel</h3>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('app/img/Colonel-new.jpg') }}" class="img-fluid mx-auto d-block" alt="Colonel" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">
                                    Colonels are usually Deputy Chiefs of Directorates, Deputy Commandants of Centres of Excellence, and sometimes Brigade Commanders. They are Principal advisors to senior officers.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Brigadier General -->
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Brigadier General</h3>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('app/img/Brigadier-General.jpg') }}" class="img-fluid mx-auto d-block" alt="Brigadier General" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">
                                    Brigadier is a General officer in the Malawi Defence Force. Officers of that rank hold appointments like Chief of Directorates, Brigade Commanders, or Commandants of Centres of Excellence.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Major General -->
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Major General</h3>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('app/img/Major-General.jpg') }}" class="img-fluid mx-auto d-block" alt="Major General" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">
                                    Major Generals command services and hold senior staff appointments in the Joint Headquarters such as Inspector General or Chief of Staff.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lieutenant General -->
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Lieutenant General</h3>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('app/img/Lieutenant-General.jpg') }}" class="img-fluid mx-auto d-block" alt="Lieutenant General" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">
                                    Lieutenant Generals hold the Senior Appointment of Deputy Defence Force Commander. Appointed by the President in accordance with Section 161 of the Constitution and Section 14 (1) of the Defence Force Act. Performs such functions and exercises such powers as are assigned to the Deputy commander by the commander.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- General -->
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>General</h3>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('app/img/General-new.jpg') }}" class="img-fluid mx-auto d-block" alt="General" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">
                                    Generals hold the most senior appointment – Defence Force Commander. Serves for a period of four years, but the person holding that office may be appointed for a further period not exceeding two years as the President may consider appropriate.
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
