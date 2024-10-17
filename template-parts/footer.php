  <!-- Footer -->
  <footer class="footer-box text-white pt-4">
    <?php include 'template-parts/nav.php'; ?>

      <!-- Texto de copyright -->
      <div class="row">
          <div class="col-12 text-center my-2">
              <p class="mb-0" style=" font-family: 'Poppins';">&copy; <span id="year"></span> Landing Web<br><span style="font-size: 10px;">Todos los derechos reservados.</span></p>
          </div>
      </div>
      </div>
  </footer>

  <script>
      // Script para obtener el año actual automáticamente
      document.getElementById("year").textContent = new Date().getFullYear();
  </script>