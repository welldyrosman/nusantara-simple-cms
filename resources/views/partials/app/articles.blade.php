<div class="row">
    <div class="col-12">
        <div class="row my-3">
            <div class="col">
                <div class="d-flex align-items-center">
                    <h3 class="f-sbold">Artikel Terbaru</h3>
                    <hr class="flex-grow-1 custom-hr">
                </div>
            </div>
        </div>
        <div class="newest-article mb-5">
            <div class="textbox ">
                <h3 class="f-sbold">JUDUL ARTICLE</h3>
                <div class="f-med">Descripsi singkat Article 2 Baris</div>
                <div class="f-med">Kategori : Hewan Kurban</div>
            </div>
            <img src="{{URL::asset('/i/website_img/article.png')}}" class="w-100 img-fluid" />
        </div>

        <div class="article-list">
            @foreach ($articles as $article)
            <div class="card mb-3 article-item">
                <div class="row g-0">
                    <div class="col-4">
                        <img src="{{URL::asset('/i/website_img/kambing.png')}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-8">
                        <div class="card-body textbox">
                            <h5 class="card-title f-sbold">{{ $article->title }}</h5>
                            <div class="d-flex fs-12 text-secondary justify-content-between ">
                                <div>Kategori :{{$article->category->title}}</div>
                                <div>Penulis :Rizky Aulia [{{ $article->localized_published_at }}]</div>
                            </div>
                            <p class="card-text content-article-3"> {{ getNWords($article->content, 50) }}</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            <div class="d-flex justify-content-end">
                                <a  href="{{ $article->category->link }}" class="btn btn-success">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
        @if ($articles->total() > $articles->count())
        <div class="column is-12">
            {!! $articles->appends(request()->except('page'))->links() !!}
        </div>
        @endif

    </div>
</div>
