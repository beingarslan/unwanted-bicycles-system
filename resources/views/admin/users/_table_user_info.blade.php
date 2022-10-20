<div class="d-flex align-items-center">
    <!--begin:: Avatar -->
    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
        <a href="/admin/applications/view/{{ $user->id }}">
            <div class="symbol-label">
                <img src="{{ $user->avatar_url }}" alt="{{ $user->name }}" class="w-100" />
            </div>
        </a>
    </div>
    <!--end::Avatar-->
    <!--begin::User details-->
    <div class="d-flex flex-column">
        <a href="/admin/applications/view/{{ $user->id }}"
            class="text-gray-800 text-hover-primary mb-1">{{ $user->name }}</a>
        <span>{{ $user->email }}</span>
    </div>
    <!--begin::User details-->
</div>
<!--end::User=-->
