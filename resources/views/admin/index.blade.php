{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
 @include( $page_data["account_type"].'.'.$page_data["page_name"])



@endsection
{{-- Styles Section --}}
@section('styles')



@endsection
{{-- Scripts Section --}}
@section('scripts')
  @livewireScripts
   <script src="{{ asset('js/pages/crud/forms/widgets/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<script src="{{asset('plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script>
    var _avatar;
    var _initAvatar = function () {
        _avatar = new KTImageInput('kt_user_add_avatar');
    }
_initAvatar();


"use strict";
var KTDatatablesExtensionButtons = function() {

    var initTable1 = function() {

        // begin first table
        var table = $('#datatable').DataTable({
            responsive: true,
            // Pagination settings
            dom: `<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>
            <'row'<'col-sm-12'tr>>
            <'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,

            buttons: [
                'print',
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5',
            ],

        });

    };


    return {

        //main function to initiate the module
        init: function() {
            initTable1();

        },

    };

}();

jQuery(document).ready(function() {
    KTDatatablesExtensionButtons.init();

});

////select2



//comporobar email
$(document).ready(documentoListo)
function documentoListo() {
    $("#student_email").blur(function(){//esperamos evento perdida de foco
        comprueba_email($(this).val())//llamamos la funcion y le pasamos el valor del input
    })

    $("#parent_email").blur(function(){//esperamos evento perdida de foco
        comprueba_email_parent($(this).val())//llamamos la funcion y le pasamos el valor del input
    })

    $("#user_student").blur(function(){//esperamos evento perdida de foco
        comprueba_username($(this).val())//llamamos la funcion y le pasamos el valor del input
    })

    $("#parent_username").blur(function(){//esperamos evento perdida de foco
        comprueba_parent_username($(this).val())//llamamos la funcion y le pasamos el valor del input
    })
}
function comprueba_email(email){
    //con ajax enviamos el email mediante post a un archivo php
    $.ajax({
        url : '/api/email/'+email+'/comprobar',//ruta del archivo donte estara la consulta a la bd
        type : 'GET',
        cache : false,
        data : "email="+email,
        success: function(resultado){
            if(resultado > 0){
                resultado2=  '<p class="text-danger">Dirección de correo ya existe</p>';
        }else{
            resultado2=  '<p class="text-success">Dirección de correo disponible</p> ';
        }
            $("#email_result_student").html(resultado2);

        }
    });
}
function comprueba_email_parent(email){
    //con ajax enviamos el email mediante post a un archivo php
    $.ajax({
        url : '/api/email/'+email+'/comprobar',//ruta del archivo donte estara la consulta a la bd
        type : 'GET',
        cache : false,
        data : "email="+email,
        success: function(resultado){
            if(resultado > 0){
                resultado2=  '<p class="text-danger">Dirección de correo ya existe</p>';
        }else{
            resultado2=  '<p class="text-success">Dirección de correo disponible</p> ';
        }
            $("#email_result_parent").html(resultado2);

        }
    });
}

function comprueba_username(username){
    //con ajax enviamos el email mediante post a un archivo php
    $.ajax({
        url : '/api/user/'+username+'/comprobar',//ruta del archivo donte estara la consulta a la bd
        type : 'GET',
        cache : false,
        data : "username="+username,
        success: function(resultado){
            if(resultado > 0){
                resultado2=  '<p class="text-danger">Nombre de usuario ya existe</p>';
        }else{
            resultado2=  '<p class="text-success">Nombre de usuario disponible</p>';
        }
            $("#result_student").html(resultado2);

        }
    });
}

function comprueba_Parent_username(username){
    //con ajax enviamos el email mediante post a un archivo php
    $.ajax({
        url : '/api/user/'+username+'/comprobar',//ruta del archivo donte estara la consulta a la bd
        type : 'GET',
        cache : false,
        data : "username="+username,
        success: function(resultado){
            if(resultado > 0){
                resultado2=  '<p class="text-danger">Nombre de usuario ya existe</p>';
        }else{
            resultado2=  '<p class="text-success">Nombre de usuario disponible</p>';
        }
            $("#result").html(resultado2);

        }
    });
}





</script>
    <!--begin::Page Scripts(used by this page)-->

@endsection
