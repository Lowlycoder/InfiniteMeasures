<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider Design - Easy tutorials</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>    
<body>
    test 
<div class ="container">
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide"><img src="./images/image1.jpg"></div>
          <div class="swiper-slide"><img src="./images/image2.jpg"></div>
          
          <div class="swiper-slide"><img src="./images/image4.jpg"></div>
          
          <div class="swiper-slide"><img src="./images/image3.jpg"></div>
         


        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      
      </div> 
</div>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script>
    const swiper = new Swiper('.swiper', {
        autoplay:{
            delay:3000,
            disableOnInteraction:false,

        },
    loop: true,

    pagination: {
        el: '.swiper-pagination',
        clickable: true, 
    },
    
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

 
});

</script>

</body>
