<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <script src="script.js" defer></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>

<body>
    <canvas id="canvas"></canvas>
    <div class="animation-container">
        <h1 id="animatedText">MASIH DO PENG</h1>
        <img src="peng2.png" alt="Animated Image" id="animatedImage">
        <audio id="myAudio" controls autoplay loop>
            <source src="por.ogg" type="audio/ogg">
        </audio>
    </div>
    <div class="overlay"></div>
    <div class="slider-container">
      <div class="slider">
          <div class="slide" style="background-image: url('peng1.jpg');"></div>
          <div class="slide" style="background-image: url('peng3.jpg');"></div>
          <div class="slide" style="background-image: url('peng4.jpg');"></div>
          <div class="slide" style="background-image: url('peng5.jpg');"></div>
      </div>
    </div>
</body>

</html>