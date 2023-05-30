@extends('layouts.app')


@section('page-title', $title)

@section('message')
@include('partials.messages')
@endsection

@section('content')
<div class="content-main">
  <!-- start search -->
  <div class="content-search">
    <div class="d-flex align-items-center justify-content-center flex-column ">
      <form class="form-search">
        <input type="search" placeholder="Search..." class="btn-submit">
        <button type="submit" class="bt-search">Search</button>
      </form>
    </div>
  </div>
  <!-- end search  -->
  <!--  start slide bar  -->
  <div class="wrapper">
    <!-- Sidebar  -->
<<<<<<< HEAD
    <nav id="sidebar">
      <ul class="list-unstyled components">
        <li class="active">
          <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Trang chủ</a>
        </li>
        <li>
          <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Trang</a>
          <ul class="collapse list-unstyled" id="pageSubmenu">
            <li>
              <a href="hopdong">Hợp Đồng</a>
            </li>
            <li>
              <a href="tram">Trạm</a>
            </li>
            <li>
              <a href="cosohatang">Cơ Sở Hạ Tầng</a>
            </li>
            <li>
              <a href="taikhoan">Tài Khoản</a>
            </li>
            <li>
              <a href="thongke">Thống Kê</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">Hỗ trợ</a>
        </li>
        <li>
          <a href="#">Liên hệ</a>
        </li>
        <li>
          <a href="#">Giới thiệu</a>
        </li>
      </ul>
      <div class="d-flex justify-content-end btn-logout m-3">
        <a href="{{route('logout')}}">
          <div class="input-group">
            <input type="button" class="form-control btn-sm btn-light" value="Đăng xuất">
            <span class="input-group-text">
              <i class="fa fa-arrow-left"></i>
            </span>
          </div>
        </a>
      </div>
    </nav>
=======
    @include('partials.common.slide-bar')

>>>>>>> 3b80a13976da1ffe7754551dfa5d31c893561dd2
    <!-- Page Content  -->
    <div id="content">
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
            <ol class="breadcrumb ">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>

            </ol>
          </nav>
          <!-- page show in mobile -->

          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <div class="hidden-window show-mobile">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Page</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Page</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Page</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Page</a>
                </li>
              </ul>
            </div>
          </div>

        </div>
      </nav>

      <div class="container text-center p-2">
        <div class="row align-items-center gx-2  row-item-home">
          <div class="col-6 col-md-4 rounded-3 border border-dark">
            <div class="item-home d-flex align-items-center justify-content-center">
              <div>
                <i class="fas fa-broadcast-tower"></i>
                <h4>Trạm</h4>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 rounded-3 border border-dark">
            <div class="item-home d-flex align-items-center justify-content-center">
              <div>
                <i class="fas fa-file-alt"></i>
                <h4>Hợp đồng</h4>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 rounded-3 border border-dark">
            <div class="item-home d-flex align-items-center justify-content-center">
              <div>
                <i class="fas fa-building"></i>
                <h4>Cơ sở hạ tầng</h4>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-4 rounded-3 border border-dark">
            <div class="item-home d-flex align-items-center justify-content-center">
              <div>
                <i class="fas fa-users"></i>
                <h4>Tài khoản</h4>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 rounded-3 border border-dark">
            <div class="item-home d-flex align-items-center justify-content-center">
              <div>
                <i class="fas fa-chart-line"></i>
                <h4>Thống kê</h4>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 rounded-3 border border-dark">
            <div class="item-home d-flex align-items-center justify-content-center">
              <div>
                <i class="fas fa-broadcast-tower"></i>
                <h4>Giới thiệu</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection