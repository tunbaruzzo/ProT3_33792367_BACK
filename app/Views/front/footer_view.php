<!--footer-->
<footer class="footer-tython">
  <div class="footer-container">
    <div class="footer-col">
      <h4 class="mb-2">Servicios</h4>
        <div class="dropdown">
          <button class="btn-cv dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">Ver
          </button>
          <ul class="dropdown-menu bg-light text-dark">
            <li><a class="dropdown-item" href="<?= base_url('servicios#bases-datos') ?>">Bases de Datos</a></li>
            <li><a class="dropdown-item" href="<?= base_url('servicios#servidores') ?>">Servidores</a></li>
            <li><a class="dropdown-item" href="<?= base_url('servicios#redes') ?>">Redes</a></li>
            <li><a class="dropdown-item" href="<?= base_url('servicios#sistemas') ?>">Adm. de Sistemas</a></li>
            <li><a class="dropdown-item" href="<?= base_url('servicios#ciberseguridad') ?>">Ciberseguridad</a></li>
          </ul>
        </div>
    </div>
    <div class="footer-col">
      <h4>Trabajá con nosotros</h4>
      <a href="<?= base_url('error404') ?>" class="btn-cv">Enviar CV</a>
    </div>
    <div class="footer-col">
      <div class="social-icons">
        <a href="#"><img src="public/assets/img/sptf.tython.png" alt="Spotify"></a>
        <a href="#"><img src="public/assets/img/lkin.tython.png" alt="LinkedIn"></a>
        <a href="#"><img src="public/assets/img/ig.tython.png" alt="Instagram"></a>
        <a href="#"><img src="public/assets/img/whtsp.tython.png" alt="WhatsApp"></a>
      </div>
      <p class="copyright">
        © 2025 Tython by TunBzz. Todos los derechos reservados.
      </p>
    </div>
  </div>
</footer>
<!--fin de footer-->

<!-- Bootstrap JS con Popper-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Bv7S3Vx7T9i4Z5lW0ZrXzA8Q5Yc8B1cXQX0zFZKNjc8Kx5hcfkZf8wS5Nd+lLBiT" crossorigin="anonymous"></script>

<!-- Bootstrap JS + Icons -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<!-- JS para filtro -->
<script>
  const buscador = document.getElementById('buscador');
  buscador.addEventListener('keyup', function () {
    const filtro = buscador.value.toLowerCase();
    const tarjetas = document.querySelectorAll('.tarjeta-noticia');

    tarjetas.forEach(tarjeta => {
      const texto = tarjeta.innerText.toLowerCase();
      tarjeta.style.display = texto.includes(filtro) ? '' : 'none';
    });
  });
</script>

</body>
</html>
