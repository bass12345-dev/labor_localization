<!DOCTYPE html>
<html lang="en">
<head>
<!-- META -->
@include('main.includes.meta')
<!-- CSS -->
@include('main.includes.css')
</head>
<body>
    @include('main.includes.components.pre_loader')
    <div id="main-wrapper">
        @include('main.includes.topbar')    
      
        
        <div style="margin-top: 60px;">
            @yield('content')
        </div>
           
    </div>
    @include('main/includes/scripts')
    @yield('script')
</body>
</html>