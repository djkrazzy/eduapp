


















<!--begin::Container-->
                            <div class="container">
                                <!--begin::Card-->
                                <div class="card card-custom">
                                    <!--begin::Header-->
                                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                        <div class="card-title">
                                            <h3 class="card-label">User Management
                                            <span class="d-block text-muted pt-2 font-size-sm">User management made easy</span></h3>
                                        </div>
                                        <div class="card-toolbar">
                                            @foreach($errors->all() as $error)
<p>{{$error}}</p>
@endforeach
                                            <!--begin::Dropdown-->
                                            <div class="dropdown dropdown-inline mr-2">
                                                <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="svg-icon svg-icon-md">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
                                                            <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>Export</button>
                                                <!--begin::Dropdown Menu-->
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                    <!--begin::Navigation-->
                                                    <ul class="navi flex-column navi-hover py-2">
                                                        <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon">
                                                                    <i class="la la-print"></i>
                                                                </span>
                                                                <span class="navi-text">Print</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon">
                                                                    <i class="la la-copy"></i>
                                                                </span>
                                                                <span class="navi-text">Copy</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon">
                                                                    <i class="la la-file-excel-o"></i>
                                                                </span>
                                                                <span class="navi-text">Excel</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon">
                                                                    <i class="la la-file-text-o"></i>
                                                                </span>
                                                                <span class="navi-text">CSV</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon">
                                                                    <i class="la la-file-pdf-o"></i>
                                                                </span>
                                                                <span class="navi-text">PDF</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <!--end::Navigation-->
                                                </div>
                                                <!--end::Dropdown Menu-->
                                            </div>
                                            <!--end::Dropdown-->
                                            <!--begin::Button-->
                                            <a href="#" class="btn btn-light-primary font-weight-bold ml-2" data-toggle="modal" data-target="#creardocente">Add User</a>
                                            <!--end::Button-->
                                        </div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <!--begin: Datatable-->


                                            <table class="table table-separate table-head-custom table-checkable" id="datatable">
                                                <thead>
                                                    <tr>
                                                        <td>ID</td>
                                                        <td>Nombre</td>
                                                        <td>Telefono</td>
                                                        <td>Usuario</td>
                                                           <td>Opciones</td>
                                                    </tr>
                                                </thead>
                                               <tbody>
                                                @foreach($users as $user)
                                                   <tr>
                                                       <td>{{$user->id}}</td>

                                                       <td><div class="d-flex align-items-center">
                                <div class="symbol symbol-40 symbol-sm flex-shrink-0">
                                    <img class="" src="{{$user->profile_photo_url }}" alt="photo">
                                </div>
                                <div class="ml-4">
                                    <div class="text-dark-75 font-weight-bolder font-size-lg mb-0">{{$user->name}}</div>
                                    <a href="#" class="text-muted font-weight-bold text-hover-primary">{{$user->email}}</a>
                                </div>
                            </div>
                            </td>
                            <td><div class="font-weight-bolder font-size-lg mb-0">{{$user->phone}}</div></td>
                             <td><div class="font-weight-bold text-muted">{{$user->username}}</div></td>
                             <td><div class="dropdown dropdown-inline">
                                <a href="javascript:;" class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon mr-2" data-toggle="dropdown">
                                    <span class="svg-icon svg-icon-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"/>\
                                                <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"/>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <ul class="navi flex-column navi-hover py-2">
                                        <li class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                            Choose an action:
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="la la-print"></i></span>
                                                <span class="navi-text">Print</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="la la-copy"></i></span>
                                                <span class="navi-text">Copy</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="la la-file-excel-o"></i></span>
                                                <span class="navi-text">Excel</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="la la-file-text-o"></i></span>
                                                <span class="navi-text">CSV</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="la la-file-pdf-o"></i></span>
                                                <span class="navi-text">PDF</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:;" class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon mr-2" title="Edit details">
                                <span class="svg-icon svg-icon-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "/>\
                                            <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                            <a href="javascript:;" class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon" title="Delete">
                                <span class="svg-icon svg-icon-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>\
                                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
                                        </g>
                                    </svg>
                                </span>
                            </a></td>
                                                   </tr>
                                                   @endforeach
                                               </tbody>
                                            </table>


                                        <!--end: Datatable-->
                                    </div>
                                    <!--end::Body-->

                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Container-->



        <div class="modal fade" id="creardocente" tabindex="-1" role="dialog" aria-labelledby="creardocente" aria-hidden="true">
        <div class="modal-dialog window-popup edit-my-poll-popup" role="document">
            <div class="modal-content">
                <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close"></a>
                <div class="modal-header bg-primary"  >
                     <span class="card-icon">
                <i class="flaticon2-user-1 text-white"></i>
            </span>
                <h5 class="card-label text-white" id="exampleModalLabel">Nuevo Profesor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
                <div class="modal-body">

                    <div class="ui-block-content">
                        {!! Form::open(['route'=>'admin.store','files' => true ]) !!}
                                    <input type="hidden" name="role" value="teacher">
                            <div class="row">
                                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">

                                                                           <!--begin::Group-->
                                                                            <div class="form-group row">
                                                                                <label class="col-xl-3 col-lg-3 col-form-label text-left">Foto</label>
                                                                                <div class="col-lg-9 col-xl-9">
                                                                                    <div class="image-input image-input-outline" id="kt_user_add_avatar">
                                                                                        <div class="image-input-wrapper" style="background-image: url({{asset('media/users/blank.png')}})"></div>
                                                                                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                                                                            <input type="file" name="foto" accept=".png, .jpg, .jpeg" />
                                                                                            <input type="hidden" name="profile_avatar_remove" />
                                                                                        </label>
                                                                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Group-->

                                    <div class="form-group label-floating">
                                        <label class="control-label">Nombres</label>
                                        <input class="form-control" name="name" type="text" required="">
                                    </div>


                                    <div class="form-group label-floating">
                                        <label class="control-label">Apellidos</label>
                                        <input class="form-control" name="last_name" type="text" required="">
                                    </div>


                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">Genero</label>
                                        <div class="select" >
                                            <select name="gender" class="form-control  kt_select2_1">
                                                <option value="">Seleccione</option>
                                                <option value="M">Masculino</option>
                                                <option value="F">Femenino</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group label-floating">
                                        <label class="control-label">Usuario</label>
                                        <input class="form-control" placeholder="" type="text" name="username" id="user_student">
                                        <small><span id="result_student"></span></small>
                                        <span class="input-group-addon">
                                            <i class="icon-feather-mail"></i>
                                        </span>
                                    </div>


                                    <div class="form-group label-floating">
                                        <label class="control-label">Contraseña</label>
                                        <input class="form-control" placeholder="" type="password" name="password">
                                        <span class="input-group-addon">
                                            <i class="icon-feather-mail"></i>
                                        </span>
                                    </div>


                                    <div class="form-group label-floating">
                                        <label class="control-label">Email</label>
                                        <input class="form-control" placeholder="" type="email" id="student_email" name="email">
                                        <small><span id="email_result_student"></span></small>
                                        <span class="input-group-addon">
                                            <i class="icon-feather-mail"></i>
                                        </span>
                                    </div>


                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Telefono</label>
                                        <input class="form-control" name="phone" type="text">
                                        <span class="input-group-addon">
                                            <i class="icon-feather-phone"></i>
                                        </span>
                                    </div>


                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Identificación</label>
                                        <input class="form-control" name="idcard" type="text">
                                        <span class="input-group-addon">
                                            <i class="icon-feather-phone"></i>
                                        </span>
                                    </div>


                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Nacimiento</label>
                                        <input type='date' class="form-control" id="date" data-position="top left" data-language='en' name="birthday" data-multiple-dates-separator="-"/>
                                        <span class="input-group-addon">
                                            <i class="icon-feather-calendar"></i>
                                        </span>
                                    </div>


                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Direccion</label>
                                        <input class="form-control" name="address" type="text">
                                        <span class="input-group-addon">
                                            <i class="icon-feather-map-pin"></i>
                                        </span>
                                    </div>
                                </div>

                            <div class="form-buttons-w text-right">
                                <center><button class="btn btn-rounded btn-success btn-lg" id="sub_teacher" type="submit">Guardar</button></center>
                            </div>
                {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>



