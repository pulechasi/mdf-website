<div class="widgets">
    <div class="popular">
        <h4>Recent News and Events</h4>

        <hr>
        <div class="row">
                @foreach ($latest_posts as $pos)

                    <div class="col-sm-4 mb-2">
                        <a href="{{ route('single.post', $pos->slug) }}"><img src="{{ $pos->image }}" alt="Image 1"></a>
                    </div>
                    <div class="col-sm-8 details">
                        <a href="{{ route('single.post', $pos->slug) }}" style="text-decoration: none">
                            <h6>{{ $pos->title }}</h6>
                        </a>
                        <p><i class="fa fa-clock-o"></i> </p>
                    </div>

                @endforeach



        </div>


    </div>
</div>
