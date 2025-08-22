@extends('admin.layouts.dashboard.app')

@section('content')
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-6 mx-auto">
                <div class="card shadow-lg border-0">
                    <div class="card-body text-center">
                        <h1 class="display-4 text-primary">{{ Auth::user()->name }}

                        </h1>
                        <p class="lead text-secondary">Welcome to the <strong>ta-ask</strong>!</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
