<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
      data-sidebar-image="none" data-preloader="disable">

<head>
    <base href="/">
    <meta charset="utf-8" />
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/vendor/font.awesome.min.css') }}'">
    <script src="{{ asset('admin/assets/js/layout.js') }}"></script>
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="auth-page-wrapper pt-5">
    <div class="auth-page-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4">
                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">Register</h5>
                            </div>
                            <div class="p-2">
                                <form action="{{ route('register') }}" method="POST">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input name="firstName" type="text" class="form-control" id="firstName"
                                               placeholder="Enter First Name" value="{{ old('firstName') }}" required
                                               autocomplete="firstName" autofocus>

                                        @error('firstName')
                                        <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input name="lastName" type="text" class="form-control" id="lastName"
                                               placeholder="Enter Last Name" value="{{ old('lastName') }}" required
                                               autocomplete="lastName" autofocus>

                                        @error('lastName')
                                        <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="phoneNumber" class="form-label">Phone Number</label>
                                        <input name="phoneNumber" type="text" class="form-control" id="phoneNumber"
                                               placeholder="Enter phoneNumber" value="{{ old('phoneNumber') }}"
                                               required autocomplete="phoneNumber" autofocus>

                                        @error('phoneNumber')
                                        <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input name="email" type="text" class="form-control" id="email"
                                               placeholder="Enter email" value="{{ old('email') }}" required
                                               autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="password-input">Password</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input type="password" class="form-control pe-5 password-input"
                                                   placeholder="Enter password" id="password-input" name="password">

                                            @error('password')
                                            <span class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <button
                                                    class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                    type="button" id="password-addon"><i
                                                        class="ri-eye-fill align-middle"></i></button>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="password-confirmation-input">Password
                                            Confirmation</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input type="password"
                                                   class="form-control pe-5 password-confirmation-input"
                                                   placeholder="Enter Password Confirmation"
                                                   id="password-confirmation-input" name="password_confirmation">
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-success w-100" type="submit">Sign Up</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <div class="signin-other-title">
                                            <a href="{{ route('login') }}">
                                                <h5 class="fs-13 mb-4 title">Click here to login</h5>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <a href="/"><i class="fa fa-arrow-left"></i> Turn back home</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins.js') }}"></script>
<script src="{{ asset('admin/assets/libs/particles.js/particles.js') }}"></script>
<script src="{{ asset('admin/assets/js/pages/particles.app.js') }}"></script>
<script src="{{ asset('admin/assets/js/pages/passowrd-create.init.js') }}"></script>
</body>

</html>