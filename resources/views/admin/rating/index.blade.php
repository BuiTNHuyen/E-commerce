@extends('layouts.app_master_admin')
@section('content')
<style type="text/css">
    .ratings span i {
        color: #eff0f5;
    }
    .ratings span.active i {
        color: #faca51;
    }
</style>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Quản lý đánh giá, review sản phẩm</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{  route('admin.rating.index') }}"> Đánh giá</a></li>
            <li class="active"> Danh sách </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <div class="box-body">
                   <div class="col-md-12">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th style="width: 10px">STT</th>
                                    {{-- <th style="width: 10px">ID</th> --}}
                                    <th>Tên sản phẩm</th>
                                    <th>Tên khách hàng</th>
                                    <th>Rating</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                                @if (isset($ratings))
                                    @foreach($ratings as $key => $rating)
                                        <tr>
                                            <td>{{ (($ratings->currentPage() - 1) * $ratings->perPage()) + ( $key + 1)  }}</td>
                                            {{-- <td>{{ $rating->id }}</td> --}}
                                            <td>{{ $rating->product->pro_name ?? "[N\A]" }}</td>
                                            <td>{{ $rating->user->name ?? "[N\A]" }}</td>
                                            <td>
                                                <div class="ratings">
                                                    @for($i = 1 ; $i <= 5 ; $i ++)
                                                        <span class="{{  $i <= $rating->r_number ? 'active' : '' }}"><i class="fa fa-star"></i></span>
                                                    @endfor
                                                </div>
                                            </td>
                                            <td>{{ $rating->created_at }}</td>
                                            <td>
                                                <a href="{{  route('admin.rating.delete', $rating->id) }}" class="btn btn-xs btn-danger js-delete-confirm"><i class="fa fa-trash"></i> Delete</a>
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
                    {!! $ratings->links() !!}
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
    </section>
    <!-- /.content -->
@endsection