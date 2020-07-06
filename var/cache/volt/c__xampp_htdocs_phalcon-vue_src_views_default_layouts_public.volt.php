<nav class="navbar has-box-shadow" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
  
    <?= $this->tag->linkTo(['/', '<img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">', 'class' => 'navbar-item']) ?>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbar">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbar" class="navbar-menu">
    <div class="navbar-start">
      <?= $this->tag->linkTo(['/', 'Home', 'class' => 'navbar-item']) ?>

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
          <?= $this->tag->linkTo(['/signup', 'Sign Up', 'class' => 'button is-primary']) ?>
          <a class="button is-light">
            Log in
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>


<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= $this->getContent() ?>
    </div>
</main>

<footer class="footer mt-auto py-3">
    <div class="container">
        <span class="text-muted">
            Made with love by the Phalcon Team

            <?= $this->tag->linkTo(['privacy', 'Privacy Policy']) ?>
            <?= $this->tag->linkTo(['terms', 'Terms']) ?>

            © <?= date('Y') ?> Phalcon Team.
        </span>
    </div>
</footer>
