<script type="text/javascript">


/*$(document).ready(function($){
			
					$('#accordion-4').dcAccordion({
						eventType: 'hover',
						autoClose: true,
						saveState: true,
						disableLink: true,
						menuClose: false,
						speed: 'slow',
						showCount: false
					});
					
});*/



$(document).ready(function() {		
	slideShow();
	$('#accordion-4').dcAccordion({
						eventType: 'hover',
						autoClose: true,
						saveState: true,
						disableLink: true,
						menuClose: false,
						speed: 'slow',
						showCount: false
					});

});

function slideShow() {
	$('#gallery a').css({opacity: 0.0});
	$('#gallery a:first').css({opacity: 1.0});
	$('#gallery .caption').css({opacity: 0.9});
	$('#gallery .caption').css({width: $('#gallery a').find('img').css('width')});
	$('#gallery .content').html($('#gallery a:first').find('img').attr('rel'))
	.animate({opacity: 0.7}, 400);
	setInterval('gallery()',4000);
	
}

function gallery() {

	var current = ($('#gallery a.show')?  $('#gallery a.show') : $('#gallery a:first'));
	var next = ((current.next().length) ? ((current.next().hasClass('caption'))? $('#gallery a:first') :current.next()) : $('#gallery a:first'));	
	var caption = next.find('img').attr('rel');	
	next.css({opacity: 0.0})
	.addClass('show')
	.animate({opacity: 1.0}, 1000);
	current.animate({opacity: 0.0}, 1000)
	.removeClass('show');
	$('#gallery .caption').animate({opacity: 0.0}, { queue:false, duration:0 }).animate({height: '1px'}, { queue:true, duration:300 });	
	$('#gallery .caption').animate({opacity: 0.5},100 ).animate({height: '100px'},500 );
	$('#gallery .content').html(caption);
}

</script>
<style type="text/css">
body{
	font-family:arial
}

.clear {
	clear:both
}

#gallery {
	position:relative;
	height:360px
}
	#gallery a {
		float:left;
		position:absolute;
	}
	
	#gallery a img {
		border:none;
		margin-left:100px;
	}
	
	#gallery a.show {
		z-index:500
	}

	#gallery .caption {
		z-index:600; 
		background-color:#000; 
		color:#ffffff; 
		margin-left:100px;
		
		height:100px; 
		width:100%; 
		position:absolute;
		bottom:0;
	}

	#gallery .caption .content {
		margin:5px
	}
	
	#gallery .caption .content h3 {
		margin:0;
		padding:0;
		color:#1DCCEF;
	}
	

</style>


<div id = "header"></div>
<div id = "picture"></div>
<div id = "sidepane">


<?php
	include("side_menu.php");
?>

	
</div>
<div id ="sidepaneright"></div>
<div id ="signForm">Welcome  <b><?php echo " ".$nm; ?>!</b> to our Departemntal Library</br></br></br>

<div id="gallery">

	<a href="#" class="show">
		<img src="<?php echo base_url();?>img/c.jpg" alt="Teach Yourself C" width="500" height="500" title="" alt="" rel="<h3>Teach Yourself C</h3> <p>Writer: Herbert Schieldt</p>"/>
	</a>
	
	<a href="#">
		<img src="<?php echo base_url();?>img/concrete.jpg" alt="Concrete Mathematics" width="500" height="500" title="" alt="" rel="<h3>Concrete Mathematics</h3><p>Writer: Graham, Knuth, Parashnik</p> "/>
	</a>
	
	<a href="#">
		<img src="<?php echo base_url();?>img/database.jpg" alt="Database System Concept" width="500" height="500" title="" alt="" rel="<h3>Database System Concept</h3><p>Writer: Silverchatz, Korth, Sudarshan</p> "/>
	</a>

	<a href="#">
		<img src="<?php echo base_url();?>img/java.jpg" alt="The complete Reference JAVA" width="500" height="500" title="" alt="" rel="<h3>The complete Reference JAVA</h3><p>Writer: Herbert Schieldt</p>"/>
	</a>
	
	<a href="#">
		<img src="<?php echo base_url();?>img/networking.jpg" alt="Computer Networks" width="500" height="500" title="" alt="" rel="<h3>Computer Networks</h3><p>Writer: Tanenbaum</p>"/>
	</a>
	
	<a href="#">
		<img src="<?php echo base_url();?>img/algo.jpg" alt="Introduction to Algorithms" width="500" height="500" title="" alt="" rel="<h3>Introduction to Algorithms</h3><p>Writer: Cormen, Leiserson, Rivest, Stein</p>"/>
	</a>
		
	<a href="#">
		<img src="<?php echo base_url();?>img/compiler.jpg" alt="Compiler: Principals, Techniques and Tools" width="500" height="500" title="" alt="" rel="<h3>Compiler: Principals, Techniques and Tools</h3><p>Writer: Aho, Lam, Sethi, Ullman</p>"/>
	</a>
	
	<a href="#">
		<img src="<?php echo base_url();?>img/os.jpg" alt="Operating System Concepts" width="500" height="500" title="" alt="" rel="<h3>Operating System Concepts</h3><p>Writer: Silberschatz, Galvin, Gagne</p>"/>
	</a>
	
	

	<div class="caption"><div class="content"></div></div>
</div>
<div class="clear"></div>

<br/><br/>




</div>
<div id = "footer"></div>