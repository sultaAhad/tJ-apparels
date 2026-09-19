<!DOCTYPE html>
<html lang="en" class="site-root">

<head>
  <!-- HeaderLinks Include Here -->
  <?php include 'headlinks.php'; ?>
  <!-- HeaderLinks Include Here -->
</head>

<body class="<?php echo isset($bodyClass) ? $bodyClass : ''; ?>">
  <?php
  // <!-- Header Include Here -->
  if (!isset($without_header)) {
    include 'header.php';
  }
  // <!-- Header Include Here -->
  ?>

  <!-- Preloader -->
  <div class="preloader">
    <div class="scene">
      <div class="particles"></div>
      <div class="loader-glow loader-glow-1"></div>
      <div class="loader-glow loader-glow-2"></div>
      <div class="loader-glow loader-glow-3"></div>
      <div class="tool tool1">⚙</div>
      <div class="tool tool2">🔧</div>
      <div class="tool tool3">⚙</div>
      <div class="tool tool4">🔧</div>
      <div class="tool tool5">⚙</div>
      <div class="tool tool6">🔧</div>
      <div class="gauge gauge1">
        <span>MPH</span>
        <i></i>
      </div>
      <div class="gauge gauge2">
        <span>TEMP</span>
        <i></i>
      </div>
      <div class="gauge gauge3">
        <span>RPM</span>
        <i></i>
      </div>
      <div class="ring ring1"></div>
      <div class="ring ring2"></div>
      <div class="ring ring3"></div>
      <div class="bolt bolt1"></div>
      <div class="bolt bolt2"></div>
      <div class="bolt bolt3"></div>
      <div class="bolt bolt4"></div>
      <div class="bolt bolt5"></div>
      <div class="bolt bolt6"></div>
      <div class="engine-block">
        <div class="engine part p1">
          <div class="piston-head"></div>
          <div class="piston-body">
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
          </div>
        </div>
        <div class="engine part p2">
          <div class="piston-head"></div>
          <div class="piston-body">
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
          </div>
        </div>
        <div class="engine part p3">
          <div class="piston-head"></div>
          <div class="piston-body">
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
          </div>
        </div>
        <div class="engine part p4">
          <div class="piston-head"></div>
          <div class="piston-body">
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
          </div>
        </div>
        <div class="engine part p5">
          <div class="piston-head"></div>
          <div class="piston-body">
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
          </div>
        </div>
      </div>
      <div class="piston-rod piston-rod-1">
        <div class="prod-head"></div>
        <div class="prod-shaft"></div>
        <div class="prod-base"></div>
      </div>
      <div class="piston-rod piston-rod-2">
        <div class="prod-head"></div>
        <div class="prod-shaft"></div>
        <div class="prod-base"></div>
      </div>
      <div class="mechanical mechanical1"></div>
      <div class="mechanical mechanical2"></div>
      <div class="mechanical mechanical3"></div>
      <div class="flare"></div>
      <div class="brand">
        <div class="tj">
          <img src="img/preloader.png" class="img-fluid" alt="TJ Apparels Logo">
        </div>
      </div>
      <div class="loader">
        <div></div>
      </div>
    </div>
  </div>
  <!-- Preloader -->

  
</body>
</html>