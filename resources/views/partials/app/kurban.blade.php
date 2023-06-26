<div class="mt-5">
    <h2 class="f-sbold text-center mb-3">{{ $title }}</h2>
    <p class="text-justify">{!! $description !!}</p>
    <h3 class="text-success f-sbold text-center">PENYALURAN QURBAN HINGGA SELURUH INDONESIA</h3>
    <img src="{{ URL::asset('/i/website_img/map.png') }}" class="img-fluid w-100 mb-3" />
    <h3 class="text-success f-sbold text-center">BERKURBAN DENGAN MUDAH</h3>
    <div class="card-group mb-3">
        <div class="card">
            <img src="{{ URL::asset('/i/website_img/Sapi-Kurban.png') }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <a href="#" class="btn btn-success form-control">Lihat Harga</a>

            </div>
        </div>
        <div class="card">
            <img src="{{ URL::asset('/i/website_img/Domba-Kurban.png') }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <a href="#" class="btn btn-success form-control">Lihat Harga</a>

            </div>
        </div>
        <div class="card">
            <img src="{{ URL::asset('/i/website_img/Kambing-Kurban.png') }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <a href="#" class="btn btn-success form-control">Lihat Harga</a>

            </div>
        </div>
    </div>
    @foreach ($hewans as $category => $hewanCategory)
        <h3 class="text-success f-sbold text-center mb-5">HARGA HEWAN KURBAN {{ $category }}</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
            @foreach ($hewanCategory as $hewanCollection)
                @foreach ($hewanCollection as $hewan)
                    <div class="col mb-3">
                        <h5 class="text-success">{{ $hewan->name }}</h5>

                        <div class="card h-100 catalog">
                            <img src="{{ URL::asset($hewan->image) }}" class="card-img-top" alt="...">
                            <div class="card-body p-1">
                                <a target="blank" href="https://wa.me/6289626219590?text=Hallo%0D%0ASaya+Tertarik+dengan+hewan+Kurban+<?php echo $hewan->name; ?>%0D%0Abolehkan+saya+bertanya+lebih+lanjut."class="btn btn-success form-control">Rp.
                                    {{ number_format($hewan->price, 0, ',', '.') }} / Ekor</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    @endforeach

</div>
