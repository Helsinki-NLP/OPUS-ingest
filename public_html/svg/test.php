<?php

header('Content-type: text/xml');

?>
<?xml version="1.0" encoding="UTF-8" standalone="no"?>

<!-- Title: G Pages: 1 -->
<svg width="100%" height="50%"
     xmlns="http://www.w3.org/2000/svg" 
     xmlns:xlink="http://www.w3.org/1999/xlink">

  <defs>
    <text id="This" text-anchor="middle">This</text>
    <text id="is">is</text>
    <text id="a">a</text>
    <text id="test">test</text>
    <marker id="arrow" viewBox="0 0 10 10" refX="1" refY="5" 
	    markerUnits="strokeWidth" orient="auto"
	    markerWidth="10" markerHeight="8">
      <polyline points="0,0 10,5 0,10 1,5" fill="black" />
    </marker>
  </defs>

  <text x="100" y="200" font-size="45" fill="red" >
    <tref xlink:href="#This"/>
    <tref xlink:href="#is"/>
    <tref xlink:href="#a"/>
    <tref xlink:href="#test"/>
  </text>

<!--  width="{0.2 + string-length($label) *0.12} -->
<!-- length*10+10 ?!? -->

  <text x="100" y="300" font-size="20" fill="black" >This</text>
  <text x="150" y="300" font-size="20" fill="black" >is</text>
  <text x="180" y="300" font-size="20" fill="black" >a</text>
  <text x="200" y="300" font-size="20" fill="black" >test</text>

  <path style="fill:none;stroke:black;" d="M120 280 C120 280 140 240 155 275" marker-end="url(#arrow)"/> 

  <path style="fill:none;stroke:black;" d="M220 280 C220 280 190 220 165 275" marker-end="url(#arrow)"/> 

  <path style="fill:none;stroke:black;" d="M220 280 C220 280 170 180 115 275" marker-end="url(#arrow)"/> 

  <text x="140" y="240" font-size="10" fill="blue" text-anchor="middle">label</text>


</svg>