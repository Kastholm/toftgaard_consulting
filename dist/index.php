<?php
get_header()
?><?php

?><script>
  AOS.init();
</script><div class=loadingScreen><span class=loader><span class=loader-inner></span></span><div class=progress-bar><span class=bar><span class=progress></span></span></div></div><div class=banner><div class=bgOverlay><video id=bannerVideo autoplay muted loop playsinline>Your browser does not support the video tag.<source type=video/mp4 src=https://gpkollund.com/media/ncupoghm/23570_gp-kollund_website_background-overlay.mp4></video><div class=bannerBox><h1>Wilkommen bei Toftgaard Consulting</h1><h2>Wir kümmern uns um Sie</h2><div class=button-row><button class=btn-24>knap1</button> <button class=btn-24>knap2</button></div></div></div></div><div class=textField><div><h2>Speed and flexi that suits your needs</h2><div class=corner></div><div class=stats><div class="stats__item is-visible" data-module-reveal=up data-reveal-delay><div class=stats__content><p class=stats__stat>30 års</p><p class=stats__description>years of eCommerce sales growth in just 10 weeks</p></div></div><div class="stats__item is-visible" data-module-reveal=up data-reveal-delay><div class=stats__content><p class=stats__stat>+3000</p><p class="stats__description margin-none">transportation cost savings with more flexible fulfillment locations</p></div></div></div></div><div class=topPageInfo><p>GP Kollund provides a broad variety of logistics solutions for both German and Danish customers. We value trust, speed, and flexibility in every business relation.<br><br>We cater both small and big companies, seasonal activities, and heavy, daily operations worth €1 million in pallets. Our success derives from an in-depth understanding of our customers’ logistic needs and a lean setup based on thirteen logistic units.<br>Together with years and years of experience, this adds up to process</p><button class=btn-24>aa</button></div></div><div class=serviceChoose><nav class=serviceToggle><span><p>Logistic Analyse</p><input type=checkbox class=checkOne checked></span> <span><p>Quick-Analyse</p><input type=checkbox class=checkTwo></span> <span><p>Paletten Management</p><input type=checkbox class=checkThree></span> <span><p>Verpackung</p><input type=checkbox class=checkThree></span></nav><div class=serviceOutput><div data-aos=fade-down-left class=promo style="--overlay-color: #2e2b6e"><div class=image-wrapper><img class=toggleImg src="https://images.unsplash.com/photo-1554620121-59e7f3f6e3a4?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=800&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE0NTg5fQ"></div><h2 class=title data-cta="Get out there →">Nightlife</h2></div><div class=toggleText><h3>Titelfelt lorem ipsum</h3><h2></h2><p></p><button class=btn-24>se mere</button><div class=stats><div class="stats__item is-visible" data-module-reveal=up data-reveal-delay><div class=stats__content><p class=stats__stat>10</p><p class=stats__description>years of eCommerce sales growth in just 10 weeks</p></div></div><div class="stats__item is-visible" data-module-reveal=up data-reveal-delay><div class=stats__content><p class=stats__stat>51%</p><p class="stats__description margin-none">transportation cost savings with more flexible fulfillment locations</p></div></div></div></div></div></div><script>
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
        headerBox.innerHTML = 'Logistic Analyse';
        
        textBox.innerHTML = `Toftegaard Consulting tilbyder mere end 30 års know-how i emballage- og logistikoptimering.
Grundet vores markedsindsigt fra flere hundrede logistikanalyser, har vi i dag +3000 implementeringer sat op. <br><br>
Høj kvalitet og succesrate for vores kunder med No Cure – No Pay metoden. Hvis vi ikke kan optimere din nuværende logistik, er vores brugte arbejdstid uden beregning.

`
         imgBox.src = "https://images.unsplash.com/photo-1554620121-59e7f3f6e3a4?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=800&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE0NTg5fQ";

         return;
    }
    if(checkBox[1].checked){
        headerBox.innerHTML = 'Quick-Analyse';
        checkField[0].style.borderBottom = "1px solid gray";
        checkFieldText[0].style.color = '#fbfbfb';
        checkField[1].style.borderBottom = "1px solid #7dc4af";
        checkFieldText[1].style.color = '#7dc4af';
        
        checkField[2].style.borderBottom = "1px solid gray";
        checkFieldText[2].style.color = '#fbfbfb';
        checkField[3].style.borderBottom = "1px solid gray";
        checkFieldText[3].style.color = '#fbfbfb';
        
        
        textBox.innerHTML = `Ikke alle virksomheder indser deres muligheder for optimering og har sikkert selv implementeret tiltag for at optimere logistikken igennem årene.<br><br>
En hurtig analyse tjener formålet at få et klart overblik over din emballage, pallehåndtering og interne processer på et øjeblik.
Quick analysen udføres på 1 dag.`

         imgBox.src = "https://images.pexels.com/photos/906494/pexels-photo-906494.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1";
         checkBox[0].checked = false;
         return;
    }
    else if(checkBox[2].checked){
        headerBox.innerHTML = 'Paletten Management';
        checkField[0].style.borderBottom = "1px solid gray";
        checkFieldText[0].style.color = '#fbfbfb';
        checkField[1].style.borderBottom = "1px solid gray";
        checkFieldText[1].style.color = '#fbfbfb';
        checkField[2].style.borderBottom = "1px solid #7dc4af";
        checkFieldText[2].style.color = '#7dc4af';
        checkField[3].style.borderBottom = "1px solid gray";
        checkFieldText[3].style.color = '#fbfbfb';
        textBox.innerHTML = `Toftegaard Consulting tilbyder en omfattende viden indenfor pallehåndtering og optimering af emnet. Vi er i stand til at restaurere, upcycle, og udveksle standardiserede paller til de internationale klassifikationssystemer for europæiske paller (A, B, C og D paller).<br><br> Gør dine daglige logistiske problemer med paller til en smart forretning. Vi sørger for at dine paller lagres, vurderes på kvalitet og købes på stedet. Skift besværet ud med indtægt.`
        
         imgBox.src = "https://images.pexels.com/photos/3057960/pexels-photo-3057960.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1";
         checkBox[0].checked = false;
         checkBox[1].checked = false;
         return;
    }
        
}

</script><div class=boxContainer><div class=containerImg><span><img src=http://localhost:8080/toftgaard_consulting/wp-content/uploads/2022/11/bgeff.webp></span> <span data-aos=fade-down-right><img src=http://localhost:8080/toftgaard_consulting/wp-content/uploads/2022/11/Morten.webp></span></div><div class=containerText><h2>Morten</h2><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, animi? Magnam voluptatibus voluptate error deleniti in assumenda omnis ut fugiat animi, earum minus vel ex excepturi nobis explicabo. Laboriosam perferendis voluptatem deserunt quae adipisci cum consequuntur, molestiae harum ex voluptates!</p><button class=btn-24>sup</button></div></div><div class="boxContainer containerRight"><div class=containerImg><span><img src=http://localhost:8080/toftgaard_consulting/wp-content/uploads/2022/11/bgeff.webp></span> <span data-aos=fade-down-left><img src="https://images.pexels.com/photos/1300402/pexels-photo-1300402.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"></span></div><div class=containerText><h2>Morten</h2><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, animi? Magnam voluptatibus voluptate error deleniti in assumenda omnis ut fugiat animi, earum minus vel ex excepturi nobis explicabo. Laboriosam perferendis voluptatem deserunt quae adipisci cum consequuntur, molestiae harum ex voluptates!</p><button class=btn-24>sup</button></div></div><script>

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

</script><?php
the_content();
    ?><?php
get_footer()
?>