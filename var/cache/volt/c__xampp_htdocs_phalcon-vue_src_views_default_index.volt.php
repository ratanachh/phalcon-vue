<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <title>Welcome to Sample App</title>

    <?= $this->assets->outputCss('css') ?>
</head>
<body>

    <div id="application">
        <?= $this->getContent() ?>
    </div>
    <?= $this->assets->outputJs('js') ?>
</body>
</html>
