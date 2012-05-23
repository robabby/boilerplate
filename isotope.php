<?php 
  $path2root = "";
  ob_start();
  try {
  include('./assets/inc/title.inc.php'); 
  include('./assets/inc/user_agent.php');
?>
<!doctype html>
<html>
<head>
  <?php include('./assets/inc/head.inc.php'); ?>
<style>

li { list-style: none;}

/* Start: Recommended Isotope styles */

/**** Isotope Filtering ****/

.isotope-item {
  z-index: 2;
}

.isotope-hidden.isotope-item {
  pointer-events: none;
  z-index: 1;
}

/**** Isotope CSS3 transitions ****/

.isotope,
.isotope .isotope-item {
  -webkit-transition-duration: 0.8s;
     -moz-transition-duration: 0.8s;
      -ms-transition-duration: 0.8s;
       -o-transition-duration: 0.8s;
          transition-duration: 0.8s;
}

.isotope {
  -webkit-transition-property: height, width;
     -moz-transition-property: height, width;
      -ms-transition-property: height, width;
       -o-transition-property: height, width;
          transition-property: height, width;
}

.isotope .isotope-item {
  -webkit-transition-property: -webkit-transform, opacity;
     -moz-transition-property:    -moz-transform, opacity;
      -ms-transition-property:     -ms-transform, opacity;
       -o-transition-property:         top, left, opacity;
          transition-property:         transform, opacity;
}

/**** disabling Isotope CSS3 transitions ****/

.isotope.no-transition,
.isotope.no-transition .isotope-item,
.isotope .isotope-item.no-transition {
  -webkit-transition-duration: 0s;
     -moz-transition-duration: 0s;
      -ms-transition-duration: 0s;
       -o-transition-duration: 0s;
          transition-duration: 0s;
}

/* End: Recommended Isotope styles */



/* disable CSS transitions for containers with infinite scrolling*/
.isotope.infinite-scrolling {
  -webkit-transition: none;
     -moz-transition: none;
      -ms-transition: none;
       -o-transition: none;
          transition: none;
}

/**** Isotope styles ****/

/* required for containers to inherit vertical size from window */
html,
body {
  height: 100%;
}

#container {
  border: 1px solid #666;
  padding: 5px;
  margin-bottom: 20px;
}

.element {
  width: 110px;
  height: 110px;
  margin: 5px;
  float: left;
  overflow: hidden;
  position: relative;
  background: #888;
  color: #222;
  -webkit-border-top-right-radius: 1.2em;
      -moz-border-radius-topright: 1.2em;
          border-top-right-radius: 1.2em;
}

.element.alkali          { background: #F00; background: hsl(   0, 100%, 50%); }
.element.alkaline-earth  { background: #F80; background: hsl(  36, 100%, 50%); }
.element.lanthanoid      { background: #FF0; background: hsl(  72, 100%, 50%); }
.element.actinoid        { background: #0F0; background: hsl( 108, 100%, 50%); }
.element.transition      { background: #0F8; background: hsl( 144, 100%, 50%); }
.element.post-transition { background: #0FF; background: hsl( 180, 100%, 50%); }
.element.metalloid       { background: #08F; background: hsl( 216, 100%, 50%); }
.element.other.nonmetal  { background: #00F; background: hsl( 252, 100%, 50%); }
.element.halogen         { background: #F0F; background: hsl( 288, 100%, 50%); }
.element.noble-gas       { background: #F08; background: hsl( 324, 100%, 50%); }


.element * {
  position: absolute;
  margin: 0;
}

.element .symbol {
  left: 0.2em;
  top: 0.4em;
  font-size: 3.8em;
  line-height: 1.0em;
  color: #FFF;
}
.element.large .symbol {
  font-size: 4.5em;
}

.element.fake .symbol {
  color: #000;
}

.element .name {
  left: 0.5em;
  bottom: 10px;
  font-size: 1.05em;
}

.element .weight {
  font-size: 0.9em;
  left: 0.5em;
  bottom: 0.5em;
}

.element .number {
  font-size: 1.25em;
  font-weight: bold;
  color: hsla(0,0%,0%,.5);
  right: 0.5em;
  top: 0.5em;
}

.variable-sizes .element.width2 { width: 230px; }

.variable-sizes .element.height2 { height: 230px; }

.variable-sizes .element.width2.height2 {
  font-size: 2.0em;
}

.element.large,
.variable-sizes .element.large,
.variable-sizes .element.large.width2.height2 {
  font-size: 3.0em;
  width: 350px;
  height: 350px;
  z-index: 100;
}

.clickable .element:hover {
  cursor: pointer;
}

.clickable .element:hover h3 {
  text-shadow:
    0 0 10px white,
    0 0 10px white
  ;
}

.clickable .element:hover h2 {
  color: white;
}

/**** Example Options ****/

#options {
  padding-bottom: 1.0em;
}

#options h3 {
  margin-bottom: 0.2em;
  font-size: 15px;
}

#options h4 { 
  font-weight: bold;
}

#options ul {
  margin: 0;
  list-style: none;
}

#options ul ul {
  margin-left: 1.5em;
}

#options li {
  float: left;
  margin-bottom: 0.2em;
}

#options li a {
  display: block;
  padding: 0.4em 0.5em;
  background-color: #DDD;
  color: #222;
  font-weight: bold;
  text-shadow: 0 1px hsla( 0, 0%, 100%, 0.5 );
  background-image: -webkit-linear-gradient( top, hsla( 0, 0%, 100%, 0.5 ), hsla( 0, 0%, 100%, 0.0 ) );
  background-image:    -moz-linear-gradient( top, hsla( 0, 0%, 100%, 0.5 ), hsla( 0, 0%, 100%, 0.0 ) );
  background-image:     -ms-linear-gradient( top, hsla( 0, 0%, 100%, 0.5 ), hsla( 0, 0%, 100%, 0.0 ) );
  background-image:      -o-linear-gradient( top, hsla( 0, 0%, 100%, 0.5 ), hsla( 0, 0%, 100%, 0.0 ) );
  background-image:         linear-gradient( top, hsla( 0, 0%, 100%, 0.5 ), hsla( 0, 0%, 100%, 0.0 ) );
}

#options li a:hover {
  background-color: #5BF;
}

#options li a:active {
  background-color: #39D;
  -webkit-box-shadow: inset 0 2px 8px hsla( 0, 0%, 0%, 0.6 );
     -moz-box-shadow: inset 0 2px 8px hsla( 0, 0%, 0%, 0.6 );
       -o-box-shadow: inset 0 2px 8px hsla( 0, 0%, 0%, 0.6 );
          box-shadow: inset 0 2px 8px hsla( 0, 0%, 0%, 0.6 );
}

#options li a {
  border-left:  1px solid hsla( 0, 0%, 100%, 0.3 );
  border-right: 1px solid hsla( 0, 0%,   0%, 0.2 );
}

#options li:first-child a {
  border-radius: 7px 0 0 7px;
  border-left: none;
}

#options li:last-child a {
  border-radius: 0 7px 7px 0;
}

#options li a.selected {
  background-color: #13F;
  text-shadow: none;
  color: white;
}

/* Combination filter options*/

#options .option-combo {
  display: inline-block;
  float: left;
  margin-right: 10px;
}

#options .option-combo ul {
  margin-right: 20px;
  display: inline-block;
}

#options .option-combo h2,
#options .option-combo h4 {
  line-height: 34px;
  margin-bottom: 0;
  margin-right: 5px;
  display: inline-block;
  vertical-align: top;
}

/* Color shapes */

.color-shape {
  width: 70px;
  height: 70px;
  margin: 5px;
  float: left;
}
 
.color-shape.round {
  -webkit-border-radius: 35px;
     -moz-border-radius: 35px;
          border-radius: 35px;
}
 
.color-shape.big.round {
  -webkit-border-radius: 75px;
     -moz-border-radius: 75px;
          border-radius: 75px;
}
 
.color-shape.red { background: red; }
.color-shape.blue { background: blue; }
.color-shape.yellow { background: yellow; }
 
.color-shape.wide, .color-shape.big { width: 150px; }
.color-shape.tall, .color-shape.big { height: 150px; }

.color-shape a {
  display: block;
  height: 100%;
}

.color-shape a:hover {
  background: white;
  background: hsla( 0, 0%, 100%, 0.5 );
}

/**** Super list ****/


/**** Sites using Isotope ****/

#sites h2 {
  display: none;
  padding: 0.4em;
  line-height: 32px;
  margin-bottom: 0.4em;
  -webkit-transition: background-color 0.8s;
     -moz-transition: background-color 0.8s;
       -o-transition: background-color 0.8s;
          transition: background-color 0.8s;
}

#sites h2 img {
  display: inline-block;
  margin-right: 0.4em;
  vertical-align: bottom;
}

#sites h2.loading {
  background: white;
  color: #222;
}
#sites h2.error {
  background: red;
  color: #222;
}


#sites ul {
  margin: 0;
}

.super-list .example {
  list-style: none;
  float: left;
  width: 230px;
  margin: 5px;
}

.super-list .example a,
.super-list .example b,
.super-list .example img {
  display: block;
}

.super-list .example img { width: 100%; }

.super-list .example a {
  background: #1F1E1D;
}

.super-list .example a:hover {
  background: white;
  color: #111;
}

.super-list .example b { 
  font-weight: bold;
  line-height: 1.3em;
  padding: 3px;
  padding-top: 8px;
}

.super-list .link {
  float: left;
  position: relative;
  font-size: 24px;
  line-height: 1.2em;
  font-weight: 300;
  margin: 5px;
}

.super-list .link {
  width: 230px;
  height: 110px;
}

.super-list .link a {
  display: block;
  padding: 10px;
  padding-left: 65px;
  height: 90px;
  background: #1F1E1D;
  color: #FE5;
  -webkit-border-radius: 14px;
     -moz-border-radius: 14px;
          border-radius: 14px;
}

.super-list .link a:before {
  content: '➔';
  font-size: 70px;
  position: absolute;
  top: 30px;
  left: 5px;
  -webkit-transform: rotate(90deg);
     -moz-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
       -o-transform: rotate(90deg);
          transform: rotate(90deg);
}

.super-list .link.away a:before {
  top: 25px;
  left: 0px;
  -webkit-transform: rotate(-45deg);
     -moz-transform: rotate(-45deg);
      -ms-transform: rotate(-45deg);
       -o-transform: rotate(-45deg);
          transform: rotate(-45deg);
}

.super-list .link a:hover {
  background: #E58;
  color: white;
}

.super-list .feature .name {
  bottom: auto;
  top: 140px;
  left: 18px;
  font-size: 20px;
}

/**** BIG Graph ****/

.big-graph {
  background: white;
  height: 600px;
  margin: 20px auto;
}

.big-graph .project {
  width: 45px;
  height: 45px;
  float: left;
}

.big-graph .project .icon {
  pointer-events: none;
  width: 31px;
  height: 31px;
  background: white;
  margin-left: 7px;
  -webkit-transition: -webkit-transform 0.25s;
     -moz-transition: -moz-transform    0.25s;
      -ms-transition: -ms-transform     0.25s;
       -o-transition: -o-transform      0.25s;
          transition: transform         0.25s;
}

.big-graph .project:hover {
  z-index: 5;
  
}

.big-graph .project:hover .icon {
  -webkit-transform: scale(3);
     -moz-transform: scale(3);
      -ms-transform: scale(3);
       -o-transform: scale(3);
          transform: scale(3);
}

.big-graph .project.commercial .icon { background: #6B6B6B; }
.big-graph .project.urbanism .icon { background: #00CF00; }
.big-graph .project.public-space .icon { background: #FF8D00; }
.big-graph .project.culture .icon { background: #D61919; }
.big-graph .project.body-culture .icon { background: #00ECFF; }
.big-graph .project.health .icon { background: #FF2251; }
.big-graph .project.education .icon { background: #00A700; }
.big-graph .project.housing .icon { background: #FF02FF; }
.big-graph .project.hotel .icon { background: #0000C3; }
.big-graph .project.media .icon { background: #292929; }

.big-graph .project p {
  line-height: 14px;
  font-size: 10.5px;
  color: black;
  margin-left: 7px;
}

/**** Infinite Scroll ****/

#infscr-loading {
  position: fixed;
  text-align: center;
  bottom: 30px;
  left: 42%;
  z-index: 100;
  background: white;
  background: hsla( 0, 0%, 100%, 0.9 );
  padding: 20px;
  color: #222;
  font-size: 15px;
  font-weight: bold;
  -webkit-border-radius: 10px;
     -moz-border-radius: 10px;
          border-radius: 10px;
}



/* The Magnificent Clearfix: nicolasgallagher.com/micro-clearfix-hack/ */
.clearfix:before, .clearfix:after { content: ""; display: table; }
.clearfix:after { clear: both; }
.clearfix { zoom: 1; }
</style>
</head>
<body id="home">
<!-- ## CONTACT MODAL ## -->
<?php include('./assets/inc/contactModal.inc.php'); ?>
<!-- ## CONTACT MODAL ## -->

<!-- ## HEADER & NAV ## -->
<?php include('./assets/inc/nav.inc.php'); ?>
<!-- ## HEADER & NAV ## -->

<!-- #### MAIN CONTENT GOES HERE #### -->

<div class="container-fluid">

<section id="content">
  <section id="options" class="clearfix">
    <div class="option-combo">
      <h2>Filter:</h2>
      <ul id="filter" class="option-set clearfix" data-option-key="filter">
        <li><a href="#show-all" data-option-value="*" class="selected">show all</a></li>
        <li><a href="#elements" data-option-value=".element:not(.feature)">elements</a></li>
        <li><a href="#features" data-option-value=".feature">features</a></li>
        <li><a href="#examples" data-option-value=".example">examples</a></li>
      </ul>
    </div>
    <div class="option-combo">
      <h2>Sort:</h2>
      <ul id="sort" class="option-set clearfix" data-option-key="sortBy">
        <li><a href="#mixed" data-option-value="number" class="selected">mixed</a></li>
        <li><a href="#original" data-option-value="original-order">original</a></li>
        <li><a href="#alphabetical" data-option-value="alphabetical">alphabetical</a></li>
      </ul>
    </div>
    <div class="option-combo">
      <h2>Layout: </h2>
      <ul id="layouts" class="option-set clearfix" data-option-key="layoutMode">
        <li><a href="#masonry" data-option-value="masonry" class="selected">masonry</a></li>
        <li><a href="#fitRows" data-option-value="fitRows">fitRows</a></li>
        <li><a href="#straightDown" data-option-value="straightDown">straightDown</a></li>
      </ul>
    </div>
  </section>
  
  <div id="container" class="super-list variable-sizes clearfix">
         
    <div class="element alkaline-earth metal   " data-symbol="Mg" data-category="alkaline-earth">
      <p class="number">12</p>
      <h3 class="symbol">Mg</h3>
      <h2 class="name">Magnesium</h2>
      <p class="weight">24.305</p>
    </div>
          
    <div class="element actinoid metal inner-transition   " data-symbol="U" data-category="actinoid">
      <p class="number">92</p>
      <h3 class="symbol">U</h3>
      <h2 class="name">Uranium</h2>
      <p class="weight">238.02891</p>
    </div>
          
    <div class="element lanthanoid metal inner-transition   " data-symbol="Gd" data-category="lanthanoid">
      <p class="number">64</p>
      <h3 class="symbol">Gd</h3>
      <h2 class="name">Gadolinium</h2>
      <p class="weight">157.25</p>
    </div>
          
    <div class="element transition metal   " data-symbol="Y" data-category="transition">
      <p class="number">39</p>
      <h3 class="symbol">Y</h3>
      <h2 class="name">Yttrium</h2>
      <p class="weight">88.90585</p>
    </div>
       
    <div class="element metalloid   " data-symbol="B" data-category="metalloid">
      <p class="number">5</p>
      <h3 class="symbol">B</h3>
      <h2 class="name">Boron</h2>
      <p class="weight">10.811</p>
    </div>
      
    <div class="element transition metal   " data-symbol="Fe" data-category="transition">
      <p class="number">26</p>
      <h3 class="symbol">Fe</h3>
      <h2 class="name">Iron</h2>
      <p class="weight">55.845</p>
    </div>
      
    <div class="element actinoid metal inner-transition   " data-symbol="Am" data-category="actinoid">
      <p class="number">95</p>
      <h3 class="symbol">Am</h3>
      <h2 class="name">Americium</h2>
      <p class="weight">(243)</p>
    </div>
     
    <div class="element transition metal   " data-symbol="Zn" data-category="transition">
      <p class="number">30</p>
      <h3 class="symbol">Zn</h3>
      <h2 class="name">Zinc</h2>
      <p class="weight">65.38</p>
    </div>
    
    <div class="element lanthanoid metal inner-transition   " data-symbol="Pm" data-category="lanthanoid">
      <p class="number">61</p>
      <h3 class="symbol">Pm</h3>
      <h2 class="name">Promethium</h2>
      <p class="weight">(145)</p>
    </div>
     
    <div class="element post-transition metal   " data-symbol="In" data-category="post-transition">
      <p class="number">49</p>
      <h3 class="symbol">In</h3>
      <h2 class="name">Indium</h2>
      <p class="weight">114.818</p>
    </div>
    
    <div class="element metalloid   " data-symbol="As" data-category="metalloid">
      <p class="number">33</p>
      <h3 class="symbol">As</h3>
      <h2 class="name">Arsenic</h2>
      <p class="weight">74.9216</p>
    </div>
     
    <div class="element lanthanoid metal inner-transition   " data-symbol="Er" data-category="lanthanoid">
      <p class="number">68</p>
      <h3 class="symbol">Er</h3>
      <h2 class="name">Erbium</h2>
      <p class="weight">167.259</p>
    </div>
      
    <div class="element other nonmetal   " data-symbol="Se" data-category="other">
      <p class="number">34</p>
      <h3 class="symbol">Se</h3>
      <h2 class="name">Selenium</h2>
      <p class="weight">78.96</p>
    </div>
    
    <div class="element alkaline-earth metal   " data-symbol="Sr" data-category="alkaline-earth">
      <p class="number">38</p>
      <h3 class="symbol">Sr</h3>
      <h2 class="name">Strontium</h2>
      <p class="weight">87.62</p>
    </div>
     
    <div class="element transition metal   " data-symbol="Zr" data-category="transition">
      <p class="number">40</p>
      <h3 class="symbol">Zr</h3>
      <h2 class="name">Zirconium</h2>
      <p class="weight">91.224</p>
    </div>
       
    <div class="element halogen nonmetal   " data-symbol="At" data-category="halogen">
      <p class="number">85</p>
      <h3 class="symbol">At</h3>
      <h2 class="name">Astatine</h2>
      <p class="weight">(210)</p>
    </div>
    
    <div class="element transition metal   " data-symbol="Nb" data-category="transition">
      <p class="number">41</p>
      <h3 class="symbol">Nb</h3>
      <h2 class="name">Niobium</h2>
      <p class="weight">92.90638</p>
    </div>
          
    <div class="element other nonmetal   " data-symbol="O" data-category="other">
      <p class="number">8</p>
      <h3 class="symbol">O</h3>
      <h2 class="name">Oxygen</h2>
      <p class="weight">15.9994</p>
    </div>
       
    <div class="element actinoid metal inner-transition   " data-symbol="Bk" data-category="actinoid">
      <p class="number">97</p>
      <h3 class="symbol">Bk</h3>
      <h2 class="name">Berkelium</h2>
      <p class="weight">(247)</p>
    </div>
      
    <div class="element halogen nonmetal   " data-symbol="F" data-category="halogen">
      <p class="number">9</p>
      <h3 class="symbol">F</h3>
      <h2 class="name">Fluorine</h2>
      <p class="weight">18.9984032</p>
    </div>
     
    <div class="element actinoid metal inner-transition   " data-symbol="Cf" data-category="actinoid">
      <p class="number">98</p>
      <h3 class="symbol">Cf</h3>
      <h2 class="name">Californium</h2>
      <p class="weight">(251)</p>
    </div>
      
    <div class="element noble-gas nonmetal   " data-symbol="Ne" data-category="noble-gas">
      <p class="number">10</p>
      <h3 class="symbol">Ne</h3>
      <h2 class="name">Neon</h2>
      <p class="weight">20.1797</p>
    </div>
       
    <div class="element other nonmetal   " data-symbol="P" data-category="other">
      <p class="number">15</p>
      <h3 class="symbol">P</h3>
      <h2 class="name">Phosphorus</h2>
      <p class="weight">30.973762</p>
    </div>
      
    <div class="element actinoid metal inner-transition   " data-symbol="Fm" data-category="actinoid">
      <p class="number">100</p>
      <h3 class="symbol">Fm</h3>
      <h2 class="name">Fermium</h2>
      <p class="weight">(257)</p>
    </div>
        
    <div class="element other nonmetal   " data-symbol="S" data-category="other">
      <p class="number">16</p>
      <h3 class="symbol">S</h3>
      <h2 class="name">Sulfur</h2>
      <p class="weight">32.065</p>
    </div>
    
    <div class="element alkaline-earth metal   " data-symbol="Ca" data-category="alkaline-earth">
      <p class="number">20</p>
      <h3 class="symbol">Ca</h3>
      <h2 class="name">Calcium</h2>
      <p class="weight">40.078</p>
    </div>
    
    <div class="element other nonmetal   " data-symbol="C" data-category="other">
      <p class="number">6</p>
      <h3 class="symbol">C</h3>
      <h2 class="name">Carbon</h2>
      <p class="weight">12.0107</p>
    </div>
    
    <div class="element alkali metal   " data-symbol="Rb" data-category="alkali">
      <p class="number">37</p>
      <h3 class="symbol">Rb</h3>
      <h2 class="name">Rubidium</h2>
      <p class="weight">85.4678</p>
    </div>
    
    <div class="element post-transition metal   " data-symbol="Uup" data-category="post-transition">
      <p class="number">115</p>
      <h3 class="symbol">Uup</h3>
      <h2 class="name">Ununpentium</h2>
      <p class="weight">(288)</p>
    </div>
    
    <div class="element transition metal   " data-symbol="Sc" data-category="transition">
      <p class="number">21</p>
      <h3 class="symbol">Sc</h3>
      <h2 class="name">Scandium</h2>
      <p class="weight">44.955912</p>
    </div>
    
    <div class="element feature alkali width2 height2">
      <p class="number">1</p>
      <h3 class="symbol">Iso</h3>
      <h2 class="name">An exquisite jQuery plugin for magical&nbsp;layouts</h2>
    </div>
  
    <div class="element feature actinoid width2 height2">
      <p class="number">31</p>
      <h3 class="symbol">Dyn</h3>
      <h2 class="name">Dynamic, intelligent layouts</h2>
    </div>
  
    <div class="element feature lanthanoid width2 height2">
      <p class="number">27</p>
      <h3 class="symbol">Srt</h3>
      <h2 class="name">Re&ndash;order items with&nbsp;sorting</h2>
    </div>
  
    <div class="element feature metalloid width2 height2">
      <p class="number">61</p>
      <h3 class="symbol">Pow</h3>
      <h2 class="name">Powerful methods, simple&nbsp;syntax</h2>
    </div>
  
    <div class="element feature alkaline-earth width2 height2">
      <p class="number">11</p>
      <h3 class="symbol">Flt</h3>
      <h2 class="name">Reveal &amp; hide items with&nbsp;filtering</h2>
    </div>
  
    <div class="element feature transition width2 height2">
      <p class="number">41</p>
      <h3 class="symbol">Ani</h3>
      <h2 class="name">Captivating animations</h2>
    </div>
  
    <div class="element feature halogen width2 height2">
      <p class="number">71</p>
      <h3 class="symbol">Pro</h3>
      <h2 class="name">Progressively enhanced for CSS3 transforms &amp;&nbsp;transitions</h2>
    </div>
  
    <div class="element feature post-transition width2 height2">
      <p class="number">51</p>
      <h3 class="symbol">Any</h3>
      <h2 class="name">Sort items by just about&nbsp;anything</h2>
    </div>
    
    <div class="link" data-number="5"><a href="jquery.isotope.min.js">Down&#8203;load jquery&#8203;.isotope&#8203;.min.js</a></div>
    <div class="link" data-number="13"><a href="http://meta.metafizzy.co/files/isotope-site.zip">Down&#8203;load this project</a></div> 
    <div class="link away" data-number="35"><a href="http://github.com/desandro/isotope">Isotope on GitHub</a></div>
  </div>

  <div id="sites"></div>

</div><!-- .container -->
<br />
<!-- #### MAIN CONTENT GOES HERE #### -->

<!-- ## FOOTER ## -->
<?php include('./assets/inc/footer.inc.php'); ?>
<!-- ## FOOTER ## -->

<!-- #### EXTRA SCRIPTS GO HERE #### -->
<script src="/assets/js/jquery.isotope.js"></script>
<script>
  $(function(){
  
    var $container = $('#container');
  
    $container.isotope({
      masonry: {
        columnWidth: 120
      },
      sortBy: 'number',
      getSortData: {
        number: function( $elem ) {
          var number = $elem.hasClass('element') ? 
            $elem.find('.number').text() :
            $elem.attr('data-number');
          return parseInt( number, 10 );
        },
        alphabetical: function( $elem ) {
          var name = $elem.find('.name'),
              itemText = name.length ? name : $elem;
          return itemText.text();
        }
      }
    });
  
    
    var $optionSets = $('#options .option-set'),
        $optionLinks = $optionSets.find('a');

    $optionLinks.click(function(){
      var $this = $(this);
      // don't proceed if already selected
      if ( $this.hasClass('selected') ) {
        return false;
      }
      var $optionSet = $this.parents('.option-set');
      $optionSet.find('.selected').removeClass('selected');
      $this.addClass('selected');

      // make option object dynamically, i.e. { filter: '.my-filter-class' }
      var options = {},
          key = $optionSet.attr('data-option-key'),
          value = $this.attr('data-option-value');
      // parse 'false' as false boolean
      value = value === 'false' ? false : value;
      options[ key ] = value;
      if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
        // changes in layout modes need extra logic
        changeLayoutMode( $this, options )
      } else {
        // otherwise, apply new options
        $container.isotope( options );
      }
      
      return false;
    });


  
    // Sites using Isotope markup
    var $sites = $('#sites'),
        $sitesTitle = $('<h2 class="loading"><img src="http://i.imgur.com/qkKy8.gif" />Loading sites using Isotope</h2>'),
        $sitesList = $('<ul class="clearfix"></ul>');
      
    $sites.append( $sitesTitle ).append( $sitesList );

    $sitesList.isotope({
      layoutMode: 'cellsByRow',
      cellsByRow: {
        columnWidth: 290,
        rowHeight: 400
      }
    });
  
    var ajaxError = function(){
      $sitesTitle.removeClass('loading').addClass('error')
        .text('Could not load sites using Isotope :(');
    };
  
    // dynamically load sites using Isotope from Zootool
    $.getJSON('http://zootool.com/api/users/items/?username=desandro' +
        '&apikey=8b604e5d4841c2cd976241dd90d319d7' +
        '&tag=bestofisotope&callback=?')
      .error( ajaxError )
      .success(function( data ){

        // proceed only if we have data
        if ( !data || !data.length ) {
          ajaxError();
          return;
        }
        var items = [],
            item, datum;

        for ( var i=0, len = data.length; i < len; i++ ) {
          datum = data[i];
          item = '<li><a href="' + datum.url + '">'
            + '<img src="' + datum.image.replace('/l.', '/m.') + '" />'
            + '<b>' + datum.title + '</b>'
            + '</a></li>';
          items.push( item );
        }
      
        var $items = $( items.join('') )
          .addClass('example');
          
        // set random number for each item
        $items.each(function(){
          $(this).attr('data-number', ~~( Math.random() * 100 + 15 ));
        });
      
        $items.imagesLoaded(function(){
          $sitesTitle.removeClass('loading').text('Sites using Isotope');
          $container.append( $items );
          $items.each(function(){
            var $this = $(this),
                itemHeight = Math.ceil( $this.height() / 120 ) * 120 - 10;
            $this.height( itemHeight );
          });
          $container.isotope( 'insert', $items );
        });
      
      });
  
  
  });
</script>
<!-- #### EXTRA SCRIPTS GO HERE #### -->

</body>
</html>
<?php
  } catch (exception $e) {
    ob_end_clean();
    header('Location: error.php');
  }
  ob_end_flush();
?>