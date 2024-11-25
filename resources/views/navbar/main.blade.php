<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Portfolio</title>
    <link rel="icon" href="portfolio1.jpg" type="image/x-icon">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
    
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
    <div class="container">
      <!-- Brand -->
      <a class="navbar-brand text-warning fs-3 fw-bold" href="#">Andika Cahya Rahman</a>
      
      <!-- Toggler Button for Mobile -->
      <button 
        class="navbar-toggler" 
        type="button" 
        data-bs-toggle="collapse" 
        data-bs-target="#navbarNav" 
        aria-controls="navbarNav" 
        aria-expanded="fals e" 
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar Links -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav fs-5 fw-bold">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> 

  <!-- Content Section -->
  @yield('content')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
