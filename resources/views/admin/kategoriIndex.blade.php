@extends('layouts.admin')

@section('konten')
    <div class="pagetitle">
        <h1>Kategori</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Kategori</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <a type="button" class="btn btn-primary mb-3" href="/kategori/create">Tambahkan Kategori</a>

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div>
                <div class="row">
                    @foreach ($categories as $category)
                        <!-- Sales Card -->
                        <div class="position-relative">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">{{ $category->name }}</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <img class="place_list_thumb" src="{{ asset('storage/' . $category->src) }}"
                                                style="width: 50px; height:50px">
                                        </div>
                                        <div class="ps-3">
                                            <span class="text-success small pt-1 fw-bold">{{ $category->price }}</span>
                                            <span class="text-muted small pt-1 fw-bold">/kg</span>
                                            <br>
                                            <span class="text-muted small pt-2 ps-1">{{ $category->description }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="position-absolute bottom-0 end-0 p-3">
                                    <a href="/kategori/{{ $category->id }}/edit" class="btn btn-secondary"><i
                                            class="bi bi-pencil"></i> Edit</a>
                                </div>
                            </div>
                        </div><!-- End Sales Card -->
                    @endforeach


                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>
@endsection
