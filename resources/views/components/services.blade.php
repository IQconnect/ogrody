<section class="section services">
  <img class="services__corner" src="@asset("images/corner.png")" alt="bg" />
  <div class="container services__wrapper">
    <h2 class="title title--section">
      Usługi
    </h2>
    <div class="services__list">
      <div class="services__row">
        <div class="services__img" data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="300">
          <img src="{{ $data['s1img']['url'] }}" alt="{{ $data['s1img']['title'] }}" />
        </div>
        <div class="services__content" data-aos="fade-right" data-aos-duration="2000">
          <span class="services__number">
            01
          </span>
          <h3 class="title">
            {{ $data['s1'] }}
          </h3>
          <p class="services__desc">
            {!! $data['s1desc'] !!}
          </p>
        </div>
      </div>
      <div class="services__row">
        <div class="services__content services__content--rev" data-aos="fade-left" data-aos-duration="2000">
          <span class="services__number services__number--rev">
            02
          </span>
          <h3 class="title">
            {{ $data['s2'] }}
          </h3>
          <p class="services__desc services__desc--small">
            {!! $data['s2desc'] !!}
          </p>
        </div>
        <div class="services__img services__img--circle" data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="300">
          <img src="{{ $data['s2img']['url'] }}" alt="{{ $data['s2img']['title'] }}" />
        </div>
      </div>
      <div class="services__row services__row--text">
        <div class="services__content services__content--text services__content--offset" data-aos="fade-up" data-aos-duration="1000">
          <span class="services__number services__number--noline">
            03
          </span>
          <h3 class="title">
            {{ $data['s3'] }}
          </h3>
          <p class="services__desc services__desc--small">
            {!! $data['s3desc'] !!}
          </p>
        </div>
        <div class="services__content services__content--text" data-aos="fade-up" data-aos-duration="2200">
          <span class="services__number services__number--noline">
            04
          </span>
          <h3 class="title">
            {{ $data['s4'] }}
          </h3>
          <p class="services__desc services__desc--small">
            {!! $data['s4desc'] !!}
          </p>
        </div>
      </div>
    </div>
  </div>
  <img class="services__lcorner" src="{{ $data['lcorner']['url'] }}" alt="{{ $data['lcorner']['alt'] }}" />
  <img class="services__rcorner" src="{{ $data['rcorner']['url'] }}" alt="{{ $data['rcorner']['alt'] }}" />
</section>