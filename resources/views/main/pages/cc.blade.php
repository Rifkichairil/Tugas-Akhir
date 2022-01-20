@extends('main.app')

@section('style')
        <!-- Custom box css -->
        <link href="{{asset('assets/libs/custombox/custombox.min.css')}}" rel="stylesheet">
@endsection
@section('content')

<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md" style="background-image: url({{asset('assets/img/bg_header.jpg')}});  background-size: cover;">

    <div class="container">
        <div class="row" style="padding-top: 20px">
            <div class="col-md-12 align-self-center p-static order-2 text-center">

                <h1 class="text-dark"><strong>Selamat Datang !</strong></h1>
                {{-- Form Searching ' q ' --}}
                <div class="container py-4 ">
                    <section>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
{{--

@if ($hits['hits'] ?? '')
    <p>title : {{$hits['hits']['_source']['Title']}}</p>
@else
<p>Data Not Found</p>
@endif --}}

{{-- @if ($hits['hits'] ?? '')
    @forelse ($hits['hits'] ?? '' as $recipe)
    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" >
        <div class="card" style="background-color: #f7f7f7">
            <div class="card-body">
                <h4 class="card-title mb-1 pb-3 text-4 font-weight-bold">{{ $recipe['_source']['Title']}}</h4>
                <h4 type="" class=" text-4 font-weight-bold">Kemiripan
                    <span class="btn btn-outline-dark btn-rounded waves-effect waves-light">
                        {{number_format($recipe['_score'], 2) }}
                    </span>
                </h4>
                <a href="{{ route('main.detail', [$recipe['_source']['id']]) }}" class="btn btn-xs btn-success"> Lihat Detail</i></a>

            </div>

        </div>
        <br>
    </div>
    @empty
        <p>No articles found</p>
    @endforelse
@endif --}}
{{--
<section>
    <h2 class="page-title text-center">{{$resep->Title}}</h2>
</section>

<section>
    <div class="container py-2">
        <div class="row mb-2 pb-2">
                <div class="col-md-6 col-lg-6 mb-5 mb-lg-0" >
                        <div class="card-body">
                            <h4 class="card-title mb-1 pb-3 text-4 font-weight-bold text-center">Bahan Masakan</h4>
                            <ul>
                                @foreach (explode('--', $resep->Ingredients) as $ing)
                                <li> {{ $ing }} </li>
                                @endforeach
                            </ul>
                        </div>
                    <br>
                </div>
                <div class="col-md-6 col-lg-6 mb-5 mb-lg-0" >
                        <div class="card-body">
                            <h4 class="card-title mb-1 pb-3 text-4 font-weight-bold text-center">Langkah Pembuatan</h4>
                            <ol>
                                @foreach (explode('--', $resep->Steps) as $step)
                                <li>{{ $step }}</li>
                                @endforeach
                            </ol>
                        </div>
                    <br>
                </div>
        </div>
    </div>
</section> --}}

{{-- <section>
    <div class="container py-2" style="text-align:right;">
        <a href="{{ route('main.invoicepdf', $resep->id)}}" class="btn btn-primary" target="_blank"><span class="btn-label"><i class="mdi mdi-file-download"></i></span>Unduh Resep Masakan</a>
        <form action="{{route('rating.store', $resep->id)}}" method="POST" enctype="multipart/form-data" class="mt-1">
            {{ csrf_field() }}
        <button type="submit" class="btn btn-xs btn-danger"><i class="fe-heart"></i> {{$rating}}</button>
        </form>
    </div>
</section> --}}
{{--
<section>
    <hr>
    <div class="container py-2">
        <div class="row mb-2 pb-2">
            <div class="col-md-12 col-lg-12 mb-5 mb-lg-0" >
                <div class="card" style="background-color: #f7f7f7">
                    <div class="card-body">
                        <form action="{{route('reply.store', $resep->id)}}" method="POST" enctype="multipart/form-data" >
                            {{ csrf_field() }}
                            <div class="form-group mb-3">
                                <label for="name">Nama</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Masukan Nama" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="comment">Text area</label>
                                <textarea class="form-control" name="comment" id="comment" rows="5" placeholder="Beri Komentar" required></textarea>
                            </div>

                            <div class="form-group mb-3">
                            <button type="submit" class="btn btn-success btn-xs">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
</section> --}}
{{--
<section>
    <div class="container py-2">
        <div class="row mb-2 pb-2">
            <div class="col-md-12 col-lg-12 mb-5 mb-lg-0" >
                <div class="border border-light p-2 mb-3">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="m-0">nama</h5>
                        </div>
                    </div>
                    <p>Komen</p>
                    <hr>
                    <p>reply this comment</p>
                </div>
            </div>
        </div>
    </div>
</section> --}}



@endsection

@section('script')

@endsection
