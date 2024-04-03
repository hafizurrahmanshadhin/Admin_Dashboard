@extends('auth.app')

@section('title')
    {{ config('app.name') }} | Send OTP
@endsection

@section('content')
    <div class="card overflow-hidden border-0">
        <div class="row justify-content-center g-0">
            @include('auth.partials.auth_page_assets')
            <div class="col-lg-6">
                <div class="p-lg-5 p-4">
                    <h5 class="text-primary">Forgot Password?</h5>
                    <p class="text-muted">Reset password with velzon</p>

                    <div class="mt-2 text-center">
                        <lord-icon src="{{ asset('cdn/json/rhvddzym.json') }}" trigger="loop" colors="primary:#0ab39c"
                            class="avatar-xl">
                        </lord-icon>
                    </div>

                    <div class="alert border-0 alert-warning text-center mb-2 mx-2" role="alert">
                        Enter your email and instructions will be sent to you!
                    </div>
                    <div class="p-2">
                        <form action="#">
                            <div class="mb-4">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email address">
                            </div>

                            <div class="text-center mt-4">
                                <button class="btn btn-success w-100" type="submit">Send Reset Link</button>
                            </div>
                        </form>
                    </div>

                    <div class="mt-5 text-center">
                        <p class="mb-0">Wait, I remember my password... <a href="{{ route('login') }}"
                                class="fw-semibold text-primary text-decoration-underline">
                                Click here </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
