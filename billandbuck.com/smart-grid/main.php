<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Bill & Buck</title>

    <link rel="stylesheet" href="smart-grid.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200" rel="stylesheet">
<style>

	body {
    font-family: 'Montserrat', sans-serif;
    font-size-adjust:none;
    font-style:normal;
    font-variant:normal;
    font-weight:normal;
    text-align: center;
	}

  h1,h2{margin: 5px 0; color:#E01266 }
  h1{font-size: 48px; line-height:1.18;}
  h2{font-size: 36px; line-height:1.3;}


  .styling {
		background-color: rgba(224,18,101,0.5);
		color: #fff;
    border: 1px #E01266 solid;
		border-radius: 4px;
		padding: 12px;

	}
  .center{
    text-align: center;
  }
  #test{
     grid-row: 20;  grid-column: 4 / 7; background-color: red;
  }
  #test1{
     grid-row: 21; grid-column: 3 / 5; background-color: red;
  }


  @media only screen and (max-width: 480px)   {
        #test,#test1{
            grid-column: auto / span 12; background-color: red; grid-row: auto;
        }
    }

</style>

</head>

 <body>

    <div class="main">
    <div class="twelve center"><img id="logo" src="smart-grid-logo.svg"> </div>
    <div class="twelve center"><h1> BillAndBuck.com </h1> <p>The Collected Stories Of Bill and Buck</p></div>

	 	<div class="styling two">About</div>
	 	<div class="styling two">Story</div>
	 	<div class="styling two">Quarks</div>
	 	<div class="styling two">Table Of Contents</div>
   	 	<div class="styling two">More</div>
        <br>
        <!--
	 	<div class="styling one">5</div>
	 	<div class="styling one">6</div>
	 	<div class="styling one">7</div>
	 	<div class="styling one">8</div>
	 	<div class="styling one">9</div>
	 	<div class="styling one">10</div>
	 	<div class="styling one">11</div>
	 	<div class="styling one">12</div>
        -->

    <div class="styling two">1</div>
    <div class="styling two">2</div>
    <div class="styling two">3</div>
    <div class="styling two">4</div>
    <div class="styling two">5</div>
    <div class="styling two">6</div>

    <div class="styling three">1</div>
    <div class="styling three">2</div>
    <div class="styling three">3</div>
    <div class="styling three">4</div>

    <div class="styling four">1</div>
    <div class="styling four">2</div>
    <div class="styling four">3</div>

    <div class="styling six">1</div>
    <div class="styling six">2</div>

    <div class="styling twelve">1</div>

    <div class="styling four">Lightweight, only 0,5 Kb gzipped</div>
    <div class="styling four">No unnecessary div nesting</div>
    <div class="styling four">Based on CSS Grid</div>

    <div class="styling four">Responsive</div>
    <div class="styling four">12 column system</div>
    <div class="styling four">Simple syntax </div>

    <div class="twelve"><h2>Simple naming system </h2></div>

    <div class="styling five">five</div>
    <div class="styling seven">seven</div>

    <div class="styling nine">nine</div>
    <div class="styling three">three</div>

    <div class="styling four">four</div>
    <div class="styling two">two</div>
    <div class="styling two">two</div>
    <div class="styling four">four</div>

    <div class="styling four merge-three-rows">You can also merge rows</div>
    <div class="styling four">four</div>
    <div class="styling four">four</div>

    <div class="styling four">four</div>
    <div class="styling four">four</div>
    <div class="styling four">four</div>
    <div class="styling four">four</div>

    <div class="twelve"><h2>Flexible & Fluid </h2>
      <p>Choose any main width and the grid will auto adapt. Example: 90%, 960xp, 10em or whatever you want. </p>
    </div>

    <div class="twelve"><h2>Swapping Places</h2>
      <p>Super useful when you're working with media queries. You can reorder anything. In this example we used: "grid-row: 20;  grid-column: 4 / 7;" to bring 4 column to 2 place. </p>
    </div>

    <div class="styling three">1</div>
    <div class="styling three">2</div>
    <div class="styling three">3</div>
    <div id="test" class="styling three">4</div>

    <div class="styling two">1</div>
    <div class="styling two">2</div>
    <div class="styling two">3</div>
    <div class="styling two">4</div>
    <div class="styling two">5</div>
    <div id="test1" class="styling two">6</div>

    <div class="twelve"><h2>Nested</h2>
      <p>You probably never gonna need nested columns with the CSS Grid, but if you do, use the class .nested and you have 12 columns inside any other column.</p>
    </div>

      <div class="styling six nested">
        <div class="styling six">Six</div>
    	 	<div class="styling six">Six</div>

      </div>
  	 	<div class="styling six nested">
        <div class="styling four">Four</div>
    	 	<div class="styling four">Four</div>
        <div class="styling four">Four</div>
      </div>

      <div class="twelve"><h2>Summary</h2>
        <p>Smart Grid is CSS fluid responsive layout system with 12 columns and it is only 0.5 KB. Clear syntax. No unnecessary div nesting, meaning you will write less HTML. It works in any browser that support <a href="https://caniuse.com/#feat=css-grid"> the CSS Grid</a>.</p>
      </div>

      <div class="twelve"><h2>Download</h2>
        <p><a href="https://github.com/vladocar/SMART-CSS-GRID"> Download this project on GitHub</a></p>
      </div>

	</div>
</body></html>
