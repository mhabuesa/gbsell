@push('title')
    <title>Add Coupon | GBSell - eCommerce Solution </title>
@endpush
@push('style')
    <link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/dropzone/min/dropzone.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush
@extends('merchant.layout.app')
@section('content')
        <div class="content content-boxed">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Add Coupon</h3>
                    <div class="block-options">
                        <div class="block-options-item">
                            <a href="{{ route('coupon.index') }}" class="btn btn-sm btn-primary"> <i
                                    class="fa fa-arrow-left"></i> Back to List</a>
                        </div>
                    </div>
                </div>

                <div id="cod_field" class="row justify-content-center mt-3">
                    <div class="col-md-10 col-lg-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action=" {{ route('coupon.store') }} " method="POST">
                                    @csrf
                                    <div class="mb-2">
                                        <label class="form-label" for="coupon_code">Cupon Code</label>
                                        <input type="text" class="form-control" id="coupon_code" name="coupon_code"
                                            required placeholder="Enter Coupon Code">
                                        @error('coupon_code')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="mb-2">
                                        <label class="form-label" for="discount_type">Discount Type</label>
                                        <select name="discount_type" id="discount_type" class="form-select" required>
                                            <option value="">Select Discount Type</option>
                                            <option value="percentage">Percentage</option>
                                            <option value="flat">Flat</option>
                                        </select>
                                        @error('discount_type')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="mb-2">
                                        <label class="form-label" for="discount">Discount</label>
                                        <input type="text" class="form-control" id="discount" name="discount" required
                                            placeholder="Enter Discount">
                                        @error('discount')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="mb-2">
                                        <label class="form-label" for="min_amount">Minimum Amount <small
                                                class="text-muted">(Optional)</small></label>
                                        <input type="text" class="form-control" id="min_amount" name="min_amount"
                                            placeholder="Minimum order amount (e.g., 500)">
                                    </div>

                                    <div class="mb-2">
                                        <label class="form-label" for="quantity">Quantity</label>
                                        <input type="number" class="form-control" id="quantity" name="quantity" required
                                            placeholder="Enter Quantity">
                                        @error('quantity')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label" for="date">Expire Date</label>
                                        <input type="date" class="form-control" id="date" name="expire_date"
                                            placeholder="Expire Date" required>
                                        @error('expire_date')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-check form-switch mb-3">
                                        <label for="status">Status</label>
                                        <input class="form-check-input" checked type="checkbox" name="status"
                                            id="status">
                                    </div>

                                    <div class="mt-5">
                                        <button type="submit" class="btn btn-alt-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            flatpickr("#date", {
                dateFormat: "d/m/Y",
                minDate: "today",
            });
        });
    </script>
@endpush
