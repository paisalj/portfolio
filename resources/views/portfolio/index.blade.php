<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
>
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>

<body>

    @include('portfolio.sections.navbar')

    @include('portfolio.sections.hero')

    @include('portfolio.sections.about')

    @include('portfolio.sections.skills')

    @include('portfolio.sections.projects')

    @include('portfolio.sections.experience')

    @include('portfolio.sections.education')

    @include('portfolio.sections.contact')

    @include('portfolio.sections.footer')

</body>
</html>