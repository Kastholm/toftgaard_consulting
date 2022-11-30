<?php
get_header()
?><script>
  AOS.init();
</script><div class=loadingScreen><span class=loader><span class=loader-inner></span></span><div class=progress-bar><span class=bar><span class=progress></span></span></div></div><div class=subBanner><span class="field text"><div class=border-top></div><span class=innertext><h1>Quick-Analyse, af jeres logistiske opsætning</h1><h2>Ikke alle virksomheder er overbeviste om deres optimerings potentiale. Ofte har de selv gennem årerne foretaget forskellige tiltag til optimeringer i deres logistik og derfor mødes vi ofte med en vis skepsis, når vi fremlægger vores teser.</h2></span></span> <span class="field img qa-banner"></span></div><div class=border-bot></div><script>
 

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
</script><div style="border-top: 2px dotted black;" class=boxContainer><div class=containerImg><span><?php echo "<img src='".get_stylesheet_directory_uri()."/dist/img/bgeff.webp' \>" ?></span> <span data-aos=fade-down-right><?php echo "<img class='top-fix' src='".get_stylesheet_directory_uri()."/dist/img/kandetbetalesig.webp' \>" ?></span></div><div class=containerText><h2>Kan det betale sig</h2><p>Det spørgsmål som vi ofte hører er:<br>kan det betale sig og skaber det værdi for os ?<br>Ja altid!<br>- en professionel ekstern vurdering af jeres nuværende logistik setup giver jer en bekræftelse og en større tryghed omkring at opsætningen af jeres logistiske setup er korrekt i forhold til jeres behov.</p><button class=btn-24>CTA</button></div></div><div class="boxContainer containerRight"><div class=containerImg><span><?php echo "<img src='".get_stylesheet_directory_uri()."/dist/img/bgeff.webp' \>" ?></span> <span data-aos=fade-down-left><?php echo "<img class='top-fix' src='".get_stylesheet_directory_uri()."/dist/img/derforquick.webp' \>" ?></span></div><div class=containerText><h2>Derfor Quick-Analyse</h2><p>Vores store erfaring fra tidligere analyser og en generel stor know-how fra transportmarkedet gør at vi med vores førstehåndsindtryk har muligheden for i fællesskab med jer at vurdere potentialet i netop jeres virksomhed og efterfølgende beslutte i samråd om der er grundlag for at starte en mere dybdegående logistik analyse.</p><button class=btn-24>CTA</button></div></div><?php
the_content();
    ?><?php
get_footer()
?>