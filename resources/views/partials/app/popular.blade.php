<div class="card my-5">
                    <div class="card-header text-bg-success f-med">
                        Artikel Terpopuler
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($articles as $article)
                        <li class="list-group-item">
                            <div class="row g-0">
                                <div class="col-4">
                                    <img src="{{URL::asset('/i/website_img/kambing.png')}}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-1 ">
                                        <p class="card-title content-article-2 f-sbold">{{ $article->title }}</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
