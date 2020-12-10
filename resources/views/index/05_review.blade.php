<div class="container-xl">

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
</div>
