<div class="badge badge-light fw-bold">
    {{-- status --}}
    @if ($user->status)
        <span class="badge badge-light-success">{{ __('Active') }}</span>
    @else
        <span class="badge badge-light-danger">{{ __('Inactive') }}</span>
    @endif
</div>
