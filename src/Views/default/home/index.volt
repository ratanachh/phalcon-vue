
<header class="jumbotron" id="overview">
    <h1 class="display-4">Welcome!</h1>
    <p class="lead">This is a website secured by Projects Group Team.</p>
    <hr class="my-4">
    {{ link_to('/signup', '<i class="icon-ok icon-white"> Create an Account</i>', 'class': 'btn btn-primary btn-large') }}

    <input type='hidden' name='{{ security.getTokenKey() }}' value='{{ security.getToken() }}'/>
</header>
