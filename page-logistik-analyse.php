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
		<h1>Fokusområde(OBS)</h1>
		<h2>Vi fokuserer på flere forskellige områder i virksomheden som er berørt af transport og logistik uagtet
organisatoriske skillelinjer som f.eks. indkøb, supply chain eller logistik.
Vi foretager en vurdering af de områder, hvor vi kan være nyttige til at supplere jeres viden og ekspertise.
Vi arbejder tæt sammen med jer for at udvikle nye løsninger og aktivt støtte jer i den effektive
implementering af løsningerne
		</h2>
	</span>
	
	</span>
	<span  class="field img la-banner">

	
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
  <p>Bedre bundlinje</p>
<input type="checkbox" class='checkOne' checked>
  </span>

    <span>
        <p>Positiv cashflow</p>
        <input type="checkbox" class='checkTwo'>
    </span>
    <span>
    <p>Return Of Investment</p>
<input type="checkbox" class='checkThree'>
    </span>
    
</nav>
<div class="serviceOutput">
<!-- <div class='toggleImage'></div> -->
<div data-aos="fade-up-right" class="promo" style="--overlay-color: #2e2b6e">
    <div class="image-wrapper"><img class='toggleImg' src="https://www.electricmirror.com/wp-content/uploads/2022/05/image-coming-soon.jpg" /></div>
    <h2 class="title imgTitle"></h2>
</div>
<div class='toggleText'>
  <h3>Logistik Analyse</h3>
    <h2></h2>
    
    <p></p>
    
<a class='link' href='logistik-analyse'><button class='btn-24'>Kontakt os</button></a>
    <div class="stats">
      <div class="stats__item is-visible" data-module-reveal="up" data-reveal-delay="">
      <div class="stats__content">
                <p data-aos="fade-up" class="stats__stat statOne">10</p>

                <p data-aos="fade-up" class="stats__description statOneText">years of eCommerce sales growth in just 10 weeks</p>
      </div>

                    
          </div>
      <div class="stats__item is-visible" data-module-reveal="up" data-reveal-delay="">
      <div class="stats__content">
                <p data-aos="fade-up" class="stats__stat statTwo">51%</p>

                <p data-aos="fade-up" class="stats__description margin-none statTwoText">transportation cost savings with more flexible fulfillment locations</p>
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
        btn.innerHTML = 'Få en analyse';
        headerBox.innerHTML = 'Bedre bundlinje';
        imgTitle.innerHTML = 'Logistik Analyse'
link.href="quick-analyse";
        statOne.innerHTML = 'Optimer';
        statOneT.innerHTML = 'din bundlinje med et indblik i din logistiske strategi.';
        statTwo.innerHTML = '5-10% ';
        statTwoT.innerHTML = 'på bare 4 måneder kan vi forbedre dit EBIT med op til 5-10%.';
        /* i omkostninger */
        /* En fuldarbejdet logistik analyse kan på 1 uge udføres på alle virksomhedstyper */
        textBox.innerHTML = `Logistikomkostningerne udgør ofte en mindre del af virksomhedens totale omkostninger og får derfor også
sjældent den opmærksomhed som den egentlig burde have
Logistikoptimering giver en bedre bundlinje allerede inden for få måneder og kan bidrage til at dit
regnskabsår ender med et bedre resultat end forventet.
        `
       /*  <br><br>
        Gennem en for-analyse kan vi fremhæve dine vigtigste fokusområder og besparelsespotentiale.  */


        imgBox.src = <?php echo "'".get_stylesheet_directory_uri()."/dist/img/bundlinje.webp'" ?>
         
         return;
    }
    if(checkBox[1].checked){
        field.classList.remove('opacityOne');
   field.classList.add('opacityZ');
   setTimeout(() => {
    field.classList.add('opacityOne');
    field.classList.remove('opacityZ');
}, "300");
        
        checkField[0].style.borderBottom = "1px solid gray";
        checkFieldText[0].style.color = '#fbfbfb';
        checkField[1].style.borderBottom = "1px solid #7dc4af";
        checkFieldText[1].style.color = '#7dc4af';
        
        checkField[2].style.borderBottom = "1px solid gray";
        checkFieldText[2].style.color = '#fbfbfb';
        /* checkField[3].style.borderBottom = "1px solid gray";
        checkFieldText[3].style.color = '#fbfbfb'; */
        headerBox.innerHTML = 'Positiv cashflow';
        imgTitle.innerHTML = 'Logistik analyse'
        link.href="logistik-analyse";
        statOne.innerHTML = 'Pris';
        statOneT.innerHTML = 'Honorar på basis af <br>(OBS)No Cure - No Pay';
        statTwo.innerHTML = '+15%';
        statTwoT.innerHTML = 'besparelsespotentiale med uændret kvalitet og service.';
        /* En fuldarbejdet logistik analyse  & tager i gennemsnit 7 dage, & kan udføres på alle virksomhedstyper  */
        
        textBox.innerHTML = `Gennem vores analyser identificerer vi virksomheden besparelsespotentiale som historisk ligger på +15%
med uændret kvalitet og service. Vores honorar er i de fleste tilfælde succesbaseret ud fra princippet
”no cure – no pay” og det giver flere fordele for jer. <br> Vores betalingsbetingelser aftales individuelt men typisk tilbydes en betalingsform som sikre jer en betaling
med et positivt cashflow.


`

imgBox.src = <?php echo "'".get_stylesheet_directory_uri()."/dist/img/cashfloww.webp'" ?>
        
         return;
    }
    else if(checkBox[2].checked){
        field.classList.remove('opacityOne');
   field.classList.add('opacityZ');
   setTimeout(() => {
    field.classList.add('opacityOne');
    field.classList.remove('opacityZ');
}, "300");
        headerBox.innerHTML = 'ROI på 1 måned';
        imgTitle.innerHTML = 'Logistisk Analyse'
        checkField[0].style.borderBottom = "1px solid gray";
        checkFieldText[0].style.color = '#fbfbfb';
        checkField[1].style.borderBottom = "1px solid gray";
        checkFieldText[1].style.color = '#fbfbfb';
        checkField[2].style.borderBottom = "1px solid #7dc4af";
        checkFieldText[2].style.color = '#7dc4af';
        /* checkField[3].style.borderBottom = "1px solid gray";
        checkFieldText[3].style.color = '#fbfbfb'; */
        link.href="paletten-management";
        statOne.innerHTML = ''
        statOneT.innerHTML = ''
        statTwo.innerHTML = ''
        statTwoT.innerHTML = ``
        textBox.innerHTML = `Med vores attraktive kontrakt opnår i typisk en Return Of Investment allerede inden for de første 1-2 måneder. <br> Det giver dig et risikofrit samarbejde da vi arbejder med No Cure - No Pay metoden. Det vil sige at hvis vi ikke formår at optimere jeres logistik indenfor de aftalte målsætninger, er vores arbejdstid gratis `
        
        imgBox.src = <?php echo "'".get_stylesheet_directory_uri()."/dist/img/rio.webp'" ?>
        
         return;
    }
        
}

</script>


<!-- <div style='margin-top: 8em;
    margin-bottom: 8em;' class="boxContainer">
    <div class="containerImg">
    <span>
        <img src="http://localhost:8080/toftgaard_consulting/wp-content/uploads/2022/11/bgeff.webp" alt="">
    </span>
    <span data-aos="fade-down-right">
        <img src="https://www.folklor-mersch.lu/images/sursite/Photos-Coming-Soon.jpg" alt="">
    </span>
    
    </div>
    <div class="containerText">
        <h2>Hvordan forløber processen i en logistisk analyse?</h2>
        <p>
        Vi starter med at kigge på behov og kvalitet samt datavalidering, herunder leveringsstatistik, betingelser og leverandører.
<br>
Herefter igangsættes en analyse indenfor de aftalte områder og der udarbejdes resultater fra vores analyser og observationer.
<br>
Vi opsætter derefter en præsentation af resultater og beslutningsgrundlag, hvorefter der træffes beslutninger ang. nye løsninger og tiltag.
<br>
Til sidst i processen implementeres valgte løsninger og der opfølges med kvalitetsobservationer 12 måneder efter vellykket implementering.


</p>
        <button class='btn-24'>Kontakt</button>
    </div>
</div>
 -->





 





 

<div class="timeline-container" id="timeline-1">
    <div class="timeline-header">
        <h2 class="timeline-header__title">Sådan foregår en Quick-Analyse</h2>
        <h3 class="timeline-header__subtitle">7 skridt til din udvikling</h3>
    </div>
    <div class="timeline">
        <div class="timeline-item" data-text="1">
            <div class="timeline__content"><img class="timeline__img" src="https://i.ibb.co/58RrVS8/Logistik-analyse-punkt-1-7.jpg" />
                <h2 class="timeline__content-title">Fase 1</h2>
                <p class="timeline__content-desc">Indhente informationer på det aktuelle set-up bl.a. strukturer, processer, kvalitet og behov.</p>
            </div>
        </div>
        <div class="timeline-item" data-text="2">
            <div class="timeline__content"><img class="timeline__img" src="https://i.ibb.co/SmKKpCJ/industry-g6045d2a7d-1920.jpg" />
                <h2 class="timeline__content-title">Fase 2</h2>
                <p class="timeline__content-desc">Data validering herunder sendingsstatik, priser, transportører, vognpark, lager.</p>
            </div>
        </div>
        <div class="timeline-item" data-text="3">
            <div class="timeline__content"><img class="timeline__img" src="https://i.ibb.co/16CDH6h/Logistik-analyse-punkt-3-7.jpg" />
                <h2 class="timeline__content-title">Fase 3</h2>
                <p class="timeline__content-desc">Analyse og Tender inden for de fastlagte områder.</p>
            </div>
        </div>
        <div class="timeline-item" data-text="4">
            <div class="timeline__content"><img class="timeline__img" src="https://i.ibb.co/rwSwDqG/Logistik-analyse-punkt-4-7.jpg" />
                <h2 class="timeline__content-title">Fase 4</h2>
                <p class="timeline__content-desc">Udarbejdelse af resultat fra vores analyser, observationer og tender.</p>
            </div>
        </div>
        <div class="timeline-item" data-text="5">
            <div class="timeline__content"><img class="timeline__img" src="https://i.ibb.co/jwDmfZv/Logistik-analyse-punkt-5-7.jpg" />
                <h2 class="timeline__content-title">Fase 5</h2>
                <p class="timeline__content-desc">Præsentation af resultater og beslutningsgrundlag.</p>
            </div>
        </div>
        <div class="timeline-item" data-text="6">
            <div class="timeline__content"><img class="timeline__img" src="https://i.ibb.co/tP6WvYv/Logistik-analyse-punkt-6-7.jpg" />
                <h2 class="timeline__content-title">Fase 6</h2>
                <p class="timeline__content-desc">Valg af nyt set-up ud fra præsentation og beslutningsgrundlag.</p>
            </div>
        </div>
        <div class="timeline-item" data-text="7">
            <div class="timeline__content"><img class="timeline__img" src="https://i.ibb.co/dLLWJy7/Logistik-analyse-punkt-7-7.jpg" />
                <h2 class="timeline__content-title">Fase 7</h2>
                <p class="timeline__content-desc">Implementering af nyt set-up samt start på 12 måneders løbende kvalitetskontrol</p>
            </div>
        </div>

        
        
        
    </div>
</div>
<div class="demo-footer"></div>

<script>


(function(jQuery) {
  jQuery.fn.timeline = function() {
    var selectors = {
      id: jQuery(this),
      item: jQuery(this).find(".timeline-item"),
      activeClass: "timeline-item--active",
      img: ".timeline__img"
    };
    selectors.item.eq(0).addClass(selectors.activeClass);
    selectors.id.css(
      "background-image",
      "url(" +
        selectors.item
          .first()
          .find(selectors.img)
          .attr("src") +
        ")"
    );
    var itemLength = selectors.item.length;
    jQuery(window).scroll(function() {
      var max, min;
      var pos = jQuery(this).scrollTop();
      selectors.item.each(function(i) {
        min = jQuery(this).offset().top;
        max = jQuery(this).height() + jQuery(this).offset().top;
        var that = jQuery(this);
        if (i == itemLength - 2 && pos > min + jQuery(this).height() / 2) {
          selectors.item.removeClass(selectors.activeClass);
          selectors.id.css(
            "background-image",
            "url(" +
              selectors.item
                .last()
                .find(selectors.img)
                .attr("src") +
              ")"
          );
          selectors.item.last().addClass(selectors.activeClass);
        } else if (pos <= max - 40 && pos >= min) {
          selectors.id.css(
            "background-image",
            "url(" +
              jQuery(this)
                .find(selectors.img)
                .attr("src") +
              ")"
          );
          selectors.item.removeClass(selectors.activeClass);
          jQuery(this).addClass(selectors.activeClass);
        }
      });
    });
  };
})(jQuery);

jQuery("#timeline-1").timeline();



</script>









	



<?php
the_content();
    ?>



<?php
get_footer()
?>