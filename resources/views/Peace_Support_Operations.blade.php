@include('includes.header')

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" class="bg-light">


    <!-- Jumbotron -->
    <!--

    <div
  class="jumbotron bg-image p-5 d-flex align-items-end shadow-1-strong rounded mb-5 text-white fw-bold"
  style="background-image: url('img/project21.jpg');"
><p>
  <h1 class="mb-3 h2" >Armed Forces College</h1>

 </p>
</div> -->

    <div class="py-5" style="
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.7),
            rgba(0, 0, 0, 0.1)
            ),
            url(app/img/PeaceSupportOperationsTrainingCentre.jpg);
            background-size: cover;
        height: 260px;
        ">
        <div class="container">
            <div class="row">
                <h1 class="text-white py-5 display-4">Peace Support Operations Training Centre</h1>
            </div>
        </div>
    </div>
    <!--BODY-->
    <div class="container py-4">

        <div class="text-center lead service">
            <p class="text-align-left lead">Located within Malawi Armed Forces College (MAFCO) in Salima, this is the only centre conducting Peace Keeping Operations (PKOs) related courses for MDF personnel. Malawi first participated in PKO in 1994 when a Company strong Contingent
                 and a team of Military Observers was deployed to Rwanda under the United Nations Assistance Mission for Rwanda (UNAMIR). From 1994 to date, Malawi has
                 been actively involved in PSO, in DRC, Siera Leone, Liberia, Lebanon, Kosovo, Darfur, Chad, Israel, Burundi and Southern Sudan. Currently, the country has a battalion operating under the United Nations Organisation Stabilisation Mission in the Democratic Republic
                  of the Congo (MONUSCO) and Staff Officers in Southern Sudan, Sudan, Western Sahara and DRC.
            </p>
        </div>
        <div class="row">
            <div class="col-lg-6 pt-5">
                <div class="">
                    <h4 class="display-4">Courses Offered</h4>
                    <p class=" text-align-left lead">The college offers both basic and progressive courses. The basic
                        courses are
                        Recruits and
                        Cadets
                        Training while the progressive courses include Platoon Commanders, Company Commanders,
                        Officer’s Admin Course for the officers and Junior Potential, Section Commanders, Platoon
                        Sergeants,
                        Drill and Duties and
                        the Sergeant Majors Course (SMC) for the Non-Commissioned Officers.</p>
                </div>
            </div>
            <div class="col-lg-5 mx-auto d-none d-sm-block pt-5">
                <img src="{{ asset('app/img/mafco-1.jpg') }}" class="rounded-circle mx-auto d-none d-md-block"
                    style="width: 300px; height: 300px" alt="" />
            </div>
            <div class="col-lg-4"></div>
        </div>

        <div class="row">

            <div class="col-lg-5  pt-5">
                <img src="{{ asset('app/img/project3.jpg') }}" class="rounded-circle mx-auto d-block d-md-block"
                    style="width: 300px; height: 300px;  background-size: cover; " alt="" />
            </div>
            <div class="col-lg-7 py-5">
                <div class="">
                    <h6 class="display-4 text-right">Sergeant Major Course</h6>
                    <p class="text-align-left lead">This is a new dimension which MDF added to the education and
                        training of
                        Non-Commissioned
                        Officers. It
                        followed the
                        identification of a gap in leadership development and professional military education between
                        Senior
                        Non-Commissioned
                        Officers and Commissioned Officers. The course prepares and improves the NCO Leadership roles in
                        Joint
                        Operations,
                        Multinational Operations and prepares NCOs to think beyond the tactical level.</p>
                </div>
            </div>

        </div>
    </div>




    @include('includes.footer')
