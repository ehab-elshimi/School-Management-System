@include('global.includes.head')
<!-- Main Wrapper -->
    <div class="main-wrapper">
        @include('global.includes.header')
        @include('global.includes.sidebar')
        @yield('page-body')
        @include('global.includes.footer')
    </div>
<!-- /Main Wrapper -->
@include('global.includes.foot')

