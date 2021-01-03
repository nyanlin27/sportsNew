@extends('backend_master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('items.index') }}" class="btn btn-danger btn-sm my-2 float-right"> <i class="mdi mdi-chevron-double-left menu-icon
                        "></i> Back</a>
                <h4 class="card-title">Creat Items</h4>
                <p class="card-description">
                    creat items
                </p>

                <form class="forms-sample" action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Items Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"id="exampleInputName1" placeholder="items name">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Items Price</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}"id="exampleInputName1" placeholder="items price">
                            @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea type="text" name="description"  id="exampleTextarea1" rows="20" placeholder="description" class="form-control @error('description') is-invalid @enderror" value=" ">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Upload</label>
                        <input type="file" name="photo" class="file-upload-default @error('photo') is-invalid @enderror" placeholder="Enter Post Photo" name="photo" value="{{ old('photo') }}">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                        @error('photo')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content-wrapper ends -->

@endsection
