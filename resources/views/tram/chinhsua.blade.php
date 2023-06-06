@extends('layouts.app')


@section('page-title', $title)

@section('message')
@include('partials.messages')
@endsection

@section('content')
<div class="content-main">
    <!-- start search -->
    @include('partials.common.search')
    <!-- end search  -->

    <!-- start body -->
    <div class="wrapper">
        <!-- Sidebar  -->
        @include('partials.common.slide-bar')

        <!-- Page Content  -->
        <div id="content">
            <!-- Tieu de -->
            @include('partials.common.tieude')

            <!-- Content -->
            <div class="container col-md-5 mt-2">
                <div class="alert alert-primary">
                    @foreach($suatram as $sua)
                    <form method="post" action="{{route('tram-update', $sua->T_MaTram)}}">
                        @csrf
                        <div class="row justify-content-center">
                            <h5 class="text-center" id="side12">CHỈNH SỬA TRẠM</h5>
                        </div>
                        <div class="mb-3 text-left">
                            <label class="form-label">Mã trạm</label>
                            <label name="T_MaTram" class="form-control">{{$sua->T_MaTram}}</label>
                            <!-- <input class="form-control" type="text" placeholder="Vui lòng nhập mã trạm"> -->
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tên trạm
                                <span id="colorIcon">*</span>
                            </label>
                            <input value="{{$sua->T_TenTram}}" name="T_TenTram" class="form-control" type="text" placeholder="Vui lòng nhập tên trạm">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Địa chỉ
                                <span id="colorIcon">*</span>
                            </label>
                            <input value="{{$sua->T_DiaChiTram}}" name="T_DiaChiTram" class="form-control" type="text" placeholder="Vui lòng nhập địa chỉ">
                        </div>
                        <div class="mb-3 text-left">
                            <label class="form-label">Tình trạng</label>
                            <select class="form-control" aria-label="Default select example" id="T_TinhTrang" name="T_TinhTrang">
                                <option value="1">Hoạt động</option>
                                <option value="0">Ngưng hoạt động</option>
                            </select>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-success col-md-5" id="side123">Chỉnh sửa</button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- end body -->
</div>
@endsection

@section('JS')
@endsection