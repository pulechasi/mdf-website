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
                <h1 class="text-white py-5 display-4">MDF Commanders</h1>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div id="accordion">
                @if ($current_commander)

                <div class="card rounded shadow">
                    <div class="card-header text-end">
                        <a class="" data-bs-toggle="collapse" href="#collapseOne"> </a>
                    </div>
                    <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                        <div class="card-body">
                           <section id="who" class="pb-0 pt-0">
    <div class="container bg-light">
        <div class="row">
            <h4 class="py-4 mx-5">
                {{ $current_commander->commander->title }} {{ $current_commander->commander->name }} (CURRENT)
            </h4>
            <div class="col-12">
                <img src="{{ asset($current_commander->commander->picture) }}" 
                     class="img-thumbnail float-start me-3 mb-3" 
                     alt="" 
                     style="width: 300px; height: auto;" />
                <p class="lead" style="text-align: justify;">
                    {{ str_replace(' ', '', strip_tags($current_commander->commander->commander_roles)) }}
                </p>
            </div>
        </div>
    </div>
</section>

                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
    <div class="container py-5 ">
        <h3 class=" text-center py-5">All Previous Commanders</h3>
        <div class="row">
            <!-- Jumbotron -->
           @foreach ($previous_commanders as $index => $commander)
    <div class="col-lg-3">
        <div class="card h-100">
            <img src="{{ asset($commander->commander->picture) }}" 
                 class="img-fluid rounded-start" alt="..." />

            <div class="card-body">
                <h6 class="card-title">
                    {{ $commander->commander->title }} {{ $commander->commander->name }}
                </h6>

                <!-- Button to trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#rolesModal{{ $index }}">
                    View Description
                </button>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="rolesModal{{ $index }}" tabindex="-1" aria-labelledby="rolesModalLabel{{ $index }}" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rolesModalLabel{{ $index }}">
                        Roles of {{ $commander->commander->title }} {{ $commander->commander->name }}
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


            {{-- <div class="col-lg-3">
                <div class="card h-100">


                    <img src="{{ asset('app/img/matewere-g.jpg') }}" style=" height: 400px;"
                        class="img-fluid rounded-start" alt="..." />

                    <div class="card-body">

                        <div class="accordion" id="accordionPanelsStayOpenExample">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingtwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapsetwo" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapsetwo">
                                        <h6 class="card-title">General Graciano Matewere, BEM,MSM (1971 – 1980)

                                        </h6>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapsetwo" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingtwo">
                                    <div class="accordion-body">
                                        He was the first Malawian Commander who took over from Brigadier General T P J
                                        Lewis, OBE (A British National) who commanded the force from 1961 to 1965, and
                                        1967 to 1971. He handed over to General Melvin Khanga on 9th April 1980.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-lg-3">
                <div class="card h-100">


                    <img src="{{ asset('app/img/khanga-m.jpg') }}" style=" height: 400px;"
                        class="img-fluid rounded-start" alt="..." />

                    <div class="card-body">

                        <div class="accordion" id="accordionPanelsStayOpenExample">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingthree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapsethree" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapsethre">
                                        <h6 class="card-title">Gen Mervin Khanga,MSM,psc
                                            (1980-1992)</h6>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapsethree" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingthree">
                                    <div class="accordion-body">
                                        This is the second native Commander of Malawi Army, sixth in a row, he was born
                                        on 15th October 1940. He was enlisted on 14th July 1964. He was commisioned as a
                                        Second-Lieutenant on 3rd April 1965. He was promoted to the ranks of Lieutenant
                                        14th July 1967; Captain on 1st August 1970; Major 1st February 1972;
                                        Lieutenant-Colonel on 3rd October 1973 and later Colonel on 5th October 1975. He
                                        then became Brigadier-Gaeneral on 20th October 1976; Major-General on 16th
                                        September 1977 and then General Officer Commanding the Malawi Army on 19th
                                        August 1984. He retired from Service on 10th June 1992.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card h-100">


                    <img src="{{ asset('app/img/pic3.jpg') }}" style=" height: 400px;" class="img-fluid rounded-start"
                        alt="..." />

                    <div class="card-body">

                        <div class="accordion" id="accordionPanelsStayOpenExample">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseo4">
                                        <h6 class="card-title">
                                            Gen Isaac Yohane,MSM, BEM
                                            (1992-1993)
                                        </h6>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingo4">
                                    <div class="accordion-body">
                                        The seventh Commander of Malawi Army, and the last in Single party system of
                                        government was born on 29th August, 1929. He was enlisted into service on 28th
                                        November, 1948. He broke on service from 28th November, 1948 to 5th August,
                                        1961. He was in ranks for 17 years 297 days. Promoted to ranks of Lieutenant on
                                        23rd March, 1966, Captain on 1st February, 1969, Major 1st January, 1973;
                                        Lieutenant Colonel on 5th August 1975 and later Colonel on 17th September 1979.
                                        He became Brigadier-General on 9th June 1980; Major-General on 1st June 1981 and
                                        then Lieutenant-General on 7th June, 1985. He became the General Officer
                                        Commanding the Malawi Army on 20th June, 1992.He retired from the service in
                                        1993.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Jumbotron -->
            {{-- <div class="col-lg-3">
                <div class="card h-100">


                    <img src="{{ asset('app/img/maulana-d.jpg') }}" style=" height: 400px;"
                        class="img-fluid rounded-start" alt="..." />

                    <div class="card-body">

                        <div class="accordion" id="accordionPanelsStayOpenExample">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapse5" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapse5">
                                        <h6 class="card-title">General Dismus Maulana, MSM,rcds,psc
                                            (1993-1994)

                                        </h6>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse5" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-heading5">
                                    <div class="accordion-body">
                                        The 8th Commander of Malawi Army, First in Multiparty system of government was
                                        born on 25th January, 1946. He was enlisted into service on 8th December, 1966.
                                        He was commisione dwith the rank of Second Lieutenant 5th August 1967. He was
                                        later promoted to the ranks of Lieutenant on 8th December 1969; Captain on 1st
                                        February 1972; Major on 1st March 1974; Lieutenant Colonel on 16th September
                                        1977 and the Colonel on 9th June 1980. He was later promoted to the rank of
                                        Brigadier-General on 1st June 1981 and later Major-General on 5th January 1993.
                                        He became General Officer Commanding the Malawi Army.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card h-100">


                    <img src="{{ asset('app/img/chigawa-m.jpg') }}" style=" height: 400px;"
                        class="img-fluid rounded-start" alt="..." />

                    <div class="card-body">

                        <div class="accordion" id="accordionPanelsStayOpenExample">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-heading6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapse6" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapse6">
                                        <h6 class="card-title">General Manken Chigawa, MSM,pslc
                                            (1994-1995)</h6>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse6" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-heading6">
                                    <div class="accordion-body">
                                        9th Commander of Malawi Army.

                                        He became General Commanding Malawi Army on Murdered at Tsangano in Ntcheu on
                                        27th June 1995
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card h-100">


                    <img src="{{ asset('app/img/binauli-o.jpg') }}" style=" height: 400px;"
                        class="img-fluid rounded-start" alt="..." />

                    <div class="card-body">

                        <div class="accordion" id="accordionPanelsStayOpenExample">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-heading7">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapse7" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapse7">
                                        <h6 class="card-title">
                                            General Owen Binauli,MSM
                                            (1995-1996)
                                        </h6>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse7" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-heading7">
                                    <div class="accordion-body">
                                        The 10th Commander was born on 6th February 1947. On 6th February 1969, he was
                                        enlisted into the Service. He was commissioned as a Second-Lieutenant on 7th May
                                        1971. He was promoted to the ranks of Lieutenant on 2nd December 1971; Captain
                                        on 17 November 1973; Major 5th August 1975; Lieutenant-Colonel 1st May 1982 and
                                        Colonel on 1st March 1989. He was further promoted to the ranks of
                                        Brigadier-General on 1st April 1991. On 1st April 1991, he was he was promoted
                                        to the rank of Major-General, and as Lieutenant-General on 27 June 1994 and
                                        later became General Officer Commanding the Malawi Army also exactly a year
                                        later. He retired from Service on 30th September 1996.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card h-100">


                    <img src="{{ asset('app/img/simwaka-k.jpg') }}" style=" height: 400px;"
                        class="img-fluid rounded-start" alt="..." />

                    <div class="card-body">

                        <div class="accordion" id="accordionPanelsStayOpenExample">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-heading8">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapse8" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapse8">
                                        <h6 class="card-title">General Kelvin Simwaka,osc
                                            (1996-1997)

                                        </h6>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse8" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-heading8">
                                    <div class="accordion-body">
                                        11th Commander, He was born on 4th April 1953. H e was enlisted on 26th February
                                        1973. He was promoted into the ranks of Second Lieutenant on 23rd November 1973;
                                        Lieutenant on 1st March 1976; Captain on 16th September, 1978; Major on 9th
                                        June, 1980; Lieutenant Colonel on 1st July, 1986; Colonel on 1st April, 1991. He
                                        was thereafter promoted to the ranks of Brigadier-General on 5th January, 1993;
                                        Major-General on 27th June 1994; Lieutenant-General on 27th April, 1995 and then
                                        General Commander of Malawi Defence Force on 30th September, 1996. He retired
                                        from servive on 31st January, 1998.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Jumbotron -->
            {{-- <div class="col-lg-3">
                <div class="card h-100">


                    <img src="{{ asset('app/img/chimbayo-j.jpg') }}" style=" height: 400px;"
                        class="img-fluid rounded-start" alt="..." />

                    <div class="card-body">

                        <div class="accordion" id="accordionPanelsStayOpenExample">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-heading9">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapse9" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapse9">
                                        <h6 class="card-title">General Joseph Chimbayo, MSM,osc
                                            (1997-2004)</h6>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse9" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-heading9">
                                    <div class="accordion-body">
                                        12th Commander of Malawi Defence Force, He was born on 18th September 1953. He
                                        was enlisted on 5th February 1974. Commissioned as a Second-Lieutenant on 24th
                                        January 1975. He became a Lieutenant on 2nd March 1977; Captain on 16th
                                        September 1978; Major on 1st May 1982; Lieutenant-Colonel on 1st April 1991 and
                                        later Colonel on 5th January 1993. He was promoted to the rank of
                                        Brigadier-General on 1st April 1994 and later Lieutenant-General on 16th January
                                        1998. He became the General Commander of the Malawi Defence Force on 20th March,
                                        2000. He retired from service on 11th July 2004.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Jumbotron -->
            <div class="col-lg-3">
                <div class="card h-100">


                    <img src="{{ asset('app/img/chiziko-m.jpg') }}" style=" height: 400px;"
                        class="img-fluid rounded-start" alt="..." />

                    <div class="card-body">

                        <div class="accordion" id="accordionPanelsStayOpenExample">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-heading10">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapse10" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapse10">
                                        <h6 class="card-title">
                                            General Marko Chiziko, MSM,psc
                                            (2004-2011)
                                        </h6>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse10" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-heading10">
                                    <div class="accordion-body">
                                        11th Commander of the Malawi Defence Foce. Marko Chiziko was born on 17th April
                                        1952, he was enlisted on 5th August 1972. Promoted to the ranks of Captain on
                                        17th September, 1979; Major on 1st June, 1981; Lieutenant-Colonel on 1st March,
                                        1989 and Colonel on 5th January, 1993. He was further promoted to the ranks of
                                        Brigadier-General on 1st April, 1994; Major-General on 16th January, 1998 and
                                        later Lieutenant-General on 20th March, 2000. He was appointed Defence Force
                                        Commander on 1st August, 2004. He retired on 22nd July, 2011.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card h-100">


                    <img src="{{ asset('app/img/odillo.jpg') }}" style=" height: 400px;" class="img-fluid rounded-start"
                        alt="..." />

                    <div class="card-body">

                        <div class="accordion" id="accordionPanelsStayOpenExample">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-heading11">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapse11" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapse11">
                                        <h6 class="card-title">General Henry Odillo, psc,ndc(K)
                                            (2011-2014)

                                        </h6>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse11" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-heading11">
                                    <div class="accordion-body">
                                        Henry Odillo was the 14th Commander o th Malawi Defence Force, and was born 5th
                                        June, 1959. H e was enlisted on 12th December 1978. Promoted to the ranks of
                                        Second-Lieutenant on 24th November 1979; Lieutenant on 7th December 1981;
                                        Captain on 1th January 1984; Major on 1st July 1984; Lieutenant Colonel on 1st
                                        April 1994; Colonel on 18th February 1998; Brigadier-General on 1st June 2010.
                                        He became the General Commanding Officer of the Malawi Defence Force on 22nd
                                        July 2011. He retired on 24th June 2014.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card h-100">


                    <img src="{{ asset('app/img/maulana-i.jpg') }}" style=" height: 400px;"
                        class="img-fluid rounded-start" alt="..." />

                    <div class="card-body">

                        <div class="accordion" id="accordionPanelsStayOpenExample">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-heading12">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapse12" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapse12">
                                        <h6 class="card-title">General Ignancio Maulana, psc,ndc (K)
                                            (2014-2016)</h6>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse12" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-heading12">
                                    <div class="accordion-body">
                                        The 15th Commander of Malawi Defence Force, he was born on 8th May 1961. He was
                                        enlisted into Service on 17th November 1979. He was commissioned as a
                                        Second-Lieutenant on 21st November 1980. He was promoted to the ranks of
                                        Lieutenant on 1st January 1984; Captain on 1st March 1989; Major on 1st April
                                        1991; Lieutenant-Colonel on 20th March 2000 and Colonel on 1st December 2004. He
                                        was further promoted to the ranks of Brigadier-General on 1st June 2010 and
                                        Major-General on 6th September 2012. He became the General Officer Commanding
                                        the Malawi Defence Force on 24th June 2014. He was later seconded to National
                                        Food Reserves on 29th July 2016 up todate.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="col-lg-3">
                <div class="card h-100">


                    <img src="{{ asset('app/img/supuni-g.jpg') }}" style=" height: 400px;"
                        class="img-fluid rounded-start" alt="..." />

                    <div class="card-body">

                        <div class="accordion" id="accordionPanelsStayOpenExample">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-heading13">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapse13" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapse13">
                                        <h6 class="card-title">
                                            General Griffin Spoon, MSM,psc,ndc
                                            (2016-2019)
                                        </h6>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse13" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-heading13">
                                    <div class="accordion-body">
                                        The 16th Commander of Malawi Defence Force was born on 4th July 1959. He was
                                        enlisted into Service on 12th December 1978 and commissioned as a
                                        Second-lieutenant on 24th November 1979. He was promoted to the ranks of
                                        Lieutenant on 7th December 1981; Captain on 7th January 1986; Major on 5th
                                        January 1993; Lieutenant-Colonel on 1st June 1994 and later Colonel on 23rd
                                        February 2002. He was then promoted to the ranks of Brigadier-General on 1st
                                        September 2010; Major-General on 6th September 2012 and then Lieutenant-General
                                        on 24th June 2014. He became the General Officer Commanding the Malawi Defence
                                        Force on 29th June 2016. He retired from Service on 21st June, 2019.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Jumbotron -->
            <div class="col-lg-3">
                <div class="card h-100">


                    <img src="{{ asset('app/img/vtnundwe.jpg') }}" style=" height: 400px;"
                        class="img-fluid rounded-start" alt="..." />

                    <div class="card-body">

                        <div class="accordion" id="accordionPanelsStayOpenExample">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-heading14">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapse14" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapse14">
                                        <h6 class="card-title">General Vincent Nundwe, MSM,psc
                                            (2019-2020)

                                        </h6>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse14" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-heading14">
                                    <div class="accordion-body">
                                        The 17th Commander of the Malawi Defence Force was born on 20th Dec, 1957. He
                                        was enlisted into Service on 12th December 1978 and commissioned as a
                                        Second-Lieutenant on 31st March, 1980. He was promoted to the ranks of
                                        Lieutenant on 7th September 1982; Captain on 1st March 1989; Major on 1st April
                                        1994; Lieutenant-Colonel on 23rd February 2002 and later Colonel on 1st June
                                        2010. He was then promoted to the ranks of Brigadier-General on 1st September
                                        2010; Major-General on 6th September 2012 and then Lieutenant-General on 24th
                                        June 2014. He became the General Officer Commanding the Malawi Defence Force on
                                        21st June 2019.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card h-100">


                    <img src="{{ asset('app/img/namathanga-p1.jpg') }}" style=" height: 400px;"
                        class="img-fluid rounded-start" alt="..." />

                    <div class="card-body">

                        <div class="accordion" id="accordionPanelsStayOpenExample">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-heading15">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapse15" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapsethre">
                                        <h6 class="card-title">General Peter Namathanga, MSM,poms,psc,ensp
                                            (2011-2014)</h6>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse15" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-heading15">
                                    <div class="accordion-body">
                                        Henry Odillo was the 14th Commander o th Malawi Defence Force, and was born 5th
                                        June, 1959. H e was enlisted on 12th December 1978. Promoted to the ranks of
                                        Second-Lieutenant on 24th November 1979; Lieutenant on 7th December 1981;
                                        Captain on 1th January 1984; Major on 1st July 1984; Lieutenant Colonel on 1st
                                        April 1994; Colonel on 18th February 1998; Brigadier-General on 1st June 2010.
                                        He became the General Commanding Officer of the Malawi Defence Force on 22nd
                                        July 2011. He retired on 24th June 2014.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Jumbotron -->
        </div>
    </div>



    @include('includes.footer')
