<!DOCTYPE html>
<html lang="en">

<head>
    ...
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