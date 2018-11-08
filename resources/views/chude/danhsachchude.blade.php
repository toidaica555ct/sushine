@extends('backend.layouts.index') 
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           Danh sách chủ đề
            <small>Chi tiết</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="#">Danh mục</a></li>
            <li class="active">Danh sách chủ đề</li>
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
                                    <th>Mã chủ đề</th>
                                    <th>Tên chủ đề</th>
                                    <th>Ngày tạo mới</th>
                                    <th>Ngày cập nhật</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($danhsachchude as $chude)
                                <tr>
                                    <td>{{$chude->cd_ma}}</td>
                                    <td>{{$chude->cd_ten}}</td>
                                    <td>{{\Carbon\Carbon::parse($chude->cd_taoMoi)->toDateString()}}</td>
                                    <td>{{$chude->cd_capNhat}}</td>
                                    <td>{{$chude->cd_trangthai}}</td>
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