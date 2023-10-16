@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    <a href="{{route('company.index')}} " class="btn btn-primary btn-xs float-end py-1 ">Company List</a>
                    {{-- <a href=" " class="btn btn-primary btn-xs float-end py-1">Employees List</a> --}}

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as Admin!') }}


                </div>

            </div>
        </div>
    </div>
</div>
@endsection

