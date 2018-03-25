@extends('layouts.app')

@section('css')
    {{-- css add in here--}}
@endsection

@section('content')

<div class="container">
    <h2>Cheack</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    {{-- js add in here--}}
@endsection