<x-auth-register-layout>

    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Authentication - Multi-steps-->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column stepper-multistep"
            id="kt_create_account_stepper">
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto w-lg-350px w-xl-500px">
                <div class="d-flex flex-column position-lg-fixed top-0 bottom-0 w-lg-350px w-xl-500px scroll-y bgi-size-cover bgi-position-center"
                    style="background-image: url(/demo1/media/misc/auth-bg.png)">
                    <!--begin::Header-->
                    <div class="d-flex flex-center py-10 py-lg-20 mt-lg-20">
                        <!--begin::Logo-->
                        <a href="/register">
                            {{-- <img alt="Logo" src="assets/media/logos/custom-1.png" class="h-70px" /> --}}
                            <h1 class="text-white">
                                {{ config('app.name') }}
                            </h1>
                        </a>
                        <!--end::Logo-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="d-flex flex-row-fluid justify-content-center p-10">
                        <div class="stepper-nav">
                            <!--begin::Step 1-->
                            <div class="stepper-item current" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon rounded-3">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">1</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title fs-2">{{ _('Membership Application') }}</h3>
                                        <div class="stepper-desc fw-normal">Enter the required information</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon rounded-3">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">2</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title fs-2">Applicant Information</h3>
                                        <div class="stepper-desc fw-normal">Please enter the applicant information.
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">3</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title fs-2">Login Details</h3>
                                        <div class="stepper-desc fw-normal">Setup your login details</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">4</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Terms of Service</h3>
                                        <div class="stepper-desc fw-normal">Please read and agree to the terms of use
                                            before purchasing.</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 4-->
                            <!--begin::Step 5-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">5</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Completed</h3>
                                        <div class="stepper-desc fw-normal">Your account is created</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 5-->
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
            </div>
            <!--begin::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-650px w-xl-700px p-10 p-lg-15 mx-auto">
                        <!--begin::Form-->
                        <form class="my-auto pb-5" novalidate="novalidate" id="kt_create_account_form">
                            <!--begin::Step 1-->
                            <div class="current" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-12">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-dark">Enter Company Information</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">Please enter your company information
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <label class="form-label required">Company Name</label>
                                        <input name="company_name"
                                            class="form-control form-control-lg form-control-solid"
                                            placeholder="Company Name" id="company_name" type="text">
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="form-label required">Postal Code</label>
                                        <input name="postal_code"
                                            class="form-control form-control-lg form-control-solid"
                                            placeholder="Postal Code"
                                            onKeyUp="AjaxZip3.zip2addr('postal_code','','prefecture','county','town');"
                                            id="postal_code" type="text">
                                        <div class="form-text">Half-width numbers without
                                            hyphens</div>
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="form-label required">Prefecture</label>
                                        <input name="prefecture" class="form-control form-control-lg form-control-solid"
                                            placeholder="Prefecture" id="prefecture" type="text">
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="form-label required">County</label>
                                        <input name="county" class="form-control form-control-lg form-control-solid"
                                            placeholder="County" id="county" type="text">
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="form-label required">Town</label>
                                        <input name="town" class="form-control form-control-lg form-control-solid"
                                            placeholder="Town" id="town" type="text">
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="form-label required">Building Name</label>
                                        <input name="building_name"
                                            class="form-control form-control-lg form-control-solid"
                                            placeholder="Building Name" id="building_name" type="text">
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="form-label required">Phone</label>
                                        <input name="phone_number"
                                            class="form-control form-control-lg form-control-solid"
                                            placeholder="Phone" id="phone_number" type="text">
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="form-label required">Fax Number</label>
                                        <input name="fax_number"
                                            class="form-control form-control-lg form-control-solid"
                                            placeholder="Fax Number" id="fax_number" type="text">
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="form-label required">Home Page</label>
                                        <input name="home_page"
                                            class="form-control form-control-lg form-control-solid"
                                            placeholder="Home Page" id="home_page" type="text">
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-12">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-dark">Enter applicant information</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">Please enter the applicant
                                            information.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <label class="form-label required">Department/Title</label>
                                        <input name="department"
                                            class="form-control form-control-lg form-control-solid"
                                            placeholder="Department/Title" id="department" type="text">
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="form-label required">Full Name</label>
                                        <input name="full_name"
                                            class="form-control form-control-lg form-control-solid"
                                            placeholder="Full Name" id="full_name" type="text">
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="form-label required">Name Furigana</label>
                                        <input name="name_furigana"
                                            class="form-control form-control-lg form-control-solid"
                                            placeholder="Name Furigana" id="name_furigana" type="text">
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="form-label required">Emergency Contact Phone</label>
                                        <input name="emergency_phone"
                                            class="form-control form-control-lg form-control-solid"
                                            placeholder="Emergency Contact Phone" id="emergency_phone"
                                            type="text">
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <div class="fv-row mb-10">
                                        <label class="form-label required">Email</label>
                                        <input name="email" id="user_email"
                                            class="form-control form-control-lg form-control-solid"
                                            placeholder="Email" type="email" value="{{ $user->email }}" readonly>
                                    </div>

                                    <input type="hidden" name="api_token" id="api_token" value="{{ $user->api_token }}">
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <div>

                                        <h1>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Illegal Bicycle Removal.com
                                                    Terms of Use</font>
                                            </font>
                                        </h1>
                                        <br>
                                        <ol>
                                            <li>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">These terms of use
                                                        (hereinafter referred to as the "Terms") apply to the service
                                                        that Bike Off Corporation (hereinafter referred to as the
                                                        "Company") accepts removal requests on this website (hereinafter
                                                        referred to as the "Service "." </font>
                                                    <font style="vertical-align: inherit;">All registered members
                                                        (hereinafter referred to as "requesters") shall use this service
                                                        in accordance with these Terms.</font>
                                                </font>
                                            </li>
                                        </ol>
                                        <br>
                                        <h2>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Article 1 (Application)</font>
                                            </font>
                                        </h2>
                                        <ol>
                                            <li>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">This agreement shall apply
                                                        to all relationships related to the use of this service between
                                                        the client and our company.</font>
                                                </font>
                                            </li>
                                        </ol>
                                        <br>
                                        <h2>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Article 2 (Registration for use)
                                                </font>
                                            </font>
                                        </h2>
                                        <ol>
                                            <li>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">The requester applies for
                                                        usage registration by the method specified by the Company, and
                                                        the usage registration is completed when the Company approves
                                                        this. </font>
                                                    <font style="vertical-align: inherit;">If we determine that the
                                                        applicant for use registration has any of the following reasons,
                                                        we may not approve the application for use registration, and we
                                                        will not be obliged to disclose the reason.</font>
                                                </font>
                                            </li>
                                        </ol>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">(1) When false information is
                                                    submitted when applying for user registration</font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">(2) When the application is from
                                                    a person who has violated these Terms</font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">(3) If the area for removal or
                                                    collection is outside our service area</font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">(4) When the request for removal
                                                    or collection is closer than the schedule set by the Company</font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">(5) In addition, when the
                                                    Company determines that the use registration is not appropriate.
                                                </font>
                                            </font>
                                        </p>
                                        <br>
                                        <h2>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Article 3 (Management of member
                                                    registration ID and password)</font>
                                            </font>
                                        </h2>
                                        <ol>
                                            <li>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">The requester shall manage
                                                        the member ID and password of this service at his/her own
                                                        responsibility. </font>
                                                    <font style="vertical-align: inherit;">Under no circumstances shall
                                                        the requester transfer or lend the member ID and password to a
                                                        third party. </font>
                                                    <font style="vertical-align: inherit;">If the combination of the
                                                        member ID and password matches the registered information and is
                                                        logged in, the Company will consider it to be used by the member
                                                        who has registered the member ID.</font>
                                                </font>
                                            </li>
                                        </ol>
                                        <br>
                                        <h2>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Article 4 (Usage Fee and Payment
                                                    Method)</font>
                                            </font>
                                        </h2>
                                        <ol>
                                            <li>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">As a consideration for using
                                                        this service, the requester shall pay the usage fee separately
                                                        determined by our company and displayed on this website by the
                                                        method specified by our company. </font>
                                                    <font style="vertical-align: inherit;">If the client delays payment
                                                        of the usage fee, the client shall pay late damages at a rate of
                                                        14.6% per year.
                                                    </font>
                                                </font>
                                            </li>
                                        </ol>
                                        <br>
                                        <h2>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Article 5 (Prohibitions)</font>
                                            </font>
                                        </h2>
                                        <ol>
                                            <li>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">In using this service, the
                                                        requester must not do the following acts.</font>
                                                </font>
                                            </li>
                                        </ol>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">(1) Acts that violate laws or
                                                    public order and morals</font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">(2) Acts related to criminal
                                                    activity</font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">(3) Actions that destroy or
                                                    interfere with the functions of our server or network</font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">(4) Acts that may interfere with
                                                    the operation of the Company's services</font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">(5) Acts of collecting or
                                                    accumulating personal information, etc. regarding property owners
                                                </font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">(6) Acts of pretending to be
                                                    another client</font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">(7) Acts that directly or
                                                    indirectly provide benefits to antisocial forces in relation to our
                                                    services</font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">(8) Other acts that the Company
                                                    deems inappropriate</font>
                                            </font>
                                        </p>
                                        <br>
                                        <h2>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Article 6 (Contents of this
                                                    service)</font>
                                            </font>
                                        </h2>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">1. </font>
                                                <font style="vertical-align: inherit;">The requester shall apply for
                                                    the service of removing and collecting the bicycle/motorcycle within
                                                    this service.</font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">2. </font>
                                                <font style="vertical-align: inherit;">The service contract shall be
                                                    concluded at the time when the bicycle/motorbike is collected from
                                                    the property at the relevant property.</font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">3. </font>
                                                <font style="vertical-align: inherit;">Even if the bicycle to be
                                                    removed is not found in the requested property, or if the bicycle is
                                                    not clearly specified, it will be billed as consideration for using
                                                    this service.</font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Four. </font>
                                                <font style="vertical-align: inherit;">The requester must warn the
                                                    bicycle/motorcycle for which removal is requested, and announce the
                                                    removal of the illegally parked bicycle on the bulletin board and in
                                                    each household.</font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Five. </font>
                                                <font style="vertical-align: inherit;">If the requester asks the agency
                                                    to notify or warn of illegally parked bicycles or motorcycles, the
                                                    request shall be made after confirming the completion of the work.
                                                </font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">6. </font>
                                                <font style="vertical-align: inherit;">If the owner contacts us to stop
                                                    collection, we must promptly notify the company, remove the warning
                                                    tag from the bicycle to be removed, and collect the warning letter.
                                                </font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">7. </font>
                                                <font style="vertical-align: inherit;">After the Company collects the
                                                    said reason, the Company shall not be obligated to exchange a
                                                    substitute vehicle or issue a refund.</font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">8. </font>
                                                <font style="vertical-align: inherit;">Bicycles and motorcycles will
                                                    not be accepted or returned after they have been picked up by our
                                                    company.</font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">9. </font>
                                                <font style="vertical-align: inherit;">The requester shall manage the
                                                    abandoned bicycle/motorcycle with special care until it is
                                                    collected.</font>
                                            </font>
                                        </p>
                                        <br>
                                        <h2>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Article 7 (Suspension of
                                                    Provision of the Service, etc.)</font>
                                            </font>
                                        </h2>
                                        <ol>
                                            <li>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">If the Company determines
                                                        that any of the following reasons exist, the Company may suspend
                                                        or suspend the provision of all or part of the Service without
                                                        prior notice to the Client.</font>
                                                </font>
                                            </li>
                                        </ol>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">(1) When performing maintenance
                                                    inspections or updating the computer system related to this service
                                                </font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">(2) When it becomes difficult to
                                                    provide the Service due to force majeure such as an earthquake,
                                                    lightning strike, fire, power outage, or natural disaster;</font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">(3) When the computer or
                                                    communication line, etc. stops due to an accident</font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">(4) In addition, when the
                                                    Company determines that it is difficult to provide the Service.
                                                </font>
                                            </font>
                                        </p>
                                        <ol>
                                            <li>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">The Company shall not be
                                                        liable for any disadvantage or damage suffered by the client or
                                                        a third party due to suspension or interruption of the provision
                                                        of this service, regardless of the reason.</font>
                                                </font>
                                            </li>
                                        </ol>
                                        <br>
                                        <h2>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Article 8 (Use Restrictions and
                                                    Cancellation of Registration)</font>
                                            </font>
                                        </h2>
                                        <ol>
                                            <li>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">In the following cases, the
                                                        Company may restrict the use of all or part of the Service or
                                                        cancel the registration as a requester without prior notice to
                                                        the requester.</font>
                                                </font>
                                            </li>
                                        </ol>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">(1) Violation of any provision
                                                    of these Terms;</font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">(2) When it turns out that there
                                                    is a false fact in the registered items</font>
                                            </font>
                                        </p>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">(3) In addition, when the
                                                    Company determines that the use of this service is not appropriate.
                                                </font>
                                            </font>
                                        </p>
                                        <ol>
                                            <li>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">The Company shall not be
                                                        liable for any damages incurred by the Client due to the actions
                                                        taken by the Company under this Article.</font>
                                                </font>
                                            </li>
                                        </ol>
                                        <br>
                                        <h2>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Article 9 (Disclaimer)</font>
                                            </font>
                                        </h2>
                                        <ol>
                                            <li>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Our default liability shall
                                                        be exempted if it is not due to our intention or gross
                                                        negligence. </font>
                                                    <font style="vertical-align: inherit;">Even if the Company assumes
                                                        responsibility for any reason, the Company shall only be liable
                                                        for compensation within the scope of damages that may normally
                                                        occur and, in the case of paid services, within the range of the
                                                        price (equivalent to one car). </font>
                                                    <font style="vertical-align: inherit;">We are not responsible for
                                                        any transactions, communications, disputes, etc. that occur
                                                        between the client and the owner or a third party in relation to
                                                        this service.</font>
                                                </font>
                                            </li>
                                        </ol>
                                        <br>
                                        <h2>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Article 10 (Changes to Service
                                                    Contents, etc.)</font>
                                            </font>
                                        </h2>
                                        <ol>
                                            <li>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">The Company may change the
                                                        content of the Service or discontinue the provision of the
                                                        Service without notifying the Client, and shall not be liable
                                                        for any damages incurred by the Client as a result.</font>
                                                </font>
                                            </li>
                                        </ol>
                                        <br>
                                        <h2>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Article 11 (Changes to Terms of
                                                    Use)</font>
                                            </font>
                                        </h2>
                                        <ol>
                                            <li>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">If we deem it necessary, we
                                                        may change this agreement at any time without notifying the
                                                        client.</font>
                                                </font>
                                            </li>
                                        </ol>
                                        <br>
                                        <h2>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Article 12 (Notice or Contact)
                                                </font>
                                            </font>
                                        </h2>
                                        <ol>
                                            <li>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Notification or
                                                        communication between the requester and the Company shall be
                                                        made by the method specified by the Company.</font>
                                                </font>
                                            </li>
                                        </ol>
                                        <br>
                                        <h2>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Article 13 (Prohibition of
                                                    Transfer of Rights and Obligations)</font>
                                            </font>
                                        </h2>
                                        <ol>
                                            <li>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">The Client may not transfer
                                                        or pledge its status under the Service Agreement or its rights
                                                        or obligations under these Terms to a third party without the
                                                        Company's prior written consent.</font>
                                                </font>
                                            </li>
                                        </ol>
                                        <br>
                                        <h2>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Article 14 (Governing
                                                    Law/Jurisdiction)</font>
                                            </font>
                                        </h2>
                                        <ol>
                                            <li>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">The law of Japan shall be
                                                        the governing law for the interpretation of these Terms. </font>
                                                    <font style="vertical-align: inherit;">In the event of a dispute
                                                        regarding this service, the court having jurisdiction over the
                                                        location of our head office shall be the exclusive jurisdiction.
                                                    </font>
                                                </font>
                                            </li>
                                        </ol>
                                        <br>
                                        <p align="right">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Enforcement: November 01, 2017
                                                </font>
                                            </font>
                                        </p>
                                        <p align="right">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Latest revision date: May 31,
                                                    2019</font>
                                            </font>
                                        </p>
                                        <br>
                                        <ol>
                                            <li>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">that's all</font>
                                                </font>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 4-->
                            <!--begin::Step 5-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-8 pb-lg-10">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-dark">Your Are Done!</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">If you need more info, please
                                            <a href="/login" class="link-primary fw-bold">Sign In</a>.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="mb-0">
                                        <!--begin::Text-->
                                        <div class="fs-6 text-gray-600 mb-5">Writing headlines for blog posts is as
                                            much
                                            an art as it is a science and probably warrants its own post, but for all
                                            advise is with what works for your great & amazing audience.</div>
                                        <!--end::Text-->
                                        <!--begin::Alert-->
                                        <!--begin::Notice-->
                                        <div
                                            class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                                            <!--begin::Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                            <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.3" x="2" y="2"
                                                        width="20" height="20" rx="10"
                                                        fill="currentColor" />
                                                    <rect x="11" y="14" width="7"
                                                        height="2" rx="1" transform="rotate(-90 11 14)"
                                                        fill="currentColor" />
                                                    <rect x="11" y="17" width="2"
                                                        height="2" rx="1" transform="rotate(-90 11 17)"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--end::Icon-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-stack flex-grow-1">
                                                <!--begin::Content-->
                                                <div class="fw-semibold">
                                                    <h4 class="text-gray-900 fw-bold">We need your attention!</h4>
                                                    <div class="fs-6 text-gray-700">To start using great tools, please,
                                                        <a href="../../demo1/dist/utilities/wizards/vertical.html"
                                                            class="fw-bold">Create Team Platform</a>
                                                    </div>
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Notice-->
                                        <!--end::Alert-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 5-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-stack pt-15">
                                <div class="mr-2">
                                    <button type="button" class="btn btn-lg btn-light-primary me-3"
                                        data-kt-stepper-action="previous">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                        <span class="svg-icon svg-icon-4 me-1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="6" y="11" width="13"
                                                    height="2" rx="1" fill="currentColor" />
                                                <path
                                                    d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->Previous
                                    </button>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-lg btn-primary"
                                        data-kt-stepper-action="submit">
                                        <span class="indicator-label">Submit
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-4 ms-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="18" y="13"
                                                        width="13" height="2" rx="1"
                                                        transform="rotate(-180 18 13)" fill="currentColor" />
                                                    <path
                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="indicator-progress">Please wait...
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <button type="button" class="btn btn-lg btn-primary"
                                        data-kt-stepper-action="next">Continue
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                        <span class="svg-icon svg-icon-4 ms-1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="18" y="13" width="13"
                                                    height="2" rx="1" transform="rotate(-180 18 13)"
                                                    fill="currentColor" />
                                                <path
                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                </div>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Multi-steps-->
    </div>



</x-auth-register-layout>
