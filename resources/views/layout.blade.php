<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>CRUD IN LARAVEL</title>
    <link rel="stylesheet" href="{{ URL::asset("/css/app.css") }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href={{ route("contact.list") }}>Manager Contacts</a>
</nav>
<div class="container">
    {{ $slot }}
</div>
<script src="{{ URL::asset("/css/app.js") }}"></script>
</body>
</html>