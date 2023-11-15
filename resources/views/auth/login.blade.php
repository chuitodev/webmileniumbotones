
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>{{ env('APP_NAME') }} - Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content=" - Login">
<meta name="author" content="Scasti">
<meta name="description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
<meta name="keywords" content="Scasti" />

<!-- Volt CSS -->
<link type="text/css" href="{{ asset('css/volt.css') }}" rel="stylesheet">

</head>

<body>
    <main>

        <!-- Section -->
        <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
            <div class="container">
                <p class="text-center">
                    <a href="{{ url('/') }}" class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/milenium-bco.svg') }}" alt="">
                    </a>
                </p>
                <div class="row justify-content-center form-bg-image" data-background-lg="{{ asset('img/signin.svg') }}">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h3">{{ env('APP_NAME') }}</h1>
                            </div>
                            <form action="{{ route('login')}}" method="POST" class="mt-4">
                                @csrf

                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="email">Correo electrónico</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                                        </span>
                                        <input type="email" name="email" inputmode="email" class="form-control @error('email') is-invalid @enderror" placeholder="ejemplo@mileniumcombustibles.com" id="email" autofocus required autocomplete="off">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End of Form -->
                                <div class="form-group">
                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label for="password">Contraseña</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2">
                                                <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                                            </span>
                                            <input type="password" name="password" placeholder="*****************" class="form-control @error('password') is-invalid @enderror" id="password" required autocomplete="off">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- End of Form -->
                                    <div class="d-flex justify-content-between align-items-top mb-4">
                                        <div><a href="{{ route('password.request') }}" class="small text-right">¿Olvidaste tu contraseña?</a></div>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-gray-800">Iniciar sesión</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Core -->
<script src="{{ asset('vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Volt JS -->
<script src="{{ asset('js/volt.js') }}"></script>


</body>

</html>