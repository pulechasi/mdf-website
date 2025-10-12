<div class="widgets">
    <div class="popular mb-3">

            <h4>Recent Operations</h4>

            <hr>
            <div class="row">
                    @foreach ($latest_operations as $ope)

                        <div class="col-sm-4 mb-2">
                            <a href="{{ route('single.external.operation', $ope->slug) }}"><img src="{{ asset($ope->image) }}" alt="Image 1"></a>
                        </div>
                        <div class="col-sm-8 details">
                            <a href="{{ route('single.external.operation', $ope->slug) }}" style="text-decoration: none">
                                <h6>{{ $ope->name }}</h6>
                            </a>
                            <p><i class="fa fa-clock-o"></i> </p>
                        </div>

                    @endforeach

            </div>

    </div>

    {{-- Archived --}}
    <div class="popular m-3">

            <h4>Archived operations</h4>

            <hr>
            <div class="row">

                 @foreach ($archived_operations as $ope)


                        <div class="col-sm-4 mb-2">
                            <a href="{{ route('single.external.operation', $ope->id) }}"><img src="{{ asset($ope->image) }}" alt="Image 1"></a>
                        </div>
                        <div class="col-sm-8 details">
                            <a href="{{ route('single.external.operation', $ope->id) }}" style="text-decoration: none">
                                <h6>{{ $ope->name }}</h6>
                            </a>
                            <p><i class="fa fa-clock-o"></i> </p>
                        </div>

                 @endforeach

            </div>

    </div>

</div>

