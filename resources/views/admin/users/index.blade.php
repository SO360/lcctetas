@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">Usuario</h3>
    <p>
        <a href="{{ route('admin.users.create') }}" class="btn btn-success">Agregar</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            Listado
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($users) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>

                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Role</th>
                        <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($users) > 0)
                        @foreach ($users as $user)
                            <tr data-entry-id="{{ $user->id }}">
                                <td></td>

                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach ($user->roles()->pluck('name') as $role)
                                        <span class="label label-info label-many">{{ $role }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('admin.users.edit',[$user->id]) }}" class="btn btn-xs btn-info">Editar</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("¿Está seguro de eliminar?")."');",
                                        'route' => ['admin.users.destroy', $user->id])) !!}
                                    {!! Form::submit(trans('Eliminar'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="9">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('admin.users.mass_destroy') }}';
    </script>
@endsection