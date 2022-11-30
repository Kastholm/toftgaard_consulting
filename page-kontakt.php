<?php
get_header()
?>
<script>
  AOS.init();
</script>
<div class="loadingScreen"><span class="loader"><span class="loader-inner"></span></span><div class="progress-bar">
  <span class="bar">
    <span class="progress"></span>
  </span>
</div></div>
<div class='subBanner'>
	<span class="field text">
		<div class="border-top"></div>
	<span class='innertext'>
		<h1>Lad os få en god dialog</h1>
		<h2><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>Tel: +49 (0) 461 40688 963</h2>
        <h2><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>Mobil: +49 (0) 176 2487 1227</h2>
        <h2><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>ht@toftgaardconsulting.com</h2>
	</span>
	
	</span>
	<span class="field img k-banner">

	
	</span>
</div>
<div class="border-bot">
</div>


<script>
 

        // wait until DOM is ready
document.addEventListener("DOMContentLoaded", function (event) {
  console.log("DOM loaded");

  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener(
    "load",
    function (e) {
      //custom GSAP code goes here
      // This tween will rotate an element with a class of .my-element
      const timeline = gsap.timeline({defaults: {duration: .6}})
timeline
.from('.innertext', {opacity: '0', ease: '`power1`', stagger: .2, delay: .5
        })
  .from('.border-top', {x: '-100%', ease: '`power1`', stagger: .5
        })
        
         
        

      console.log("window loaded");
    },
    false
  );
});
</script>




<div class="boxContainer">
    <div class="containerImg">
    <span>
    <?php echo "<img src='".get_stylesheet_directory_uri()."/dist/img/bgeff.webp' \>" ?>
    </span>
    <span data-aos="fade-down-right">
    <?php echo "<img class='top-fix' src='".get_stylesheet_directory_uri()."/dist/img/kontor.webp' \>" ?>
    </span>
    
    </div>
    <div class="containerText">
        <h2>Adminstration</h2>
        <p><b>Lad os optimere jeres logistik</b></p>
        <p>Toftgaard Consulting APS<br>
        Neustadt 16, 24939 Flensburg<br>
        Germany, Walzenmühle<br>
DE328907283</p>
        <button class='btn-24'>sup</button>
    </div>
</div>

<!-- 
<div class="boxContainer containerRight">
    <div class="containerImg">
        <span>
            <img src="http://localhost:8080/toftgaard_consulting/wp-content/uploads/2022/11/bgeff.webp" alt="">
        </span>
        <span data-aos="fade-down-left"
        >
            <img src="https://www.folklor-mersch.lu/images/sursite/Photos-Coming-Soon.jpg" alt="">
        </span>
        
    </div>
    <div class="containerText">
        <h2>Torben</h2>
        <p><b>Mangler tekst</b> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor magnam alias eum molestiae similique consequatur qui dolorem quia, repudiandae adipisci.</p>
        <button class='btn-24'>sup</button>
    </div>
</div>
 -->





































<?php
the_content();
    ?>



<?php
get_footer()
?>