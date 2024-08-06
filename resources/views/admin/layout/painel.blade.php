@include('admin.includes.painel.head')
<body>
<div class="container-scroller">
    @include('admin.includes.painel.nav')
    <div class="container-fluid page-body-wrapper">
        @include('admin.includes.painel.top')
        <div class="main-panel">
           <div class="content-wrapper">
             @yield('content')
             @include('admin.includes.painel.footer')
            </div>
        </div>
    </div>
</div>
@include('admin.includes.painel.scripts')
    
