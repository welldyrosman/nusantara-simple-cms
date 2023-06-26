<div class="card my-5">
    <div class="card-header text-bg-success f-med">
        Artikel Terpopuler
    </div>
    <ul class="list-group list-group-flush">
        @foreach ($top_articles as $article)
            <li class="list-group-item">
                <a href="{{ $article->link }}">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="{{ URL::asset($article->image) }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-8">
                            <div class="card-body p-1 ">
                                <p class="card-title content-article-2 f-sbold">{{ $article->title }}</p>
                                <small class="text-muted">
                                    <i class="bi bi-eye-fill"></i>
                                    {{ $article->view_qty }}
                                </small>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>   
</div>
<div class="card my-5">
    <div class="card-header text-bg-success f-med">
        Artikel Keislaman
    </div>
    <ul class="list-group list-group-flush">
        @foreach ($top_articles as $article)
            <li class="list-group-item">
                <a href="{{ $article->link }}">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="{{ URL::asset($article->image) }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-8">
                            <div class="card-body p-1 ">
                                <p class="card-title content-article-2 f-sbold">{{ $article->title }}</p>
                                <small class="text-muted">
                                    <i class="bi bi-eye-fill"></i>
                                    {{ $article->view_qty }}
                                </small>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>   
</div>
