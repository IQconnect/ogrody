<section class="contact" style="background: url({{ get_option_field('contactbg')['url'] }}); background-attachment: fixed; background-position: center; background-size: cover;">
  <div class="container contact__content">
    <div class="contact__info">
      <div class="contact__logo">
        <img src="{{ get_option_field('logo2')['url'] }}" alt="{{ get_option_field('logo2')['title'] }}" />
      </div>
      <p class="contact__address">
        {!! get_option_field("address") !!}
      </p>
      <p>
        <a class="contact__link" href="mailto:{{ get_option_field('email') }}">
          {{ get_option_field('email') }}
        </a>
        <br>
        <a class="contact__link" href="tel:{{ str_replace(' ','', get_option_field('phone')) }}">
          {{ get_option_field("phone") }}
        </a>
      </p>
    </div>
    <div class="contact__form">
      <form class="form" id="form" action="#">
        <div class="form__row">
          <input class="form__input" type="text" placeholder="Nadawca">
          <input class="form__input" type="text" placeholder="Email">
        </div>
        <textarea class="form__text" placeholder="Treść wiadomości..." class="form__textarea" rows="4"></textarea>
        <button class="button button--small form__button" type="submit">
          Wyślij
        </button>
      </form>
    </div>
  </div>
</section>