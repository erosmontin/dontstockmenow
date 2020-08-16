@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Edit {{ $user->name }}'s Profile</div>


                    <div class="card-body">



                            <form action="" enctype="multpart/>form-data" method=""post>
                            <div class="form-group row">

                                <label for="affiliation" class="col-md-4 col-form-label text-md-right">{{ __('Affiliation') }}</label>
                                <div class="col-md-6">
                                    <input id="affiliation" type="text" class="form-control @error('affiliation') is-invalid @enderror" name="affiliation" value="{{ old('affiliation') }}" required autocomplete="affiliation" autofocus>

                                    @error('affiliation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                                <div class="form-group row">
                                    <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>

                                    <div class="col-md-6">
                                        <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror"
                                               name="telephone" value="{{ old('telephone') }}" required autocomplete="affiliation" autofocus>

                                        @error('telephone')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update') }}
                                        </button>
                                    </div>
                                </div>


                            </form>



                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
