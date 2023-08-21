<div class="row my-3">
    <div class="col">
        <div class="d-flex align-items-center">
            <h3 class="f-sbold">Artikel Terkait</h3>
            <hr class="flex-grow-1 custom-hr">
        </div>
    </div>
</div>
<section class="pt-5 pb-5 carousel-related">
    <div class="row">

        <div class="col-12">
            <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner">
                    @foreach ($articles as $key => $article)
                    @if ($key % 3 === 0)
                    <div class="carousel-item{{ $key === 0 ? ' active' : '' }}">
                        <div class="row">
                            @endif
                            <div class="col-6 col-md-4 mb-3">
                                <a href="{{ $article->link }}" class="card">
                                    <img style="width: 100%; height: 200px; object-fit: cover; object-position: 100% 0;" alt="100%x280" src="{{URL::asset($article['image'])}}">
                                    <div class="card-body">
                                        <p class="card-title content-article-1 f-sbold">{{ $article['title'] }}</p>
                                        <p class="card-text content-article-3">{!! $article['description'] !!}</p>
                                    </div>
                                </a>
                            </div>

                            @if (($key + 1) % 3 === 0 || $key === count($articles) - 1)
                        </div>
                    </div>
                    @endif
                    @endforeach

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                    <i class="bi bi-chevron-left"></i>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                    <i class="bi bi-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

