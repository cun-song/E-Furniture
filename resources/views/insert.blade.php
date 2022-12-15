@extends('partial.index')
@section('container')
@include('partial.navbar')
    <div class="container bginsert d-flex flex-column justify-content-center align-items-center">
        <h1 class="mb-5 judul-halaman">Insert</h1>
        <div class="bg-light w-75 h-75 rounded-5 shadow-lg d-flex">
            <div class="w-50 p-5 position-relative">
                <form action="/insert" method="post" class="mt-4" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-3 item-insert">
                        <label for="productName">Nama Produk</label>
                        <input type="text" name="productName" class="form-control @error('productName') is-invalid @enderror" value="{{old('productName')}}" required>
                        @error('productName')
                        <div class="invalid-feedback">
                            <p>{{$message}}</p>
                        </div>
                        @enderror
                    </div>
                    <div class="mt-3 item-insert">
                        <label for="productDes">Deskripsi</label>
                        <textarea rows="6" name="productDes" class="form-control  @error('productDes') is-invalid @enderror" value="{{old('productDes')}}" required></textarea>
                        @error('productDes')
                        <div class="invalid-feedback">
                            <p>{{$message}}</p>
                        </div>
                        @enderror
                    </div>
                    <div class="mt-3 item-insert d-flex">
                        <label for="qty">Qty </label>
                        <input type="number" name="qty" class="ms-3 form-control me-2 i-angka  @error('qty') is-invalid @enderror" value="{{old('qty')}}" required>
                        @error('qty')
                        <div class="invalid-feedback">
                            <p>{{$message}}</p>
                        </div>
                        @enderror
                    </div>
                    <div class="mt-3 item-insert d-flex">
                        <label for="image">Gambar </label>
                        <input type="file" name="image" id="insertImage" class="ms-3 form-control me-2  @error('image') is-invalid @enderror" value="{{old('image')}}" required>
                        @error('image')
                        <div class="invalid-feedback">
                            <p>{{$message}}</p>
                        </div>
                        @enderror
                    </div>
                    <div class="mt-3 item-insert d-flex">
                        <label for="price" >Harga </label>
                        <input type="number" name="price" class="ms-3 form-control i-angka me-2  @error('price') is-invalid @enderror" value="{{old('price')}}" required>
                        @error('price')
                        <div class="invalid-feedback">
                            <p>{{$message}}</p>
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="position-absolute btn btn-insert px-4 py-2 rounded-4" value="Insert">Insert</button>
                </form>
            </div>
            <div class="w-50 h-100 bg-secondary rounded-5 rounded-start">
                <img id="preview-image-before-upload" src="" class="image-preview rounded-5 rounded-start">
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function (e) {


           $('#insertImage').change(function(){

            let reader = new FileReader();

            reader.onload = (e) => {

              $('#preview-image-before-upload').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);

           });

        });

    </script>
@endsection
