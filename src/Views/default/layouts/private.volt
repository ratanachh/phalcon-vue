<nav class="navbar has-box-shadow" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">

        {{ link_to('/', '<img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">', 'class':'navbar-item') }}

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbar">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbar" class="navbar-menu">
        <div class="navbar-start">
            {{ link_to('/', 'Home', 'class':'navbar-item') }}

            <a class="navbar-item">
                Documentation
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" aria-expanded="false" data-target="navbar">
                    More
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item">
                        About
                    </a>
                    <a class="navbar-item">
                        Jobs
                    </a>
                    <a class="navbar-item">
                        Contact
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item">
                        Report an issue
                    </a>
                </div>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    {{ link_to('/signup', 'Sign Up', 'class':'button is-primary') }}
                    <a class="button is-light">
                        Log in
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>


<main role="main" class="column is-mobile">
    <div class="container">
        {{ content() }}
    </div>
</main>

<footer class="footer mt-auto pt-3">
    <div class="container">
        <span class="text-muted">
            ©
            {{ date("Y") }}
            Projects Group Team

            {{ link_to("privacy", "Privacy Policy") }}
            {{ link_to("terms", "Terms") }}
        </span>
    </div>
</footer>
