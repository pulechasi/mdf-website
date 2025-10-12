@include('includes.header')

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" class="bg-light">

    <div class="py-5"
        style="
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.7),
            rgba(0, 0, 0, 0.1)
            ),
            url(app/img/mafco3.jpg);
            background-size: cover;
        height: 260px;
        ">
        <div class="container">
            <div class="row">
                <h1 class="text-white py-5 display-4">Malawi Armed Forces College</h1>
            </div>
        </div>
    </div>
    <!--BODY-->
    <div class="container py-4">

        <div class=" lead service">


            <p>MAFCO’S HISTORY</p>
<p>Founded on 8th October, 1976, MAFCO is the premier military training institution in Malawi.</p>
<p>Before Malawi’s independence and the establishment of the college, almost all military training activities were conducted in the Northern and Southern Rhodesia, Kenya and the United Kingdom.</p>
<p>In 1964, following Malawi’s attainment of independence, a small training cell was established at Cobbe Barracks in Zomba for Basic Recruits Training and Upgrading courses for servicemen and Non-Commissioned Officers only. This training cell moved to MOYALE BARRACKS in 1974 and was known as the Malawi Army Training School (MATS).</p>
<p>However, due to problems faced in Mzuzu and the anxiety of the Malawi Army to expand its forces, the school was moved to SALIMA in 1978 and was renamed Kamuzu Military College (KMC). On 9th September, 1978, KMC was officially opened by the then President DR HASTINGS KAMUZU BANDA. The college was later renamed Malawi Armed Forces College (MAFCO) in 1994.</p>
<p>Since its inception in 1978, the college has trained Men and Women of Honour who are serving and defending their country and its people with honour, dignity, courage and integrity.</p>
<p>The Malawi Armed Forces College lives to its motto “CHAPHUNZIRIDWA SICHINATAYIKE” which simply means “Acquired knowledge is never in vain”.</p>

        </div>
        <div class="row">
            <div class="col-lg-6 pt-5">
                <div class="">
                    <h4 class="display-4">Courses Offered</h4>
                    <p class=" text-align-left lead">The college offers both basic and progressive courses to both officers and soldiers. The basic courses are Regular Soldiers and Cadets Training while the progressive courses include Platoon Commanders, Company Commanders, and Officer’s Admin Course for the officers and Junior Potential, Section Commanders, Platoon Sergeants, Drill and Duties and the Sergeant Majors Course (SMC) for the Non-Commissioned Officers.
                    </p>
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
