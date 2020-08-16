@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                                        <div class="card-header">Contact us</div>

                    <div class="card-body m-5">
                        @if(!session()->has('message'))

                            <form action="contact" method="POST">


                                <div class="form-group row">
                                    <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Name') }}</label>

                                    <div class="col-md-7">
                                        <input id="name" type="text" class="form-control @error('name')
                                            is-invalid @enderror" name="name"
                                               value="{{old('name') ?? $user->name . ' ' . $user->lastname }}"
                                               required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Email') }}</label>

                                    <div class="col-md-7">
                                        <input id="email" type="text" class="form-control @error('email')
                                            is-invalid @enderror" name="email"
                                               value="{{old('email') ?? $user->email }}"
                                                                                             required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="message" class="col-md-3 col-form-label text-md-right">{{ __('Message') }}</label>

                                    <div class="col-md-7">
                                        <textarea name="message" id="message" class="form-control" rows="8" placeholder="Please enter your message here"  >{{old('message')}}</textarea>


                                        @error('message')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>


                                @csrf
                                <div class="form-group row mb-0">
                                    <div class="col-md-7 offset-md-3">
                                        <button class="btn btn-primary" type="submit">Send</button>
                                    </div>
                                </div>

                            </form>
                        @endif
                        @if(session()->has('message'))
                            <div class="alert alert-success" role="alert">
                                <strong>Success</strong> {{session()  ->get('message')}}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
