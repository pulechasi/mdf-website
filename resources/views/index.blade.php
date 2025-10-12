@include('includes.header')




<style>
    .service.card {
        transition: transform 0.6s ease-in-out;
    }

    .service.card:hover {
        transform: scale(1.05);
    }

    .hidden-section {
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .visible-section {
        opacity: 1;
        transition: opacity 0.5s ease;
        animation: fadeIn 0.6s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
</style>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" class="bg-light">

    <div class="owl-carousel owl-theme hero-slider">
        @foreach ($slides as $slide)
            <div class="slide">
                <img class="slider-image" src="{{ asset('storage/slider_image/' . $slide->image) }}"
                    alt="{{ $slide->title }}">
                <div class="container text-container">
                    <div class="row">
                        <div class="col-12 text-center text-white">
                            <h6 class="text-white text-uppercase">

                            </h6>
                            <h1 class="display-3 my-4">{{ $slide->description }}</h1>
                            {{-- <a href="#" class="btn btn-brand" disabled>{{ $slide->button_text }}</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="container ">
        <div class="row justify-content-evenly g-4">
            <div class="col-lg-5">
                <div class="service card h-100 d-flex flex-column" id="missionSect">
                    <h4 class="text-center">Mission Statement</h4>
                    <div class="h-line bg-success"></div>
                    <p class=" lead text-center mx-auto">
                        To conduct military operations in defence of the constitution,
                        territorial integrity and sovereignty of Malawi and its national
                        interests.
                    </p>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="service card h-100 d-flex flex-column" id="visionSect">
                    <h4 class="text-center">Vision</h4>
                    <div class="h-line bg-success"></div>
                    <p class="lead text-center mx-auto">
                        To be an appropriately sized, highly trained and suitably equipped Defence Force which will
                        perform its tasks of upholding the constitution in a unique, resourceful and conventional
                        manner.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-gray " data-jarallax data-speed="0.2">
        <div class="container">
            <div class="row">
                <p class="pb-5"> <span class="display-1">“ 25 years of Service, Embracing the Philosophy of Soldiers
                        First,”</span><span class="h4"> General Paul Velentino Phiri, MSM, psc, ndc, PhD.</span></p>
                <div class="col-lg-5 pt-5">
                    <img src="{{ asset('app/img/Who we are.jpg') }}" alt="" />
                </div>
                <div class="col-lg-7 pt-0">

                    <h5 class="py-4 text-center">MANDATE OF THE DEFENCE FORCES OF MALAWI</h5>
                    <p class="lead" style="text-align: justify;">
                        The Malawi Defence Force (MDF) is the only military force provided for and regulated by the
                        Republican Constitution (Section 159). Its mandate is derived from Section 160 (1) and is
                        responsible for defending Malawi. The Defence Force operates under the direction of
                        democratically elected civil authorities. It adheres to democratic principles, respects human
                        rights, and upholds the rule of law in its operations and interactions with civilian authorities
                        and the population.
                    </p>

                </div>

            </div>
        </div>
    </section>



    <div class="container pb-5">

        <div class="row pt-3">
            <div class="col-lg-7 col-sm-12">
                <h5 class="text-center">WHAT WE ARE</h5>
                <!-- Image for large screens -->
                <div class="d-lg-none d-lg-block pt-5">
                    <img src="{{ asset('app/img/static_pages_images/mandate.jpg') }}" alt=""
                        class="img-fluid" />
                </div>
                <!-- Paragraph text -->
                <p class="lead " style="text-align: justify;">
                    The Malawi Defence Force (MDF) is the only military force constituted in Malawi. It comprises Malawi
                    Army (Land Forces), Malawi Air Force (MAF), Malawi Maritime Force (MMF) and Malawi National Service
                    (MNS). Section 159 of the Republican Constitution mandates the formation of MDF and the Defence
                    Force Act of 2024 stipulates its composition. The President of the Republic of Malawi is the
                    Commander-in-Chief and has the ultimate responsibility of the Defence Force. However, any
                    power conferred on the President shall only be exercised on the recommendation of the Defence
                    Council which is constituted under an Act of Parliament and includes the Minister responsible for
                    Defence and the High Command of the Defence Forces of Malawi. The Defence Force Commander is the
                    highest-ranking military officer based at the Joint Headquarters. He is the Principal Military
                    Advisor to the Commander-in-Chief.
                </p>
            </div>

            <!-- Image for medium and larger screens -->
            <div class="col-lg-5 d-none d-md-block">
                <img src="{{ asset('app/img/static_pages_images/mandate.jpg') }}" alt="" class="img-fluid" />
            </div>

        </div>

    </div>

    <div class="row pt-5">
        <div class="col-12">
            <div class="intro">
                <!-- <h6>MDF Component</h6> -->
                <h5>MDF SERVICES</h5>
            </div>
        </div>
    </div>
    <section id="services" class="text-center container-fluid" data-jarallax data-speed="0.2"
        style="background-image: url('{{ asset('') }}'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="service card h-100 d-flex flex-column">
                        <a href="{{ route('land.forces') }}" style="text-decoration: none;">
                            <img src="{{ asset('app/img/armyforces.jpg') }}" alt="" class="rounded-circle" />
                            <h5 class="mt-3">Malawi Army</h5>
                        </a>
                        <p class="flex-grow-1" style="text-align: justify;">
                            A well-trained land force with modern combat capabilities, ready to respond to security
                            threats and protect the sovereignty of Malawi.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service card h-100 d-flex flex-column">
                        <a href="{{ route('airforce') }}" style="text-decoration: none;">
                            <img src="{{ asset('app/img/AIRFORCE1.jpg') }}" alt="" class="rounded-circle" />
                            <h5 class="mt-3">Air Forces</h5>
                        </a>
                        <p class="flex-grow-1" style="text-align: justify;">
                            A professional Air Force safeguarding Malawi's airspace, with advanced technology and
                            skilled personnel ensuring national security.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service card h-100 d-flex flex-column">
                        <a href="{{ route('maritime.force') }}" style="text-decoration: none;">
                            <img src="{{ asset('app/img/navyforce.jpg') }}" alt=""
                                class="rounded-circle border border-success" />
                            <h5 class="mt-3">Navy Forces</h5>
                        </a>
                        <p class="flex-grow-1" style="text-align: justify;">
                            A capable Navy force ensuring the security of Malawi’s waters and contributing to
                            economic stability and national growth.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service card h-100 d-flex flex-column">
                        <a href="{{ route('national.service') }}" style="text-decoration: none;">
                            <img src="{{ asset('app/img/logomns.jpeg') }}" alt=""
                                class="rounded-circle border border-success" />
                            <h5 class="mt-3">Malawi National Service</h5>
                        </a>
                        <p class="flex-grow-1" style="text-align: justify;">
                            A development-oriented service committed to enhancing internal security and empowering
                            communities across Malawi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container pt-5">
        <div class="row">
            <h5 class="text-center h1">Careers in the Malawi Defence Force</h5>

            <p class="text-center lead">Whether you are joining as a soldier or an officer, joining begins with
                submitting an application following an advertisement which the institution releases in the mainstream
                media.</p>

            <!-- Accordion Section -->
            <div class="row">
                <div class="col-md-6">
                    <div class="accordion mb-5" id="careersAccordionLeft">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    JOINING THE MALAWI DEFENCE FORCE
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#careersAccordionLeft">
                                <div class="accordion-body">
                                    <p class="lead" style="text-align: justify;">
                                        To join the Malawi Defence Force, you need to meet a set of basic requirements
                                        focusing on your age, nationality, academic qualifications, and health and
                                        fitness.
                                    </p>
                                    <p class="lead" style="text-align: justify;">
                                        If you wish to pursue a career as a regular soldier, you need to be a Malawian
                                        without any criminal record, not less than 165 cm tall for men and 158 cm tall
                                        for women, physically, mentally and medically fit, be aged between 18 and 24,
                                        single and without children, possess a minimum qualification of Malawi School
                                        Certificate of Education (MSCE) and be prepared to undergo an intensive basic
                                        military training.
                                    </p>
                                    <p class="lead" style="text-align: justify;">
                                        If you wish to pursue a career as an officer, the requirements are similar to
                                        those of regular soldiers with some differences in age and qualifications. All
                                        applying as Officer Cadets should be aged between 18 and 28 and have a minimum
                                        qualification of a First Degree from a recognised and accredited Institution of
                                        higher learning.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="accordion mb-5" id="careersAccordionRight">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    HOW TO APPLY
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#careersAccordionRight">
                                <div class="accordion-body">
                                    <p class="lead" style="text-align: justify;">
                                        Applications are supposed to be in own handwriting with copies of education
                                        qualification sent by post to:
                                    </p>
                                    <p class="lead" style="text-align: justify;">
                                        The Chief of Human Resource Management and Development<br>
                                        Malawi Defence Force Headquarters<br>
                                        Kamuzu Barracks<br>
                                        Private Bag 43<br>
                                        Lilongwe
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Accordion Section -->

            <div class="mini-jumbotron bg-image pt-5 text-center shadow-1-strong rounded mb-5 text-white fw-bold"
                style="background-image: url('app/img/Project31.jpg'); background-size: cover;">
                <h1 class="mb-3 h2 text-white display-4">Jobs Available</h1>
                <p>The Malawi Defence Force recruits specialists in various fields like engineering, finance, IT and
                    Communication, Medical, Logistics, Artisans, Library Assistants, Bandsmen, teachers and lawyers.
                    Applicants are supposed to have qualifications relevant to the roles.</p>
                <div class="text-center">
                    <p class="lead">For currently available vacancies, <a href="{{ route('adverts.page') }}"
                            class="text-white"><i class="lead">Click Here.</i></a></p>
                </div>
            </div>
        </div>
    </div>





    <!-- homepage blog grids -->
    <div id="services" class="text-center container" data-jarallax data-speed="0.2">
        <div class="row pt-5">
            <div class="col-12">
                <div class="intro">
                    <h5>NEWS AND EVENTS</h5>
                    {{-- <div class="h-line bg-success"></div> --}}
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($posts as $post)
                <div class="card my-3 mx-0 col-lg-4 col-md-4 col-sm-12 border">
                    <br>
                    <a href="#">
                        <figure style="position: relative">
                            <p
                                style="position: absolute; background-color: green; color: white; padding-left: 6px; padding-right: 6px;">
                                {{ strtoupper($post->category) }}
                            </p>


                            <div class="image-container">


                                <img src="{{ $post->image }}" alt="" width="300" height="300"
                                    style=" object-fit: cover;">
                                <div class="caption">
                                    <span class="animated-text">{{ $post->title }}</span>
                                </div>
                            </div>

                        </figure>
                    </a>
                    <div class="card-body">
                        <div>
                            <p class="text-success">
                                Published on:
                                <a href="#" style="text-decoration: darkslategrey">
                                    {{ $post->created_at->toFormattedDateString() }} </a>
                            </p>
                        </div>
                        <h5 class="card-title">
                            <a href="{{ route('single.post', $post->slug) }}" class="text text-success"
                                style="text-decoration: none"> {{ $post->title }} </a>
                        </h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('includes.footer')
