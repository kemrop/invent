<!DOCTYPE html>
<html>
  <head>
  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
  <title>Invent</title>
  <script type="text/javascript" src="/scripts/jquery-1.8.3.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styles/styles.css">
  <script type="text/javascript">
    $(document).ready(function() {
  	  //put all your jQuery goodness in here.
   	 $('#about').click(function(){
   	   	 if($('.work').is(':visible')) {
   	   	    $('.work').toggle(1000);
   	   	    $('.about').toggle(1000);
   	   	 } 
   		    $('.about').toggle(1000);
   	 });  
	   $('#work').click(function(){
		  	 if($('.about').is(':visible')) {
     	    $('.about ').toggle(1000);
     	    $('.work').toggle(1000);
		   	  } 
       $('.work').toggle(1000);
   	 });
  	 });
 	 
  </script>
  </head>
  <body class='invent-body'>
  <div id="left-panel">
    <img id="logo" alt="Invent Design logo" src="images/InventLogo.bmp">
  	<ul>
  	  <li id="about">About</li>
  	  <li id="work">Work</li>
  	
  	</ul>
	 </div>
	 <div id="middle-panel">
  	  <div class="about slide-out">
  	    <div class="content-fixed">
    	   <h1> About us</h1>
      	    Lorem Ipsum is simply dummy text of the printing and
      	     typesetting industry. Lorem Ipsum has been the industry's 
      	     standard dummy text ever since the 1500s, when an unknown printer 
      	     took a galley of type and scrambled it to make a type specimen book. 
      	     It has survived not only five centuries, but also the leap into electronic 
      	     typesetting, remaining essentially unchanged. It was popularised in the 1960s
      	      with the release of Letraset sheets containing Lorem Ipsum passages, 
      	    and more recently with desktop publishing software like Aldus PageMaker 
      	    including versions of Lorem Ipsum.
  	    
  	    </div>
      </div>
  	  <div class="work slide-out">
  	  <div class="content-fixed">
  	  <h1> How we work</h1>
      	    Lorem Ipsum is simply dummy text of the printing and
      	     typesetting industry. Lorem Ipsum has been the industry's 
      	     standard dummy text ever since the 1500s, when an unknown printer 
      	     took a galley of type and scrambled it to make a type specimen book. 
      	     It has survived not only five centuries, but also the leap into electronic 
      	     typesetting, remaining essentially unchanged. It was popularised in the 1960s
      	      with the release of Letraset sheets containing Lorem Ipsum passages, 
      	    and more recently with desktop publishing software like Aldus PageMaker 
      	    including versions of Lorem Ipsum.
    	 </div>
  	  
  	  </div>
	 </div>
	 <div id="right-panel">
	 Some text goes here!!
	 </div>
  </body>
</html>