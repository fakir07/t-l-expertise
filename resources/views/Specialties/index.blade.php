@extends('layouts.master')
@section('title')
    Specialties
@endsection


@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Lists
                        <!--begin::Separator-->
                        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                        <!--end::Separator-->
                        <!--begin::Description-->
                        <small class="text-muted fs-7 fw-bold my-1 ms-1">spécialité </small>
                        <!--end::Description-->
                    </h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                @if (count($errors) > 0)
                 
                    <div class="alert alert-danger d-flex align-items-center p-5 mb-10">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                        <span class="svg-icon svg-icon-2hx svg-icon-danger me-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.3"
                                    d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                    fill="black"></path>
                                <path
                                    d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                                    fill="black"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="d-flex flex-column">
                            <h4 class="mb-1 text-danger">This is an alert</h4>
                            @foreach ($errors->all() as $error)
                                <span>{{ $error }}</span>
                            @endforeach
                        </div>
                        <!--begin::Close-->
                        <button type="button"
                            class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
                            data-bs-dismiss="alert">
                            <i class="bi bi-x fs-1 text-primary"></i>
                        </button>
                    </div>
                @endif
                <!--begin::Row-->
                <!--begin::Card-->
                <div class="card">
                    <div class="card mb-5 mb-xl-8">
                        <!--begin::Header-->

                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                {{-- <span class="card-label fw-bolder fs-3 mb-1">Members Statistics</span>
                                <span class="text-muted mt-1 fw-bold fs-7">Over 500 members</span> --}}
                            </h3>
                            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-trigger="hover" title="Click to add a user">


                                <a href="#" class="btn  btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_new_target">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                                rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Ajouter une spécialité
                                </a>

                            </div>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <!--begin::Accordion-->
                            <!--begin::Table-->
                            <table id="kt_datatable_example_5"
                                class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="w-25px">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    data-kt-check="true" data-kt-check-target=".widget-9-check" />
                                            </div>
                                        </th>
                                        <th class="min-w-150px">Nom de spécialité</th>
                                        <th class="min-w-150px">Description</th>
                                        <th class="min-w-150px">Date ajouter</th>
                                        <th class="min-w-140px ">Actions</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    @if (isset($specialties))
                                        @foreach ($specialties as $specialtie)
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input widget-9-check" type="checkbox"
                                                            value="1" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary fs-6">
                                                                {{ $specialtie->specialty_name ? $specialtie->specialty_name : ' aucun section  ' }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>

                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary d-block fs-6">
                                                        {{ $specialtie->description ? $specialtie->description : ' aucun Description ' }}
                                                    </a>
                                                </td>
                                                <td>

                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary d-block fs-6">
                                                        {{ $specialtie->created_at ? $specialtie->created_at : ' aucun Description ' }}
                                                    </a>
                                                </td>

                                                <td>
                                                    <div class="d-flex justify-content flex-shrink-0">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#update{{ $specialtie->id }}"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3"
                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                        fill="black" />
                                                                    <path
                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                        fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <a data-bs-toggle="modal"
                                                            data-bs-target="#delete{{ $specialtie->id }}"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                        fill="black" />
                                                                    <path opacity="0.5"
                                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                        fill="black" />
                                                                    <path opacity="0.5"
                                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                        fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>


                                            <!-- modul delte -->
                                            <div class="modal fade" tabindex="-1" id="delete{{ $specialtie->id }}">
                                                <div class="modal-dialog mw-650px">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <form
                                                                action="{{ URL::route('specialties.destroy', 'delete') }}"
                                                                method="POST" id="kt_modal_new_target_form"
                                                                class="form">
                                                                @method('delete')
                                                                @csrf
                                                                <!--begin::Heading-->
                                                                <div class="mb-13 text-center">
                                                                    <!--begin::Title-->
                                                                    <h1 class="mb-3">Supperimer un spécialité</h1>

                                                                </div>
                                                                <!--end::Heading-->
                                                                <!--begin::Input group-->
                                                                <div class="d-flex flex-column mb-8 fv-row">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                                        <span class="required">voulez-vous
                                                                            supprimer spécialité </span>
                                                                        <code>{{ $specialtie->specialty_name }}</code>
                                                                        <input type="hidden" id="id"
                                                                            name="id" value="{{ $specialtie->id }}">
                                                                    </label>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-light"
                                                                        data-bs-dismiss="modal">Fermer</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Supprimer
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end modal delete -->

                                            <!-- Modal -->
                                            <div class="modal fade" tabindex="-1" id="update{{ $specialtie->id }}">
                                                <div class="modal-dialog mw-650px">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <form action="{{ route('specialties.update', 'specialty') }}"
                                                                method="POST" class="form">
                                                                @method('patch')
                                                                @csrf
                                                                <!--begin::Heading-->
                                                                <div class="mb-11 text-center">
                                                                    <!--begin::Title-->
                                                                    <h1 class="text-muted fw-bold ">Modifier une spécialité
                                                                    </h1>
                                                                    <!--end::Title-->
                                                                    <div class="separator border-2 my-10"></div>
                                                                </div>
                                                                <!--end::Heading-->
                                                                <!--begin::Input group-->
                                                                <div class="d-flex flex-column mb-8 fv-row">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                                        <span class="required">Nom du spécialité</span>
                                                                    </label>

                                                                    <input type="hidden" id="id" name="id"
                                                                        value="{{ $specialtie->id }}">
                                                                    <!--end::Label-->
                                                                    <input type="text"
                                                                        class="form-control form-control-solid"
                                                                        placeholder="Enter Nom du spécialité"
                                                                        name="specialty_name"
                                                                        value="{{ $specialtie->specialty_name }}" />
                                                                </div>
                                                                <div class="d-flex flex-column mb-8 fv-row">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                                        <span class="required">Description</span>
                                                                    </label>
                                                                    <!--end::Label-->
                                                                    <textarea type="text" name='description' class="form-control form-control-solid"
                                                                        placeholder="Enter le Description" name="description" rows="3">{{ $specialtie->description }}</textarea>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-light"
                                                                        data-bs-dismiss="modal">Fermer</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Ajouter</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Modal -->
                                        @endforeach
                                    @endif
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->

                        </div>
                        <!-- Modal -->
                        <div class="modal fade" tabindex="-1" id="kt_modal_new_target">
                            <div class="modal-dialog mw-650px">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <form action="{{ route('specialties.store') }}" method="POST" class="form">
                                            @csrf
                                            <!--begin::Heading-->
                                            <div class="mb-11 text-center">
                                                <!--begin::Title-->
                                                <h1 class="text-muted fw-bold ">Ajouter une spécialité</h1>
                                                <!--end::Title-->
                                                <div class="separator border-2 my-10"></div>
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-8 fv-row">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                    <span class="required">Nom du spécialité</span>
                                                </label>
                                                <!--end::Label-->
                                                <input type="text" class="form-control form-control-solid"
                                                    placeholder="Enter Nom du spécialité" name="specialty_name" />
                                            </div>
                                            <div class="d-flex flex-column mb-8 fv-row">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                    <span class="required">Description</span>
                                                </label>
                                                <!--end::Label-->
                                                <textarea type="text" name='description' class="form-control form-control-solid"
                                                    placeholder="Enter le Description" name="description" rows="3"></textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Fermer</button>
                                                <button type="submit" class="btn btn-primary">Ajouter</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Modal -->

                    </div>
                </div>
                <!--end::Card-->
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>



@endsection

@section('scripts')
    @toastr_js
    @toastr_render
@endsection
