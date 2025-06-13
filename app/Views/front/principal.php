<!--presentacion-->
<main class="hero-section" style="background-color: #2b233c;">
  <img src="<?= base_url('public/assets/img/tython.titulo.jpg') ?>" 
       alt="Tython Hero Image" 
       style="width: 100%; height: auto; display: block;">
</main>
<!--fin de presentacion-->


<!--franja-->
<section class="franja-servicios">
  <div class="franja-contenido">
    <h2>Transformamos ideas en soluciones</h2>
    <p>
      Los servicios administrados implican externalizar la gestión diaria y el soporte técnico de su infraestructura a un proveedor externo. 
      Estos servicios garantizan la seguridad, eficiencia y conformidad de su entorno.
    </p>
    <a href="<?= base_url('contacto') ?>" class="btn-franja">Contactanos</a>
  </div>
</section>
<!--fin de franja-->


<!-- Carousel -->
<div id="miCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

    <!-- Mision -->
    <div class="carousel-item active slide-custom" style="background-image: url('public/assets/img/fondo.mision.png');">
      <div class="container h-100 d-flex align-items-center">
        <div class="row w-100">
          <div class="col-md-6 text-white d-flex flex-column justify-content-center align-items-start">
            <h2 class="mb-3">Misión</h2>
            <img src="public/assets/img/robot.mision.png" alt="Decorativa" class="img-fluid" style="max-width: 250px;" />
          </div>
          <div class="col-md-6 text-white d-flex align-items-center">
            <p class="fs-5">
              Nuestra misión es empoderar a las empresas con soluciones de vanguardia que les permitan tomar decisiones más informadas y eficientes, impulsando su crecimiento y éxito. Nos enorgullece ser el socio de confianza que les ayuda a alcanzar sus objetivos y a mantenerse a la vanguardia de la innovación.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Objetivo -->
    <div class="carousel-item slide-custom" style="background-image: url('public/assets/img/fondo.objetivo.png');">
      <div class="container h-100 d-flex align-items-center">
        <div class="row w-100">
          <div class="col-md-6 text-white d-flex flex-column justify-content-center align-items-start">
            <h2 class="mb-3">Objetivo</h2>
            <img src="public/assets/img/robot.objetivo.png" alt="Decorativa" class="img-fluid" style="max-width: 250px;" />
          </div>
          <div class="col-md-6 text-white d-flex align-items-center">
            <p class="fs-5">
              Trabajamos para ser el aliado tecnológico de confianza que acompaña a las empresas en la gestión y evolución de su infraestructura IT. Nuestro objetivo es brindar soluciones estables, seguras y eficientes que respalden el crecimiento de cada organización.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!--Logros -->
    <div class="carousel-item slide-custom" style="background-image: url('public/assets/img/fondo.logros.png');">
  <div class="container h-100 d-flex align-items-center">
    <div class="row w-100">
      <!-- Columna izquierda -->
      <div class="col-md-6 text-white d-flex flex-column justify-content-center align-items-start">
        <h2 class="mb-3">Nuestros Logros</h2>
        <img src="public/assets/img/robot.registrate.png" alt="Robot" class="img-fluid" style="max-width: 250px;" />
      </div>

      <!-- Columna derecha: logros -->
      <div class="col-md-6 d-flex flex-column justify-content-center">
        <div class="logro-item mb-3">
          <span class="logro-año">2022</span>
          <span class="logro-texto">Reconocimiento a la excelencia en servicios</span>
        </div>
        <div class="logro-item mb-3">
          <span class="logro-año">2023</span>
          <span class="logro-texto">Premio a la Innovación Tecnológica</span>
        </div>
        <div class="logro-item">
          <span class="logro-año">2024</span>
          <span class="logro-texto">Líderes Emergentes en Innovación Tecnológica</span>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>

  <!-- Controles -->
  <button class="carousel-control-prev" type="button" data-bs-target="#miCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#miCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<!-- Fin del Carousel -->

<!--noticias destacadas-->
<div class="container py-5">
  <h2 class="text-center mb-4">Noticias Destacadas</h2>

  <!-- Buscador -->
  <div class="mx-auto search-bar">
    <input type="text" id="buscador" class="form-control" placeholder="Buscar noticias...">
  </div>

  <!-- Noticias -->
  <div class="row" id="contenedorNoticias">

    <!-- Tarjeta 1 -->
    <div class="col-md-4 mb-4 tarjeta-noticia">
      <div class="card card-news">
        <img src="https://www.investopedia.com/thmb/wuuss_5lSKqGckNngtP1__7qEk4=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/Blockchain_final-086b5b7b9ef74ecf9f20fe627dba1e34.png" class="card-img-top" alt="Noticia 1">
        <div class="card-body">
          <small class="text-muted">24 de Marzo de 2025</small>
          <h5 class="card-title">Datos sobre blockchain</h5>
          <p class="card-text">Qué es, como funciona y como se puede utilizar.</p>
          <div class="d-flex justify-content-between">
            <div><i class="bi bi-heart"></i> 249</div>
            <div><i class="bi bi-eye"></i> 1.308</div>
          </div>
          <a href="https://www.investopedia.com/terms/b/blockchain.asp" class="btn btn-link text-danger mt-2">Leer más →</a>
        </div>
      </div>
    </div>

   <!-- Tarjeta 2 -->
    <div class="col-md-4 mb-4 tarjeta-noticia">
      <div class="card card-news">
        <img src="https://www.latrochadigital.com.ar/wp-content/uploads/2025/05/f768x1-971118_971245_5050.webp" class="card-img-top" alt="Noticia 2">
        <div class="card-body">
          <small class="text-muted">22 de Mayo de 2025</small>
          <h5 class="card-title">Google presenta traduccion en tiempo real</h5>
          <p class="card-text">Google presentó una función revolucionaria para videollamadas en Meet.</p>
          <div class="d-flex justify-content-between">
            <div><i class="bi bi-heart"></i> 300</div>
            <div><i class="bi bi-eye"></i> 980</div>
          </div>
          <a href="https://www.latrochadigital.com.ar/2025/05/22/google-anuncio-un-traductor-en-tiempo-real-que-mantiene-tu-voz-original/" class="btn btn-link text-danger mt-2">Leer más →</a>
        </div>
      </div>
    </div>

    <!-- Tarjeta 3 -->
    <div class="col-md-4 mb-4 tarjeta-noticia">
      <div class="card card-news">
        <img src="https://media.es.wired.com/photos/6830d91e20b59a5e4477622a/16:9/w_1920,c_limit/GettyImages-1740925125.jpg" class="card-img-top" alt="Noticia 2">
        <div class="card-body">
          <small class="text-muted">24 de Mayo de 2025</small>
          <h5 class="card-title">Los riesgos del mal uso de IA</h5>
          <p class="card-text">Claude Opus 4 es el primer modelo de Anthropic que identifica a los sistemas de IA que aumentan sustancialmente el riesgo de mal uso catastrófico.</p>
          <div class="d-flex justify-content-between">
            <div><i class="bi bi-heart"></i> 124</div>
            <div><i class="bi bi-eye"></i> 745</div>
          </div>
          <a href="https://es.wired.com/articulos/claude-opus-4-la-nueva-ia-de-anthropic-fue-capaz-de-chantajear" class="btn btn-link text-danger mt-2">Leer más →</a>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- fin noticias destacadas-->
