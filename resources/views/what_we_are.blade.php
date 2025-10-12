@include('includes.header')

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" class="bg-light">
    <!-- Jumbotron -->
    <div class="py-5"
        style="
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
                <h1 class="text-white mb-3 display-4">About Us</h1>
                <div class="col-3">
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <a class="text-white" href="#who">> What we are</a>
                        </li>

                        <li class="mb-3">
                            <a class="text-white" href="#vision">> Vision</a>
                        </li>

                        <li class="mb-3">
                            <a class="text-white" href="#values">> Values</a>
                        </li>
                    </ul>
                </div>
                <div class="col-3">
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <a class="text-white" href="#roles">> Roles</a>
                        </li>

                        <li class="mb-3">
                            <a class="text-white" href="#mission">> Mission Statement</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->

    <section id="who" class="py-5 pb-4">
        <div class="container  ">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <h1 class="display-4 text-start ">What We Are</h1>
                    <p class="lead ">
                        The Malawi Defence Force (MDF) is the only military force constituted in Malawi. It comprises Malawi Army (Land Forces), 
						Malawi Air Force (MAF), Malawi Maritime Force (MMF) and Malawi National Service (MNS). Section 159 of the Republican 
                        Constitution mandates the formation of MDF and the Defence Force Act of 2024 stipulates its composition. The President 
                        of the Republic of Malawi is the Commander-in-Chief and has the ultimate responsibility of the Defence Force. However, 
						any power conferred on the President  shall only be exercised on the recommendation of the Defence Council which is 
                        constituted under an Act of Parliament and includes the Minister responsible for Defence and the High Command of the 
                        Defence Forces of Malawi. The Defence Force Commander is the highest-ranking military officer based at the Joint 
                        Headquarters. He is the Principal Military Advisor to the Commander-in-Chief.

                    </p>
                </div>
                <div class="col-lg-4 col-md-4 py-5 pt-5 ">

                    <div class="image-container position-relative">


                            <div class=" img-thumbnail center-block">
                                <img src="{{ asset('app/img/who-we-are.jpg') }}" class="img-responsive" alt="Image description" />
                            </div>

                        
                    </div>

                </div>
            </div>
        </div>
    </section>



    <section id="vision" class="pt-0 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-4 py-2 pt-2 mx-auto ">

                         <div class=" img-thumbnail center-block d-none d-sm-block mx-auto">
                            <img src="{{ asset('app/img/vision.jpg') }}" class="img-responsive " alt="Image description" />
                        </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <h1 class="display-4 text-end">Vision</h1>
                    <p class="lead text-align-left">
                        To be an appropriately sized, highly trained and suitably equipped
                        Defence Force which will perform its tasks of upholding the
                        constitution in a unique, resourceful & conventional manner.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="mission" class="pt-0 pb-4">
        <div class="container ">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <h1 class="display-4 text-start ">Mission Statement</h1>
                    <p class="lead text-align-left ">
                        To conduct military operations in defence of the constitution,
                        territorial integrity and sovereignty of Malawi and its national
                        interests.
                    </p>
                </div>
                <div class="col-4 py-5 pt-5 mx-auto ">

                         <div class=" img-thumbnail center-block d-none d-sm-block mx-auto">
                            <img src="{{ asset('app/img/mission.jpg') }}"  class="img-responsive " alt="Image description" />
                        </div>
                </div>
            </div>
        </div>
    </section>

    <section id="values" class="pt-0 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 py-5 pt-2 mx-auto">
                    <div class=" img-thumbnail center-block d-none d-sm-block mx-auto">
                        <img src="{{ asset('app/img/uploads.jpg') }}" class="img-responsive " alt="Image description" />
                    </div>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-12">
                    <h1 class="display-4 text-end">Values</h1>
                    <h2 class="">
                        MDF upholds & is established on a foundation of:
                    </h2>
                    <div class="text-align-right mx-5">
                        <ul>
                            <div class="row">
                                <div class="col-md-6 lead">
                                    <li>High standard of discipline</li>
                                    <li>Military professionalism</li>
									<li>Apolitical</li>
                                    <li>Mission oriented command</li>
                                    <li>Patriotism</li>
                                 

                                </div>
                                <div class="col-md-6 lead">

                                    <li>Good leadership</li>
                                    <li>Accountability</li>
                                    <li>Religious ethics</li>
                                    <li>Initiative</li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="roles" class="pt-0 pb-4">
        <div class="container ">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <h2 class="display-4 text-start ">Roles</h2>
                    <ul class=" lead">
                        <li>Uphold the sovereignty and territorial integrity of the Republic and guard against threats
                            to the safety of its citizens by force of arms.</li>
                        <li>Uphold and protect the constitutional order in the Republic and assist the civil authorities
                            in the proper exercise of their functions under this constitution.</li>
                        <li>Provide technical expertise and resources to assist the civilian authorities in the
                            maintenance of essential services, in times of emergency; and </li>
                        <li>Perform such other duties outside the territory of Malawi as may be required of them by any
                            treaty entered into by Malawi in accordance with the prescriptions of international law.</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 py-5 pt-5">
                    <div class="image-container position-relative">
                        {{-- <img src="{{ asset('app/img/who-we-are.jpg') }}"
                            class=" rounded-circle mx-auto d-none d-sm-block"
                            alt="" /> --}}
                            <div class=" img-thumbnail center-block d-none d-sm-block mx-auto">
                                <img src="{{ asset('app/img/roles.jpeg') }}" class="img-responsive" alt="Image description" />
                            </div>
                        <form method="POST" action="" enctype="multipart/form-data" class="image-overlay">
                            @csrf
                            <input type="file" name="image" accept="image/*">
                            <button type="submit">Upload Image</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>




    @include('includes.footer')
