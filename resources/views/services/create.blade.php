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

                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    จัดส่งพัสดุและเอกสาร
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('services.index') }}"
                                        class="nav-link active {{ request()->routeIs('') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ข้อมูลการจัดส่ง</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <hr class="sidebar-divider my-1">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    พนักงาน
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('bikers.index') }}"
                                        class="nav-link {{ request()->routeIs('') ? 'active' : '' }}">
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
                                <li class="breadcrumb-item active">การจัดส่งพัสดุและเอกสาร</a></li>
                                <li class="breadcrumb-item active">ข้อมูลการจัดส่ง</li>
                                <li class="breadcrumb-item">เพิ่มการจัดส่ง</li>
                            </ol>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ route('services.index') }}"
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
                                <!-- /.card-header -->
                                <div class="card-body">

                                    {{-- form --}}
                                    <form method="POST" action="{{ route('services.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            {{-- col 111 --}}
                                            <div class="col-md-6">

                                                <div class="card card-info">
                                                    <div class="card-header">
                                                        <h5>ข้อมูลลูกค้าที่ใช้บริการ</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="form-group row mb-1">
                                                            <label for="customer_fullname"
                                                                class="col-md-3 col-form-label text-md-right">ชื่อลูกค้า</label>

                                                            <div class="col-md-6">
                                                                <input id="customer_fullname" type="text"
                                                                    class="form-control @error('customer_fullname') is-invalid @enderror"
                                                                    name="customer_fullname"
                                                                    value="{{ old('customer_fullname') }}" required
                                                                    autocomplete="customer_fullname" autofocus>

                                                                @error('customer_fullname')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row mb-1">
                                                            <label for="customer_phone"
                                                                class="col-md-3 col-form-label text-md-right">เบอร์โทร</label>

                                                            <div class="col-md-6">
                                                                <input id="customer_phone" type="text"
                                                                    class="form-control @error('customer_phone') is-invalid @enderror"
                                                                    name="customer_phone"
                                                                    value="{{ old('customer_phone') }}" required
                                                                    autocomplete="customer_phone" autofocus>

                                                                @error('customer_phone')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card card-info">
                                                    <div class="card-header">
                                                        <h5>ข้อมูลผู้ส่งต้นทาง</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="form-group row mb-1">
                                                            <label for="source_name"
                                                                class="col-md-3 col-form-label text-md-right">ชื่อผู้ส่ง</label>

                                                            <div class="col-md-6">
                                                                <input id="source_name" type="text"
                                                                    class="form-control @error('source_name') is-invalid @enderror"
                                                                    name="source_name" value="{{ old('source_name') }}"
                                                                    required autocomplete="source_name" autofocus>

                                                                @error('source_name')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row mb-1">
                                                            <label for="source_phone"
                                                                class="col-md-3 col-form-label text-md-right">เบอร์โทร</label>

                                                            <div class="col-md-6">
                                                                <input id="source_phone" type="text"
                                                                    class="form-control @error('source_phone') is-invalid @enderror"
                                                                    name="source_phone" value="{{ old('source_phone') }}"
                                                                    required autocomplete="source_phone" autofocus>

                                                                @error('source_phone')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row mb-1">
                                                            <label for="source_address"
                                                                class="col-md-3 col-form-label text-md-right">ที่อยู่ต้นทาง</label>

                                                            <div class="col-md-12">
                                                                <input id="source_address" type="text"
                                                                    class="form-control @error('source_address') is-invalid @enderror"
                                                                    name="source_address"
                                                                    value="{{ old('source_address') }}" required
                                                                    autocomplete="source_address" autofocus>

                                                                @error('source_address')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card card-info">
                                                    <div class="card-header">
                                                        <h5>ข้อมูลผู้รับปลายทาง</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="form-group row mb-1">
                                                            <label for="destination_name"
                                                                class="col-md-3 col-form-label text-md-right">ชื่อผู้รับ</label>

                                                            <div class="col-md-6">
                                                                <input id="destination_name" type="text"
                                                                    class="form-control @error('destination_name') is-invalid @enderror"
                                                                    name="destination_name"
                                                                    value="{{ old('destination_name') }}" required
                                                                    autocomplete="destination_name" autofocus>

                                                                @error('destination_name')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row mb-1">
                                                            <label for="destination_phone"
                                                                class="col-md-3 col-form-label text-md-right">เบอร์โทร</label>

                                                            <div class="col-md-6">
                                                                <input id="destination_phone" type="text"
                                                                    class="form-control @error('destination_phone') is-invalid @enderror"
                                                                    name="destination_phone"
                                                                    value="{{ old('destination_phone') }}" required
                                                                    autocomplete="destination_phone" autofocus>

                                                                @error('destination_phone')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row mb-1">
                                                            <label for="destination_address"
                                                                class="col-md-3 col-form-label text-md-right">ที่อยู่ปลายทาง</label>

                                                            <div class="col-md-12">
                                                                <input id="destination_address" type="text"
                                                                    class="form-control @error('destination_address') is-invalid @enderror"
                                                                    name="destination_address"
                                                                    value="{{ old('destination_address') }}" required
                                                                    autocomplete="destination_address" autofocus>

                                                                @error('destination_address')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- /.col 111 --}}

                                            {{-- col 222 --}}
                                            <div class="col-md-6">
                                                <div class="card card-info">
                                                    <div class="card-header">
                                                        <h5>ข้อมูลพัสดุ</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="form-group row mb-1">
                                                            <label for="parcel_type"
                                                                class="col-md-3 col-form-label text-md-right">ประเภท</label>
                                                            <div class="col-md-3">
                                                                <select id="parcel_type" name="parcel_type"
                                                                    class="form-control"
                                                                    aria-label="Default select example">
                                                                    <option value="พัสดุ">พัสดุ</option>
                                                                    <option value="เอกสาร">เอกสาร</option>
                                                                </select>
                                                                @error('parcel_type')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row mb-1">
                                                            <label for="parcel_weight"
                                                                class="col-md-3 col-form-label text-md-right">น้ำหนัก</label>

                                                            <div class="col-md-6">
                                                                <input id="parcel_weight" type="text"
                                                                    class="form-control @error('parcel_weight') is-invalid @enderror"
                                                                    name="parcel_weight"
                                                                    value="{{ old('parcel_weight') }}" required
                                                                    autocomplete="parcel_weight" autofocus>

                                                                @error('parcel_weight')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <label for="parcel_size"
                                                                class="col-md-2 col-form-label text-md-left">กิโลกรัม</label>
                                                        </div>

                                                        <div class="form-group row mb-1">
                                                            <label for="parcel_size"
                                                                class="col-md-3 col-form-label text-md-right">ขนาด</label>

                                                            <div class="col-md-6">
                                                                <input id="parcel_size" type="text"
                                                                    class="form-control @error('parcel_size') is-invalid @enderror"
                                                                    name="parcel_size" value="{{ old('parcel_size') }}"
                                                                    required autocomplete="parcel_size" autofocus>

                                                                @error('parcel_size')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <label for="parcel_size"
                                                                class="col-md-2 col-form-label text-md-left">เมตร</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card card-info">
                                                    <div class="card-header">
                                                        <h5>ข้อมูลอื่น ๆ </h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="form-group row mb-1">
                                                            <label for="date_pickup"
                                                                class="col-md-5 col-form-label text-md-right">วันและเวลาที่รับ</label>
                                                            <div class="col-md-4">
                                                                <input id="date_pickup" type="datetime-local"
                                                                    class="form-control @error('date_pickup') is-invalid @enderror"
                                                                    name="date_pickup" value="{{ old('date_pickup') }}"
                                                                    required autocomplete="date_pickup" autofocus>
                                                                @error('date_pickup')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row mb-1">
                                                            <label for="date_deliver"
                                                                class="col-md-5 col-form-label text-md-right">วันและเวลาที่ส่ง</label>
                                                            <div class="col-md-4">
                                                                <input id="date_deliver" type="datetime-local"
                                                                    class="form-control @error('date_deliver') is-invalid @enderror"
                                                                    name="date_deliver" value="{{ old('date_deliver') }}"
                                                                    required autocomplete="date_deliver" autofocus>
                                                                @error('date_deliver')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-1">
                                                            <label for="amount"
                                                                class="col-md-5 col-form-label text-md-right">ราคาค่าบริการรับและส่ง</label>

                                                            <div class="col-md-7">
                                                                <input id="amount" type="text"
                                                                    class="form-control @error('amount') is-invalid @enderror"
                                                                    name="amount" value="{{ old('amount') }}" required
                                                                    autocomplete="amount" autofocus>

                                                                @error('amount')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row mb-1">
                                                            <label for="pay_type"
                                                                class="col-md-5 col-form-label text-md-right">การเก็บเงิน</label>
                                                            <div class="col-md-7">
                                                                <select id="pay_type" name="pay_type"
                                                                    class="form-control"
                                                                    aria-label="Default select example">
                                                                    <option value="เก็บเงินต้นทาง">เก็บเงินต้นทาง</option>
                                                                    <option value="ปลายทาง">ปลายทาง</option>
                                                                </select>
                                                                @error('pay_type')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row mb-1">
                                                            <label for="biker_id"
                                                                class="col-md-5 col-form-label text-md-right">พนักงานขับมอเตอร์ไซค์</label>
                                                            <div class="col-md-7">
                                                                <select name="biker_id" class="form-control"
                                                                    aria-label="Default select example">
                                                                    <option selected>พนักงานขับมอเตอร์ไซค์</option>
                                                                    @foreach ($bikers as $biker)
                                                                        <option value="{{ $biker->id }}">รหัส
                                                                            {{ $biker->id }} :
                                                                            {{ $biker->fullname }}</option>
                                                                    @endforeach
                                                                </select>
                                                                @error('biker_id')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row mb-1">
                                                            <label for="doctype_id"
                                                                class="col-md-5 col-form-label text-md-right">สถานะเลขที่ส่งงาน</label>
                                                            <div class="col-md-7">
                                                                <select name="doctype_id" class="form-control"
                                                                    aria-label="Default select example">
                                                                    <option selected>สถานะเลขที่ส่งงาน</option>
                                                                    @foreach ($doctypes as $doctype)
                                                                        <option value="{{ $doctype->id }}">
                                                                            {{ $doctype->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                                @error('doctype_id')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- /.col 222 --}}
                                            </div>
                                            {{-- /.row control --}}


                                        </div>

                                        <div class="form-group row mb-2">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-success">
                                                    ยืนยันและเพิ่มข้อมูลบริการจัดส่ง
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
