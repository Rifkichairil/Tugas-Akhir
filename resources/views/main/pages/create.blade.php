@extends('main.app')

@section('style')
    <>
@endsection

@section('content')

<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md" style="background-image: url({{asset('assets/img/bg_header.jpg')}});  background-size: cover;">

    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center p-static order-2 text-center">

                <h1 class="text-dark"><strong>Masukan Resep Masakan</strong></h1>
                {{-- Form Searching ' q ' --}}
                <div class="container py-4 ">
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-2">
        <form action="{{route('main.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="Title" class="form-control" id="title" placeholder="Masukan Nama Resep Masakan" required>
            </div>
            <div class="form-group">
                <label for="Ingredients">Masukan Bahan Masakan</label>
                <textarea class="form-control" id="Ingredients" name="Ingredients" rows="3" required></textarea>
                <span class="badge badge-danger"> Pisahkan setiap langkah masakan dengan -- </span>

            </div>
            <div class="form-group">
                <label for="Steps">Masukan Langkah Masakan</label>
                <textarea class="form-control" id="Steps" name="Steps" rows="3" required></textarea>
                <span class="badge badge-danger"> Pisahkan setiap langkah masakan dengan -- </span>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-sm btn-success"> Simpan </button>
            </div>
        </form>
    </div>
</section>
@endsection
@section('script')
@endsection
