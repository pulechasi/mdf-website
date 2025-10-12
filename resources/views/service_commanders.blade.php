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
                <h1 class="text-white display-4">Service Commanders</h1>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->

    <div class="container py-4">
        <p class="py-3 lead">
            Service Commanders are appointed in accordance with the Republican Constitution and Defence Force Act. They command, control and administer the service for which they are responsible.
        </p>
        <div class="row">
            @foreach ($service_commander as $index => $commander)
                <div class="col-lg-4 col-md-12">
                    <div class="card h-100">
                        <div class="card-header text-center">
                            <h3>{{ $commander->commander->commander_type }}</h3>
                        </div>

                        <img src="{{ asset($commander->commander->picture) }}" class="img-fluid rounded-start" alt="..." />

                        <div class="card-body text-center">
                            <h6 class="card-title">{{ $commander->commander->title }} {{ $commander->commander->name }}</h6>

                            <!-- Button to trigger modal -->
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#commanderRolesModal{{ $index }}">
                                View Description
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal for each commander -->
                <div class="modal fade" id="commanderRolesModal{{ $index }}" tabindex="-1" aria-labelledby="rolesModalLabel{{ $index }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="rolesModalLabel{{ $index }}">
                                   {{ $commander->commander->title }} {{ $commander->commander->name }}
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                {{ str_replace(' ', '', strip_tags($commander->commander->commander_roles)) }}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('includes.footer')
