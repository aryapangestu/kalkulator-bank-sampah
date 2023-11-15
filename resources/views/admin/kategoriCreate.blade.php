@extends('layouts.admin')

@section('konten')
    <div class="pagetitle">
        <h1>{{ $title }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div>
                <!-- General Form Elements -->
                <form action="/kategori/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                required value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control @error('description') is-invalid @enderror" style="height: 100px" name="description"
                                required>{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Image Upload</label>
                        <div class="col-sm-10">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Image Upload</label>
                            <div class="col-sm-10">
                                <input class="form-control @error('formFile') is-invalid @enderror" type="file"
                                    accept="image/jpg, image/jpeg" id="src" name="src"
                                    onchange="previewImg(this);" required value=" {{ old('scr') }}"></br>
                                <div id="preview"></div>
                                @error('src')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Harga per Kilogram</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control @error('price') is-invalid @enderror"
                                name="price" required value="{{ old('price') }}">
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Submit Button</label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit Form</button>
                        </div>
                    </div>

            </form><!-- End General Form Elements -->
        </div><!-- End Left side columns -->

    </div>
</section>
@endsection
