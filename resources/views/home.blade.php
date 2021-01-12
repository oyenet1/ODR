@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                {{-- error message for roles and permission --}}
                @if (session('role'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong class="text-capitalize">Dear {{ Auth::user()->name }},  </strong> {{ session('role') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in as normal user!') }}

                        <i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i>
                        <i class="fab fa-facebook-square   fa-2x text-primary "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
