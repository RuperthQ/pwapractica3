    <div class="mt-5">
      <h3>Carrito:</h3>
      <div id="carritoItems"></div>
    </div>

    <script type="text/javascript">
      let productos = <?php echo json_encode($productos, JSON_PRETTY_PRINT); ?>;
    </script>
    <script src="script.js"></script>
    </body>