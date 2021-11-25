{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}

    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
<!--begin::Row-->
            <div class="row">
                <!--begin::Col-->
                 @foreach ($cursos as $curso)


                <!--begin::Col-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body text-center pt-4">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end">
                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header pb-1">
                                                <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-shopping-cart-1"></i>
                                                    </span>
                                                    <span class="navi-text">Order</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-calendar-8"></i>
                                                    </span>
                                                    <span class="navi-text">Event</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-graph-1"></i>
                                                    </span>
                                                    <span class="navi-text">Report</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-rocket-1"></i>
                                                    </span>
                                                    <span class="navi-text">Post</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-writing"></i>
                                                    </span>
                                                    <span class="navi-text">File</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Toolbar-->
                            <!--begin::User-->
                            <div class="mt-7 pb-2">
                                <div class="symbol symbol-circle symbol-lg-75 d-none">
                                    <img src="{{asset('/metronic/media/project-logos/escudo.png') }}" alt="image" />
                                </div>
                                <div class="symbol symbol-lg-75 symbol-circle symbol-light-success">
                                    <span class="font-size-h3 symbol-label font-weight-boldest">MP</span>
                                </div>
                            </div>
                            <!--end::User-->
                            <!--begin::Name-->
                            <div class="my-2">
                                <a href="" class="text-dark font-weight-bold text-hover-primary font-size-h4">{{$curso->name}}</a>
                            </div>
                            <!--end::Name-->
                            <!--begin::Label-->
                            <a href="#" class="label label-inline label-lg label-light-danger font-weight-bold">Profesor {{$curso->users->name}}</a>
                            @foreach ($curso->sections as $seccion)
                            <a href="#" class="label label-inline label-lg label-light-danger font-weight-bold">Seccion {{$seccion->name}}</a>
                            @endforeach
                            <!--end::Label-->

                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                @endforeach
            </div>
            <!--end::Row-->
</div>
</div>

@endsection
{{-- Styles Section --}}
@section('styles')



@endsection
{{-- Scripts Section --}}
@section('scripts')



    <!--begin::Page Scripts(used by this page)-->

@endsection
