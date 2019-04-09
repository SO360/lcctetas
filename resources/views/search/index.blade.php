@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')


@section('content')
@include('partials.message')
<style type="text/css">
    
    .label-color{
        color: black;
    }

</style>

    <h3 class="page-title">Listado de Registros</h3>
    {!! Form::open(['method' => 'POST', 'url' => ['admin/register/DownloadRegister'], 'class'=>'form-inline','id'=>'form']) !!}
         {{ csrf_field() }}

       <div class="form-group">
           <strong>{!! Form::label("dateRange", "Rango de Fecha", ['class'=>'label label-color']) !!}</strong> 
            {!! Form::text('daterange', null,["class"=>"form-control","id"=>"date_id","readonly","required"]) !!}
       </div>
       <div class="form-group">
             {!! Form::submit('Descarga', ['class' => 'btn btn-success']) !!}
       </div>
    
       
    {!! Form::close() !!}

    <div class="panel panel-default">
        <div class="panel-heading">
          
        </div>

        <div class="panel-body table-responsive">
            <table id="table" class="table table-bordered table-striped  dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"></th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Registrado</th>
                    </tr>
                </thead>
                
                <tbody>

                </tbody>
            </table>
        </div>
    </div>

@endsection
@section('javascript') 
     {{ Html::style('adminlte/css/jquery.dataTables.min.css') }}
     {{ Html::script('adminlte/js/jquery.dataTables.min.js') }}
     {{ Html::script('template/js/jquery.validate.min.js')}}
     
      <!-- Include Required Prerequisites -->
     {!! Html::script('adminlte/js/moment.min.js') !!}

       <!-- Include Date Range Picker -->

     {!! Html::style('adminlte/css/daterangepicker.css') !!}
     {!! Html::script('adminlte/js/daterangepicker.js') !!}


  <script type="text/javascript">
          $(function($) {

                    /*Validate*/

                    $("#form").validate({
                      submitHandler: function(form) {
                        form.submit();
                      }
                     });

                    $('input[name="daterange"]').daterangepicker({
                            locale: {
                              format: 'YYYY/MM/DD'
                         }
                    });
                 $('div.alert').not('.alert-important').delay(3000).fadeOut(350);



                vurl='{{ url("admin/register/ajaxRegister")}}';

      
       
                $('#table').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax:{
                            url:vurl ,
                            type:'get',
                        } ,
                         language: {
                            url: '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json'
                         },
                        columns: [
                            {data: 'id', name:'id','orderable': false},
                            {data: 'name', name:'name'},
                            {data: 'last_name', name:'last_name'},
                            {data: 'email', name:'email'},
                            {data: 'cellphone', name:'cellphone'},
                            {data: 'created', name:'created'},
                        ],
                        bAutoWidth: false,
                        order: [[0, 'asc']],
                        'aaSorting': [],

                    });


                });
                            
 

  </script>
@endsection