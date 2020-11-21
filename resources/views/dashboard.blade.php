@extends('layouts.jp')
@push('css')
<style>
    /*
        The below code is for DEMO purpose --- Use it if you are using this demo otherwise Remove it
    */
    .page-title {
        float: none;
        margin-top: 0;
        margin-bottom: 0;
        align-self: center;
        padding-right: 15px;
        border-right: 1px solid #bfc9d4;
        margin-right: 15px;
    }
    .page-title h3 {
        margin-bottom: 0;
    }
    .page-header {
        display: flex;
        padding: 0;
        margin-bottom: 16px;
        margin-top: 30px
    }
    .breadcrumb-one {
        display: inline-block;
        align-self: center;
    }
    .breadcrumb-one .breadcrumb {
        padding: 0;
        vertical-align: text-bottom;
        margin-bottom: 0;
        background: transparent;
    }
    .breadcrumb-one .breadcrumb-item {
        align-self: center;
    }
    .breadcrumb-one .breadcrumb-item a {
        color: #888ea8;
        vertical-align: text-bottom;
    }
    .breadcrumb-one .breadcrumb-item a svg {
        width: 20px;
        height: 20px;
        vertical-align: sub;
    }
    .breadcrumb-one .breadcrumb-item.active a {
        color: #1b55e2;
    }
    .breadcrumb-one .breadcrumb-item span {
        vertical-align: text-bottom;
    }
    .breadcrumb-one .breadcrumb-item.active {
        color: #1b55e2;
        font-weight: 600;
    }
    .breadcrumb-one .breadcrumb-item+.breadcrumb-item {
        padding: 0px;
    }
    .breadcrumb-one .breadcrumb-item+.breadcrumb-item::before {
        color: #515365;
        font-size: 0;
        content: url('data:image/svg+xml, <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 24 24" fill="none" stroke="%23555" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>');
        vertical-align: text-top;
        padding: 0 6px;
    }


    @media(max-width: 575px) {
        .page-header {
            display: block;
        }
        .page-title {
            margin-bottom: 20px;
            border: none;
            padding-right: 0;
            margin-right: 0;
        }
    }


    /*
        Just for demo purpose ---- Remove it.
    */
    /*<starter kit design>*/

    .widget-one {

    }
    .widget-one h6 {
        font-size: 20px;
        font-weight: 600;
        letter-spacing: 0px;
        margin-bottom: 22px;
    }
    .widget-one p {
        font-size: 15px;
        margin-bottom: 0;
    }

    /*</starter kit design>*/

</style>
@endpush
@section('content')
<div class="page-header">
    <div class="page-title">
        <h3>
            {{ __('Dashboard') }}
        </h3>
    </div>
    <nav class="breadcrumb-one" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
            <li class="breadcrumb-item {{ Route::is('dashboard') ? 'active' : '' }}"><a href="{{route('dashboard')}}">{{Auth::user()->currentTeam->name}}</a></li>
        </ol>
    </nav>
</div>

<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
        <div class="widget-content-area br-4">
            <div class="widget-one">
                @livewire('sulut.trends.daily-trends')

                <h6>Kick Start you new project with ease!</h6>

                <p class="">With CORK starter kit, you can begin your work without any hassle. The starter page is highly optimized which gives you freedom to start with minimal code and add only the desired components and plugins required for your project.</p>

            </div>
        </div>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
        <div class="widget-content-area br-4">
            <div class="widget-one">
                <div class="media">
                    <div class="n-chk">
                        <label class="new-control new-checkbox checkbox-dark" style="height: 24px;">
                          <input type="checkbox" class="new-control-input">
                          <span class="new-control-indicator"></span>
                        </label>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><span class="media-title">Heading</span>
                        </h4>
                        <p class="media-text">Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
@push('js')

{{-- <script src="{{ asset('vendor/larapex-charts/apexchart.js') }}"></script> --}}
@endpush
