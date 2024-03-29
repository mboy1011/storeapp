@yield('navbar')
<nav class="nav-extended">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="{{ request()->is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
        <li class="{{ request()->is('posts') ? 'active' : ''}}"><a href="/posts">Posts</a></li>
        <li class="{{ request()->is('login') ? 'active' : ''}}"><a href="/login">Login</a></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#test1">Test 1</a></li>
        <li class="tab"><a class="active" href="#test2">Test 2</a></li>
        <li class="tab disabled"><a href="#test3">Disabled Tab</a></li>
        <li class="tab"><a href="#test4">Test 4</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li class="{{ request()->is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
    <li class="{{ request()->is('posts') ? 'active' : ''}}"><a href="/posts">Posts</a></li>
    <li class="{{ request()->is('login') ? 'active' : ''}}"><a href="/login">Login</a></li>
  </ul>

  <div id="test1" class="col s12">Test 1</div>
  <div id="test2" class="col s12">Test 2</div>
  <div id="test3" class="col s12">Test 3</div>
  <div id="test4" class="col s12">Test 4</div>
  