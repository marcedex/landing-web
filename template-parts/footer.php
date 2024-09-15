  <!-- Footer -->
  <footer class="footer-box text-white pt-4">
      <div class="container">
          <div class="row">
              <!-- Menú de navegación en el footer -->
              <div class="col-md-6">
                  <ul class="nav justify-content-center justify-content-md-start">
                      <li class="nav-item">
                          <a class="nav-link text-white" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-white" href="#">About</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-white" href="#">Services</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-white" href="#">Contact</a>
                      </li>
                  </ul>
              </div>
          </div>

          <!-- Texto de copyright -->
          <div class="row">
              <div class="col-12 text-center my-2">
                  <p class="mb-0">&copy; <span id="year"></span> Landin Web. Todos los derechos reservados.</p>
              </div>
          </div>
      </div>
  </footer>

  <script>
      // Script para obtener el año actual automáticamente
      document.getElementById("year").textContent = new Date().getFullYear();
  </script>