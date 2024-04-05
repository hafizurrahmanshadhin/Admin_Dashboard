@extends('auth.app')

@section('title')
    {{ config('app.name') }} | Logout
@endsection

@section('content')
    <div class="card overflow-hidden border-0">
        <div class="row justify-content-center g-0">
            @include('auth.partials.auth_page_assets')
            <div class="col-lg-6">
                <div class="p-lg-5 p-4 text-center">
                    <lord-icon src="{{ asset('cdn/json/hzomhqxz.json') }}" trigger="loop"
                        colors="primary:#25a0e2,secondary:#00bd9d" style="width:180px;height:180px">
                    </lord-icon>

                    <div class="mt-4 pt-2">
                        <h5>You are Logged Out</h5>
                        <p class="text-muted">Thank you for using <span class="fw-semibold">shadhin</span> admin template</p>
                        <div class="mt-4">
                            <a href="{{ route('login') }}" class="btn btn-success w-100">Sign In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
