<footer>
      <div class="footer container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="footer-logo"
          ><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/footer-logo.webp"
        /></a>
        <ul class="footer-nav">
          <li><a href="<?php echo esc_url(get_template_directory_uri()); ?>/company">Company</a></li>
          <li class="pc"></li>
          <li><a href="<?php echo esc_url(get_template_directory_uri()); ?>/liver">Livers</a></li>
        </ul>
      </div>
      <div class="copyright">Copyright ©en-Taku 2025</div>
    </footer>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/script.js"></script>
  </body>
</html>
<?php wp_footer(); ?>