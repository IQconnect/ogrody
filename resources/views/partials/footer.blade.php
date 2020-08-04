@include("components.contact")
<footer class="footer">
  <div class="container">
    <div class="footer__row">
      <div class="footer__copyright text text--white">
        {{ get_option_field("copyright") }}
      </div>
      <div class="footer__logo">
        <a href="http://iqconnect.pl">
          <img src="{{ get_option_field('iqlogo')['url'] }}" alt="{{ get_option_field('iqlogo')['alt'] }}">
        </a>
      </div>
    </div>
  </div>
</footer>