@extends('layouts.app_master_admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Quản lý Slide</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{  route('admin.slide.index') }}"> Slide</a></li>
            <li class="active"> Danh sách </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <div class="box-header">
                    <h3 class="box-title"><a href="{{ route('admin.slide.create') }}" class="btn btn-primary">Thêm mới <i class="fa fa-plus"></i></a></h3>
               </div>
                <div class="box-body">
                   <div class="col-md-12">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th style="width: 10px">STT</th>
                            
                                    <th>Tên</th>
                                    <th>Action</th>
                                </tr>
                                @if (isset($slides))
                                    @foreach($slides as $key => $slide)
                                        <tr>
                                            <td>{{ ($key + 1) }}</td>
                                            {{-- <td>{{ $slide->id }}</td> --}}
                                            <td>{{ $slide->sd_title }}</td>
                                           
                                            <td>
                                                <a href="{{ route('admin.slide.update', $slide->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Sửa</a>
                                                <a href="{{  route('admin.slide.delete', $slide->id) }}" class="btn btn-xs btn-danger js-delete-confirm"><i class="fa fa-trash"></i> Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    {{-- {!! $slides->links() !!} --}}
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
    </section>
    <!-- /.content -->
@endsection