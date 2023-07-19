<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Dvizh.go - Create events for a lifetime</title>
</head>
<body>
   <?php require "blocks/header.php" ?>

    <div class="container">
         <img src="img/logo.png" alt="" class="logo">
        <h3>Dvizh.go - Create events for a lifetime</h3>
        
      <div class="d-flex flex-wrap">
      <?php 
      for ($i = 0; $i < 5; $i++):
      ?>
      <div class="card">
          <div class="card-header">
            <h4 class="my-0 fw-normal">Event</h4>
          </div>
          <div class="card-body">
            <img src="img/event.jpg" alt="" class="img-thumbnail">
            <h1 class="card-title pricing-card-title">100$</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Milan, Italy</li>
              <li>Single</li>
              <li>17.08</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">More</button>
          </div>
        </div>
      <?php endfor; ?>
      </div>
    </div>
    <?php require "blocks/footer.php" ?>
      
</body>
</html>