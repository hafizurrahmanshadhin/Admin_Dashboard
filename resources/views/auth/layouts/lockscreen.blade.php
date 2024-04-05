@extends('auth.app')

@section('title')
    {{ config('app.name') }} | Lock Screen
@endsection

@section('content')
    <div class="card overflow-hidden border-0">
        <div class="row justify-content-center g-0">
            @include('auth.partials.auth_page_assets')
            <div class="col-lg-6">
                <div class="p-lg-5 p-4">
                    <div>
                        <h5 class="text-primary">Lock Screen</h5>
                        <p class="text-muted">Enter your password to unlock the screen!</p>
                    </div>
                    <div class="user-thumb text-center">
                        <img src="{{ asset('backend/images/users/avatar-1.jpg') }}"
                            class="rounded-circle img-thumbnail avatar-lg" alt="thumbnail">
                        <h5 class="mt-3">Hafizur Rahman Shadhin</h5>
                    </div>

                    <div class="mt-4">
                        <form>
                            <div class="mb-3">
                                <label class="form-label" for="userpassword">Password</label>
                                <input type="password" class="form-control" id="userpassword" placeholder="Enter password"
                                    required>
                            </div>
                            <div class="mb-2 mt-4">
                                <button class="btn btn-success w-100" type="submit">Unlock</button>
                            </div>
                        </form>
                    </div>

                    <div class="mt-5 text-center">
                        <p class="mb-0">Not you ? return <a href="{{ route('login') }}"
                                class="fw-semibold text-primary text-decoration-underline"> Signin</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
