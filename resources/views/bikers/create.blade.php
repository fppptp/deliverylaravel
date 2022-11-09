@extends('layouts.app')
@section('content')
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto ">
                <!-- Navbar Search -->

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-toggle">{{ Auth::user()->name }}</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">

                        <!-- Level two dropdown-->
                        <li>
                            <a href="{{ route('logout') }}" class="dropdown-item dropdown-footer"
                                onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">ออกจากระบบ</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('dashboard') }}" class="brand-link {{ request()->routeIs('') ? 'active' : '' }}">
                <img src="../../dist/img/delivery_logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">ระบบสั่งงานพนักงาน<br>ขับรถมอเตอรไซค์</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="ค้นหาข้อมูล"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <hr class="sidebar-divider my-1">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                                               with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    จัดส่งพัสดุและเอกสาร
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('services.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ข้อมูลการจัดส่ง</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <hr class="sidebar-divider my-1">
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    พนักงาน
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('bikers.index') }}"
                                        class="nav-link active {{ request()->routeIs('') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ข้อมูลคนขับรถ</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <hr class="sidebar-divider my-1">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    คู่มือการใช้งาน
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('doctypes.index') }}"
                                        class="nav-link {{ request()->routeIs('') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>สถานะเอกสาร</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-xl-left">
                                <li class="breadcrumb-item active">ข้อมูลพนักงาน</a></li>
                                <li class="breadcrumb-item active">พนักงานขับรถมอไซค์</li>
                                <li class="breadcrumb-item">เพิ่มพนักงานขับรถ</li>
                            </ol>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ route('bikers.index') }}"
                                class="d-none d-sm-inline-block btn btn-dark shadow-sm float-right"><i
                                    class="fas fa-add fa-sm text-white"></i>
                                กลับ/ยกเลิก</a>
                        </div>


                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <!-- /.card -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <center>กรอกข้อมูลพนักงานขับรถมอไซค์</center>
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">

                                    {{-- form --}}
                                    <form method="POST" action="{{ route('bikers.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            {{-- col 111 --}}
                                            <div class="col-md-4">
                                                <div class="form-group row mb-1">
                                                    <label for="image"
                                                        class="col-form-label text-md-right">รูปถ่ายพนักงานขับรถ</label>
                                                    <div class="col-md-12">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input"
                                                                id="image" name="image" placeholder="image">
                                                            <label class="custom-file-label"
                                                                for="customFile">เลือกรูปภาพ</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <center>
                                                    <label for="">รูปถ่ายที่เลือก</label><br>
                                                    <img id="blah" src="#" alt=""
                                                            width="300px" /><br>
                                                </center>
                                            </div>
                                            {{-- col 222 --}}
                                            <div class="col-md-8">
                                                <div class="form-group row mb-1">
                                                    <label for="fullname"
                                                        class="col-md-4 col-form-label text-md-right">ชื่อ-นามสกุล</label>

                                                    <div class="col-md-4">
                                                        <input id="fullname" type="text"
                                                            class="form-control @error('fullname') is-invalid @enderror"
                                                            name="fullname" value="{{ old('fullname') }}" required
                                                            autocomplete="fullname" autofocus>

                                                        @error('fullname')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-1">
                                                    <label for="idcard"
                                                        class="col-md-4 col-form-label text-md-right">เลขประจำตัวประชาชน</label>

                                                    <div class="col-md-4">
                                                        <input id="idcard" type="text"
                                                            class="form-control @error('idcard') is-invalid @enderror"
                                                            name="idcard" value="{{ old('idcard') }}" required
                                                            autocomplete="idcard" autofocus>
                                                        @error('idcard')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-1">
                                                    <label for="gender"
                                                        class="col-md-4 col-form-label text-md-right">เพศ</label>
                                                    <div class="col-md-3">
                                                        <select id="gender" name="gender" class="form-control"
                                                            aria-label="Default select example">
                                                            <option value="ชาย">ชาย</option>
                                                            <option value="หญิง">หญิง</option>
                                                        </select>
                                                        @error('gender')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-1">
                                                    <label for="birthday"
                                                        class="col-md-4 col-form-label text-md-right">วันเดือนปีเกิด</label>
                                                    <div class="col-md-3">
                                                        <input id="birthday" type="date"
                                                            class="form-control @error('birthday') is-invalid @enderror"
                                                            name="birthday" value="{{ old('birthday') }}" required
                                                            autocomplete="birthday" autofocus>
                                                        @error('birthday')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-1">
                                                    <label for="registrationplate"
                                                        class="col-md-4 col-form-label text-md-right">ทะเบียนรถที่ใช้</label>

                                                    <div class="col-md-3">
                                                        <input id="registrationplate" type="text"
                                                            class="form-control @error('registrationplate') is-invalid @enderror"
                                                            name="registrationplate"
                                                            value="{{ old('registrationplate') }}" required
                                                            autocomplete="registrationplate" autofocus>
                                                        @error('registrationplate')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-1">
                                                    <label for="brand"
                                                        class="col-md-4 col-form-label text-md-right">ยี่ห้อรถ</label>

                                                    <div class="col-md-3">
                                                        <input id="brand" type="text"
                                                            class="form-control @error('brand') is-invalid @enderror"
                                                            name="brand" value="{{ old('brand') }}" required
                                                            autocomplete="brand" autofocus>
                                                        @error('brand')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-1">
                                                    <label for="color"
                                                        class="col-md-4 col-form-label text-md-right">สีรถ</label>

                                                    <div class="col-md-3">
                                                        <input id="color" type="text"
                                                            class="form-control @error('color') is-invalid @enderror"
                                                            name="color" value="{{ old('color') }}" required
                                                            autocomplete="color" autofocus>
                                                        @error('color')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-4 offset-md-4">
                                                <button type="submit" class="btn btn-success">
                                                    ยืนยันและเพิ่มข้อมูล
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                    {{-- /.form --}}
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
@endsection
