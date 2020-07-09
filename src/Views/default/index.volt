<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <title>Welcome to Sample App</title>
    <link rel="icon"  href="{{ constant('PROJECT_PATH') }}img/favicon.ico">
    {{ assets.outputCss('css') }}
</head>
<body>

    <div id="application">
        {{ content() }}
    </div>
    <script>window.location.project_path = `{{ constant('PROJECT_PATH') }}`;</script>
    {{ assets.outputJs('js') }}
</body>
</html>
