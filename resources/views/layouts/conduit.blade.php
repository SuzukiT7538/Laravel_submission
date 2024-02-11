<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="//demo.productionready.io/main.css" />
</head>
<body>
@include('components.header')
@yield('contents')
@include('components.footer')
<body>
</html>
