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
		<h1>Pallet-Management-System, bæredygtigt & effektivt </h1>
		<h2>
Vi har ikke kun gennem vores logistik-analyser men også gennem mere end 35 års erfaring inden for
logistikbranchen set at paller i stigende grad udgør en meget vigtig del af virksomhedernes daglige drift,
vores fokus ligger i at gøre det nemmere for vores kunder i dagligdagen – også når det gælder
om paller.
		</h2>
	</span>
	
	</span>
	<span  class="field img pm-banner">

	
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


<div class="serviceChoose">
<div class="box">
    <span></span>
    <span></span>
    <span></span>
  </div>
<nav data-aos="fade-up" class='serviceToggle'>
  
    <span>
        
        <p>Leveringsgaranti</p>

        <input type="checkbox" class='checkOne' checked>
    </span>
    <span>
    <p>Miljøvenlige paller</p>
<input type="checkbox" class='checkTwo'>
    </span>
    <span>
    <p>Upcyclede paller</p>
<input type="checkbox" class='checkThree'>
    </span>
    
</nav>
<div class="serviceOutput">
<!-- <div class='toggleImage'></div> -->
<div data-aos="fade-down-left" class="promo" style="--overlay-color: #2e2b6e">
    <div class="image-wrapper"><img class='toggleImg' src="https://images.unsplash.com/photo-1554620121-59e7f3f6e3a4?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=800&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE0NTg5fQ" /></div>
    <h2 class="title imgTitle"></h2>
</div>
<div class='toggleText'>
  <h3>Pallehåndtering</h3>
    <h2></h2>
    
    <p></p>
    
<a class='link' href='https://gpkollund.com/'><button target="_blank" class='btn-24'>Gp>kollund</button></a>
    <div class="stats">
      <div class="stats__item is-visible" data-module-reveal="up" data-reveal-delay="">
      <div class="stats__content">
                <p data-aos="fade-up"  class="stats__stat statOne">10</p>

                <p data-aos="fade-up"  class="stats__description statOneText">years of eCommerce sales growth in just 10 weeks</p>
      </div>

                    
          </div>
      <div class="stats__item is-visible" data-module-reveal="up" data-reveal-delay="">
      <div class="stats__content">
                <p data-aos="fade-up"  class="stats__stat statTwo">51%</p>

                <p data-aos="fade-up"  class="stats__description margin-none statTwoText">transportation cost savings with more flexible fulfillment locations</p>
      </div>

                    
          </div>
  </div>





</div>
</div>

</div>




</div>
</div>

</div>



<script>
let field = document.querySelector('.serviceOutput');
let imgBox = document.querySelector('.toggleImg');
let btn = document.querySelector('.btn-24');
let textBoxFull = document.querySelectorAll('.toggleText');
let textBox = document.querySelector('.toggleText p');
let headerBox = document.querySelector('.toggleText h2');
let checkField = document.querySelectorAll('.serviceToggle span');
let checkFieldText = document.querySelectorAll('.serviceToggle span p');      
let checkBox = document.querySelectorAll('.serviceToggle input');   
let imgTitle = document.querySelector('.imgTitle');
let statOne = document.querySelector('.statOne');
let statOneT = document.querySelector('.statOneText');
let statTwo = document.querySelector('.statTwo');
let statTwoT = document.querySelector('.statTwoText')  
let link = document.querySelector('.link');

checkField[0].style.borderBottom = "1px solid #F33615";
        checkField[1].style.borderBottom = "1px solid gray";
        checkField[2].style.borderBottom = "1px solid gray";
        /* checkField[3].style.borderBottom = "1px solid gray"; */
        
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
    field.classList.remove('opacityOne');
   field.classList.add('opacityZ');
   setTimeout(() => {
    field.classList.add('opacityOne');
    field.classList.remove('opacityZ');
}, "300");
        checkField[0].style.borderBottom = "1px solid #F33615";
        checkFieldText[0].style.color = '#F33615';
        checkField[1].style.borderBottom = "1px solid gray";
        checkFieldText[1].style.color = '#fbfbfb';
        checkField[2].style.borderBottom = "1px solid gray";
        checkFieldText[2].style.color = '#fbfbfb';
        /* checkField[3].style.borderBottom = "1px solid gray";
        checkFieldText[3].style.color = '#fbfbfb'; */
        headerBox.innerHTML = 'Leveringsgaranti';
        imgTitle.innerHTML = 'Leveringsgaranti'
        
        statOne.innerHTML = 'A-D';
        statOneT.innerHTML = 'Handler med europæiske paller A, B, C & D paller.';
        statTwo.innerHTML = 'Garanti';
        statTwoT.innerHTML = `Vi garanterer værdi med Gp>kollund's erfaring inden for paller`;
        
        textBox.innerHTML = `Sammen med vores samarbejdspartner GPKollund råder vi over specialister med mere end
20 års omfattende viden inden for palleindustrien.<br> Vi hjælper jer ikke kun med at få optimale monetære
løsninger, samtidig sikrer vi også, at I har en effektiv proces i jeres forsyningskæde og i logistikafdelingen.

`
imgBox.src = <?php echo "'".get_stylesheet_directory_uri()."/dist/img/leveringsgaranti.webp'" ?> 

         return;
    }
    if(checkBox[1].checked){
        field.classList.remove('opacityOne');
   field.classList.add('opacityZ');
   setTimeout(() => {
    field.classList.add('opacityOne');
    field.classList.remove('opacityZ');
}, "300");
        headerBox.innerHTML = 'Miljøvenlige paller';
        imgTitle.innerHTML = 'Miljøvenlige paller'
        checkField[0].style.borderBottom = "1px solid gray";
        checkFieldText[0].style.color = '#fbfbfb';
        checkField[1].style.borderBottom = "1px solid #F33615";
        checkFieldText[1].style.color = '#F33615';
        
        checkField[2].style.borderBottom = "1px solid gray";
        checkFieldText[2].style.color = '#fbfbfb';
        /* checkField[3].style.borderBottom = "1px solid gray";
        checkFieldText[3].style.color = '#fbfbfb'; */
        
        statOne.innerHTML = 'CO2';
        statOneT.innerHTML = 'Minimerer CO2-aftryk og transportomkostninger.';
        statTwo.innerHTML = 'Lokalt';
        statTwoT.innerHTML = 'Sælger og køber lokale paller for at reducere transport.';

        textBox.innerHTML = `Vi opererer på hele det europæiske marked og kan nemt overtage lagerbeholdninger, uanset hvor de er
placeret. <br>Ved at arbejde omkostningseffektivt optimerer vi logistikken ved at identificere vores nærmeste
partner set i relation til jeres placering og reducerer dermed CO2-udledningen og transportomkostningerne
på jeres leverancer og bidrager derved til en mere bæredygtig forretning.`

imgBox.src = <?php echo "'".get_stylesheet_directory_uri()."/dist/img/miljoepalle.webp'" ?>      
         checkBox[0].checked = false;
         return;
    }
    else if(checkBox[2].checked){
        field.classList.remove('opacityOne');
   field.classList.add('opacityZ');
   setTimeout(() => {
    field.classList.add('opacityOne');
    field.classList.remove('opacityZ');
}, "300");
        headerBox.innerHTML = 'Upcyclede paller';
        imgTitle.innerHTML = 'Pallehåndtering'
        checkField[0].style.borderBottom = "1px solid gray";
        checkFieldText[0].style.color = '#fbfbfb';
        checkField[1].style.borderBottom = "1px solid gray";
        checkFieldText[1].style.color = '#fbfbfb';
        checkField[2].style.borderBottom = "1px solid #F33615";
        checkFieldText[2].style.color = '#F33615';
        /* checkField[3].style.borderBottom = "1px solid gray";
        checkFieldText[3].style.color = '#fbfbfb'; */
        
        statOne.innerHTML = 'Værdi'
        statOneT.innerHTML = 'Få vurderet dine paller og betalt alle omkostninger.'
        statTwo.innerHTML = 'A-D'
        statTwoT.innerHTML = 'Handler med europæiske paller A, B, C & D paller.'
        textBox.innerHTML = `Med vores omfattende viden er vi også aktive og i stand til at integrere standardiserede paller i de
internationale klassificeringssystemer der er inden for europæiske paller.<br> Vi garanterer god kvalitet både
når det kommer til ombyttede, genanvendte og upcyclede paller. Faktisk har vi konverteret mange af vores
kunder fra at købe helt nye paller til at købe ombyttede og upcyclede paller.`
        
imgBox.src = <?php echo "'".get_stylesheet_directory_uri()."/dist/img/upcycle.webp'" ?>         

         checkBox[0].checked = false;
         checkBox[1].checked = false;
         return;
    }
        
}

</script>








<div class="boxContainer">
    <div class="containerImg">
    <span>
    <?php echo "<img src='".get_stylesheet_directory_uri()."/dist/img/bgeff.webp' \>" ?>
    </span>
    <span data-aos="fade-down-right">
    <?php echo "<img class='top-fix' src='".get_stylesheet_directory_uri()."/dist/img/pallebanner.webp' \>" ?>
    </span>
    
    </div>
    <div class="containerText">
        <h2>Pallet-Management-System</h2>
        <p>Vi tilbyder et stærkt Pallet-Management-System (PMS) koncept hvor vi køber og sælger alle former for
paller og altid er lagerførende<br>
1. Engangspaller<br>
2. paller<br>
3. EURO Paller ( A, B, C og D standard)<br>
4. Plastik / Kunstof Paller<br>
5. Pallerammer</p>
        <button class='btn-24'>sup</button>
    </div>
</div>




<!-- <div class="boxContainer containerRight">
    <div class="containerImg">
        <span>
            <img src="http://localhost:8080/toftgaard_consulting/wp-content/uploads/2022/11/bgeff.webp" alt="">
        </span>
        <span data-aos="fade-down-left"
        >
            <img src="https://gpkollund.com/media/xlih3lt0/gp_kollund_210322_01259.jpg?rxy=0.4653889327734586,0.31627877955949335&width=640&height=414&quality=90&rnd=132954514822100000" alt="">
        </span>
        
    </div>
    <div class="containerText">
        <h2>Lars Vonderbank</h2>
        <p>Administrerende direktør af Gp>kollund,
Tyskland <br><br>
Mob: +49 171 562 0388
<br><br>
E-mail: lv@gpkollund.dk</p></p>
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