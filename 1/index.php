<?php include("header.php");?>


<section class="home" id="home">
    <div class="content">
    <h3>Best Restaurant</h3>
    <span> fresh ingredients</span>
    <p>Welcome to Best Restaurant, the ultimate culinary destination for all food lovers. Whether you’re looking for a romantic dinner for two or a group celebration, our Restaurant offers an inviting atmosphere that will leave you with unforgettable memories. Come join us and indulge in a culinary adventure like no other.</p>
    <a href="booktable.php" class="btn"><span>Book now</span></a>
    </div>
</section>

<section class="about" id="about">
    <h1 class="heading">about us </h1>
    
    <div class="row">
    
        <div class="image-container">
    <image src="images/30wj.gif"></image>
    <h3>best Restaurant in town</h3>
    </div>
    
    <div class="content">
    <h3>why choose us?</h3>
    <p>Our skilled chefs combine traditional and modern techniques to create mouth-watering dishes that are both delicious and visually stunning. We pride ourselves on using only the highest quality ingredients, and our commitment to sustainability ensures that we source all our ingredients responsibly.</p>
    </div>
</div>
</section>


<section class="products" id="products">
    <h1 class="heading"> Our best sellers</h1>

    <div class="box-container">

    <div class="listaLogovIndex">
        <div class="logoslider-containerIndex">
            <i class="fa fa-chevron-left slider-arrow" onclick="prevSlide()"></i>
            <ul class="categoryIndex" id="logoSlider">
                <li><img src="images/hamburger1.jpg" alt=""></li>
                <li><img src="images/pastaarabiata.jpg" alt=""></li>
                <li><img src="images/pepperoni.webp" alt=""></li>
                <li><img src="images/ravioli.jpg" alt=""></li>
                <li><img src="images/samun2.webp" alt=""></li>
                <li><img src="images/biftek.jpg" alt=""></li>
                
            </ul>
            <i class="fa fa-chevron-right slider-arrow" onclick="nextSlide()"></i>
        </div>
    </div>
        <a href="menu.php" class="btn"><span>Menu</span></a>

    </div>
</section>


<section class="review" id="review">

<h1 class="heading">customer's review</h1>

<div class="box-container">

    <div class="box">
    
    <p>“Portions are huge and the staff is extremely friendly and courteous.”</p>
    <div class="user">
        <img src="images/person.jpg" alt="">
        <div class="user-info">
            <h3>Customer 1</h3>
            <span>happy customer</span>
        </div>
    </div>
    <span class="fas fa-quote-right"></span>
</div>

<div class="box">
    
    <p>“Great food, great coffee, great service.”</p>
    <div class="user">
        <img src="images/person.jpg" alt="">
        <div class="user-info">
            <h3>Customer 2</h3>
            <span>happy customer</span>
        </div>

    </div>
    <span class="fas fa-quote-right"></span>
</div>



<div class="box">

    <p>“Potato pancakes were good. Will try the hash next time. Biscuits were great also.” </p>
    <div class="user">
        <img src="images/person.jpg" alt="">
        <div class="user-info">
            <h3>Customer 3</h3>
            <span>happy customer</span>
        </div>

    </div>
    <span class="fas fa-quote-right"></span>
</div>
</div>

</section>


    
  <?php include("footer.php"); ?>



  <script>
            let heroBg = document.querySelector('.hero');

            setInterval(() => {
                heroBg.style.backgroundImage = "url(img/bg-light.jpg)"
        
            setTimeout(() => {
                heroBg.style.backgroundImage = "url(img/bg.jpg)"
             }, 1000);
        }, 2200);

        const logoSlider = document.getElementById('logoSlider');
        const logos = Array.from(document.querySelectorAll('.categoryIndex li'));
    
        function nextSlide() {
            const firstLogo = logos.shift();
            logos.push(firstLogo);
            logoSlider.appendChild(firstLogo);
            showLogos();
        }
    
        function prevSlide() {
            const lastLogo = logos.pop();
            logos.unshift(lastLogo);
            logoSlider.insertBefore(lastLogo, logoSlider.firstChild);
            showLogos();
        }
    
        function showLogos() {
            logos.forEach((logo, index) => {
                logo.style.display = index < 6 ? 'block' : 'none';
            });
        }

        showLogos();
    </script>


</body>
</html>