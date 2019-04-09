@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido</div>

                <div class="panel-body">
                  Ten un buen dia!  {{ Auth::user()->name}}
                </div>
            </div>
        </div>
    </div>
@endsection
