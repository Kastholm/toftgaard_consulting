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
		<h1>Pallehåndtering, bæredygtigt & effektivt </h1>
		<h2>
Vi har ikke kun gennem vore logistikanalyser men også gennem mere end 35 års erfaring inden for
logistikbranchen set at paller i stigende grad udgør en meget vigtig del af virksomhedernes daglige drift,
så vores fokus ligger også i at gøre det nemmere for vore kunder (jer) i dagligdagen – også når det gælder
om paller.
		</h2>
	</span>
	
	</span>
	<span style=' background-image: url("https://i.ibb.co/jgt4MMj/Palleh-ndtering-h-ndtering-af-paller.jpg"); background-size: cover;' class="field img">

	
	</span>
</div>
<div class="border-bot">
</div>




<div class="serviceChoose">
<div class="box">
    <span></span>
    <span></span>
    <span></span>
  </div>
<nav data-aos="fade-up" class='serviceToggle'>
  
    <span>
        
        <p>Paller med værdi</p>

        <input type="checkbox" class='checkOne' checked>
    </span>
    <span>
    <p>Miljøvenlige paller</p>
<input type="checkbox" class='checkTwo'>
    </span>
    <span>
    <p>Håndtering af paller</p>
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

checkField[0].style.borderBottom = "1px solid #7dc4af";
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
        checkField[0].style.borderBottom = "1px solid #7dc4af";
        checkFieldText[0].style.color = '#7dc4af';
        checkField[1].style.borderBottom = "1px solid gray";
        checkFieldText[1].style.color = '#fbfbfb';
        checkField[2].style.borderBottom = "1px solid gray";
        checkFieldText[2].style.color = '#fbfbfb';
        /* checkField[3].style.borderBottom = "1px solid gray";
        checkFieldText[3].style.color = '#fbfbfb'; */
        headerBox.innerHTML = 'Paller med værdi';
        imgTitle.innerHTML = 'Paller med værdi'
        
        statOne.innerHTML = 'A-D';
        statOneT.innerHTML = 'Handler med europæiske paller A, B, C & D paller.';
        statTwo.innerHTML = 'Garanti';
        statTwoT.innerHTML = `Vi garanterer værdi med Gp>kollund's erfaring inden for paller`;
        
        textBox.innerHTML = `Adminstrere paller omhandler ikke kun indkøb og salg af paller. <br><br> Med vores samarbejdspartner Gp>kollund's erfaring er vi istand til at restaurerer og optimere paller samt udveksle standard paller til det internationale klasificering system af europæiske paller (A, B, C og D paller).

`
         imgBox.src = "https://i.ibb.co/q5JDZQ5/Palleh-ndtering-Paller-med-v-rdi.jpg";

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
        checkField[1].style.borderBottom = "1px solid #7dc4af";
        checkFieldText[1].style.color = '#7dc4af';
        
        checkField[2].style.borderBottom = "1px solid gray";
        checkFieldText[2].style.color = '#fbfbfb';
        /* checkField[3].style.borderBottom = "1px solid gray";
        checkFieldText[3].style.color = '#fbfbfb'; */
        
        statOne.innerHTML = 'CO2';
        statOneT.innerHTML = 'Minimerer CO2-aftryk og transportomkostninger.';
        statTwo.innerHTML = 'Lokalt';
        statTwoT.innerHTML = 'Sælger og køber lokale paller for at reducere transport.';

        textBox.innerHTML = `Vi restaurerer og upcycler paller. Vi bytter også lagre af paller, hvilket minimerer CO2-aftryk og transportomkostninger. Desuden køber og sælger vi paller lokalt, hvilket holder CO2 til transport på et minimum. <br><br>
I en verden, hvor der er mangel på paller. Garanterer vi god kvalitet både når det kommer til ombyttede, genbrugte og upcyclede paller.`

         imgBox.src = "https://www.electricmirror.com/wp-content/uploads/2022/05/image-coming-soon.jpg";
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
        headerBox.innerHTML = 'Lad os håndtere dine paller';
        imgTitle.innerHTML = 'Pallehåndtering'
        checkField[0].style.borderBottom = "1px solid gray";
        checkFieldText[0].style.color = '#fbfbfb';
        checkField[1].style.borderBottom = "1px solid gray";
        checkFieldText[1].style.color = '#fbfbfb';
        checkField[2].style.borderBottom = "1px solid #7dc4af";
        checkFieldText[2].style.color = '#7dc4af';
        /* checkField[3].style.borderBottom = "1px solid gray";
        checkFieldText[3].style.color = '#fbfbfb'; */
        
        statOne.innerHTML = 'Værdi'
        statOneT.innerHTML = 'Få vurderet dine paller og betalt alle omkostninger.'
        statTwo.innerHTML = 'A-D'
        statTwoT.innerHTML = 'Handler med europæiske paller A, B, C & D paller.'
        textBox.innerHTML = `Overfør dit lager af paller til GP Kollund, så beregner og vurderer vi kvaliteten og betaler for det hele – det vil være en ekstra indtægt og en glædelig overraskelse for dig.<br><br>
Vi køber europæisk A-, B-, C- og D-kvalitet. Vi køber også engangspaller og halvpaller.`
        
         imgBox.src = "https://www.electricmirror.com/wp-content/uploads/2022/05/image-coming-soon.jpg";
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
        <img src="https://gpkollund.com/media/whicq5ru/gp_kollund_210322_01216.jpg?rxy=0.577142144431048,0.3082922568166219&width=640&height=414&quality=90&rnd=132954515089170000" alt="">
    </span>
    
    </div>
    <div class="containerText">
        <h2>Torben Prüss</h2>
        <p>Administrerende direktør og ejer af Gp>kollund,
Danmark <br><br>
Mob: +45 2142 1795
<br><br>
E-mail: tp@gpkollund.dk</p>
        <button class='btn-24'>sup</button>
    </div>
</div>


<h2><b>Mangler(Spørg H & T om de ønsker T & L fremvist)</b></h2>

<div class="boxContainer containerRight">
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









<?php
the_content();
    ?>



<?php
get_footer()
?>