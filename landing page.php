<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cake Website</title>
  <style>
    /* CSS Styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #FAEBD7;
    }

    header {
      background-color: #f8f8f8;
      padding: 20px;
      text-align: center;
    }

    h1 {
      color: #333;
      margin: 0;
    }

    .container {
      max-width: 960px;
      margin: 0 auto;
      padding: 20px;
    }

    .cta-button {
      display: inline-block;
      padding: 12px 24px;
      font-size: 16px;
      background-color: #ff7f50;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      margin-left: 430px;
    }

    .cta-button:hover {
      background-color: #ff6347;
    }

    .cake-image {
      max-width: 100%;
      height: auto;
    }

    .section-heading {
      text-align: center;
      margin-bottom: 40px;
    }

    .section-heading h2 {
      font-size: 32px;
      color: #333;
    }

    .gallery {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 20px;
    }

    .gallery-item {
      text-align: center;
    }

    .gallery-image {
      width: 100%;
      height: auto;
    }
    img 
    {
        border-radius: 50px;
    }
  </style>
</head>
<body>
  <header>
    <h1 style="font-size: 40px">Welcome to SweetMoly Dessert!</h1>
    <p style="font-family:'Georgia'; font-size: 25px">Delicious desserts for all occasions</p>
  </header>

  <div class="container">
    <section>
      <div class="section-heading">
        <h2>Featured Product</h2>
      </div>

      <div class="gallery">
        <div class="gallery-item">
          <img class="gallery-image" src="image/Cok2.jpg" alt="Cake 1">
          <h3>Coconut Cookies</h3>
        </div>
          <div class="gallery-item">
          <img class="gallery-image" src="image/MC2.jpg" alt="Cake 3">
          <h3>Salted Egg Macaroon</h3>
        </div>
        <div class="gallery-item">
          <img class="gallery-image" src="image/TT3.jpg" alt="Cake 3">
          <h3>Egg Tart</h3>
        </div>        
          <div class="gallery-item">
          <img class="gallery-image" src="image/BC-1.jpeg" alt="Cake 3">
          <h3>Matcha Yuzu Honey Cheesecake</h3>
        </div>        
          <div class="gallery-item">
          <img class="gallery-image" src="image/NC-2.jpeg" alt="Cake 3">
          <h3>Chocolate Toffee Hazelnut Millefeuille</h3>
        </div>  
        <div class="gallery-item">
          <img class="gallery-image" src="image/FC-2.jpeg" alt="Cake 2">
          <h3>Taro Basque Cheesecake</h3>
        </div>
      </div>
        <a class="cta-button" href="login%20page.php">Order Now</a>
    </section>
  </div>
</body>
</html>