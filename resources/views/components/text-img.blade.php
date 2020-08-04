<section class="section">
  <div class="container text-img">
    <div class="text-img__content">
      <div>
        @if($data['header'] == 'tak')
          <h2 class="title title--section text-img__title">
            {{ $data['title'] }}
          </h2>
        @endif
        <div class="text">
          {!! $data['content'] !!}
        </div>
        <a href="#" class="button">
          Więcej
        </a>
      </div>
    </div>
    <div class="text-img__img">
      {!! do_shortcode('[google_map_easy id="1"]') !!}
      {{-- <img class="text-img__photo" src="{{ $data['image']['url'] }}" alt="{{ $data['image']['alt'] }}"> --}}
    </div>
  </div>
</section>