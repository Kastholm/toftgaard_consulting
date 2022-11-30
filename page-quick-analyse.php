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
		<h1>Quick-Analyse, af jeres logistiske opsætning</h1>
		<h2>Ikke alle virksomheder er overbeviste om deres optimerings potentiale. Ofte har de selv gennem
årerne foretaget forskellige tiltag til optimeringer i deres logistik og derfor mødes vi ofte med en vis
skepsis, når vi fremlægger vores teser.

		</h2>
	</span>
	
	</span>
	<span class="field img qa-banner">

	
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




<!-- <script>
let field = document.querySelector('.serviceOutput');
let btn = document.querySelector('.btn-24');
let imgBox = document.querySelector('.toggleImg');
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
        headerBox.innerHTML = 'Bedre bundlinje 2023';
        imgTitle.innerHTML = 'Quick-Analyse'
        btn.innerHTML = 'Start nu';
        statOne.innerHTML = 'Optimer';
        statOneT.innerHTML = 'din bundlinje 2023 med et indblik i din logistiske strategi og optimeringsmuligheder.';
        statTwo.innerHTML = '5-15%';
        statTwoT.innerHTML = 'På bare fire måneder kan vi forbedre din EBIT med 5%-15%.';
        
        textBox.innerHTML = `
Logistikoptimering giver en bedre bundlinje allerede inden for få måneder og kan bidrage til, at EBIT for 2023 ender bedre end forventet.<br> Mens vi venter på, at kurven vender, og at verdensmarkederne heler, kan du proaktivt sikre en bedre bundlinje i 2023.
`
         imgBox.src = "https://i.ibb.co/bN9xwYL/Quick-analyse-Bedre-bundlinje.jpg";

         return;
    }
    if(checkBox[1].checked){
         field.classList.remove('opacityOne');
   field.classList.add('opacityZ');
   setTimeout(() => {
    field.classList.add('opacityOne');
    field.classList.remove('opacityZ');
}, "300");
        headerBox.innerHTML = 'Positivt cashflow';
        imgTitle.innerHTML = 'Quick-Analyse'
        checkField[0].style.borderBottom = "1px solid gray";
        checkFieldText[0].style.color = '#fbfbfb';
        checkField[1].style.borderBottom = "1px solid #F33615";
        checkFieldText[1].style.color = '#F33615';
        btn.innerHTML = 'Start nu';
        checkField[2].style.borderBottom = "1px solid gray";
        checkFieldText[2].style.color = '#fbfbfb';
        /* checkField[3].style.borderBottom = "1px solid gray";
        checkFieldText[3].style.color = '#fbfbfb'; */
      
        statOne.innerHTML = 'Garanti';
        statOneT.innerHTML = 'Med No Cure – No Pay sikrer vi dig en sikker investering i vores logistikoptimering. ';
        statTwo.innerHTML = 'Analyse';
        statTwoT.innerHTML = 'Vi tilbyder dig en gratis analyse, så vi sammen kan forbedre jeres logistik.  ';

        textBox.innerHTML = `Vi arbejder resultatorienteret med logistikoptimering. Det betyder, at vores honorar er direkte knyttet til, at vi kan skabe et positivt cashflow for din virksomhed.
<br><br> Grib muligheden for at påvirke økonomien i 2023.
`
/* Vi ved, at din tid er kostbar – og blot én time af din tid kan betyde en betydelig økonomisk gevinst for din virksomhed på et tidspunkt, hvor det betyder mere end nogensinde før. */
         imgBox.src = "https://i.ibb.co/m9fJkN2/Quick-analyse-cashflow.jpg";
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
        headerBox.innerHTML = 'Direkte til logistik-analysen?';
        imgTitle.innerHTML = 'Quick-Analyse '
        checkField[0].style.borderBottom = "1px solid gray";
        checkFieldText[0].style.color = '#fbfbfb';
        checkField[1].style.borderBottom = "1px solid gray";
        checkFieldText[1].style.color = '#fbfbfb';
        checkField[2].style.borderBottom = "1px solid #F33615";
        checkFieldText[2].style.color = '#F33615';
        /* checkField[3].style.borderBottom = "1px solid gray";
        checkFieldText[3].style.color = '#fbfbfb'; */
        btn.innerHTML = 'Få en analyse';
        statOne.innerHTML = 'Gratis'
        statOneT.innerHTML = 'En logistik-analyse er uden beregning, og alle forslåede implementeringer er uforpligtende'
        statTwo.innerHTML = 'Overblik'
        statTwoT.innerHTML = 'Få et gratis overblik på din logistik uagtet om forslåede implementeringer accepteres.'
        textBox.innerHTML = `Hvis du har en større logistisk opsætning, er det efter vores erfaring bedre at vælge en logistikanalyse fra første klik, da der med høj sandsynlighed er rum for optimering i strategien.<br><br> Med logistik-analysen skaber vi en komplet optegnelse af jeres logistiske strategi og finder frem til profitable indsatsområder. `
        
         imgBox.src = "https://i.ibb.co/hXSyZJX/Logistik-analyse-forside-logistik-analyse-banner.jpg";
         checkBox[0].checked = false;
         checkBox[1].checked = false;
         return;
    }
        
}

</script> -->




<!-- <div class="boxContainer">
    <div class="containerImg">
    <span>
        <img src="http://localhost:8080/toftgaard_consulting/wp-content/uploads/2022/11/bgeff.webp" alt="">
    </span>
    <span data-aos="fade-down-right">
        <img class='top-fix' src="https://www.folklor-mersch.lu/images/sursite/Photos-Coming-Soon.jpg" alt="">
    </span>
    
    </div>
    <div class="containerText">
        <h2>Spar 10%-30% i transportomkostninger</h2>
        <p>Efter kun 4 måneder skaber vi besparelser på jeres transportposter svarende til 10%-30% af de samlede transportudgifter, dette gøres ved hjælp af vores logistiske analyser. <br>
Vi kan også spare jeres virksomhed for penge på logistikposten – anmod om en Quick-analyse i dag og få resultaterne i morgen.
</p>
        <button class='btn-24'>sup</button>
    </div>
</div>

 -->








 <div style='border-top: 2px dotted black;' class="boxContainer">
    <div class="containerImg">
    <span>
        <?php echo "<img src='".get_stylesheet_directory_uri()."/dist/img/bgeff.webp' \>" ?>
    </span>
    <span  data-aos="fade-down-right">
    <?php echo "<img class='top-fix' src='".get_stylesheet_directory_uri()."/dist/img/kandetbetalesig.webp' \>" ?>
    </span>
    
    </div>
    <div class="containerText">
        <h2>Kan det betale sig</h2>
        <p>Det spørgsmål som vi ofte hører er: <br> kan det betale sig og skaber det værdi for os ? <br>
Ja altid! <br>- en professionel ekstern vurdering af jeres nuværende logistik setup giver jer en bekræftelse og en større tryghed omkring at opsætningen af jeres logistiske setup er korrekt i forhold til jeres behov.</p>
        <button class='btn-24'>CTA</button>
    </div>
</div>


<div class="boxContainer containerRight">
    <div class="containerImg">
        <span>
       
        <?php echo "<img src='".get_stylesheet_directory_uri()."/dist/img/bgeff.webp' \>" ?>
        </span>
        <span data-aos="fade-down-left"
        >
        <?php echo "<img class='top-fix' src='".get_stylesheet_directory_uri()."/dist/img/derforquick.webp' \>" ?>
        </span>
        
    </div>
    <div class="containerText">
        <h2>Derfor Quick-Analyse</h2>
        <p>Vores store erfaring fra tidligere analyser og en generel stor know-how fra transportmarkedet gør at vi
med vores førstehåndsindtryk har muligheden for i fællesskab med jer at vurdere potentialet i netop jeres
virksomhed og efterfølgende beslutte i samråd om der er grundlag for at starte en mere dybdegående logistik analyse.
</p>
        <button class='btn-24'>CTA</button>
    </div>
</div>














<?php
the_content();
    ?>



<?php
get_footer()
?>