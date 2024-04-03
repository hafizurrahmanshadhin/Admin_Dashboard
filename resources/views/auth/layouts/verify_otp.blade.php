@extends('auth.app')

@section('title')
    {{ config('app.name') }} | Verify OTP
@endsection

@section('content')
    <div class="card overflow-hidden border-0">
        <div class="row justify-content-center g-0">
            @include('auth.partials.auth_page_assets')
            <div class="col-lg-6">
                <div class="p-lg-5 p-4">
                    <div class="mb-4">
                        <div class="avatar-lg mx-auto">
                            <div class="avatar-title bg-light text-primary display-5 rounded-circle">
                                <i class="ri-mail-line"></i>
                            </div>
                        </div>
                    </div>
                    <div class="text-muted text-center mx-lg-3">
                        <h4 class="">Verify Your Email</h4>
                        <p>Please enter the 4 digit code sent to <span class="fw-semibold">example@abc.com</span></p>
                    </div>

                    <div class="mt-4">
                        <form autocomplete="off">
                            <div class="row">
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="digit1-input" class="visually-hidden">Digit 1</label>
                                        <input type="text"
                                            class="form-control form-control-lg bg-light border-light text-center"
                                            onkeyup="moveToNext(1, event)" maxLength="1" id="digit1-input">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="digit2-input" class="visually-hidden">Digit 2</label>
                                        <input type="text"
                                            class="form-control form-control-lg bg-light border-light text-center"
                                            onkeyup="moveToNext(2, event)" maxLength="1" id="digit2-input">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="digit3-input" class="visually-hidden">Digit 3</label>
                                        <input type="text"
                                            class="form-control form-control-lg bg-light border-light text-center"
                                            onkeyup="moveToNext(3, event)" maxLength="1" id="digit3-input">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="digit4-input" class="visually-hidden">Digit 4</label>
                                        <input type="text"
                                            class="form-control form-control-lg bg-light border-light text-center"
                                            onkeyup="moveToNext(4, event)" maxLength="1" id="digit4-input">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <button type="button" class="btn btn-success w-100">Confirm</button>
                            </div>

                        </form>

                    </div>

                    <div class="mt-5 text-center">
                        <p class="mb-0">Didn't receive a code ? <a href="{{ route('send_otp') }}"
                                class="fw-semibold text-primary text-decoration-underline">Resend</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- two-step-verification js --}}
    <script src="{{ asset('backend/js/pages/two-step-verification.init.js') }}"></script>
@endpush
