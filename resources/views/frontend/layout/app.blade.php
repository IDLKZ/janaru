<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Janary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Styles -->
    @include("frontend.layout.styles")
</head>
<body>
@include("frontend.layout.header")

@yield("content")

@include("frontend.layout.footer")


@include("frontend.layout.modal")
<!-- External JS libraries -->
@include("frontend.layout.scripts")

</body>
</html>

