@push('title')
    <title>Category Add | GBSell - eCommerce Solution </title>
@endpush
@push('style')
    <link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/dropzone/min/dropzone.min.css">
@endpush
@extends('merchant.layout.app')
@section('content')
        <div class="content content-boxed">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Add Category</h3>
                    <div class="block-options">
                        <div class="block-options-item">
                          <a href="{{ route('category.index') }}" class="btn btn-sm btn-primary"> <i class="fa fa-arrow-left"></i> Back to List</a>
                        </div>
                      </div>
                </div>

                <div id="cod_field" class="row justify-content-center mt-3">
                    <div class="col-md-10 col-lg-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action=" {{ route('category.store') }} " method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-2">
                                        <label class="form-label" for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                        @error('name')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="email">Description</label>
                                        <textarea name="description" id="description" rows="3" class="form-control"></textarea>
                                        @error('description')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Category icon preview</label>
                                        <div class="mb-4">
                                            <img width="70" id="image" src="https://placehold.co/50" alt="">
                                        </div>
                                        <div class="mb-4">
                                          <label for="icon" class="form-label">Choose a icon</label>
                                          <input class="form-control" id="icon" type="file" accept="image/*" name="image" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
                                          @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                          @enderror
                                        </div>
                                      </div>

                                    <div class="mt-4">
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
<Script>
     // Toggle Password Visibility for Redx Client Secret Field
     $('#togglePassword').on('click', function () {
            const redx_app_secretInput = $('#password');
            const icon = $(this);

            // Toggle the type attribute
            if (redx_app_secretInput.attr('type') === 'password') {
                redx_app_secretInput.attr('type', 'text');
                icon.removeClass('fa-eye-slash').addClass('fa-eye');
            } else {
                redx_app_secretInput.attr('type', 'password');
                icon.removeClass('fa-eye').addClass('fa-eye-slash');
            }
        });

        // Toggle Password Visibility for Steadfast Client Secret Field
        $('#toggleConfirmPassword').on('click', function () {
            const steadfast_app_secretInput = $('#password_confirmation');
            const icon = $(this);

            // Toggle the type attribute
            if (steadfast_app_secretInput.attr('type') === 'password') {
                steadfast_app_secretInput.attr('type', 'text');
                icon.removeClass('fa-eye-slash').addClass('fa-eye');
            } else {
                steadfast_app_secretInput.attr('type', 'password');
                icon.removeClass('fa-eye').addClass('fa-eye-slash');
            }
        });
</Script>
@endpush

