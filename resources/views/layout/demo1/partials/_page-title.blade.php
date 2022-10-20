<!--begin::Page title-->
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
    <!--begin::Title-->
    @isset($title)
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            <span class="crumbs" data-toggle="m-tooltip" title="{{ env('APP_NAME') }}" data-placement="bottom">
                {{ env('APP_NAME') }}
            </span>
            <span class="main-text">{{ $title }}</span>
        </h1>
    @endisset
    <!--end::Title-->
    <!--begin::Breadcrumb-->
    @isset($breadcrumbs)
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
            @foreach ($breadcrumbs as $breadcrumb)
                <li class="breadcrumb-item text-muted">
                    <a href="{{ $breadcrumb['link'] ?? '#' }}" class="text-muted text-hover-primary">
                        {{ $breadcrumb['title'] ?? '' }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endisset
</div>
<!--end::Page title-->
