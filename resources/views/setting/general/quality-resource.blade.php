@extends('layouts.setting-dashboard')

@section('content')

<div>
    <div>
        <div class="container-fluid">
            <div class="title-header">
                <div>
                    <h3 class="m-0">ข้อมูลทางด้านคุณภาพ</h3>
                </div>
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active">ข้อมูลทางด้านคุณภาพ</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 px-3">
                    <div class="card border-0 rounded-4">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-12 dashboard-chart-table px-4">
                                    <div class="table-responsive">
                                        <table class="table table-borderless border-bottom">
                                            <thead class="border-bottom">
                                                <tr>
                                                    <th style="width:30px">#</th>
                                                    <th>รายละเอียด</th>
                                                    <th>เพิ่มเติม</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>1</td>
                                                <td>ข้อมูลทางด้านคุณภาพ1</td>
                                                <td>
                                                  <a class="btn btn-action btn-edit btn-sm"
                                                      href="">
                                                      <i class="fas fa-pencil-alt"></i>
                                                  </a>
                                                  <a class="btn btn-action btn-delete btn-sm" href="#">
                                                      <i class="fas fa-trash"></i>
                                                  </a>
                                                  <a class="btn btn-action btn-edit btn-sm" href="#">
                                                    <i class="fas fa-file-excel"></i>
                                                </a>
                                                </td>
                                              </tr>
                                           
                      

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')


@endpush
@endsection