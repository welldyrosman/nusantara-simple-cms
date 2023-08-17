
<section class="hero is-primary {{ $class ?? '' }}">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row my-5">
                    <div class="col-12 text-center">
                        <h1 class="f-bold">{{ $title }}</h1>
                        <h5>{!!$description!!}</h5>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="box">
                            <img src="{{URL::asset('/i/website_img/kambing.png')}}" alt="Gambar" class="corner-image">
                            <div class="content">
                                <h2 class="f-bold">AQIQAH</h2>
                                <p class="content-article-7">Apa itu jasa akikah? Jasa akikah adalah layanan kami yang didedikasikan untuk membantu keluarga Muslim melaksanakan tradisi akikah dengan mudah dan nyaman. Kami menyediakan paket lengkap untuk memastikan acara akikah berjalan lancar dan sesuai dengan aturan yang ditetapkan.</p>
                                <a href="/aqiqah" class="btn btn-success">Pesan Sekarang</a>
                            </div>
                        </div>
                        <!-- <div class="productkind-box">
                            <div class="textbox">
                                <h2 class="f-bold">AQIQAH</h2>
                                <div class="w-75">Apa itu jasa akikah? Jasa akikah adalah layanan kami yang didedikasikan untuk membantu keluarga Muslim melaksanakan tradisi akikah dengan mudah dan nyaman. Kami menyediakan paket lengkap untuk memastikan acara akikah berjalan lancar dan sesuai dengan aturan yang ditetapkan.</div>
                                <button class="btn btn-success">Pesan Sekarang</button>
                            </div>
                            <img class="img-fluid float-end" src="{{URL::asset('/i/website_img/kambing.png')}}" />

                        </div> -->
                    </div>
                    <div class="col-md-6">
                        <div class="box">
                            <img src="{{URL::asset('/i/website_img/kambing.png')}}" alt="Gambar" class="corner-image">
                            <div class="content">
                                <h2 class="f-bold">HEWAN KURBAN</h2>
                                <p class="content-article-7">Selamat datang di layanan kami yang menyediakan hewan kurban berkualitas tinggi untuk memenuhi kebutuhan Anda dalam melaksanakan ibadah kurban. Kami memahami pentingnya momen ini bagi umat Muslim, dan dengan bangga kami menawarkan produk hewan kurban yang terbaik.</p>
                                <a href='/hewan-kurban' class="btn btn-success">Pesan Sekarang</a>
                            </div>
                        </div>
                        <!-- <div class="productkind-box">
                            <div class="textbox">
                                <h2 class="f-bold">HEWAN KURBAN</h2>
                                <div class="w-75">Selamat datang di layanan kami yang menyediakan hewan kurban berkualitas tinggi untuk memenuhi kebutuhan Anda dalam melaksanakan ibadah kurban. Kami memahami pentingnya momen ini bagi umat Muslim, dan dengan bangga kami menawarkan produk hewan kurban yang terbaik.</div>
                                <button class="btn btn-success">Pesan Sekarang</button>
                            </div>
                            <img class="img-fluid float-end" src="{{URL::asset('/i/website_img/kambing.png')}}" />

                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.app.errors')
