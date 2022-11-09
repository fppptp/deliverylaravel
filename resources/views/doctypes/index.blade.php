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
                <img src="../../dist/img/delivery_logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    คู่มือการใช้งาน
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('bikers.index') }}"
                                        class="nav-link active {{ request()->routeIs('') ? 'active' : '' }}">
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
                                <li class="breadcrumb-item active">คู่มือการใช้งาน</a></li>
                                <li class="breadcrumb-item">สถานะเอกสาร</li>
                            </ol>
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
                                    <table class="table table-bordered table-striped table-sm table-hover">
                                        <thead>
                                            <tr>
                                                <th>สถานะเอกสารที่</th>
                                                <th>ชื่อสถานะ</th>
                                                <th>ความหมาย</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($doctypes as $doctype)
                                                <tr>
                                                    <td>{{ $doctype->id }}</td>
                                                    <td>{{ $doctype->name }}</td>
                                                    <td>{{ $doctype->desc }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
