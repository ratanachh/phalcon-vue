
<h1 class="display-4">Welcome!</h1>
<p class="lead">This is a website secured by Projects Group Team.</p>
<hr class="my-4">
{{ link_to('/signup', '<i class="icon-ok icon-white"> Create an Account</i>', 'class': 'btn btn-primary btn-large') }}

<input type='hidden' name='{{ security.getTokenKey() }}' value='{{ security.getToken() }}'/>


<div class="notification is-success is-light">
  <button class="delete"></button>
  Primar lorem ipsum dolor sit amet, consectetur
  adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Sit amet,
  consectetur adipiscing elit
</div>

<modal-test></modal-test>

<toast-test></toast-test>

