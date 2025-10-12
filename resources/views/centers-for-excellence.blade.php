@include('includes.header')
<style>.nav-link {
    font-weight: bold;          /* Makes the text bold */
    background-color: #f8f9fa; /* Default background color */
    color: #000;               /* Text color */
    border: none;              /* Removes any border if applied */
    padding: 10px 15px;        /* Adjust padding as needed */
    transition: background-color 0.3s ease; /* Smooth background color transition */
}

.nav-link:hover {
    background-color: #e9ecef; /* Background color on hover */
}

.nav-link.active {
    background-color: #343a40; /* Background color for the active link */
    color: #fff;               /* Text color for the active link */
}

.nav-tabs {
    border-bottom: 2px solid #dee2e6; /* Adds a border below the tabs */
}
</style>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" class="bht">

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
                <h1 class="text-white display-4">CENTRES OF EXCELLENCE</h1>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
    <div class="container-fluid pt-5">
        <div class="row justify-content-center"> <!-- Centers the column within the row -->
            <div class="col-lg-8 text-center"> <!-- Centers the text within the column -->
                <p style="text-align: justify;" class="lead">The Malawi Defence Force centres of excellence ensure military professionalism for both soldiers and officers by providing necessary and relevant training. These centres are the National Defence College, Malawi Defence Force Command and Staff College (MDFCSC), and Malawi Armed Forces College (MAFCO).</p>
            </div>
            <div class="col-lg-8 pt-5">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                            <span>MALAWI ARMED FORCES COLLEGE</span>
                        </button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                            <span>MALAWI DEFENCE FORCE COMMAND AND STAFF COLLEGE</span>
                        </button>
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                            <span>NATIONAL DEFENCE COLLEGE</span>
                        </button>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                   <div class="tab-pane fade show active py-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                
    <div class="container">
        <h2 class="display-6 py-4 text-center">MAFCO’S HISTORY</h2>
        <div class="align-items-start">
            <img src="{{ asset('app/img/NTONYA_092832.jpg') }}" alt="MAFCO Image" class="img-fluid float-start me-3 mb-3" style="width: 300px; height: auto;" >
           
                <p class="lead" style="text-align: justify;">
                    Founded on 8th October, 1976, MAFCO is the premier military training institution in Malawi. Before Malawi’s independence and the establishment of the college, almost all military training activities were conducted in the Northern and Southern Rhodesia, Kenya, and the United Kingdom.
                </p>
                <p class="lead" style="text-align: justify;">
                    In 1964, following Malawi’s attainment of independence, a small training cell was established at Cobbe Barracks in Zomba for Basic Recruits Training and Upgrading courses for servicemen and Non-Commissioned Officers only. This training cell moved to MOYALE BARRACKS in 1974 and was known as the Malawi Army Training School (MATS).
                </p>
                <p class="lead" style="text-align: justify;">
                    However, due to problems faced in Mzuzu and the anxiety of the Malawi Army to expand its forces, the school was moved to SALIMA in 1978 and was renamed Kamuzu Military College (KMC). On 9th September, 1978, KMC was officially opened by the then President DR HASTINGS KAMUZU BANDA. The college was later renamed Malawi Armed Forces College (MAFCO) in 1994.
                </p>
                <p class="lead" style="text-align: justify;">
                    Since its inception in 1978, the college has trained Men and Women of Honour who are serving and defending their country and its people with honour, dignity, courage, and integrity.
                </p>
                <p class="lead" style="text-align: justify;">
                    The Malawi Armed Forces College lives to its motto “CHAPHUNZIRIDWA SICHINATAYIKE” which simply means “Acquired knowledge is never in vain”.
                </p>
          
        </div>
        
        <div class="pt-4">
            <h3 class="display-6">COURSES OFFERED</h3>
            <p class="lead" style="text-align: justify;">
                The college offers both basic and progressive courses to both officers and soldiers. The basic courses are Regular Soldiers and Cadets Training, while the progressive courses include Platoon Commanders, Company Commanders, and Officer’s Admin Course for the officers and Junior Potential, Section Commanders, Platoon Sergeants, Drill and Duties, and the Sergeant Majors Course (SMC) for the Non-Commissioned Officers.
            </p>
        </div>
    </div>
</div>

                    <div class="tab-pane fade py-3" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                          <div class="row pt-4">
                            <div class="col-lg-5 col-sm-12">
                                <img src="{{ asset('app/img/CHAWANDA.jpg') }}" alt=""  />
                            </div>
                            <div class="col-lg-7 col-sm-12">
                                 <p class="lead" style="text-align: justify;">
                           This was established to improve selected officers’ ability to apply accepted procedures and functions of various services, Leadership Command and Management understanding amongst officers and their levels of Military and Academic standards. The primary objective is to prepare officers for senior military leadership and equip them with a greater understanding of Political, Social-Economic and Security problems in the contemporary world.
                            </p>
                            </div>
                        </div>
                     
                    </div>
                    <div class="tab-pane fade py-3 " id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                              <div class="row pt-4">
                            <div class="col-lg-5 col-sm-12">
                                <img src="{{ asset('app/img/ndc.jpg') }}" alt=""  />
                            </div>
                            <div class="col-lg-7 col-sm-12">
                              <p class="lead" style="text-align: justify;">The National Defence College was established by the Malawi Defence Force in August 2023 to produce strategic leaders with a deep understanding of national security matters to enhance strategy development and policy implementation. It aims at developing analytical skills and vision among its students to prepare them for higher responsibilities in strategic leadership roles. Students are trained to build lasting relationships and promote cooperation across different domains, organizations, and countries. </p>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>



    @include('includes.footer')
