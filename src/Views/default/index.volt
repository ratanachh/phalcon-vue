<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <title>Welcome to Sample App</title>

    {{ assets.outputCss('css') }}
</head>
<body>

    <div id="application">
        {{ content() }}
    </div>
    {{ assets.outputJs('js') }}
</body>
</html>
