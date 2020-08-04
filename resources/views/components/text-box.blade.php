<section class="text-box">
  <p class="text text--medium text-box__text">
    {!! $data['text'] !!}
  </p>
  <img class="text-box__lcorner" src="{{ $data['image']['url'] }}" alt="{{ $data['image']['alt'] }}" />
  <img class="text-box__rcorner" src="{{ $data['image']['url'] }}" alt="{{ $data['image']['alt'] }}" />
</section>