@extends('main.app')

@section('style')
    <>
@endsection

@section('content')

<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md" style="background-image: url({{asset('assets/img/bg_header.jpg')}});  background-size: cover;">

    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center p-static order-2 text-center">

                <h1 class="text-dark"><strong>Selamat Datang !</strong></h1>
                {{-- Form Searching ' q ' --}}
                <div class="container py-4 ">
                    <section>

                        <div class="text-center">
                            <form role="search" action="{{ route('main.search') }}" method="get">
                            <form action="" method="get">
                                <div class="input-group mb-3 pb-1">
                                    <input class="form-control text-1" placeholder="Masukan Bahan Makananmu Disini " name="q" id="q" value="" type="search" value="{{ request('q') }}">
                                    <span class="input-group-append">
                                        <button type="submit" class="btn btn-dark text-1 p-2">
                                            <i class="fas fa-search m-2"></i></button>
                                    </span>
                                </div>
                            </form>
                            {{-- <p class="text-dark text-dark"><strong>Selamat Datang !</strong></p> --}}
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container py-2">
        {{-- <a href="{{route('main.create')}}" class="btn btn-sm btn-primary mt-2 mb-2"> Tambah Resep Masakan</a> --}}

        <div class="row mb-5 pb-3">
            {{-- Looping disini --}}

            @if ($resep ?? '')
            @forelse ($resep ?? '' as $recipe)
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" >
                <div class="card" style="background-color: #f7f7f7">
                    {{-- <img class="card-img-top" src="Foto" alt="Card Image"> --}}
                    <div class="card-body">
                        <h4 class="card-title mb-1 pb-3 text-4 font-weight-bold">{{ $recipe->Title}}</h4>
                        {{-- <button class="btn btn-xs btn-success"><i class="fe-heart"></i> {{ $recipe['_score']}} </button> --}}
                        <a href="{{ route('main.detail', [$recipe->id]) }}" class="btn btn-xs btn-success"> Lihat Resep Masakan</i></a>

                    </div>

                </div>
                <br>
            </div>
            @empty
                <p>No articles found</p>
            @endforelse
            @endif



        </div>
    </div>
</section>


@endsection
@section('script')
@endsection
