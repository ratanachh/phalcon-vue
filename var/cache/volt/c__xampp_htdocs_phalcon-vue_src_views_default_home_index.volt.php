
<header class="jumbotron" id="overview">
    <h1 class="display-4">Welcome!</h1>
    <p class="lead">This is a website secured by Phalcon Framework</p>
    <hr class="my-4">
    <?= $this->tag->linkTo(['/signup', '<i class="icon-ok icon-white"> Create an Account</i>', 'class' => 'btn btn-primary btn-large']) ?>

    <input type='hidden' name='<?= $this->security->getTokenKey() ?>' value='<?= $this->security->getToken() ?>'/>
</header>
