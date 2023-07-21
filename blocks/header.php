<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
          <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php" class="nav-link px-2">Home</a></li>
        <li><a href="#" class="nav-link px-2">Tickets</a></li>
        <li><a href="#" class="nav-link px-2">Profile</a></li>
        <li><a href="about.php" class="nav-link px-2">About</a></li>
      </ul>
      <?php
        if($_COOKIE['user'] == 'true'):
      ?>
      <div class="col-md-3 text-end">
        <button class="btn btn-primary" onclick="location.href='auth.php'">My Profile</button>
      </div>
      <?php else: ?>
      <div class="col-md-3 text-end">
        <button class="btn btn-outline-primary me-2" onclick="location.href='login.php'" type="button">Login</button>
        <button type="button" class="btn btn-primary" onclick="location.href='auth.php'">Sign-up</button>
      </div>
      <?php endif; ?>
    </header>