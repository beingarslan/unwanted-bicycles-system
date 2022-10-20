<x-base-layout>
    <link href="{{ asset('demo1/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('demo1/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container">
                <!--begin::Layout-->
                <div class="d-flex flex-column flex-xl-row">
                    <!--begin::Sidebar-->
                    <div class="flex-column flex-lg-row-auto w-100 w-xl-400px mb-10">
                        <!--begin::Card-->
                        <div class="card mb-5 mb-xl-8">
                            <!--begin::Card body-->
                            <div class="card-body pt-0 pt-lg-1">
                                <!--begin::Summary-->
                                <!--begin::Card-->
                                <div class="card">
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex flex-center flex-column pt-12 p-9 px-0">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-100px symbol-circle mb-7">
                                            <img src="{{ $user->avatar_url }}" alt="image" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-1">{{ $user->name }}</a>
                                        <!--end::Name-->
                                        <!--begin::Position-->
                                        <div class="fs-5 fw-bold text-gray-400 mb-6">{{ $user->email }}</div>
                                        <!--end::Position-->
                                        <!--begin::Info-->
                                        {{-- <div class="d-flex flex-wrap flex-center">
                                            <!--begin::Stats-->
                                            <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                                <div class="fs-4 fw-bolder text-gray-700">
                                                    <span class="w-75px">6,900</span>
                                                    <!--begin::Svg Icon | path: icons/stockholm/Navigation/Arrow-up.svg-->
                                                    <span class="svg-icon svg-icon-3 svg-icon-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.5" x="11"
                                                                    y="5" width="2" height="14"
                                                                    rx="1" />
                                                                <path
                                                                    d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                                                                    fill="#000000" fill-rule="nonzero" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="fw-bold text-gray-400">Earnings</div>
                                            </div>
                                            <!--end::Stats-->
                                            <!--begin::Stats-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
                                                <div class="fs-4 fw-bolder text-gray-700">
                                                    <span class="w-50px">130</span>
                                                    <!--begin::Svg Icon | path: icons/stockholm/Navigation/Arrow-down.svg-->
                                                    <span class="svg-icon svg-icon-3 svg-icon-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.5" x="11"
                                                                    y="5" width="2" height="14"
                                                                    rx="1" />
                                                                <path
                                                                    d="M6.70710678,18.7071068 C6.31658249,19.0976311 5.68341751,19.0976311 5.29289322,18.7071068 C4.90236893,18.3165825 4.90236893,17.6834175 5.29289322,17.2928932 L11.2928932,11.2928932 C11.6714722,10.9143143 12.2810586,10.9010687 12.6757246,11.2628459 L18.6757246,16.7628459 C19.0828436,17.1360383 19.1103465,17.7686056 18.7371541,18.1757246 C18.3639617,18.5828436 17.7313944,18.6103465 17.3242754,18.2371541 L12.0300757,13.3841378 L6.70710678,18.7071068 Z"
                                                                    fill="#000000" fill-rule="nonzero"
                                                                    transform="translate(12.000003, 14.999999) scale(1, -1) translate(-12.000003, -14.999999)" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="fw-bold text-gray-400">Tasks</div>
                                            </div>
                                            <!--end::Stats-->
                                            <!--begin::Stats-->
                                            <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                                <div class="fs-4 fw-bolder text-gray-700">
                                                    <span class="w-50px">500</span>
                                                    <!--begin::Svg Icon | path: icons/stockholm/Navigation/Arrow-up.svg-->
                                                    <span class="svg-icon svg-icon-3 svg-icon-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.5" x="11"
                                                                    y="5" width="2" height="14"
                                                                    rx="1" />
                                                                <path
                                                                    d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                                                                    fill="#000000" fill-rule="nonzero" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="fw-bold text-gray-400">Hours</div>
                                            </div>
                                            <!--end::Stats-->
                                        </div> --}}
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                                <!--end::Summary-->
                                <!--begin::Details toggle-->

                                <!--end::Details toggle-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--begin::Details content-->
                                <div id="kt_customer_view_details" class="collapse show">
                                    <div class="py-5 fs-6">
                                        @if ($user->status)
                                            <span class="badge badge-light-success d-inline">{{ __('Active') }}</span>
                                        @else
                                            <span class="badge badge-light-danger d-inline">{{ __('Inactive') }}</span>
                                        @endif

                                        <div class="fw-bolder mt-5">Full Name</div>
                                        <div class="text-gray-600">{{ $user->name }}</div>
                                        <div class="fw-bolder mt-5">Email</div>
                                        <div class="text-gray-600">{{ $user->email }}</div>
                                        <div class="fw-bolder mt-5">Account ID</div>
                                        <div class="text-gray-600">{{ $user->id }}</div>
                                        <div class="fw-bolder mt-5">Address</div>
                                        <div class="text-gray-600">{{ $user->address }}</div>
                                    </div>
                                </div>
                                <!--end::Details content-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Sidebar-->
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid ms-lg-15">
                        <!--begin:::Tabs-->
                        <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
                            <!--begin:::Tab item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                    href="#kt_customer_view_overview_tab">Overview</a>
                            </li>
                            <!--end:::Tab item-->
                        </ul>
                        <!--end:::Tabs-->
                        <!--begin:::Tab content-->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="kt_customer_view_overview_tab" role="tabpanel">
                                <div class="card pt-4 mb-6 mb-xl-9">
                                    <div class="card-header border-0">
                                        <div class="card-title">
                                            <h2>User Actions</h2>
                                        </div>
                                        <div class="card-toolbar">
                                            <button type="button" class="btn btn-sm btn-flex btn-danger"
                                                data-bs-toggle="modal" data-bs-target="#removeApplicantModal">
                                                Remove User
                                            </button>

                                            {{-- <button type="button" class="btn btn-sm btn-flex btn-primary ms-2"
                                                data-bs-toggle="modal" data-bs-target="#updateApplicationModal">
                                                Update Application
                                            </button> --}}
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 pb-5">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end:::Tab content-->
                    </div>
                    <!--end::Content-->
                </div>

            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>

    {{-- removeApplicantModal --}}
    <div class="modal fade" id="removeApplicantModal" tabindex="-1" aria-labelledby="removeApplicantModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="removeApplicantModalLabel">
                        Remove
                        User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to remove this user?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form action="{{ route('admin.users.remove') }}" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <button type="submit" class="btn btn-danger">Remove</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->

    {{-- updateApplicationModal --}}
    <div class="modal fade" id="updateApplicationModal" tabindex="-1" aria-labelledby="updateApplicationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateApplicationModalLabel">
                        Update
                        Application</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.applications.update.userinfo') }}" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <div class="fv-row mb-7">
                            <label for="status" class="fs-6 fw-bold mb-2">Status</label>
                            <select class="form-control form-control-solid" name="status_id" id="status">
                                @foreach ($statuses as $status)
                                    <option value="{{ $status->id }}"
                                        {{ $status->id == $user?->userApplicationStatus?->status_id ? 'selected' : '' }}>
                                        {{ $status->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="fv-row mb-7">
                            <label for="comment" class="fs-6 fw-bold mb-2">Comment</label>
                            <textarea class="form-control form-control-solid" name="comment" id="comment" rows="3"></textarea>
                        </div>
                        {{-- send email checkbox --}}
                        <div class="fv-row mb-7">
                            <label for="send_email" class="fs-6 fw-bold mb-2">Send Email</label>
                            <input type="checkbox" name="send_email" id="send_email" checked>
                        </div>
                        <div class="modal-footer flex-right">
                            <!--begin::Button-->
                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">Save Changes</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->

    <script src="{{ asset('demo1/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('demo1/js/scripts.bundle.js') }}"></script>
</x-base-layout>
