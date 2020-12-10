<section class="gallery">
    <a name="photos"></a>
    <div class="gallery-title">
      <h1>Стилизация фотосессий</h1>
    </div>

    <!--Carousel Wrapper-->
    <div id="carousel-with-lb" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Indicators-->
      <ol class="carousel-indicators" style="position: relative !important;">

          @foreach ($galleryPageArr as $galleryPage)
              <li data-target="#carousel-with-lb" data-slide-to="{{ $loop->index }}"
                  class="secondary-color @if ($loop->first) active @endif"></li>
          @endforeach

      </ol>
      <!--/.Indicators-->

      <!--Slides and lightbox-->

      <div class="carousel-inner mdb-lightbox" role="listbox">
        <div id="mdb-lightbox-ui"></div>

          @foreach ($galleryPageArr as $galleryPage)
              <div class="carousel-item text-center @if ($loop->first) active @endif">

                  @foreach($galleryPage->childrenPhotos as $galleryPhoto)
                      <figure class="col-md-4 d-md-inline-block">
                          <a href="{{ $galleryPhoto->image_url }}" data-toggle="lightbox" data-gallery="gallery">
                              <img src="{{ $galleryPhoto->image_url }}" class="img-fluid">
                          </a>
                      </figure>
                  @endforeach

              </div>
          @endforeach

      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->
  </section>
