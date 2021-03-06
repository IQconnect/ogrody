<section>
  <div class="video">
    <div class="container">
      <div class="video__content" data-aos="fade-up" data-aos-duration="1000">
        <div>
          <h1>
            <span class="title video__title">
              {{ $data['title'] }}
            </span>
          </h1>
          <div class="text video__text">
            {!! $data['desc'] !!}
          </div>
          @if($data['link'])
            <a class="button button--primary" href="{{ $data['link']['url'] }}">
              {{ $data['link']['title'] }}
            </a>
          @endif
        </div>
      </div>
    </div>
    <video class="video__bg" playsinline autoplay muted loop poster>
      <source src="{{ $data['video']['url'] }}" type="video/mp4">
    </video>
  </div>
</section>