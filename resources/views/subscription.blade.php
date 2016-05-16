<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>CONEGP | Inscripción</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">CONEGP</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#">Inscripción</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="#">Inscripción</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h1 class="header center orange-text">Inscripción a CONEGP</h1>
        <div class="row center">
            <h5 class="header col s12 light">No espere más e inscríbase para participar de este gran evento.</h5>
        </div>
        <div class="row center">
            <a href="#" class="btn-large waves-effect waves-light orange">Ver más info</a>
        </div>
        <br><br>

    </div>
</div>


<div class="container">
    <div class="section">

        <div class="row">
            @if (session('notification'))
                <div class="col s12">
                    <div class="card green lighten-5">
                        <div class="card-content green-text">
                            <h5>{{ session('notification') }}</h5>
                            <p>Te has registrado correctamente para poder formar parte del CONEGP UNT 2016.</p>
                            <p>Hemos enviado a tu dirección de correo electrónico nuestra notificación de registro.</p>
                        </div>
                    </div>
                </div>
            @endif

            <div class="col s12 m6">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
                    <h5 class="center">Indicaciones</h5>

                    <p class="light">Siga los siguientes pasos para inscribirse adecuadamente.</p>
                    <ul class="collection">
                        <li class="collection-item">
                            Paso 1
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dictum dui et vulputate. Ut nec imperdiet libero. Phasellus sollicitudin sollicitudin mi at vulputate. Praesent odio ex, sollicitudin nec enim tempor, aliquam sollicitudin massa. Phasellus efficitur erat vitae erat gravida facilisis. Nullam sollicitudin odio turpis, in euismod orci convallis sed. In hac habitasse platea dictumst. In at varius nulla.</p>
                        </li>
                        <li class="collection-item">
                            Paso 2
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dictum dui et vulputate. Ut nec imperdiet libero. Phasellus sollicitudin sollicitudin mi at vulputate. Praesent odio ex, sollicitudin nec enim tempor, aliquam sollicitudin massa. Phasellus efficitur erat vitae erat gravida facilisis. Nullam sollicitudin odio turpis, in euismod orci convallis sed. In hac habitasse platea dictumst. In at varius nulla.</p>
                        </li>
                        <li class="collection-item">
                            Paso 3
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dictum dui et vulputate. Ut nec imperdiet libero. Phasellus sollicitudin sollicitudin mi at vulputate. Praesent odio ex, sollicitudin nec enim tempor, aliquam sollicitudin massa. Phasellus efficitur erat vitae erat gravida facilisis. Nullam sollicitudin odio turpis, in euismod orci convallis sed. In hac habitasse platea dictumst. In at varius nulla.</p>
                        </li>
                        <li class="collection-item">
                            Paso 4
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dictum dui et vulputate. Ut nec imperdiet libero. Phasellus sollicitudin sollicitudin mi at vulputate. Praesent odio ex, sollicitudin nec enim tempor, aliquam sollicitudin massa. Phasellus efficitur erat vitae erat gravida facilisis. Nullam sollicitudin odio turpis, in euismod orci convallis sed. In hac habitasse platea dictumst. In at varius nulla.</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col s12 m6">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
                    <h5 class="center">Su inscripción</h5>
                    <p class="light">Ingrese sus datos y participe de este gran evento.</p>

                    @if (count($errors) > 0)
                        <div class="card red lighten-5">
                            <div class="card-content red-text">
                                <p>Revise los siguientes errores:</p>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    <form method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <p>Datos generales</p>
                        <div class="row">
                            <div class="input-field col s6">
                                <input name="first_name" type="text" class="validate" value="{{ old('first_name') }}">
                                <label for="first_name">Nombres</label>
                            </div>
                            <div class="input-field col s6">
                                <input name="last_name" type="text" class="validate" value="{{ old('last_name') }}">
                                <label for="last_name">Apellidos</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input name="identity_card" type="text" class="validate" value="{{ old('identity_card') }}">
                                <label for="identity_card">Documento de identidad</label>
                            </div>
                            <div class="input-field col s6">
                                <input name="birth_date" type="date" class="datepicker" value="{{ old('birth_date') }}">
                                <label for="birth_date">Fecha de nacimiento</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input name="email" type="text" class="validate" value="{{ old('email') }}">
                                <label for="email">E-mail</label>
                            </div>
                            <div class="input-field col s6">
                                <input name="email_confirmation" type="text" class="validate" autocomplete="off">
                                <label for="email_confirmation">Confirmar e-mail</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input name="cellphone" type="text" class="validate" value="{{ old('cellphone') }}">
                                <label for="cellphone">Teléfono móvil</label>
                            </div>
                            <div class="input-field col s6">
                                <input name="phone" type="text" class="validate" value="{{ old('phone') }}">
                                <label for="phone">Teléfono fijo</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <select name="gender">
                                    <option value="hombre">Hombre</option>
                                    <option value="mujer">Mujer</option>
                                </select>
                                <label for="gender">Seleccione género</label>
                            </div>
                            <div class="input-field col s6">
                                <input name="city" type="text" class="validate" value="{{ old('city') }}">
                                <label for="city">Ciudad</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="address" type="text" class="validate" value="{{ old('address') }}">
                                <label for="address">Dirección</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <select name="occupation">
                                    <option value="estudiante">Estudiante</option>
                                    <option value="profesional">Profesional</option>
                                    <option value="rudp">Miembro RUDP</option>
                                </select>
                                <label for="occupation">Ocupación</label>
                            </div>
                            <div class="input-field col s6">
                                <input name="workplace" type="text" class="validate" value="{{ old('workplace') }}">
                                <label for="workplace">Centro de estudios o laboral</label>
                            </div>
                        </div>
                        <label for="validation_document">Adjuntar constancia de validación</label>
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Documento</span>
                                <input type="file" name="validation_document">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>

                        <p>Datos del pago</p>
                        <div class="row">
                            <div class="input-field col s6">
                                <input name="operation_number" type="text" class="validate" value="{{ old('operation_number') }}">
                                <label for="operation_number">Nro de operación</label>
                            </div>
                            <div class="input-field col s6">
                                <input name="payment_date" type="date" class="datepicker" value="{{ old('payment_date') }}">
                                <label for="payment_date">Fecha de pago</label>
                            </div>
                        </div>
                        <label for="validation_voucher">Adjuntar voucher de pago</label>
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Voucher</span>
                                <input type="file" name="validation_voucher">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>

                        <button class="btn waves-effect waves-light right" type="submit" name="action">Inscribirse
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                </div>
            </div>

        </div>

    </div>
    <br><br>

    <div class="section">

    </div>
</div>

<footer class="page-footer orange">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">CONEGP</h5>
                <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
            </div>
            <div class="col l6 s12 right-align">
                <h5 class="white-text">Enlaces</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                </ul>
            </div>

        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            CONEGP Copyright 2016
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<script src="{{ asset('js/init.js') }}"></script>

</body>
</html>
