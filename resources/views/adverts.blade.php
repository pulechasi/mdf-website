@include('includes.header')

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" class="bg-light">

    <!-- Jumbotron -->
    <div class="py-5"
        style="
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.718),
            rgba(0, 0, 0, 0.831)
          ),
          url(app/img/army1.jpg);
          background-size: cover;
        height: 260px;
      ">
        <div class="container">
            <div class="row">
                <h1 class="text-white py-5 display-4">Adverts</h1>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
    <div class="container py-4">
        <div class="row">
            @foreach ($adverts as $adv)
                <div class="card mb-3 col-lg-4 col-md-4 col-sm-12 mx-2" style="max-width: 24rem;">

                    <div class="card-header row ">
                        <div class="col-lg-6 col-md-6 col-xs-6 text-start"> {{ strtoupper($adv->advert_type) }}</div>
                        <div class="col-lg-6 col-md-6  col-xs-6 text-end">Deadline: {{ $adv->due_date }}</div>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title"> {{ $adv->title }}</h5>
                        <p class="card-text">{{ str_replace('&nbsp;', '', strip_tags($adv->description)) }}</p>
                        <div class=" text-center">
                            <a href="{{ url('download/' . $adv->slug) }}" class="btn bn5 btn-success btn-sm"
                                target="_blank">
                                Download File</a>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>

    @include('includes.footer')
