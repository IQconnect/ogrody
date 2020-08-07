<section class="realizations" style="background: url({{ $data['bg']['url'] }}); background-attachment: fixed; background-position: center; background-size: cover;">
  <div class="container realizations__row">
    <div class="realizations__content" data-aos="fade-in" data-aos-duration="2000">
      <h2 class="title realizations__title">
        {{ $data['title'] }}
      </h2>
      <p class="text">
        {!! $data['desc'] !!}
      </p>
    </div>
    <div class="realizations__images">
      <div class="main-carousel realizations__slider">
        @foreach ($data['realizations'] as $item)
          <div class="realizations__item carousel-cell">
            <div class="realizations__image">
              <img src="{{ $item['image']['url'] }}" alt="{{ $item['title'] }}" />
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>