<?php
get_header()
?><?php

?><script>
  AOS.init();
</script><div class=loadingScreen><span class=loader><span class=loader-inner></span></span><div class=progress-bar><span class=bar><span class=progress></span></span></div></div><div class=banner><div class=bgOverlay><div class=video id=bannerVideo></div><video id=bannerVideo autoplay muted loop playsinline>Your browser does not support the video tag.<source type=video/mp4 src=https://d1n9pjnquucpl9.cloudfront.net/images/Flexe-driving-aerial_2021-05-26-211556_anvn.mp4></video><div class=bannerBox><h1>Velkommen til Toftgaard Consulting</h1><h2 class=headOne>Optimizing</h2><h2 class=headTwo>Made</h2><h2 class=headThree>Easy</h2><div class=button-row><button class=btn-24>knap1</button> <button class=btn-24>knap2</button></div></div></div></div><script>
 

        // wait until DOM is ready
document.addEventListener("DOMContentLoaded", function (event) {
  console.log("DOM loaded");

  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener(
    "load",
    function (e) {
      //custom GSAP code goes here
      // This tween will rotate an element with a class of .my-element
      const timeline = gsap.timeline({defaults: {duration: 1, delay: .5}})
timeline
  
  .from('.bannerBox h2', {x: '-100%', ease: '`power1`', stagger: .5
        })
        

      console.log("window loaded");
    },
    false
  );
});
</script><div class=textField><object data="/DinKøkkenChef/DKM files/balausta-isotipo.svg" class=objectLeft><svg xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink width=257px height=257px viewbox="0 0 257 257" version=1.1><desc>Created with Sketch.</desc><g id=Desktop stroke=none stroke-width=1 fill=none fill-rule=evenodd><g id=02.-Espacios transform="translate(-1034.000000, -2648.000000)" stroke=#A3832A stroke-width=0.5><g id=Group-21 transform="translate(543.000000, 2649.000000)"><g id=Group-20><g id=Group-12><path d="M743.918032,111.924539 L717.886879,49.7524579 C713.818417,40.037097 706.212105,32.4874817 696.466477,28.4959697 L660.82462,13.892434 L634.103281,2.94302638 C629.335552,0.990092208 624.308355,0 619.156612,0 C613.901083,0 608.777882,1.03031876 603.929718,3.05981314 L577.863537,13.9780777 L541.765015,29.0967727 C532.051821,33.1661425 524.50389,40.7741512 520.51197,50.5206552 L494.963429,112.893869 C490.971509,122.640373 491.014322,133.3601 495.081487,143.075461 L521.113937,205.246245 C525.181102,214.962903 532.788711,222.511221 542.533041,226.50403 L604.898832,252.056974 C609.663966,254.009908 614.692461,255 619.842906,255 C625.098436,255 630.221636,253.969681 635.071098,251.938889 L697.2358,225.90193 C706.948995,221.833857 714.495629,214.224551 718.487548,204.479345 L744.03609,142.106131 C748.028009,132.359627 747.986494,121.6399 743.918032,111.924539 Z M658.863113,20.0362888 L694.321217,34.5591946 C702.199361,37.7866504 708.474515,44.009278 711.763098,51.8617644 L737.660047,113.689287 C738.915852,116.68704 739.692825,119.825453 740,123 L702.558163,122.994838 C717.688485,115.99535 721.146144,104.834108 720.668603,95.151741 C720.473714,91.1990433 719.574129,86.8979197 718.008567,82.3619312 C717.984045,82.278051 717.953069,82.1954611 717.924675,82.1128713 C717.885955,82.0018912 717.851108,81.893492 717.812388,81.7812215 L717.804644,81.7838024 C716.468818,78.2492157 713.062786,75.7289354 709.060472,75.7289354 C703.895279,75.7289354 699.707111,79.9164979 699.707111,85.0809434 C699.707111,90.2466793 703.895279,94.4329514 709.060472,94.4329514 C710.939662,94.4329514 712.685915,93.8741796 714.150806,92.9205251 C714.265674,93.7877183 714.346985,94.6355546 714.386996,95.4601624 C714.89035,105.652264 709.852932,112.920169 698.986927,117.678118 C692.794375,120.389387 685.086596,122.136678 675.526731,122.989676 L671.200463,122.989676 L671.200463,118.971165 C671.199172,110.312137 667.759583,102.007988 661.636726,95.8847258 L659.037351,93.2883079 L665.522881,86.6101457 C667.331086,87.6825231 669.543265,88.429703 672.2033,88.429703 C674.989819,88.429703 678.266787,87.6115474 682.080666,85.4926021 C687.572393,82.4419401 692.358134,77.6568918 694.658077,75.3572811 C700.207884,69.8069863 700.207884,64.1160307 700.207884,50.3648237 L700.207884,46.7257092 L696.569534,46.7257092 C682.815047,46.7257092 677.123268,46.7257092 671.573462,52.2747135 C669.273518,54.5743242 664.487778,59.360663 661.435384,64.8503059 C657.266575,72.3543664 658.133894,77.7769051 660.361561,81.477962 L653.891518,88.141929 L651.041757,85.2925798 C644.9189,79.1693181 636.612259,75.7302258 627.951979,75.7302258 L624,75.7302258 L624,70.694827 C624.876353,61.4654133 626.600665,53.9832907 629.245213,47.9464902 C634.00514,37.0833463 641.265062,32.0518189 651.465091,32.5486483 C652.2924,32.5899433 653.140358,32.6712426 654.007677,32.7848036 C653.052594,34.2507732 652.493741,35.9954834 652.493741,37.874402 C652.493741,43.0401379 656.68191,47.2264101 661.847102,47.2264101 C667.013585,47.2264101 671.200463,43.0401379 671.200463,37.874402 C671.200463,33.8726666 668.681109,30.4671265 665.146011,29.131494 L665.147301,29.1237513 C665.036305,29.0837468 664.9266,29.0501947 664.815604,29.0114807 C664.731711,28.9843809 664.651691,28.9534097 664.567798,28.9276004 C660.031154,27.362265 655.728117,26.4628101 651.774848,26.2679497 C642.128509,25.7917677 631.009535,29.2218267 624.005163,44.2118812 L624.011616,7 C626.82653,7.34455446 629.607886,8.05302036 632.278247,9.14733563 L658.863113,20.0362888 Z M664,135.578463 C664,142.444712 661.324827,148.900996 656.469304,153.756591 L645.755556,164.470497 C640.900033,169.326093 634.443844,172 627.577698,172 L619.626599,172 L616.399157,172 L612.423608,172 C605.557461,172 599.102579,169.324787 594.247055,164.469192 L583.530696,153.752674 C578.675173,148.898384 576.001306,142.4421 576.001306,135.575852 L576,127.999347 L576,124.474177 L576,120.421537 C576,113.555288 578.673867,107.10031 583.529391,102.243409 L594.243138,91.5295025 C599.098662,86.6739069 605.55485,84 612.422302,84 L619.930803,84 L623.576036,84 L627.575087,84 C634.442539,84.0013056 640.897421,86.6752125 645.752945,91.5308081 L656.469304,102.247326 C661.324827,107.102921 663.998694,113.5579 663.998694,120.424148 L664,128.000653 L664,131.649857 L664,135.578463 Z M667.058809,68.8443288 C669.6985,64.0952096 674.137071,59.6565687 676.269078,57.5231962 C679.349828,54.4423983 682.164076,54.0479709 693,54 C692.95203,64.834761 692.556276,67.6490539 689.474194,70.7298517 C687.342187,72.8632243 682.904949,77.3018652 678.154571,79.9415972 C670.957716,83.9405048 668.0915,81.0702459 667.008174,79.9909007 C665.928846,78.9102229 663.059964,76.0412965 667.058809,68.8443288 Z M526.588673,52.6395557 C529.818068,44.766842 536.045728,38.4973037 543.902934,35.2109874 L579.831738,20.1826683 L605.774077,9.33189162 C608.743933,8.08984979 611.854535,7.31212266 615,7 L614.993544,44.2818911 C607.989848,29.3025829 596.872256,25.8718131 587.207311,26.3477357 C583.253529,26.5424899 578.948528,27.4414548 574.409813,29.0059374 C574.325883,29.0317326 574.244534,29.0626869 574.161895,29.089772 C574.050848,29.1284648 573.941093,29.1619987 573.828755,29.2019813 L573.831337,29.2097199 C570.294626,30.5446247 567.77283,33.9483094 567.77283,37.9478647 C567.77283,43.1107862 571.96291,47.2947776 577.13046,47.2947776 C582.299301,47.2947776 586.488089,43.1107862 586.488089,37.9478647 C586.488089,36.0699696 585.928982,34.32621 584.974754,32.8610391 C585.842468,32.74754 586.690814,32.6662849 587.517209,32.6250125 C597.723184,32.1245844 604.98642,37.1572399 609.747228,48.0144654 C612.387818,54.0363691 614.111626,61.4963586 614.98967,70.6949488 L614.988379,75.7830641 L611.039761,75.7830641 C602.374237,75.7817743 594.065096,79.2202826 587.938154,85.3402084 L585.02253,88.2524934 L578.417828,81.84753 C580.789839,78.1433305 581.835745,72.6295934 577.543657,64.9090717 C574.48987,59.4224196 569.701946,54.6386884 567.400953,52.3416204 C561.848613,46.7943495 556.152945,46.7943495 542.393473,46.7943495 L538.752171,46.7943495 L538.752171,50.4314813 C538.752171,64.1751965 538.752171,69.8630516 544.305802,75.4090328 C546.605503,77.7086803 551.394719,82.4911218 556.887662,85.5401216 C560.704573,87.6579126 563.981745,88.4756224 566.769536,88.4756224 C569.270671,88.4756224 571.372813,87.8152637 573.118572,86.8466516 L579.871766,93.3973582 L577.342224,95.924004 C571.215281,102.04393 567.77283,110.343555 567.774122,118.999155 L567.774122,123 L563.254775,122.99871 C553.779643,122.139728 546.127744,120.401127 539.973685,117.708102 C529.104012,112.952746 524.064295,105.6888 524.566588,95.5022515 C524.607908,94.6780929 524.689256,93.8307186 524.802885,92.9639978 C526.269736,93.9171327 528.015495,94.4756001 529.895543,94.4756001 C535.064384,94.4756001 539.253172,90.2916088 539.253172,85.1286872 C539.253172,79.9670554 535.064384,75.7817743 529.895543,75.7817743 C525.891402,75.7817743 522.483815,78.3006816 521.148671,81.8333426 L521.140923,81.8307631 C521.100895,81.9429725 521.067323,82.0513126 521.027294,82.1622322 C521.000178,82.244777 520.969188,82.3273219 520.943363,82.4111565 C519.377087,86.9446736 518.477092,91.2434539 518.282114,95.1939982 C517.805646,104.856903 521.254553,115.997876 536.342713,122.994841 L499,122.988392 C499.340888,120.143175 500.054945,117.332781 501.160248,114.633307 L526.588673,52.6395557 Z M572.991441,79.9914414 C571.910741,81.0708091 569.043088,83.9397951 561.844638,79.9421369 C557.09542,77.3023499 552.656686,72.8636167 550.523269,70.7301998 C547.442408,67.6493378 547.046639,64.8349864 547,54 C557.834986,54.0479719 560.649338,54.4424075 563.731532,57.524602 C565.863617,59.6566864 570.30235,64.0954196 572.942137,68.8446376 C576.939795,76.041755 574.070809,78.9107411 572.991441,79.9914414 Z M544.668377,220.396831 C536.789355,217.164377 530.513503,210.932112 527.225845,203.067464 L501.324724,141.142895 C500.093305,138.199953 499.317536,135.117425 499,132 L536.195589,132.006462 C521.286891,139.021961 517.868862,150.12811 518.343875,159.769897 C518.538785,163.727424 519.43847,168.036501 521.004206,172.579514 C521.030022,172.663525 521.061001,172.74495 521.088108,172.827668 C521.128123,172.93882 521.161683,173.048679 521.201698,173.159831 L521.209443,173.157246 C522.544126,176.698599 525.950538,179.221491 529.953298,179.221491 C535.120356,179.221491 539.307699,175.027443 539.307699,169.854999 C539.307699,164.681263 535.120356,160.488507 529.953298,160.488507 C528.073898,160.488507 526.328741,161.048144 524.862397,162.003276 C524.748807,161.136032 524.667486,160.28559 524.626181,159.458413 C524.124061,149.251819 529.162039,141.972658 540.027964,137.20734 C545.941102,134.614656 553.239265,132.903433 562.209009,132.01034 L567.81881,132.011632 L567.81881,135.912291 C567.81881,144.586021 571.258782,152.903032 577.383611,159.034484 L580.129135,161.783557 L573.680316,168.43458 C569.977022,166.15338 564.518244,165.22539 556.936106,169.442703 C551.445058,172.498089 546.657494,177.290548 544.358585,179.59372 C538.80687,185.151319 538.80687,190.85238 538.80687,204.626177 L538.80687,208.269635 L542.446916,208.269635 C556.201642,208.269635 561.895345,208.269635 567.444479,202.712037 C569.745969,200.408865 574.532242,195.615113 577.584976,190.116968 C581.684545,182.726655 580.913939,177.352587 578.768636,173.650968 L585.276831,166.937906 L587.979759,169.643035 C594.103297,175.774487 602.409572,179.220198 611.070816,179.220198 L615,179.220198 L614.998709,184.516718 C614.115804,193.644104 612.397754,201.056389 609.777438,207.046963 C605.019562,217.928224 597.760123,222.970128 587.555087,222.468652 C586.728977,222.428586 585.880924,222.34716 585.013509,222.232131 C585.967407,220.763891 586.526322,219.016479 586.526322,217.13465 C586.526322,211.960914 582.338979,207.768159 577.171921,207.768159 C572.006154,207.768159 567.817519,211.960914 567.817519,217.13465 C567.817519,221.142583 570.338445,224.55469 573.873936,225.891099 L573.871354,225.898853 C573.983654,225.93892 574.093371,225.972524 574.20438,226.011298 C574.286991,226.039732 574.368311,226.069459 574.452213,226.095308 C578.989362,227.663068 583.292877,228.563916 587.245296,228.759078 C587.801629,228.787512 588.363126,228.801729 588.928494,228.801729 C598.152525,228.801729 608.392413,224.94243 614.994837,210.840347 L614.988383,248 C612.171865,247.654912 609.388908,246.944056 606.719541,245.846754 L544.668377,220.396831 Z M572.942137,186.155149 C570.30235,190.904436 565.863617,195.343232 563.728867,197.47668 C560.649338,200.557586 557.834986,200.95336 547,201 C547.046639,190.164858 547.442408,187.350466 550.524602,184.26956 C552.656686,182.136113 557.09542,177.697316 561.844638,175.058824 C564.609685,173.522368 566.735106,173 568.366151,173 C570.980619,173 572.325165,174.344565 572.991441,175.009518 C574.070809,176.090234 576.939795,178.957929 572.942137,186.155149 Z M712.426769,202.287999 C709.198054,210.174278 702.967924,216.453591 695.110522,219.745031 L633.226377,245.663181 C630.257251,246.907159 627.147352,247.686099 624,248 L624.006457,210.658693 C630.609826,224.844954 640.884891,228.722859 650.138389,228.722859 C650.70406,228.722859 651.265857,228.708649 651.822487,228.68023 C655.77831,228.485172 660.084125,227.584806 664.623699,226.017884 C664.707645,225.992049 664.787718,225.962338 664.871664,225.933919 C664.982732,225.895166 665.092508,225.86158 665.203576,225.821535 L665.202285,225.813784 C668.739665,224.47809 671.260646,221.067807 671.260646,217.062016 C671.260646,211.891046 667.071065,207.700531 661.901246,207.700531 C656.732718,207.700531 652.541845,211.891046 652.541845,217.062016 C652.541845,218.942839 653.101059,220.689317 654.056759,222.156772 C653.18888,222.27174 652.340373,222.353122 651.512531,222.393167 C641.302041,222.891792 634.040014,217.855165 629.278304,206.979721 C626.613968,200.894175 624.882085,193.342465 624.011623,184.013274 L624.011623,179.16783 L627.986818,179.169122 C636.65269,179.169122 644.964696,175.725253 651.092798,169.595786 L653.855287,166.83139 L660.496109,173.278633 C658.206304,176.986024 657.266102,182.455395 661.489262,190.058776 C664.543627,195.553982 669.332457,200.345171 671.633886,202.64582 C677.187277,208.201739 682.882731,208.201739 696.646099,208.201739 L700.286799,208.201739 L700.286799,204.560229 C700.286799,190.793795 700.286799,185.095781 694.733408,179.542445 C692.43198,177.239212 687.643149,172.449315 682.147875,169.395561 C674.778655,165.30193 669.415113,166.060201 665.718879,168.196795 L659.008317,161.679796 L661.690734,158.99549 C667.817544,152.866023 671.260646,144.553458 671.260646,135.885656 L671.260646,132 L677.067168,132.001292 C685.953885,132.900366 693.191374,134.604216 699.065053,137.17743 C709.938075,141.9402 714.978746,149.21547 714.475067,159.416608 C714.43503,160.243343 714.353667,161.093331 714.238725,161.960111 C712.772888,161.00549 711.025507,160.446152 709.145103,160.446152 C703.976575,160.446152 699.785702,164.636666 699.785702,169.807637 C699.785702,174.977316 703.976575,179.169122 709.145103,179.169122 C713.150002,179.169122 716.558234,176.64758 717.894922,173.108119 L717.902671,173.110703 C717.941416,172.99961 717.976286,172.889809 718.01503,172.778717 C718.043443,172.696043 718.074439,172.614662 718.098977,172.530696 C719.66555,167.990111 720.565715,163.683337 720.76073,159.727926 C721.235997,150.104211 717.825182,139.019499 702.95501,132.005167 L740,132.011626 C739.650007,134.799274 738.942273,137.553336 737.860007,140.197597 L712.426769,202.287999 Z M667.007767,175.009736 C668.089777,173.930361 670.956038,171.058693 678.154339,175.05904 C682.90479,177.697511 687.342099,182.13627 689.475471,184.271033 C692.556269,187.350581 692.952029,190.164949 693,201 C682.163906,200.95336 679.349614,200.55759 676.268816,197.475377 C674.136776,195.34328 669.698135,190.90452 667.058403,186.155274 C663.059495,178.958113 665.929754,176.090442 667.009099,175.009736 L667.007767,175.009736 Z M594.5,70 C590.910053,70 588,67.0899471 588,63.5 C588,59.9100529 590.910053,57 594.5,57 C598.089947,57 601,59.9100529 601,63.5 C601,67.0899471 598.089947,70 594.5,70 Z M645.499339,57 C649.090974,57 652,59.9100529 652,63.5 C652,67.0899471 649.090974,70 645.499339,70 C641.909026,70 639,67.0899471 639,63.5 C639,59.9100529 641.909026,57 645.499339,57 Z M683.5,96 C687.089947,96 690,98.9100529 690,102.5 C690,106.089947 687.089947,109 683.5,109 C679.910053,109 677,106.089947 677,102.5 C677,98.9100529 679.910053,96 683.5,96 Z M555.5,109 C551.910053,109 549,106.089947 549,102.5 C549,98.9100529 551.910053,96 555.5,96 C559.089947,96 562,98.9100529 562,102.5 C562,106.089947 559.089947,109 555.5,109 Z M683.5,147 C687.089947,147 690,149.910053 690,153.5 C690,157.088624 687.089947,160 683.5,160 C679.910053,160 677,157.088624 677,153.5 C677,149.910053 679.910053,147 683.5,147 Z M555.5,160 C551.910053,160 549,157.089947 549,153.5 C549,149.910053 551.910053,147 555.5,147 C559.089947,147 562,149.910053 562,153.5 C562,157.089947 559.089947,160 555.5,160 Z M594.5,198 C590.910053,198 588,195.089947 588,191.5 C588,187.910053 590.910053,185 594.5,185 C598.089947,185 601,187.910053 601,191.5 C601,195.089947 598.089947,198 594.5,198 Z M645.499339,185 C649.090974,185 652,187.910053 652,191.5 C652,195.088624 649.090974,198 645.499339,198 C641.909026,198 639,195.088624 639,191.5 C639,187.910053 641.909026,185 645.499339,185 Z" id=isotipo></path></g></g></g></g></g></svg></object><div><h2 data-aos=fade-right>Dine muligheder for optimering</h2><div class=corner></div><p>Hos Toftgaard Consulting tilbyder vi logistikanalyser, emballage og palle management løsninger.<br>Gennem de seneste 20 år har vores team af specialister hjulpet flere hundrede internationale virksomheder med optimering af deres logistik, ligesom vi har opbygget en platform hvor vi har håndteret millioner af forskellige palletyper gennem vores Pallet-Management-System (PMS).</p></div><div class=topPageInfo><p><br>Ud over at generere store besparelser på vores kunders logistik- og emballage/palleomkostninger ser vi det som vores primære opgave at I og jeres medarbejdere står stærkere efter implementering af vores arbejde.<br><b>Alt det I gør i dag – det gør I bedre i morgen</b><br>Det er uden betydning om I er en mindre eller stor virksomhed – en ekstern vurdering af forsyningskæderne og logistikken resulterer ofte i tiltag der skaber forbedringer og besparelser.<br>Vi skaber synlige resultater inden for få måneder.</p></div></div><div class=serviceChoose id=navMenu><div class=box><span></span> <span></span> <span></span></div><nav data-aos=fade-up class=serviceToggle><span><p>Quick-Analyse</p><input type=checkbox class=checkOne checked></span> <span><p>Logistik Analyse</p><input type=checkbox class=checkTwo></span> <span><p>Pallet-Management-System</p><input type=checkbox class=checkThree></span></nav><div class=serviceOutput><div data-aos=fade-up-right class=promo style="--overlay-color: #2e2b6e"><div class=image-wrapper><img class=toggleImg src="<?php" echo "'".get_stylesheet_directory_uri()." dist img quick-analyse.webp'" ?> /></div><h2 class="title imgTitle"></h2></div><div class=toggleText><h3 class=miniTitle>Toftgaards logistiske metoder</h3><h2></h2><p></p><a class=link href=logistik-analyse><button class=btn-24>se mere</button></a><div class=stats><div class="stats__item is-visible" data-module-reveal=up data-reveal-delay><div class=stats__content><p data-aos=fade-up class="stats__stat statOne">10</p><p data-aos=fade-up class="stats__description statOneText">years of eCommerce sales growth in just 10 weeks</p></div></div><div class="stats__item is-visible" data-module-reveal=up data-reveal-delay><div class=stats__content><p data-aos=fade-up class="stats__stat statTwo">51%</p><p data-aos=fade-up class="stats__description margin-none statTwoText">transportation cost savings with more flexible fulfillment locations</p></div></div></div></div></div></div><script>
let field = document.querySelector('.serviceOutput');
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
let miniTitle = document.querySelector('.miniTitle');

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
    /* field.classList.remove('opacityOne');
    field.classList.add('opacityZ');
   setTimeout(() => {
    field.classList.add('opacityOne');
    field.classList.remove('opacityZ');
}, "500") */
    toggleOutput()
 } )
 checkField[2].addEventListener('click', () => { 
    checkBox[0].checked = false;
    checkBox[1].checked = false;
    checkBox[2].checked = true;
   /*  field.classList.remove('opacityOne');
    field.classList.add('opacityZ');
   setTimeout(() => {
    field.classList.add('opacityOne');
    field.classList.remove('opacityZ');
}, "500") */
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
       
        headerBox.innerHTML = 'Skab et hurtigt overblik';
        imgTitle.innerHTML = 'Quick-Analyse'
link.href="quick-analyse";
        statOne.innerHTML = 'Gratis';
        statOneT.innerHTML = 'Quick-Analyse udarbejdes uden beregning.';
        statTwo.innerHTML = '8 timer';
        statTwoT.innerHTML = 'Potentiale på 8 timer';
        miniTitle.innerHTML = 'Quick-Analyse'
        /* En fuldarbejdet logistik analyse kan på 1 uge udføres på alle virksomhedstyper */
        textBox.innerHTML = `
        Med en Quick – Analyse har vi muligheden for, at få et førstehånds indtryk af jeres setup, det omfatter bla.
emballage løsninger, pallet-management-system, interne strukturer, processer og logistik.<br>
`



         imgBox.src = <?php echo "'".get_stylesheet_directory_uri()."/dist/img/Quick-Analyse.webp'" ?>
         
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
        checkField[1].style.borderBottom = "1px solid #F33615";
        checkFieldText[1].style.color = '#F33615';
        
        checkField[2].style.borderBottom = "1px solid gray";
        checkFieldText[2].style.color = '#fbfbfb';
        /* checkField[3].style.borderBottom = "1px solid gray";
        checkFieldText[3].style.color = '#fbfbfb'; */
        headerBox.innerHTML = 'Skab et komplet overblik';
        imgTitle.innerHTML = 'Logistik Analyse'
        link.href="logistik-analyse";
        statOne.innerHTML = '10-30%';
        statOneT.innerHTML = 'besparelser på jeres logistikomkostninger inden for 4 måneder';
        statTwo.innerHTML = '+ 200 ';
        statTwoT.innerHTML = 'Logistik Analyser sikrer jer kompetence gennem en struktureret proces';
        miniTitle.innerHTML = 'Logistik Analyse'
        /* En fuldarbejdet logistik analyse  & tager i gennemsnit 7 dage, & kan udføres på alle virksomhedstyper  */
        
        textBox.innerHTML = `Med vores Logistik Analyse skaber vi et dybdegående overblik af jeres nuværende logistik setup. <br> Vores erfaringer siger at 98% af de virksomheder vi er i dialog med kan optimere deres logistik
omkostninger med 10-30%.

`

         imgBox.src = <?php echo "'".get_stylesheet_directory_uri()."/dist/img/Logistik-analyse.webp'" ?>
        
         return;
    }
    else if(checkBox[2].checked){
      field.classList.remove('opacityOne');
   field.classList.add('opacityZ');
   setTimeout(() => {
    field.classList.add('opacityOne');
    field.classList.remove('opacityZ');
}, "300");
        headerBox.innerHTML = 'Pallet-Management-System';
        imgTitle.innerHTML = 'Paller '
        checkField[0].style.borderBottom = "1px solid gray";
        checkFieldText[0].style.color = '#fbfbfb';
        checkField[1].style.borderBottom = "1px solid gray";
        checkFieldText[1].style.color = '#fbfbfb';
        checkField[2].style.borderBottom = "1px solid #F33615";
        checkFieldText[2].style.color = '#F33615';
        /* checkField[3].style.borderBottom = "1px solid gray";
        checkFieldText[3].style.color = '#fbfbfb'; */
        link.href="paletten-management";
        statOne.innerHTML = 'Rigtig pris'
        statOneT.innerHTML = 'Sikres igennem direkte kontakter.'
        statTwo.innerHTML = 'Bæredygtig'
        miniTitle.innerHTML = 'Palle-Management-System'
        statTwoT.innerHTML = `Mindre CO2 udledning gennem stærk logistik.`
        textBox.innerHTML = `Vi tilbyder et stærkt Pallet-Management-System koncept hvor vi køber og sælger alle former for
paller. <br> Sammen med vores partner GPKollund råder vi over specialister med mere
20 års omfattende viden inden for palleindustrien.`
        
         imgBox.src = <?php echo "'".get_stylesheet_directory_uri()."/dist/img/pallebanner.webp'" ?>
        
         return;
    }
        
}

</script><script>
/* jQuery('#navMenu')
        
        jQuery(window).on('scroll', function() {
            if (jQuery(window).scrollTop() >= jQuery(
              '.serviceToggle').offset().top + jQuery('.elementor-top-section').
                outerHeight() - window.innerHeight) {
                
                console.log('reached')
            }
            else {
              console.log('sup')
            }
        }); */

</script><div class=boxContainer><div class=containerImg><span><?php echo "<img src='".get_stylesheet_directory_uri()."/dist/img/bgeff.webp' \>" ?></span> <span data-aos=fade-down-right><?php echo "<img  src='".get_stylesheet_directory_uri()."/dist/img/Bedre-bundlinje.webp' \>" ?></span></div><div class=containerText><h2>Bedre bundlinje på få mdr.</h2><p>Logistikomkostningerne udgør ofte en mindre del af virksomhedens totale omkostninger og får derfor sjældent den opmærksomhed som den egentlig burde have.<br>Logistikoptimering giver en bedre bundlinje allerede inden for få måneder og kan bidrage til at dit regnskabsår ender med et bedre resultat end forventet.</p><button class=btn-24>CTA</button></div></div><div class="boxContainer containerRight"><div class=containerImg><span><?php echo "<img src='".get_stylesheet_directory_uri()."/dist/img/bgeff.webp' \>" ?></span> <span data-aos=fade-down-left><img class=top-fix src="<?php" echo "'".get_stylesheet_directory_uri()." dist img risikofrit.webp'" ?> alt=""/></span></div><div class=containerText><h2>Risikofrit</h2><p>Vi skaber en positiv dialog med jeres logistikafdelingen, og sammen med vores logistikeksperter reducerer vi dine logistikomkostninger med omkring 20% - med uændret kvalitet i forbindelse til jeres service/produkt.<br>Vores honorarer er i de fleste tilfælde succesbaserede, det giver flere væsentlige fordele i længden for dig.<br>Det er risikofrit og skaber positivt cashflow i din virksomhed.</p><button class=btn-24>CTA</button></div></div><script>

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