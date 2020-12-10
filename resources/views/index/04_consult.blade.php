
<div class="container-xl">
    <section class="consult">
        <a name="lessons"></a>
        <div class="consultatoins-title">
            <h1>Консультации</h1>
        </div>

        <div class="consult-column container-fluid">
            <div class="row">

                @foreach ($consultArr as $consult)
                    <div class="consult-1 col-xs-12 col-md-6">
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
    </section>
  </div>
