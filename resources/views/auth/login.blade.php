@extends('layouts.auth')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-12 col-xl-10">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 col-xl-12">
                            <div class="p-5"><img src="{{ asset('assets/img/banner-yara.png') }}"
                                    style="width: 100%;border-radius: 10px;margin-bottom: 15px;">
                                <div class="text-center"></div>
                                <form method="POST" action="{{ route('login') }}" class="user">
                                    @csrf
                                    <div class="mb-3">
                                        <input class="form-control form-control-user" type="email" id="exampleInputEmail"
                                            aria-describedby="emailHelp" placeholder="Ingresa tu correo electrónico"
                                            name="email" required>
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control form-control-user" type="password"
                                            id="exampleInputPassword" placeholder="Contraseña" name="password" required>
                                        @error('password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div class="custom-control custom-checkbox small">
                                            <div class="form-check">
                                                <input class="form-check-input custom-control-input" type="checkbox"
                                                    id="formCheck-1" required>
                                                <label class="form-check-label custom-control-label" for="formCheck-1">
                                                    He leído y acepto los
                                                    <a href="{{ asset('assets/pdf/Términos y Condiciones PUNTOS POR EL PLANETA_.pdf') }}"
                                                        download="">
                                                        Términos y Condiciones
                                                    </a>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input custom-control-input" type="checkbox"
                                                    id="formCheck1" required>
                                                <label class="form-check-label custom-control-label" for="formCheck1">
                                                    He leído y acepto las
                                                    <a href="https://www.yara.com.gt/politica-de-privacidad/"
                                                        download="">
                                                        Política de Privacidad de Datos de Yara
                                                    </a>
                                                    para los Datos de Clientes, Proveedores y Socios Comerciales de Yara.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary d-block btn-user w-100" role="button">
                                        Login
                                    </button>
                                    <hr>
                                </form>
                                <div class="text-center">
                                    <a class="small" href="{{ route('password.request') }}">Olvidé mi contraseña</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" target="_blank" href="https://wa.me/50230359346">Contactar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
