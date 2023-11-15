@extends('layouts.user')

@section('konten')
    <div class="pagetitle">
        <h1>Input Sampah</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Input</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    @if (session()->has('alert'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('alert') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <section class="section dashboard">
        <form method="POST" action="/pages-input">
            @csrf
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-6">
                    <div class="row">
                        @foreach ($categories as $category)
                            <!--  Card -->
                            <div class="card info-card">
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img class="place_list_thumb" src="{{ asset('storage/' . $category->src) }}"
                                            style="width: 50px; height:50px">
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $category->name }}</h6>
                                        <span class="text-success small pt-1 fw-bold">{{ $category->price }}/kg</span>
                                    </div>
                                </div>
                                <div class="filter d-flex justify-content-end">
                                    <i class="bi bi-dash align-self-center"></i>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control text-center quantity-input"
                                            name="{{ $category->name }}" value="0" pattern="\d+">
                                    </div>
                                    <i class="bi bi-plus align-self-center"></i>
                                </div>
                            </div>
                            <!-- End Card -->
                        @endforeach
                    </div>

                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-6">
                    <div class="row">

                        <!-- Total harga Card -->
                        <div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Total harga</h5>
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="text" class="form-control" name="totalPrice" id="totalPrice"
                                            value="0" readonly>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Total harga Card -->

                    </div>
                </div><!-- End Right side columns -->

            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary" id="resetBtn">Reset</button>
            </div>
        </form>
    </section>

    <script>
        $(document).ready(function() {
            // Get the input element by class and data-type
            var quantityInputs = $('.quantity-input');

            // Handle the plus icon click
            $('.bi-plus').on('click', function() {
                var currentCard = $(this).closest('.info-card');
                var quantityInput = currentCard.find('.quantity-input');
                var currentValue = parseInt(quantityInput.val());
                if (!isNaN(currentValue)) {
                    quantityInput.val(currentValue + 1);
                } else {
                    quantityInput.val(1);
                }
            });

            // Handle the minus icon click
            $('.bi-dash').on('click', function() {
                var currentCard = $(this).closest('.info-card');
                var quantityInput = currentCard.find('.quantity-input');
                var currentValue = parseInt(quantityInput.val());
                if (!isNaN(currentValue) && currentValue > 0) {
                    quantityInput.val(currentValue - 1);
                } else {
                    quantityInput.val(0);
                }
            });
        });

        $(document).ready(function() {
            // Function to calculate total price
            function calculateTotalPrice() {
                var total = 0;

                // Iterate through each card with the quantity-input class
                $('.quantity-input').each(function() {
                    var quantity = parseInt($(this).val());
                    var pricePerKg = parseInt($(this).closest('.info-card').find(
                        '.text-success').text());

                    // Calculate the total price for each category
                    var categoryTotal = quantity * pricePerKg;

                    // Calculate the total price for each material
                    var materialTotal = quantity * pricePerKg;

                    // Add the category total to the overall total
                    total += categoryTotal;
                });

                // Update the total price in the card
                $('#totalPrice').val(total);
            }

            // Call the calculateTotalPrice function when the plus or minus icons are clicked
            $('.bi-plus, .bi-dash').on('click', function() {
                calculateTotalPrice();
            });

            // Initialize the total price on page load
            calculateTotalPrice();

            // Add an event listener to the reset button
            $('#resetBtn').on('click', function() {
                // Reset the quantity inputs
                $('.quantity-input').val(0);

                // Recalculate and reset the total price
                calculateTotalPrice();
            });
        });
    </script>
@endsection
