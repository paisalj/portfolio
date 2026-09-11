<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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