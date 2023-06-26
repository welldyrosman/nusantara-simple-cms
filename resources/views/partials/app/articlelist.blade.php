<div class="article-list">
    @foreach ($articles as $article)
        <div class="card mb-3 article-item">
            <div class="row g-0">
                <div class="col-4">
                    <img src="{{ URL::asset($article->image) }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-8">
                    <div class="card-body textbox">
                        <h5 class="card-title f-sbold">{{ $article->title }}</h5>
                        <div class="d-flex fs-12 text-secondary justify-content-between ">
                            <div>Kategori :{{ $article->category->title }}</div>
                            <div>Penulis :Rizky Aulia [{{ $article->localized_published_at }}]</div>
                        </div>
                        <p class="card-text content-article-3"> {{ getNWords($article->content, 50) }}</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small>
                        </p>
                        <div class="d-flex justify-content-end">
                            <a href="{{ $article->link }}" class="btn btn-success">Selengkapnya</a>
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