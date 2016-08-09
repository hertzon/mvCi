<body>
<!-- Shell -->
<div id="shell">
	<!-- Header -->
	<div id="header">
		<h1 id="logo"><a href="#"></a></h1>
		<!--
		<div class="social">
			<span>FOLLOW US ON:</span>
			<ul>
			    <li><a class="twitter" href="#">twitter</a></li>
			    <li><a class="facebook" href="#">facebook</a></li>
			    <li><a class="vimeo" href="#">vimeo</a></li>
			    <li><a class="rss" href="#">rss</a></li>
			</ul>
		</div>
	-->
		
		<!-- Navigation -->
		<div id="navigation">
			<ul>
                            <!--
			    <li><a class="active" href="#">HOME</a></li>
			    <li><a href="#">ESTRENOS</a></li>
			    <!--<li><a href="#">IN THEATERS</a></li>-->
			    <!--<li><a href="#">COMING SOON</a></li>
			    <li><a href="#">CONTACTO</a></li>
			    <li><a href="#">AVISO</a></li>
                            -->
                            <li><a href="#">AVISO</a></li>
			</ul>
		</div>
		<!-- end Navigation -->
		
		<!-- Sub-menu -->
		<div id="sub-navigation">
			<ul>
                            
			    <li><a href="#">ARDUINO</a></li>
                            <!--
			    <li><a href="#">LATEST TRAILERS</a></li>
			    <li><a href="#">MAS DESCARGADAS</a></li>
			    <li><a href="#">MOST COMMENTED</a></li>
                            <li><a href="#">MOSTRAR TODAS</a></li>
			    <li><a href="#">LATEST TRAILERS</a></li>
			    <li><a href="#">MAS DESCARGADAS</a></li>
			    <li><a href="#">MOST COMMENTED</a></li>
                            -->
			</ul>
			<div id="search">
                                
				<form action="home_submit" method="get" accept-charset="utf-8">
					<label for="search-field">BUSCAR</label>					
					<input type="text" name="search field" value="Enter search here" id="search-field" title="Enter search here" class="blink search-field"  />
					<input type="submit" value="IR!" class="search-button" />
				</form>
                                
			</div>
		</div>
		<!-- end Sub-Menu -->
		
	</div>
	<!-- end Header -->
	
	<!-- Main -->
	<div id="main">
		<!-- Content -->
		<div id="content">

			
			
			<!-- Box -->
			<div class="box">
                            
				<div class="head">
					<h2>ARDUINO</h2>
					<p class="text-right"><a href="">See all</a></p>
				</div>	
                            


                                <?php
                                    foreach ($consulta->result() as $fila) { 
                                        
                                        
                                ?>
                                <!-- Movie -->
                                
				<!-- Movie -->
				<div class="movie">
					<div class="movie-image">
						<a href="<?=$fila->enlace_linkbuck?>" target="_blank"><span class="play"><span class="name"><?=$fila->nombre_libro?></span></span><img src="<?= base_url()?>/template/css/images/<?=$fila->nombre_imagen?>" alt="movie" /></a>
					</div>	
					<div class="rating">
                                            <!--
						<p>RATING</p>
						<div class="stars">
							<div class="stars-in">
								
							</div>
						</div>
                                            
						<span class="comments">12</span>
                                            -->
					</div>
				</div>
				<!-- end Movie -->
                               
                                      
                                <?php       
                                    }
                                ?>
                                <div class="cl">&nbsp;</div>  
				
			</div>
			<!-- end Box -->
			
			

		
		<!-- end Coming -->
		<div class="cl">&nbsp;</div>
	</div>
	<!-- end Main -->

