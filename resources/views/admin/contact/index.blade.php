@extends('layouts.app_master_admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Quản lý liên hệ</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="">Contact</a></li>
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
                                    <th>Tên KH</th>
                                    <th>Email</th>
                                    <th>SĐT</th>
                                    <th>Nội dung</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                                @if (isset($contacts))
                                    @foreach($contacts as $key => $item)
                                        <tr>
                                            <td>{{ (($contacts->currentPage() - 1) * $contacts->perPage()) + ( $key + 1)  }}</td>
                                            {{-- <td>{{ $item->id }}</td> --}}
                                            <td>{{ $item->c_title }}</td>
                                            <td>{{ $item->c_email }}</td>
                                            <td>{{ $item->c_phone }}</td>
                                            <td>{{ $item->c_content }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>
                                                <a href="{{  route('admin.contact.delete', $item->id) }}" class="btn btn-xs btn-success js-delete-confirm"><i class="fa fa-trash"></i> Xong</a>
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
                    {!! $contacts->links() !!}
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
    </section>
    <!-- /.content -->
@endsection
