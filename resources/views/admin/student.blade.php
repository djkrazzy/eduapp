<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Wizard 4</h5>     @foreach($errors->all() as $error)
<p>{{$error}}</p>
@endforeach
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted">Wizard 4</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Actions-->
                <a href="#" class="btn btn-light-primary font-weight-bolder btn-sm">Actions</a>
                <!--end::Actions-->
                <!--begin::Dropdown-->
                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                    <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="svg-icon svg-icon-success svg-icon-2x">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 m-0">
                        <!--begin::Navigation-->
                        <ul class="navi navi-hover">
                            <li class="navi-header font-weight-bold py-4">
                                <span class="font-size-lg">Choose Label:</span>
                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                            </li>
                            <li class="navi-separator mb-3 opacity-70"></li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-text">
                                        <span class="label label-xl label-inline label-light-success">Customer</span>
                                    </span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-text">
                                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                                    </span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-text">
                                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                    </span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-text">
                                        <span class="label label-xl label-inline label-light-primary">Member</span>
                                    </span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-text">
                                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                                    </span>
                                </a>
                            </li>
                            <li class="navi-separator mt-3 opacity-70"></li>
                            <li class="navi-footer py-4">
                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                <i class="ki ki-plus icon-sm"></i>Add new</a>
                            </li>
                        </ul>
                        <!--end::Navigation-->
                    </div>
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="card card-custom">
                <div class="card-body p-0">
                    <!--begin: Wizard-->
                    <div class="wizard wizard-3" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="true">
                        <!--begin: Wizard Nav-->
                        <div class="wizard-nav">
                            <div class="wizard-steps px-8 py-8 px-lg-15 py-lg-3">
                                <!--begin::Wizard Step 1 Nav-->
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                        <span>1.</span>Detalles de Alumno</h3>
                                        <div class="wizard-bar"></div>
                                    </div>


                                </div>
                                <!--end::Wizard Step 1 Nav-->
                                <!--begin::Wizard Step 2 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                        <span>2.</span>Detalles del padre</h3>
                                        <div class="wizard-bar"></div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 2 Nav-->
                                <!--begin::Wizard Step 3 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                        <span>3.</span>Datos adicionales</h3>
                                        <div class="wizard-bar"></div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 3 Nav-->
                                <!--begin::Wizard Step 4 Nav-->

                                <!--end::Wizard Step 4 Nav-->
                            </div>
                        </div>
                        <!--end: Wizard Nav-->
                        <!--begin: Wizard Body-->
                        <div class="card card-custom card-shadowless rounded-top-0">
                            <div class="card-body p-0">
                                <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                                    <div class="col-xl-12 col-xxl-7">
                                        <!--begin: Wizard Form-->

                                 {!! Form::open(['route'=>'estudiantes.store','files' => true, 'id'=>'kt_form','name'=>'kt_form' ,'class'=> 'form mt-0 mt-lg-10' ]) !!}
                                                <input type="hidden" name="role" id="role"  value="student">
                                            <!--begin: Wizard Step 1-->
                                            <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                                <div class="mb-10 font-weight-bold text-dark">Enter your Account Details</div>
                                                <!--begin::Input-->
                                                     <div class="row">
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Nombre</label>
                                    <input class="form-control" name="name" id="name" type="text" required="">
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Apellido</label>
                                    <input class="form-control" name="last_name" id="last_name" type="text" required="">
                                </div>
                               </div>
                               <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                  <div class="form-group label-floating is-empty">
                                        <label class="control-label">Nacimiento</label>
                                        <input type='date' class="form-control" id="date" data-position="top left" data-language='en' name="birthday" data-multiple-dates-separator="-"/>
                                        <span class="input-group-addon">
                                            <i class="icon-feather-calendar"></i>
                                        </span>
                                    </div>
                            </div>


                               <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Correo</label>
                                    <input class="form-control" name="email" id="student_email" type="email">

                                    <small><span id="email_result_student" ></span></small>
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Telefono</label>
                                    <input class="form-control" name="phone" id="phone" type="text">
                                </div>
                               </div>
                               <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                   <div class="form-group label-floating is-select">
                                    <label class="control-label">Genero</label>
                                    <div class="select">
                                        <select name="gender" id="gender" required="" class="form-control  kt_select2_1">
                                            <option value="">Seleccione</option>
                                            <option value="M">Masculino</option>
                                            <option value="F">Femenino</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                               <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Usuario></label>
                                    <input class="form-control" name="username" autocomplete="false" required="" type="text" id="user_student">
                                    <small><span id="result_student"></span></small>
                                </div>
                               </div>
                               <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Contraseña</label>
                                    <input class="form-control" name="password" id="password" required="" autocomplete="false" type="password">
                                </div>
                               </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Dirección</label>
                                    <input class="form-control" name="address" type="text">
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Roll ID</label>
                                    <input class="form-control" name="roll" type="text">
                                </div>
                               </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating is-select">
                                    <label class="control-label">Clase</label>
                                    <div class="select">

                                        {!! Form::select('clase',$cursos, null,['class'=>'form-control kt_select2_1','id'=> 'clase']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating is-select">
                                    <label class="control-label">Sección</label>
                                    <div class="select">
                                        <select name="section_id" id="section_selector_holder" class="form-control  kt_select2_1">>
                                            <option value="">Seleccione</option>

                                        </select>


                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating is-select">
                                    <label class="control-label">Trasnporte</label>
                                    <div class="select">
                                        <select name="transport_id " class="form-control  kt_select2_1" >

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating is-select">
                                    <label class="control-label">Salon></label>
                                    <div class="select">

                                {!! Form::select('dormitory_id"',$classrooms, null,['class'=>'form-control kt_select2_1','id'=> 'dormitory_id']) !!}

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                    <!--begin::Group-->
                                                                            <div class="form-group row">
                                                                                <label class="col-xl-3 col-lg-3 col-form-label text-left">Foto</label>
                                                                                <div class="col-lg-9 col-xl-9">
                                                                                    <div class="image-input image-input-outline" id="kt_user_add_avatar">
                                                                                        <div class="image-input-wrapper" style="background-image: url({{asset('media/users/blank.png')}})"></div>
                                                                                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                                                                            <input type="file" name="foto"  id="foto"accept=".png, .jpg, .jpeg" />
                                                                                            <input type="hidden" name="profile_avatar_remove" />
                                                                                        </label>
                                                                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Group-->
                            </div>
                        </div>
                                                <!--end::Input-->

                                            </div>


                                            <!--end: Wizard Step 1-->
                                            <!--begin: Wizard Step 2-->
                    <div class="pb-5" data-wizard-type="step-content">
                        <div class="mb-10 font-weight-bold text-dark">Nuevo padre<</div>
                                                <!--begin::Input-->
                        <div class="row">
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="description-toggle">
                                    <div class="description-toggle-content">

                                        <p>Si dese agregar un nuevo padre marque esta opción</p>
                                    </div>
                                     <div class="col-3">
                                       <span class="switch">
                                        <label>
                                         <input type="checkbox" id="check" value="1" name="account"/>
                                         <span></span>
                                        </label>
                                       </span>
                                      </div>

                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12" id="initial">
                                   <div class="form-group label-floating is-select">
                                    <label class="control-label">Seleccione un padre></label>
                                    <div class="select">

                                       {!! Form::select('parent_id',$users, null,['class'=>'form-control kt_select2_1']) !!}

                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="separator separator-dashed my-5"></div>
                        <div class="row" id="new_parent">

                               <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Nombres</label>
                                    <input class="form-control" name="parent_first_name" type="text">
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Apellidos</label>
                                    <input class="form-control" name="parent_last_name" type="text" >
                                </div>
                               </div>
                               <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                   <div class="form-group label-floating is-select">
                                    <label class="control-label">Genero</label>
                                    <div class="select">
                                        <select name="parent_gender" class="form-control  kt_select2_1">
                                            <option value="">Seleccione</option>
                                            <option value="M">Masculino</option>
                                            <option value="F">Femenino</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                               <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Correo</label>
                                    <input class="form-control" name="parent_email" id="parent_email" type="email">
                                    <small><span id="email_result_parent"></span></small>
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Usuario</label>
                                    <input class="form-control" name="parent_username" autocomplete="false" type="text" id="parent_username">
                                    <small><span id="result"></span></small>
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Contraseña</label>
                                    <input class="form-control" name="parent_password" autocomplete="false" type="password">
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Celular</label>
                                    <input class="form-control" name="parent_phone" type="text">
                                </div>
                               </div>
                               <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Numero Identificaion</label>
                                    <input class="form-control" name="parent_idcard" type="text" >
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Profesión</label>
                                    <input class="form-control" name="parent_profession" type="text">
                                </div>
                               </div>
                               <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                   <div class="form-group label-floating">
                                    <label class="control-label">Dirección</label>
                                    <input class="form-control" name="parent_address" type="text">
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Telefono de casa</label>
                                    <input class="form-control" name="parent_home_phone" type="text">
                                </div>
                               </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Lugar de trabajo></label>
                                    <input class="form-control" name="parent_business" type="text">
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Telefono de trabajo</label>
                                    <input class="form-control" name="parent_business_phone" type="text">
                                </div>
                               </div>
                           </div>
                                                <!--end::Input-->


                                </div>
                                            <!--end: Wizard Step 2-->
                                            <!--begin: Wizard Step 3-->
                                            <div class="pb-5" data-wizard-type="step-content">
                                                <div class="mb-10 font-weight-bold text-dark">Enter your Payment Details</div>

                                                <div class="row">
                               <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Condiciones o enfermedades</label>
                                    <input class="form-control" name="diseases" type="text">
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Alergias</label>
                                    <input class="form-control" name="allergies" type="text" >
                                </div>
                               </div>
                               <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Doctor Personal</label>
                                    <input class="form-control" name="doctor" type="text" >
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Telefono del doctor</label>
                                    <input class="form-control" name="doctor_phone" type="text">
                                </div>
                               </div>
                               <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Persona autorizada</label>
                                    <input class="form-control" name="auth_person" type="text" >
                                </div>
                            </div>
                               <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Telefono de persona autorizada</label>
                                    <input class="form-control" name="auth_phone" type="text">
                                </div>
                               </div>
                               <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Notas:</label>
                                    <textarea class="form-control" name="note"></textarea>
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="description-toggle">
                                    <div class="description-toggle-content">
                                        <div class="h6">Descargaf formulario de admision</div>
                                        <p>Download Adminssion Sheet Message</p>
                                    </div>
                                    <div class="togglebutton">
                                        <label><input type="checkbox" value="1" name="download_pdf"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            </div>
                                            <!--end: Wizard Step 3-->

                                            <!--begin: Wizard Actions-->
                                            <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                                <div class="mr-2">
                                                    <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
                                                </div>
                                                <div>
                                           <button type="submit" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="">Submit</button>
                                                    <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">Next</button>
                                                </div>
                                            </div>
                                            <!--end: Wizard Actions-->
                                       {!! Form::close() !!}
                                        <!--end: Wizard Form-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end: Wizard Bpdy-->
                    </div>
                    <!--end: Wizard-->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->

{{-- Scripts Section --}}
@section('scripts')
<script>
     var _avatar;
    var _initAvatar = function () {
        _avatar = new KTImageInput('kt_user_add_avatar');
    }
_initAvatar();



      $("#clase").change(onSelctCursoChsnged);

      function onSelctCursoChsnged(){
    var curso_id= $(this).val();
    $.get('/api/curso/'+curso_id+'/sections', function(data) {
            var html_select = ' <option value="">Seleccione</option>';
            for (var i =0; i<data.length ;++i ){
                html_select += ' <option value="'+data[i].id+'">'+data[i].name+'</option>';
            }
            $("#section_selector_holder").html(html_select);
            $('#section_selector_holder').select2();
    });
}


$('.kt_select2_1').select2({
   placeholder: "Select a state"
  });

   $('#check').click(function () {
      if ($('#check').is(':checked') == true) {
          $("#new_parent").show(500);
          $("#initial").hide(500);
      }else{
          $("#new_parent").hide(500);
          $("#initial").show(500);
      }
  });
  $("#new_parent").hide();





  "use strict";

// Class definition
var KTWizard4 = function () {
    // Base elements
    var _wizardEl;
    var _formEl;
    var _wizardObj;
    var _validations = [];
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // Private functions
    var _initWizard = function () {
        // Initialize form wizard
        _wizardObj = new KTWizard(_wizardEl, {
            startStep: 1, // initial active step number
            clickableSteps: false  // allow step clicking
        });

        // Validation before going to next page
        _wizardObj.on('change', function (wizard) {
            if (wizard.getStep() > wizard.getNewStep()) {
                return; // Skip if stepped back
            }

            // Validate form before change wizard step
            var validator = _validations[wizard.getStep() - 1]; // get validator for currnt step

            if (validator) {
                validator.validate().then(function (status) {
                    if (status == 'Valid') {
                        wizard.goTo(wizard.getNewStep());

                        KTUtil.scrollTop();
                    } else {
                        Swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light"
                            }
                        }).then(function () {
                            KTUtil.scrollTop();
                        });
                    }
                });
            }

            return false;  // Do not change wizard step, further action will be handled by he validator
        });

        // Change event
       _wizardObj.on('changed', function (wizard) {
            KTUtil.scrollTop();
        });

        // Submit event
        // _wizardObj.on('submit', function (wizard) {
        // var formData = new FormData($("#kt_form")[0]);

        //  name = $('#name').val();
        // email = $('#student_email').val();
        // last_name = $('#last_name').val();

        // birthday = $('#date').val();
        // phone = $('#phone').val();
        // gender = $('#gender').val();
        // username = $('#user_student').val();
        // password = $('#password').val();
        // role = $('#role').val();
        // foto = $('#foto').val();
        // parent_id = $('#parent_id').val();


        // $.ajax({
        //   url: "/contact-form",
        //   type: "POST",
        //   data:{
        //       name:name,
        //       email:email,
        //       last_name:last_name,
        //       birthday:birthday,
        //       phone:phone,
        //        gender:gender,
        //         username:username,
        //          password:password,
        //           role:role,
        //            foto:foto,
        //             parent_id:parent_id,

        //   },


        //   success:function(response){
        //     console.log(response);
        //     if (response) {
        //       $('#success-message').text(response.success);
        //       $("#kt_form")[0].reset();
        //     }
        //   },
        //   error: function(response) {
        //      // $('#name-error').text(response.responseJSON.errors.name);

        //   }
        //  });

        // });
    }

    var _initValidation = function () {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        // Step 1
        _validations.push(FormValidation.formValidation(
            _formEl,
            {
                fields: {
                    fname: {
                        validators: {
                            notEmpty: {
                                message: 'First name is required'
                            }
                        }
                    },
                    lname: {
                        validators: {
                            notEmpty: {
                                message: 'Last Name is required'
                            }
                        }
                    },
                    phone: {
                        validators: {
                            notEmpty: {
                                message: 'Phone is required'
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'Email es requerido'
                            },
                            emailAddress: {
                                message: 'No es una direccion de correo valida'
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    // Bootstrap Framework Integration
                    bootstrap: new FormValidation.plugins.Bootstrap({
                        //eleInvalidClass: '',
                        eleValidClass: '',
                    })
                }
            }
        ));

        // Step 2
        _validations.push(FormValidation.formValidation(
            _formEl,
            {
                fields: {
                    address1: {
                        validators: {
                            notEmpty: {
                                message: 'Address is required'
                            }
                        }
                    },
                    postcode: {
                        validators: {
                            notEmpty: {
                                message: 'Postcode is required'
                            }
                        }
                    },
                    city: {
                        validators: {
                            notEmpty: {
                                message: 'City is required'
                            }
                        }
                    },
                    state: {
                        validators: {
                            notEmpty: {
                                message: 'State is required'
                            }
                        }
                    },
                    country: {
                        validators: {
                            notEmpty: {
                                message: 'Country is required'
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    // Bootstrap Framework Integration
                    bootstrap: new FormValidation.plugins.Bootstrap({
                        //eleInvalidClass: '',
                        eleValidClass: '',
                    })
                }
            }
        ));

        // Step 3
        _validations.push(FormValidation.formValidation(
            _formEl,
            {
                fields: {
                    ccname: {
                        validators: {
                            notEmpty: {
                                message: 'Credit card name is required'
                            }
                        }
                    },
                    ccnumber: {
                        validators: {
                            notEmpty: {
                                message: 'Credit card number is required'
                            },
                            creditCard: {
                                message: 'The credit card number is not valid'
                            }
                        }
                    },
                    ccmonth: {
                        validators: {
                            notEmpty: {
                                message: 'Credit card month is required'
                            }
                        }
                    },
                    ccyear: {
                        validators: {
                            notEmpty: {
                                message: 'Credit card year is required'
                            }
                        }
                    },
                    cccvv: {
                        validators: {
                            notEmpty: {
                                message: 'Credit card CVV is required'
                            },
                            digits: {
                                message: 'The CVV value is not valid. Only numbers is allowed'
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    // Bootstrap Framework Integration
                    bootstrap: new FormValidation.plugins.Bootstrap({
                        //eleInvalidClass: '',
                        eleValidClass: '',
                    })
                }
            }
        ));
    }

    return {
        // public functions
        init: function () {
            _wizardEl = KTUtil.getById('kt_wizard');
            _formEl = KTUtil.getById('kt_form');

            _initWizard();
            _initValidation();
        }
    };
}();

jQuery(document).ready(function () {
    KTWizard4.init();

});



</script>
@endsection
