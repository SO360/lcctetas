@extends('layouts.auth')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">
                <div class="panel-heading">{{ ucfirst(config('app.name')) }} Login</div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were problems with input:
                            <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

             <img src="{{asset('template/img/logo/LOGO-A.png')}}" style="margin-left: 5px;">


                    <form class="form-horizontal"
                          role="form"
                          method="POST"
                          action="{{ url('login') }}">
                        <input type="hidden"
                               name="_token"
                               value="{{ csrf_token() }}">


                        <div class="form-group">
                            <label class="col-md-4 control-label">Usuario</label>

                            <div class="col-md-6">
                                <input type="email"
                                       class="form-control bu"
                                       name="email"
                                       value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Clave</label>

                            <div class="col-md-6">
                                <input type="password"
                                       class="form-control"
                                       name="password">
                            </div>
                        </div>

                      <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="{ { route('auth.password.reset') }}">¿Olvidades tu contraseña?</a>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit"
                                        class="btn btn-primary"
                                        style="margin-right: 15px;">
                                   Acceder
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection