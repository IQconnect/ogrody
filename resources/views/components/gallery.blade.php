<section class="section section--color">
  <div class="container">
    @foreach ($data['realizations'] as $item)
      <h2 class="title gallery__title">
        {{ $item['title'] }}
      </h2>
      <div class="gallery">
        @foreach($item['gallery'] as $img)
          <div class="gallery__image">
            <a data-fancybox="gallery" href="{{ $img['yt'] ? $img['yt'] : $img['img']['url'] }}">
              @if($img['yt'])
                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 108 108"><g transform="translate(-1182 -1302)"><g transform="translate(1182 1302)" fill="none" stroke="#f6f6f6" stroke-width="2"><circle cx="54" cy="54" r="54" stroke="none"/><circle cx="54" cy="54" r="53" fill="none"/></g><g transform="translate(1251 1343) scale(1.7) rotate(90)" fill="#f6f6f6"><path d="M 14.13429927825928 12.5 L 0.8657020330429077 12.5 L 7.500000476837158 1.00054931640625 L 14.13429927825928 12.5 Z" stroke="none"/><path d="M 7.500000476837158 2.001115798950195 L 1.731413841247559 12 L 13.26858711242676 12 L 7.500000476837158 2.001115798950195 M 7.500000476837158 0 L 15 13 L 9.5367431640625e-07 13 L 7.500000476837158 0 Z" stroke="none" fill="#f6f6f6"/></g></g></svg> 
              @endif
              <img class="gallery__img @if($img['yt']) gallery__img--video @endif" src="{{ $img['img']['url'] }}" alt="{{ $img['title'] }}">
            </a>
          </div>
        @endforeach
      </div>
    @endforeach
  </div>
</section>