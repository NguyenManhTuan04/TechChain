@extends('layout.admin')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Sửa danh mục</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Trang Chủ</a>
                </li>
                <li class="active">
                    <strong>Thêm Mới Danh Mục</strong>
                </li>
            </ol>
        </div>
        <div class="col-sm-8">
            <div class="title-action">
                <a href="" class="btn btn-primary">Tìm kiếm</a>
            </div>
        </div>
    </div>

    <div class="wrapper wrapper-content">
        <div class="ibox-content">
            <form action="{{ route('admins.category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="form-label" for="">Tên Danh Mục</label>
                    <input class="form-control" type="text" name="name" value="{{ $category->name }}">
                    @error('name')
                    <p>
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="">Hình Ảnh</label>
                    <input class="form-control" type="file" name="image" onchange="showImage(event)">
                    <img id="image_category" src="{{ Storage::url($category->image) }}" width="150px">
                </div>
                <div class="form-group">
                    <label class="form-label" for="">Trạng Thái</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_type" value="1" {{ $category->is_type === true ? 'checked' : '' }} > Hiển Thị
                        <input class="form-check-input" type="radio" name="is_type" value="0" {{ $category->is_type === false ? 'checked' : '' }}> Ẩn
                    </div>

                </div>
                <div class="form-group text-center">
                    <input class="btn btn-warning" type="submit" value="Cập nhật">
                </div>


            </form>
        </div>
    </div>
@endsection

<script>
    function showImage(event) {
        const image_category = document.getElementById('image_category');
        const file = event.target.files[0];
        const reader = new FileReader();
        reader.onload = function () {
            image_category.src = reader.result;
            image_category.style.display = 'block';
        }
        if(file) {
            reader.readAsDataURL(file);
        }
    }
</script>
