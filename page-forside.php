<?php
get_header()
?>



<?php

?>


<script>
  AOS.init();
</script>

<div class="loadingScreen"><span class="loader"><span class="loader-inner"></span></span><div class="progress-bar">
  <span class="bar">
    <span class="progress"></span>
  </span>
</div></div>










<div class="banner">
        <div class='bgOverlay'>
        <video id="bannerVideo" autoplay="" muted="" loop="" playsinline="">
                        Your browser does not support the video tag.
                    <source type="video/mp4" src="https://gpkollund.com/media/ncupoghm/23570_gp-kollund_website_background-overlay.mp4"></video>
        <div class="bannerBox">
        <h1>Wilkommen bei Toftgaard Consulting</h1>
        <h2>Wir kümmern uns um Sie </h2> <!-- Wir kümmern uns um Sie -->
        <div class='button-row'>
            <button class='btn-24'>knap1</button>
            <button class='btn-24'>knap2</button>
        </div>
        </div>
    </div>
</div>


<div class='owl-slider'>
		<h3>Vi samarbejder med</h3>
		<div class='corner'> </div>
		<div class="owl-carousel owl-theme">
		<?php $Partnere = new WP_Query(array(
  'post_per_page' => 2,
  'post_type' => 'samarbejdspartnere',
  'order' => 'ASC'
)); 
while($Partnere -> have_posts()) {
  $Partnere->the_post(); ?>
			<div class="item itemTwo"><img width="200" height="150" src=<?php echo the_post_thumbnail_url() ?> alt=<?php echo get_the_excerpt() ?> /></div>
			<?php
}
?> 
		</div>
	</div>


<div class='textField'>
<div><h2>Speed and flexi bility that suits your needs</h2>
<div class="stats">
      <div class="stats__item is-visible" data-module-reveal="up" data-reveal-delay="">
      <div class="stats__content">
                <p class="stats__stat">10</p>

                <p class="stats__description">years of eCommerce sales growth in just 10 weeks</p>
      </div>

                    
          </div>
      <div class="stats__item is-visible" data-module-reveal="up" data-reveal-delay="">
      <div class="stats__content">
                <p class="stats__stat">51%</p>

                <p class="stats__description margin-none">transportation cost savings with more flexible fulfillment locations</p>
      </div>

                    
          </div>
  </div>
</div>

<div>
  <p>GP Kollund provides a broad variety of logistics solutions for both German and Danish customers. We value trust, speed, and flexibility in every business relation.
  
  <br><br>
  
  We cater both small and big companies, seasonal activities, and heavy, daily operations worth €1 million in pallets. Our success derives from an in-depth understanding of our customers’ logistic needs and a lean setup based on thirteen logistic units.
  
   
  <br><br>
  You can combine those thirteen units however you want, thanks to an agile drag-and-drop system. Learn more about the system here.
  
   <br>
  
  Together with years and years of experience, this adds up to process </p>
  <button class='btn-24'>aa</button>
</div>
</div>


<div class="serviceChoose">

<nav class='serviceToggle'>
    <span>
        
        <p>Punkt 1</p>

        <input type="checkbox" class='checkOne' checked>
    </span>
    <span>
    <p>Punkt 1</p>
<input type="checkbox" class='checkTwo'>
    </span>
    <span>
    <p>Punkt 1</p>
<input type="checkbox" class='checkThree'>
    </span>
    <span>
    <p>Punkt 1</p>
<input type="checkbox" class='checkThree'>
    </span>
</nav>
<div class="serviceOutput">
<!-- <div class='toggleImage'></div> -->
<div data-aos="fade-down-left" class="promo" style="--overlay-color: #2e2b6e">
    <div class="image-wrapper"><img class='toggleImg' src="https://images.unsplash.com/photo-1554620121-59e7f3f6e3a4?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=800&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE0NTg5fQ" /></div>
    <h2 class="title" data-cta="Get out there →">Nightlife</h2>
</div>
<div class='toggleText'>
  <h3>Titelfelt  lorem ipsum</h3>
    <h2></h2>
    
    <p></p>
    
<button class='btn-24'>se mere</button>
    <div class="stats">
      <div class="stats__item is-visible" data-module-reveal="up" data-reveal-delay="">
      <div class="stats__content">
                <p class="stats__stat">10</p>

                <p class="stats__description">years of eCommerce sales growth in just 10 weeks</p>
      </div>

                    
          </div>
      <div class="stats__item is-visible" data-module-reveal="up" data-reveal-delay="">
      <div class="stats__content">
                <p class="stats__stat">51%</p>

                <p class="stats__description margin-none">transportation cost savings with more flexible fulfillment locations</p>
      </div>

                    
          </div>
  </div>





</div>
</div>

</div>


<script>
let imgBox = document.querySelector('.toggleImg');
let textBoxFull = document.querySelectorAll('.toggleText');
let textBox = document.querySelector('.toggleText p');
let headerBox = document.querySelector('.toggleText h2');
let checkField = document.querySelectorAll('.serviceToggle span');
let checkFieldText = document.querySelectorAll('.serviceToggle span p');      
let checkBox = document.querySelectorAll('.serviceToggle input');     

checkField[0].style.borderBottom = "1px solid #7dc4af";
        checkField[1].style.borderBottom = "1px solid gray";
        checkField[2].style.borderBottom = "1px solid gray";
        checkField[3].style.borderBottom = "1px solid gray";
        
checkField[0].addEventListener('click', () => { 
    checkBox[0].checked = true;
    checkBox[1].checked = false;
    checkBox[2].checked = false;
   
    
    toggleOutput()
 } )
 checkField[1].addEventListener('click', () => { 
    checkBox[0].checked = false;
    checkBox[1].checked = true;
    checkBox[2].checked = false;
    
    toggleOutput()
 } )
 checkField[2].addEventListener('click', () => { 
    checkBox[0].checked = false;
    checkBox[1].checked = false;
    checkBox[2].checked = true;
    
    toggleOutput()
 } )
 toggleOutput()
function toggleOutput() {
  if(checkBox[0].checked){
        checkField[0].style.borderBottom = "1px solid #7dc4af";
        checkFieldText[0].style.color = '#7dc4af';
        checkField[1].style.borderBottom = "1px solid gray";
        checkFieldText[1].style.color = '#fbfbfb';
        checkField[2].style.borderBottom = "1px solid gray";
        checkFieldText[2].style.color = '#fbfbfb';
        checkField[3].style.borderBottom = "1px solid gray";
        checkFieldText[3].style.color = '#fbfbfb';
        headerBox.innerHTML = 'Paletten Management';
        
        textBox.innerHTML = `Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto doloremque aspernatur deserunt nulla, dolorem fuga veniam enim velit sunt quae quod aperiam cumque, officiis molestiae ratione recusandae nesciunt eligendi voluptatum repellat tempora temporibus! Ut dignissimos a  .`
         imgBox.src = "https://images.unsplash.com/photo-1554620121-59e7f3f6e3a4?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=800&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE0NTg5fQ";

         return;
    }
    if(checkBox[1].checked){
        headerBox.innerHTML = 'Title2';
        checkField[0].style.borderBottom = "1px solid gray";
        checkFieldText[0].style.color = '#fbfbfb';
        checkField[1].style.borderBottom = "1px solid #7dc4af";
        checkFieldText[1].style.color = '#7dc4af';
        
        checkField[2].style.borderBottom = "1px solid gray";
        checkFieldText[2].style.color = '#fbfbfb';
        checkField[3].style.borderBottom = "1px solid gray";
        checkFieldText[3].style.color = '#fbfbfb';
        
        
        textBox.innerHTML = `GP Kollund provides a broad variety of logistics solutions for both German and Danish customers. We value trust, speed, and flexibility in every business relation.
   
    We cater both small and big companies, seasonal activities, and heavy, daily operations worth €1 million ’`
         imgBox.src = "https://images.pexels.com/photos/906494/pexels-photo-906494.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1";
         checkBox[0].checked = false;
         return;
    }
    else if(checkBox[2].checked){
        headerBox.innerHTML = 'Title3';
        checkField[0].style.borderBottom = "1px solid gray";
        checkFieldText[0].style.color = '#fbfbfb';
        checkField[1].style.borderBottom = "1px solid gray";
        checkFieldText[1].style.color = '#fbfbfb';
        checkField[2].style.borderBottom = "1px solid #7dc4af";
        checkFieldText[2].style.color = '#7dc4af';
        checkField[3].style.borderBottom = "1px solid gray";
        checkFieldText[3].style.color = '#fbfbfb';
        textBox.innerHTML = `Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae id saepe quisquam rerum animi architecto quidem enim assumenda excepturi maiores aspernatur fuga nesciunt eligendi mollitia voluptatem dicta deserunt earum totam dolorum facere at, adipisci voluptas.`
        
         imgBox.src = "https://images.pexels.com/photos/3057960/pexels-photo-3057960.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1";
         checkBox[0].checked = false;
         checkBox[1].checked = false;
         return;
    }
        
}

</script>


<div class="boxContainer">
    <div class="containerImg">
    <span>
        <img src="http://localhost:8080/toftgaard_consulting/wp-content/uploads/2022/11/bgeff.webp" alt="">
    </span>
    <span data-aos="fade-down-right">
        <img src="http://localhost:8080/toftgaard_consulting/wp-content/uploads/2022/11/Morten.webp" alt="">
    </span>
    
    </div>
    <div class="containerText">
        <h2>Morten</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, animi? Magnam voluptatibus voluptate error deleniti in assumenda omnis ut fugiat animi, earum minus vel ex excepturi nobis explicabo. Laboriosam perferendis voluptatem deserunt quae adipisci cum consequuntur, molestiae harum ex voluptates!</p>
        <button class='btn-24'>sup</button>
    </div>
</div>


<div class="boxContainer containerRight">
    <div class="containerImg">
        <span>
            <img src="http://localhost:8080/toftgaard_consulting/wp-content/uploads/2022/11/bgeff.webp" alt="">
        </span>
        <span data-aos="fade-down-left"
        >
            <img src="https://images.pexels.com/photos/1300402/pexels-photo-1300402.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
        </span>
        
    </div>
    <div class="containerText">
        <h2>Morten</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, animi? Magnam voluptatibus voluptate error deleniti in assumenda omnis ut fugiat animi, earum minus vel ex excepturi nobis explicabo. Laboriosam perferendis voluptatem deserunt quae adipisci cum consequuntur, molestiae harum ex voluptates!</p>
        <button class='btn-24'>sup</button>
    </div>
</div>





<h1>KeyPoints</h1>




    <script>

jQuery(document).ready(function ($) {
  $(".owl-carousel").owlCarousel({
    loop: true,
    items: 7,
    responsive: true,
    dots: false,
    autoWidth: true,
    autoplay:true,
    autoPlay: 800,
    responsive: {
      0: {
        items: 1,
	   autoWidth:false,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 7,
      },
    },
  });
});

</script>

<!-- 

<div class="promo" style="--overlay-color: hotpink">
    <div class="image-wrapper"><img src="https://images.unsplash.com/photo-1554620121-59e7f3f6e3a4?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=800&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE0NTg5fQ" /></div>
    <h2 class="title" data-cta="Get out there →">Nightlife</h2>
</div>
<div class="promo" style="--overlay-color: yellow">
    <div class="image-wrapper"><img src="https://images.unsplash.com/photo-1523806762236-1d3a6b7eb3fd?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=800&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE0NTg5fQ" /></div>
    <h2 class="title" data-cta="Find yours →">Quiet Time</h2>
</div>
<div class="promo" style="--overlay-color: dodgerblue">
    <div class="image-wrapper"><img src="https://images.unsplash.com/photo-1548008116-bcfec1f4c812?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=800&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE0NTg5fQ" /></div>
    <h2 class="title" data-cta="Grab a board →">Surf's Up!</h2>
</div>
<div class="promo" style="--overlay-color: dark#7dc4af">
    <div class="image-wrapper"><img src="https://images.unsplash.com/photo-1569335048491-5fb94951e885?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=800&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE0NTg5fQ" /></div>
    <h2 class="title" data-cta="Take a walk →">Day Hikes</h2>
</div>
 -->


 <section id="our-solutions">
      <div class="select-solutions">
        <h2>Toftgaard Consulting</h2>
        <div>fordele</div>
      </div>
      <div class="content">
        <div>
        <img src="http://localhost:8080/toftgaard_consulting/wp-content/uploads/2022/11/Resultatbaseret-analyser.webp" alt="">
          <p>Resultatsbaseret analyser</p>
        </div>
        <div>
        <img src="http://localhost:8080/toftgaard_consulting/wp-content/uploads/2022/11/No-cure-no-pay.webp" alt="">
          <p>No cure - no pay
</p>
        </div>
        <div>
        <img src="http://localhost:8080/toftgaard_consulting/wp-content/uploads/2022/11/Eksperter-i-logistikoptimerisering.webp" alt="">
          <p class='font-fix'>Eksperter i logistik-optimisering</p>
        </div>
        <div>
        <img src="http://localhost:8080/toftgaard_consulting/wp-content/uploads/2022/11/3000-implementeringer-live.webp" alt="">
          <p> +3000 udførte implementeringer</p>
        </div>
        <div>
        <img src="http://localhost:8080/toftgaard_consulting/wp-content/uploads/2022/11/10-30-besparelse-.webp" alt="">
          <p>10-30% besparelse i
 transportomkostninger 
</p>
        </div>
        <div>
        <img src="http://localhost:8080/toftgaard_consulting/wp-content/uploads/2022/11/Ingen-opstartsbetaling.webp" alt="">
          <p>Ingen opstartbetalinger</p>
        </div>
        <div>
        <img src="http://localhost:8080/toftgaard_consulting/wp-content/uploads/2022/11/Vi-star-for-fuld-implementering.webp" alt="">
          <p>Vi står for fuld implementering</p>
        </div>
        <div>
        <img src="http://localhost:8080/toftgaard_consulting/wp-content/uploads/2022/11/4-maneder-kvali.webp" alt="">
          <p>24 md. kvalitetsopsyn
efter implementering</p>
        </div>
        <div>
        <img src="http://localhost:8080/toftgaard_consulting/wp-content/uploads/2022/11/Skaber-positivt-cashflow.webp" alt="">
          <p>Skaber positivt cash-flow</p>
        </div>
      </div>
      <button class='btn-24'>aaaa</button>
    </section>




<?php
the_content();
    ?>



<?php
get_footer()
?>