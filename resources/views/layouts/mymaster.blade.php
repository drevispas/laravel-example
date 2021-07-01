<HTML>
<head>
    <title>My Site | @yield('title','Fallback Title')</title>
</head>
<body>
<div class="container">
    @yield('content')
</div>
@section('footer')
    <script src="app.js"></script>
@show
</body>
</HTML>
