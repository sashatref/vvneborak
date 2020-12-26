<section class="servises">

    <div class="heading" id="servise">
        <h1>Услуги</h1>
    </div>

    <div class="services-bg">
        <div class="container-xl">
            <div class="servises-box accordion" id="accordionExample">
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

                        <div id="collapse_{{$loop->index}}" class="collapse" aria-labelledby="heading_{{$loop->index}}">
                            <div class="servises-discription card-body">
                                {!! $service->content !!}
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>

</section>
