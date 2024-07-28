@extends('layout.admin')
@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Danh sách danh mục</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Trang Chủ</a>
                </li>
                <li class="active">
                    <strong>Quản lý Danh Mục</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight ecommerce">


        <div class="ibox-content m-b-sm border-bottom">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="product_name">Tên danh mục</label>
                        <input type="text" id="product_name" name="product_name" value="" placeholder="Nập tên danh mục"
                               class="form-control">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label class="control-label" for="price">Giá</label>
                        <input type="text" id="price" name="price" value="" placeholder="Nhập giá" class="form-control">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label class="control-label" for="quantity">Số lượng</label>
                        <input type="text" id="quantity" name="quantity" value="" placeholder="Nhập số lượng"
                               class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="status">Trạng thái</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1" selected>Đã bật</option>
                            <option value="0">Tàn tật</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-content">

                        @if(session('success'))
                            <div class="alert alert-success alert-dismissable fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismissable="alert" aria-label=""></button>
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                            <th>STT</th>
                            <th>Hình Ảnh</th>
                            <th>Tên Danh Mục</th>
                            <th>Trạng Thái</th>
                            <th>Hành Động</th>
                            </thead>
                            <tbody>
                            @foreach($categories as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td><img src="{{ Storage::url($item->image) }}" width="50px" alt="Đây là ảnh"></td>
                                    <td>{{ $item->name }}</td>
                                    <td>

                                        <span
                                            class="{{ $item->is_type == true ? 'btn btn-primary' : 'btn btn-danger' }}">{{ $item->is_type == true ? 'Hiển thị' : 'Ẩn' }}</span>
                                    </td>
                                    <td>
                                        <a class="btn btn-warning"
                                           href="{{ route('admins.category.edit', $item->id) }}">Sửa</a>
                                        <form action="{{ route('admins.category.destroy', $item->id) }}" method="post"
                                              style="display: inline-block;">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
