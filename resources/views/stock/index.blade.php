@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                                        <div class="card-header">Market</div>

                    @include('utils.stockslist');
                </div>
            </div>
        </div>
    </div>
@endsection
