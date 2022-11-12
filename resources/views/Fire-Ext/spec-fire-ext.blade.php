{{-- {!! QrCode::size(300)->generate('https://c-rpt.com/public/qrcode-test') !!} --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-
    scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fire Extinguisher</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/solid.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireStyles
</head>

<body class="font-sans antialiased">
    @livewire('fire-ext.fire-ext')
    @livewireScripts

    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>
</body>

</html>
