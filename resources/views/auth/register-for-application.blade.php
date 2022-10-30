<x-auth-layout>
    <div class="d-flex flex-center flex-column flex-lg-row-fluid">
        <div class="w-lg-500px p-10">
            <form class="form w-100" method="POST" action="{{ route('register-for-application') }}">
                @csrf
                <div class="text-center mb-11">
                    <h1 class="text-dark fw-bolder mb-3">Sign Up</h1>
                    <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
                </div>
                <div class="fv-row mb-8">
                    <input type="text" placeholder="Email" name="email" autocomplete="off"
                        class="form-control bg-transparent @error('email') is-invalid @enderror"
                        value="{{ old('email') }}" required>
                    @error('email')
                    <span> {{ $message }} </span>
                    
                    @enderror
                </div>
                <div class="d-grid mb-10">
                    <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
                        <span class="indicator-label">Get Link</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
                <div class="text-gray-500 text-center fw-semibold fs-6">Already have an Account?
                    <a href="/login" class="link-primary fw-semibold">Sign in</a>
                </div>
            </form>
        </div>
    </div>

    <script></script>
</x-auth-layout>
