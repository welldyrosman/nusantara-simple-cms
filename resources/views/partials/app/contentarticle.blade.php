<div class="mt-5">
    <h2 class="f-sbold">{{$article->title}}</h2>
    <div class="d-flex justify-content-between mb-3">
        <div class="d-flex">
            <div class="me-3">Penulis : Redaksi</div>
            <div class="me-3">Kategori : {{$article->category->title}}</div>
            <div class="text-muted">
                <i class="bi bi-eye-fill"></i>
                {{$article->view_qty}}
            </div>
        </div>
        <div>{{$article->created_at}}</div>


    </div>
    <img src="{{URL::asset($article->image)}}" class="img img-fluid w-100 mb-3"/>
    <div class="content-article ">
        {!! $article->content !!}    
    </div>
</div>
