<!DOCTYPE html>
<html lang="eng">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>neborak</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
    crossorigin="anonymous">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>

  <script>
    $(document).on("click", '[data-toggle="lightbox"]', function (event) {
      event.preventDefault();
      $(this).ekkoLightbox();
    });
  </script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">


</head>

<body>

  <div class="header">
    <div class="container-fluid d-none d-xl-block">
      <div class="row text-center">
        <div class="col-5">
          <div class="container-fluid">
            <div class="row">
              <div class="col-4 my-btn"><a href="#about-me">Обо мне</a></div>
              <div class="col-4 my-btn"><a href="#servise">Услуги</a></div>
              <div class="col-4 my-btn"><a href="#rewiev">Отзывы</a></div>
            </div>
          </div>
        </div>
        <div class="col-2">

          <img src="{{ asset('storage/images/logo1.png') }}" />
          <div>Виктория Неборак</div>
          <div>Стилист-имиджмейкер</div>

        </div>
        <div class="col-5">
          <div class="container-fluid">
            <div class="row">
              <div class="col-4 my-btn"><a href="#question">Вопросы</a></div>
              <div class="col-4 my-btn"><a href="#contact">Контакты</a></div>
              <div class="col-4 my-btn"><a href="#">Блог</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid d-xl-none">
      <div class="text-center">
        <div style="font-size: 1.2rem;">

          <img src="{{ asset('storage/images/logo1.png') }}" />
          <div>Виктория Неборак</div>
          <div>Имидж-стилист</div>

        </div>
        <div><a href="#about-me">Обо мне</a></div>
        <div><a href="#servise">Услуги</a></div>
        <div><a href="#rewiev">Отзывы</a></div>
        <div><a href="#question">Вопросы</a></div>
        <div><a href="#contact">Контакты</a></div>
        <div><a href="#">Блог</a></div>
      </div>
    </div>
  </div>


  <section class="self-info">

    <div class="container-fluid">
      <a name="about-me"></a>
      <div class="row">
        <div class="col-1">

        </div>

        <div class="self-info_avatar col-lg-3 col-sm-12">
          <img class="self-info_photo__avatar" src="{{ asset('storage/images/ава 2.png') }}" alt="avatar">
        </div>

        <div class="self-info_text col-lg-7 col-sm-12">
          <p>Привет!</p>
          <p>Меня зовут Виктория. Я - стилист, который уверен в том, что одежда - это инструмент коммуникаций.</p>
          <p>Ваша одежда просто обязана говорить про вас!</p>
          <p>Я не делаю никаких прививок от безвкусицы и не снимаю порчу со шкафа.</p>
          <p>Суть моей работы заключается в том, чтобы ваш гардероб соответствовал вашей внешности, внутреннему
            состоянию и образу жизни.</p>
          <div class="autograf">
            <img src="{{ asset('storage/images/подпись.png') }}" alt="autograf">
          </div>
        </div>

        <div class="col-1"></div>
      </div>
    </div>

  </section>

  <section class="servises">

    <a name="servise"></a>
    <div class="servises-title">
      <h1 class="servises-title_text">Услуги</h1>
    </div>

    <div class="servises-box accordion container" id="accordionExample">
        @foreach ($serviceArr as $service)

            <div class="card">
                <div class="card-header" id="heading_{{$loop->index}}">
                    <h2 class="mb-0">
                        <button class="servises-btn btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#collapse_{{$loop->index}}" aria-expanded="true" aria-controls="collapse_{{$loop->index}}">
                            {{ $service->title }}
                        </button>
                    </h2>
                </div>

                <div id="collapse_{{$loop->index}}" class="collapse" aria-labelledby="heading_{{$loop->index}}" data-parent="#accordionExample">
                    <div class="servises-discription card-body">
                        {!! $service->content !!}
                    </div>
                </div>
            </div>

        @endforeach
    </div>

  </section>

  <section class="consult">
    <a name="lessons"></a>
    <div class="consultatoins-title">
      <h1>Индивидуальные консультации</h1>
    </div>
    <div class="container">
      <div class="consult-column container-fluid">
        <div class="row">

            @foreach ($consultArr as $consult)
                <div class="consult-1 col-6">
                    <div class="card">
                        <img src="{{ $consult->image_url }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="consult-card-title card-title">{{ $consult->title }}</h5>
                            <p class="consult-card-txt card-text">{{ $consult->content }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="consult-card-txt list-group-item">Длительность - {{ $consult->duration }}</li>
                            <li class="consult-card-txt list-group-item">Стоимость - {{ $consult->cost }} грн</li>
                        </ul>
                    </div>
                </div>
            @endforeach

          </div>
        </div>
      </div>
  </section>

  <section class="rewievs container">
    <a name="rewiev"></a>
    <div class="rewievs-title">
      <h1>Отзывы</h1>
    </div>

    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
          @foreach ($reviewArr as $review)
              <div class="carousel-item @if ($loop->first) active @endif" data-interval="10000">
                  <img src="{{ $review->image_url }}" class="d-block w-100" alt="...">
              </div>
          @endforeach
      </div>
      <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="rewievs-more">
      <span class="more"> <a class="see-more-rewievs">Смотреть все отзывы</a></span>
    </div>

  </section>

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

  <section class="questions">
    <a name="question"></a>
    <div class="container">
      <div class="questions-block">
        <div class="questions-title">
          <h1>Часто задаваемые вопросы</h1>
        </div>

        <div>
          <img src="{{ asset('storage/images/отзывы/questions_photo1.png') }}" width="500px" class="d-lg-none mx-auto d-block" alt="picture">
        </div>

        <img src="{{ asset('storage/images/отзывы/questions_photo1.png') }}" width="500px" class="fig d-none d-lg-block" alt="picture">

        <div class="q-name"> <h3>Разбор гардероба - значит выбросить все?</h3>

        </div>
        <div class="q-txt_answer">
          <p>Единственный человек, который принимает решение о том, какие вещи нужно убрать со своего гардероба - вы.</p>
          <p>Моя задача - максимально задействовать вашу одежду в комплекты; показать вам, как одеваться быстро и
            стильно</p>
          <p>Никакой стилист не в праве выбрасывать ваши вещи, особенно, если эти вещи любимы вами. Все решения о
            покупке новых вещей и судьбе старых вы принимаете самостоятельно. Я могу только обратить ваше внимание на
            определенные нюансы. </p>
        </div>

        <div class="q-name"> <h3>Как происходит процесс разбора гардероба со стилистом?</h3>

        </div>
        <div class="q-txt_answer">
          <p>Вы достаете одежду, обувь и аксессуары со своего шкафа, и начинаете убеждаться в том, что вам есть что
            надеть.</p>
          <p>Я составляю из ваших вещей так, чтобы они соответствовали вашим задачам: одеться на работу, одеться на
            прогулку, одеться на мероприятие.</p>
          <p>Таким образом, ваш гардероб приобретает очертание капсульного гардероба. В нем появляется структура и
            смысл: одни брюки смело шагают на вас в паре с рубашкой или джемпером на прогулку. Эти же брюки вы
            надеваете с жакетом и активными аксессуарами вечером. А юбка, которая долго висела с биркой, отправляется с
            вами на прогулки с футболками и кардиганом.</p>
          <p>Цель мининимум вещей = максимум комплектов почти достигнута</p>
          <p>На этом этапе мы определяем, какого связующего звена не достаточно для того, чтобы ваш гардероб заработал
            на полную мощность, и составляем список покупок.</p>
          <p>После того, как мы с вами обсудили шопинг-лист, вы возвращаете вещи в шкаф, а я отправляюсь готовить для
            вас презентацию с разбора вашего шкафа.</p>
          <P>В презентации будут все образы, которые мы сложили и визуализация шопинг листа. Пример шопинг-листа с
            визуализацией вы увидите ниже.</P>

        </div>


        <div class="q-name"> <h3>Как часто необходимо делать разбор гардероба со стилистом?</h3>

        </div>
        <div class="q-txt_answer">
          <p>Хорошо делать разбор 2 раза в год: на демисезон/холодное время года и на лето</p>
          <p>Также вы можете самостоятельно проводить мини-разборы по мере поступления новых вещей в шкаф</p>

        </div>

        <div class="q-name"> <h3>А online-разбор гардероба можно?</h3>

        </div>
        <div class="q-txt_answer">
          <p>Можно! Вы делаете фотографии своих вещей на хорошем освещении. Можно несколько вещей на одно фото, а затем
            получаете презентацию с комплектами для вас. Мы с вами обсуждаем список покупок - и я скидываю вам вторую
            часть презентации - шопинг-лист с визуализацией</p>
          <p>По сути, online-разбор гардероба не на много отличается от ofline</p>
        </div>


        <div class="q-name"> <h3>А это же потом стилиста и на шопинг надо?</h3>

        </div>
        <div class="q-txt_answer">
          <p>Купить необходимые вещи вы можете со мной или самостоятельно. Я составляю очень четкое ТЗ для
            самостоятельных покупок.</p>

        </div>

        <div class="q-name"> <h3>А как проходит шопинг с Неборак?</h3>

        </div>
        <div class="q-txt_answer">
          <p>Перед шопингом я задаю вам много вопросов, вроде: "Куда вы носите на себе одежду?", "Какая одежда вам
            нравится?", "А покажите!", "Вы предпочитаете юбки или брюки?" Ну короче, мне нужно знать много всего о вас
            для того, чтобы пойти на пре-шопинг.</p>
          <p>- Пре-шо?</p>
          <p>- Пре-шопинг!</p>
          <p>Иду смотреть, где купить желаемые вещи. А затем, мы выбираем дату шопинга и вы идете на примерку. Удобно,
            да?</p>
        </div>

        <div class="q-name">
          <h3>А я с другого города!</h3>
        </div>
      </div>
      <div class="q-txt_answer">
        <p>А ничего страшного. Я задаю вам все ту же связку вопросов и я делаю для вас список с визуализацией. Мы
          проверяем их на "нравится/не нравится", затем, вы внимательно на него смотрите и ищите подобные вещи. </p>
      </div>

      <div class="q-name">
        <h3>Как проходят индивидуальные консультации?</h3>
      </div>

      <div class="q-txt_answer">
        <p>Мы выясняем, в чем взникает сложность в отношениях "гардероб-вы", затем я готовлю для вас блок теории с
          визуализацией. Мы встречаемся лично или по видео-связи - я рассказываю и показываю вам, как решить вашу
          проблему</p>
        <p>Материалы с консультации остаются у вас и вы прорабатываете ее на практике.</p>
      </div>



    </div>
    </div>

  </section>

  <section class="contacts">
    <a name="contact"></a>

    <div class="container-fluid">
      <div class="row">
        <div class="col-4"></div>

        <div class="icon-btn col-1">
          <a href=""></a>
          <img class="icon" src="{{ asset('storage/images/отзывы/icon_instagram.png') }}" alt="icon">
        </div>

        <div class="icon-btn col-1">

          <img class="icon" src="{{ asset('storage/images/отзывы/icon_fb.png') }}" alt="icon">
        </div>
        <div class="icon-btn col-1">
          <img class="icon" src="{{ asset('storage/images/отзывы/icon_youtoobe.png') }}" alt="icon">
        </div>
      </div>

      <div class="col-5"></div>
    </div>
    </div>

  </section>
</body>

<footer>

</footer>

</html>
