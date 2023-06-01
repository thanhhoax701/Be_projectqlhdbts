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
            <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                <div class="container-fluid justify-content-start">
                    <button type="button" id="sidebarCollapse" class="btn btn-secondary m-2 hidden-mobile">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <!-- page show in mobile -->
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto m-2 hidden-window" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <nav aria-label="breadcrumb " style="height:25px">
                        <!-- <ol class="breadcrumb ">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Trang chủ</a></li>
                            <li class="breadcrumb-item active"><a href="#">Hợp đồng</a></li>
                        </ol> -->
                        @include('partials.common.breadcrumb')
                    </nav>
                    <!-- menu in mobile -->
                    @include('partials.common.mobile-menu')
                </div>
            </nav>

            <!-- Content -->
            <div class="container col-md-5 mt-2">
                <div class="alert alert-primary">
                    <form>
                        <div class="row justify-content-center">
                            <h5 class="text-center" id="side12">CẬP NHẬT HỢP ĐỒNG</h5>
                        </div>
                        <div class="mb-3 text-left">
                            <label class="form-label">Tên tài khoản
                                <span id="colorIcon">*</span>
                            </label>
                            <input class="form-control" type="text" placeholder="Vui lòng nhập tên tài khoản">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Số tài khoản
                                <span id="colorIcon">*</span>
                            </label>
                            <input class="form-control" type="text" placeholder="Vui lòng nhập số tài khoản">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tên ngân hàng
                                <span id="colorIcon">*</span>
                            </label>
                            <input class="form-control" type="text" placeholder="Vui lòng nhập tên ngân hàng">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tên trạm
                                <span id="colorIcon">*</span>
                            </label>
                            <input class="form-control" type="text" placeholder="Vui lòng nhập tên trạm">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Giá
                                <span id="colorIcon">*</span>
                            </label>
                            <input class="form-control" type="text" placeholder="Vui lòng nhập giá">
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-success col-md-5" id="side123">Cập nhật</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end body -->
</div>
@endsection

@section('JS')

@endsection