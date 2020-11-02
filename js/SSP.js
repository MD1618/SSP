window.onload = function() {

    // var svgObject = document.getElementById('svgObject').contentDocument;
    // var layer1 = svgObject.getElementById('layer1');
    // var svg1 = svgObject.getElementById('path915');
    // var svgb = svgObject.getElementById('path2064');
    // //var svg2 = svgObject.getElementById('path1100-4-7-7-0-3-9-4-4-2-0-4-6-2-9-9-0-7-4-5-6-5-5-9-3-8-8-6-9');
    // var svg3 = svgObject.getElementById('path1100-4-7-7-0-3-9-4-4-2-0-4-6-2-9-9-0-7-4-5-6-5-5-9-3-8-8-6-9-7');
    // var svg4 = svgObject.getElementById('path2088-4-7-4-3-7-8-3');
    // var svg5 = svgObject.getElementById('path2046-7-5-7-1-4-8-0');
    // // var svg6 = svgObject.getElementsByClassName('rulerMarks');
    // // svg6.style.opacity = "0";

    // var svgTL = new TimelineMax();

    // svgTL.to(layer1, 0.1, { opacity: 1 }, 0.6);
    // svgTL.from(svg1, 0.5, { opacity: 0 }, 0.5);
    // svgTL.from(svgb, 0.5, { opacity: 0 }, 2);
    // // svgTL.from(svg2, 1, { opacity: 0 }, 1);
    // svgTL.from(svg3, 1, { transformOrigin: "50% 50%", rotation: '30cw', opacity: 0 }, 1);
    // svgTL.from(svg4, 1, { x: '60px', opacity: 0 }, 1.1);
    // svgTL.from(svg5, 1, { x: '-60px', opacity: 0 }, 1.1);
    // svgTL.staggerFrom(svg6, 0.2, { opacity: 0 }, 0.02, 1);



    logos[currentLogo].style.opacity = "1";
}
var logos = document.getElementsByClassName('logo');
var currentLogo = 3;

function changeLogo(button) {


    if (button == 'left') {
        for (let i = 0; i < logos.length; i++) {
            logos[i].style.opacity = "0";
        }
        currentLogo--;
        if (currentLogo < 0) {
            currentLogo = logos.length - 1;
        }
        logos[currentLogo].style.opacity = "1";
    } else {
        for (let i = 0; i < logos.length; i++) {
            logos[i].style.opacity = "0";
        }
        currentLogo++;
        if (currentLogo > logos.length - 1) {
            currentLogo = 0;
        }
        logos[currentLogo].style.opacity = "1";
    }
}

let toggle = 0;

var hamburgerTL = new TimelineMax({ paused: true });

function mobileMenu() {

    hamburgerTL.to('.bar3', 0.1, { y: 150 }, 0.1);
    hamburgerTL.to('.bar2', 0.1, { y: 110 }, 0.2);
    hamburgerTL.to('.bar1', 0.1, { y: 75 }, 0.3);
    hamburgerTL.to('.bar3', 0.4, { x: '-700px', opacity: 0 }, 0.2);
    hamburgerTL.to('.bar2', 0.4, { x: '-700px', opacity: 0 }, 0.3);
    hamburgerTL.to('.bar1', 0.4, { x: '-700px', opacity: 0 }, 0.4);
    if (toggle == 0) {

        hamburgerTL.play();

        toggle = 1;
    } else {

        hamburgerTL.reverse(1);
        // hamburgerTL.to('.bar1', 0.4, { y: 50 }, 0);
        // hamburgerTL.to('.bar2', 0.4, { y: 100 }, 0.4);
        // hamburgerTL.to('.bar3', 0.4, { y: 150 }, 0.8);
        toggle = 0;

    }
}