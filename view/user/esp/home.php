<!--banner-->
  <section class = "banner">
    <div 
        <?php echo "style= 'background-image: url(assets/image/banner/".$esp['img'].");
                background-repeat: no-repeat;
                width: 100%;'" ?>>
    <div class = "table">
      <div class = "table-cell">
      <div class = "row">
            <div class = "col-left col-xs-8 vbottom">
              <div class = "links">
              <a class="btn" target="_blank" href=""><span class="btn-wrapper">Comprar entrada</span></a>
              
              <a class = "about-the-show  "href=""><strong>Acerca de <?php echo $esp['nombre']; ?></strong></a>
              </div>
            </div>
            
            <div class = "col-right col-xs-5 vbottom"><p><?php echo $esp['artista']; ?></p></div>
      </div>

      </div>
    </div>

  </div>
  </section>
<!--banner-->
<!--carrussel-wrapper-->
 <section class = "carrusel">
 <!--menu-->
 <header class="header">
   <div class="container">
     <nav class="row">
       <h2 class = "title">Otros espectáculos que te pueden interesar</h2>
       <div class = "hidden-xs hidden-sm">
         <ul class = " sub-nav">
           <li><button class = "nav-item">Todos los Espectaculos</button></li>
           <?php foreach($this->ciudad->listAll() as $ciu): ?>
            <li><button class = "nav-item"><?php echo $ciu['nombre']; ?></button></li>
            <?php endforeach; ?>
           <li><button class = "nav-item">En Gira</button></li> 
         </ul>
       </div>
     </nav>
    </div>
 </header>
 <!--menu-->

<!--carrussel-->
<div class = "container wrapper" id = "other-shows"></div>
<!--carrussel-->

 </section>
<!--carrussel-wrapper-->
