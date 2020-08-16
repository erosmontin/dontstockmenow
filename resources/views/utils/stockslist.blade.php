<div class="card-body m-5">

    <div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{$stocks->links()}}
            </div>
        </div>
        {{$stocks[0]}}
        <div class="d-flex justify-content-center align-content-center flex-md-wrap">

            @foreach($stocks as $s)

                <div class="card m-2" style="width: 233px" >

                    <img src="{{$s->image ??"http://cloudmrhub.com/img/cloud.png"}}"
                         class="card-img-bottom" alt="..." >


                    <div class="card-body">
                        <div class="text-md-center">
                        <h5 class="card-title">
                            {{$s->ticker ?? 'bo'}}
                        </h5>
                        </div>


                        <p class="card-text">{{$s->description ?? 'no description provided'}}</p>
                    </div>


                    <div class="card-body">
{{--                        @guest--}}
{{--                            <a href="{{$c->activate}} ?? '#'}}" class="btn btn-info">Contact us</a>--}}
{{--                        @else--}}

{{--                            @if(auth()->user()->hasVerifiedEmail())--}}
                                <watch-button stock-id="{{$s->id}}" watches="{{$s->watchers()->get()->contains(Auth::user())}}"></watch-button>
{{--                            @endguest--}}
{{--                        @endif--}}
                    </div>



                </div>

            @endforeach()

        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{$stocks->links()}}
            </div>
        </div>

    </div>
</div>
