<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div >
    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="row">
        <!-- sidebar content -->
        <div id="sidebar" class="col-md-1">
            @include('includes.sidebar')
        </div>
        <!-- main content -->
        <div id="content" class="col-md-11">
            <div class="container" style="width: 1370px;">
                @yield('content')
            </div>
        </div>
    </div>
    <footer class="row">
        @include('includes.footer')
    </footer>
</div>
</body>
</html>