@extends('layouts') 
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           Danh sách sản phẩm
            <small>Chi tiết</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="#">Danh mục</a></li>
            <li class="active">Danh sách sản phẩm</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Table With Full Features</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Mã loại</th>
                                    <th>Giá gốc</th>
                                    <th>Giá bán</th>
                                    <th>Hình</th>
                                    <th>Thông tin</th>
                                    <th>Đánh giá</th>
                                    <th>Ngày tạo mới</th>
                                    <th>Ngày cập nhật</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sp_all as $all)
                                <tr>
                                    <td>{{$all->sp_ma}}</td>
                                    <td>{{$all->sp_ten}}</td>
                                    <td>{{$all->l_sp_ma}}</td>
                                    <td>{{$all->sp_giaGoc}}</td>
                                    <td>{{$all->sp_giaBan}}</td>
                                    <td>{{$all->sp_hinh}}</td>
                                    <td>{{$all->sp_thongTin}}</td>
                                    <td>{{$all->sp_danhGia}}</td>
                                    <td>{{\Carbon\Carbon::parse($all->sp_taoMoi)->toDateString()}}</td>
                                    <td>{{\Carbon\Carbon::parse($all->sp_capNhat)->toDateString()}}</td>
                                    <td>{{$all->sp_trangthai}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
@endsection