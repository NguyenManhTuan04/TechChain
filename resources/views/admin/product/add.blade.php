@extends('layout.admin')
@section('custom_css')
    <link href="{{ asset('assets/admin/css/plugins/dropzone/basic.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/admin/css/plugins/dropzone/dropzone.css') }}" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Thêm mới sản phẩm</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Trang Chủ</a>
                </li>
                <li class="active">
                    <strong>Thêm Mới Sản Phẩm</strong>
                </li>
            </ol>
        </div>
        <div class="col-sm-8">
            <div class="title-action">
                <a href="{{ route('admins.product.index') }}" class="btn btn-primary">Danh Sách</a>
            </div>
        </div>
    </div>

    <div class="wrapper wrapper-content">
        <div class="ibox-content">
            <form action="{{ route('admins.product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="panel-body">
                    <fieldset class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Mã sản phẩm:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('sku') is-invalid @enderror"
                                       value="{{ old('sku') }}" placeholder="Nhập mã sản phẩm" name="sku"></div>
                            @error('sku')
                            <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tên sản phẩm:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                       value="{{ old('name') }}" placeholder="Nhập tên sản phẩm" name="name"></div>
                            @error('name')
                            <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Giá sản phẩm:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('price') is-invalid @enderror"
                                       value="{{ old('price') }}" placeholder="Nhập giá sản phẩm" name="price"></div>
                            @error('price')
                            <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Giá Khuyến mãi:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('discount_price') is-invalid @enderror"
                                       value="{{ old('discount_price') }}" placeholder="Nhập giá khuyến mãi"
                                       name="discount_price">
                            </div>
                            @error('discount_price')
                            <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Danh mục:</label>
                            <div class="col-sm-10">
                                <select class="form-control @error('category_id') is-invalid @enderror"
                                        name="category_id">
                                    <option value="">Chọn danh mục</option>
                                    @foreach($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <p>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Số lượng sản phẩm:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('quantity') is-invalid @enderror"
                                       value="{{ old('quantity') }}" placeholder="Nhập số lượng sản phẩm"
                                       name="quantity">
                            </div>
                            @error('quantity')
                            <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Mô tả ngắn:</label>
                            <div class="col-sm-10">
                                <textarea id="" cols="30" rows="5"
                                          class="form-control @error('short_description') is-invalid @enderror"
                                          placeholder="Nhập mô tả ngắn"
                                          name="short_description">{{ old('short_description') }}</textarea>
                            </div>
                            @error('short_description')
                            <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Ngày nhập:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control @error('date') is-invalid @enderror"
                                       value="{{ old('date') }}" name="date">
                            </div>
                            @error('date')
                            <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Chọn khác: </label>
                            <div class="col-sm-10">
                                <label class="checkbox-inline text-success">
                                    <input type="checkbox" value="option1" id="inlineCheckbox1"> Mới
                                </label>
                                <label class="checkbox-inline text-danger">
                                    <input class="checkbox-danger" type="checkbox" value="option2" id="inlineCheckbox2">
                                    Hot
                                </label>
                                <label class="checkbox-inline text-warning">
                                    <input type="checkbox" value="option3" id="inlineCheckbox3"> Deal
                                </label>
                                <label class="checkbox-inline text-info">
                                    <input type="checkbox" value="option3" id="inlineCheckbox4"> Hiện trang chủ
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Mô tả chi tiết: </label>

                            <div class="col-sm-10">
                                <textarea class="" id="summernote" name="description"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Ảnh đại diện:</label>
                            <div class="col-sm-10">
                                        <input type="file" class="form-control dropzone" onchange="showImage(event)" name="image" multiple>
                                <img id="image_product" src="" width="150px" style="display: none;">
                                @error('image')
                                <p>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12 text-center"><input type="submit" class="btn btn-primary"
                                                                      value="Thêm mới"></div>
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')

    <script src="{{ asset('assets/admin/js/plugins/dropzone/dropzone.js') }}"></script>

    {{--    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $('#summernote').summernote({
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });


        function showImage(event) {
            const image_category = document.getElementById('image_product');
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = function () {
                image_category.src = reader.result;
                image_category.style.display = 'block';
            }
            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>

@endsection

