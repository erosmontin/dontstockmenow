@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> {{ $user->name }}'s Dashboard</div>


                    <div class="card-body">

                        <div class="row">
                            <div class="col-4 p-5">
                                <div class="d-flex flex-column justify-content-center align-content-center flex-md-wrap text-center" >
                                    <div><img src="{{$user->profile()->image ??'http://cloudmrhub.com/user.png' }}" alt="" class="rounded-circle w-100"></div>
                                    <div>    {{$user->name ." ". $user->lastname}} <a href="profile/{{$user->id}}/edit">edit</a></div>
                                    {{--                                        <div>@    {{$user->profile()->affiliation}}</div>--}}
                                    <div>#{{$user->username}}</div>


                                </div>
                            </div>
                            <div class="col-4 p-5">
                            </div>



                        </div>


                    </div>
                </div>
            </div>

            

        </div>
    </div>

@endsection
