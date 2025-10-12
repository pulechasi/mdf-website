@include('includes.header')

<style>
    /* Additional styling for vertical tabs */
    .nav-tabs {
        flex-direction: column; /* Arrange the tabs vertically */
        width: 250px; /* Fixed width for the tab column */
        border-right: 2px solid #dee2e6; /* Right border to separate tabs from content */
    }

    .nav-link {
        font-weight: bold;
        color: #000;
        transition: background-color 0.3s ease;
        text-align: left; /* Align text to the left */
        padding: 10px 15px;
    }

    .nav-link:hover {
        background-color: #e9ecef; /* Background color on hover */
    }

    .nav-link.active {
        background-color: #343a40; /* Background color for the active link */
        color: #fff; /* Text color for the active link */
    }

    .tab-content {
        width: 100%; /* Full width for content area */
        padding-left: 30px; /* Add space between tabs and content */
    }

    /* Responsive adjustments */
    @media (max-width: 767px) {
        .nav-tabs {
            width: 100%;
            border-right: none;
            border-bottom: 2px solid #dee2e6;
        }

        .tab-content {
            padding-left: 0;
        }
    }
</style>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" class="bht">
    <!-- Jumbotron -->
    <div class="py-5"
        style="
            background-image: linear-gradient(
                rgba(0, 0, 0, 0.7),
                rgba(0, 0, 0, 0.1)
            ),
            url(app/img/project31.jpg);
            background-size: cover;
            height: 260px;
        ">
        <div class="container">
            <div class="row">
                <h1 class="text-white py-5 display-4">Directorates</h1>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->

    <div class="container py-5 ">
        <div class="text-center">
            <p style="text-align: justify;" class="lead">Explore the various directorates of the Malawi Defence Force, each dedicated to a specific aspect of operations and management.</p>
        </div>
      <div class="container pt-5">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-3">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-hrm-tab" data-bs-toggle="tab" data-bs-target="#nav-hrm" type="button" role="tab" aria-controls="nav-hrm" aria-selected="true">
                            Directorate of Human Resource Management and Development
                        </button>
                        <button class="nav-link" id="nav-intelligence-tab" data-bs-toggle="tab" data-bs-target="#nav-intelligence" type="button" role="tab" aria-controls="nav-intelligence" aria-selected="false">
                            Directorate of Military Intelligence
                        </button>
                        <button class="nav-link" id="nav-operations-tab" data-bs-toggle="tab" data-bs-target="#nav-operations" type="button" role="tab" aria-controls="nav-operations" aria-selected="false">
                            Directorate of Military Operations
                        </button>
                        <button class="nav-link" id="nav-logistics-tab" data-bs-toggle="tab" data-bs-target="#nav-logistics" type="button" role="tab" aria-controls="nav-logistics" aria-selected="false">
                           Directorate of Logistics
                        </button>
                        <button class="nav-link" id="nav-training-tab" data-bs-toggle="tab" data-bs-target="#nav-training" type="button" role="tab" aria-controls="nav-training" aria-selected="false">
                            Directorate of Training
                        </button>
                        <button class="nav-link" id="nav-finance-tab" data-bs-toggle="tab" data-bs-target="#nav-finance" type="button" role="tab" aria-controls="nav-finance" aria-selected="false">
                            Directorate of Finance
                        </button>
                        <button class="nav-link" id="nav-policy-tab" data-bs-toggle="tab" data-bs-target="#nav-policy" type="button" role="tab" aria-controls="nav-policy" aria-selected="false">
                           Directorate of  Policy & Planning
                        </button>
                        <button class="nav-link" id="nav-research-tab" data-bs-toggle="tab" data-bs-target="#nav-research" type="button" role="tab" aria-controls="nav-research" aria-selected="false">
                           Directorate of Research & Development
                        </button>
                        <button class="nav-link" id="nav-legal-tab" data-bs-toggle="tab" data-bs-target="#nav-legal" type="button" role="tab" aria-controls="nav-legal" aria-selected="false">
                           Directorate of Legal Services
                        </button>
                        <button class="nav-link" id="nav-inspectorate-tab" data-bs-toggle="tab" data-bs-target="#nav-inspectorate" type="button" role="tab" aria-controls="nav-inspectorate" aria-selected="false">
                            Directorate of Inspectorate General
                        </button>
                    </div>
                </nav>
            </div>
            <div class="col-lg-7 col-md-8 ">
                <div class="tab-content" id="nav-tabContent">
                    <!-- Human Resource Management and Development -->
                    <div class="tab-pane fade show active py-3" id="nav-hrm" role="tabpanel" aria-labelledby="nav-hrm-tab">
                        <h1>Human Resource Management and Development</h1>
                        <p class="lead">The Directorate directs, supervises, and provides consultation to the Malawi Defence Force management on strategic staffing plans, compensations, benefits, training and development, personal emolument budget, and labour relations.</p>
                        <p class="lead">It also effectively plans, designs, develops and conducts evaluation of human resource related initiatives that support MDF Strategic Goals.</p>
                    </div>

                    <!-- Military Intelligence Directorate -->
                    <div class="tab-pane fade py-3" id="nav-intelligence" role="tabpanel" aria-labelledby="nav-intelligence-tab">
                        <h1>Military Intelligence</h1>
                        <p class="lead">The Directorate of Defence Intelligence within the Malawi Defence Force (MDF) plays a critical role in supporting military operations, contingency planning, and defense policy. Its responsibilities All- Source Intelligence Analysis through which it gathers information from various overt (publicly available) and covert (classified or sensitive) sources. By synthesizing data from these diverse channels, the Directorate provides the intelligence needed to support Military Operation that includes assessing threats, understanding enemy capabilities, and identifying vulnerabilities.</p>
                    </div>

                    <!-- Directorate of Military Operations -->
                    <div class="tab-pane fade py-3" id="nav-operations" role="tabpanel" aria-labelledby="nav-operations-tab">
                        <h1>Military Operations</h1>
                        <p class="lead">The Directorate assists the Defence Force Commander in planning, coordinating, and integrating operations, serving as the focal point for all operational matters. DMO focuses on supporting the direction, monitoring, assessment, and planning functions of the Defence Force Commander. It is organised to perform and interface with each basic Joint MDF Headquarters functions to support the DFC's decision cycle. This includes Command and Control as a crucial aspect of the Directorate's role.</p>
                      
                    </div>

                    <!-- Logistics Directorate -->
                    <div class="tab-pane fade py-3" id="nav-logistics" role="tabpanel" aria-labelledby="nav-logistics-tab">
                        <h1>Logistics</h1>
                        <p class="lead">The Directorate provides logistical support to the Malawi Defence Force Joint Headquarters and its services and performs duties related to procurement, storage and distribution of stores and equipment, handling accommodation issues, and facilitating and handling projects. It is through this directorate that ongoing military operations and deployments are supported.</p>
                    </div>

                    <!-- Directorate of Training -->
                    <div class="tab-pane fade py-3" id="nav-training" role="tabpanel" aria-labelledby="nav-training-tab">
                        <h1>Training</h1>
                        <p class="lead">The directorate coordinates duties for the Commander in matters concerning training, and translates and implements Commander’s Training Policy. It identifies and manages training requirements besides playing the advisory role to the commander on all matters relating to training.</p>
                    </div>

                    <!-- Directorate of Finance -->
                    <div class="tab-pane fade py-3" id="nav-finance" role="tabpanel" aria-labelledby="nav-finance-tab">
                        <h1>Finance</h1>
                        <p class="lead">The Directorate is responsible for coordinating and controlling the financial and accounting function in the MDF. It also provides advice to the Defence Force on financial matters, which includes the preparation of financial briefings for the Defence Force Commander’s management meetings, provision of information required in accordance with Generally Accepted Accounting Principles (GAAP), and any other duties relating to policies, practices, and procedures for financial Management as may be directed in accordance with the Financial Management Act (FMA) and International Public Sector Accounting and Systems (IPSAS).</p>
                    </div>

                    <!-- Policy & Planning Directorate -->
                    <div class="tab-pane fade py-3" id="nav-policy" role="tabpanel" aria-labelledby="nav-policy-tab">
                        <h1>Policy & Planning</h1>
                        <p class="lead">The Directorate plays a vital role in carrying out operational, strategic, and constitutional responsibilities. It focuses on professionalism by blending scientific and traditional approaches to provide well-founded Plan and Policy guidance in line with MDF goals. It is responsible for managing administrative, operational, and strategic duties within the MDF, as well as formulating and enforcing strategies, planning guidance, and policies for present and future efforts. It supports the MDF by developing transformational plans, strategic initiatives, and coordinating with other government bodies. Collaboration with other Directorates and stakeholders is extensive to provide insightful policy advice to the Defence Force Commander and the MDF as a whole. The Directorate also plays a crucial role in generating and maintaining strategic plans, documents, and studies for the MDF, acting as a conduit for new concepts and transformational policies, while offering administrative and operational support for staff involved in future plans.
</p>
                    </div>
                        

                    <!-- Research & Development Directorate -->
                    <div class="tab-pane fade py-3" id="nav-research" role="tabpanel" aria-labelledby="nav-research-tab">
                        <h1>Research & Development</h1>
                        <p class="lead">This Directorate is the focal point for the management of research and development for the MDF. It supports the Malawi Defence Force in providing scientific and technical solutions, and the solutions it provides are based on sound research and development principles.</p>
                    </div>

                    <!-- Legal Services Directorate -->
                    <div class="tab-pane fade py-3" id="nav-legal" role="tabpanel" aria-labelledby="nav-legal-tab">
                        <h1>Legal Services</h1>
                        <p class="lead">The Directorate supports commanders in understanding and following the law. They assist in legal matters and can represent the Malawi Defence Force in court. Legal practitioners from the Directorate draft and review commercial contracts for goods and services obtained by the Malawi Defence Force. The Directorate conducts training sessions for troops on various legal subjects like Military Justice, Criminal Law, Constitutional and Administrative Law, the Law of Armed Conflict, and Standard Operating Procedures. Training covers pre-deployment and ongoing mission training. The Directorate oversees Court Martial proceedings and ensures compliance with procedures. They provide guidance, prosecution, and defense for accused individuals during summary proceedings.</p>
                    </div>

                    <!-- Inspectorate General -->
                    <div class="tab-pane fade py-3" id="nav-inspectorate" role="tabpanel" aria-labelledby="nav-inspectorate-tab">
                        <h1>Inspectorate General</h1>
                        <p class="lead">The overall responsibility of the Inspector General is checking combat general readiness, receiving general complaints, and general asset management of the Malawi Defence Force. It also conducts independent internal audit and monitoring.
</p>
                       
                    </div>
                </div>
            </div>


    </div>
      </div>
    </div>

    @include('includes.footer')
</body>
