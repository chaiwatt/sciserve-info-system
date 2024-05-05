@extends('layouts.setting-dashboard')

@section('content')

<div>
    <div>
        <div class="container-fluid">
            <div class="title-header">
                <div>
                    <h3 class="m-0">กลุ่มอุตสาหกรรม</h3>
                </div>
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active">กลุ่มอุตสาหกรรม</li>
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
                                                    <th>รหัส</th>
                                                    <th>ชื่อกลุ่มอุตสาหกรรมภาษาไทย</th>
                                                    <th>ชื่อกลุ่มอุตสาหกรรมภาษาอังกฤษ</th>
                                                    <th>เพิ่มเติม</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>1</td>
                                                <td>AFG</td>
                                                <td>เกษตรและอุตสาหการ</td>
                                                <td>Agro & Food Industry</td>
                                                <td>
                                                  <a class="btn btn-action btn-edit btn-sm"
                                                      href="">
                                                      <i class="fas fa-pencil-alt"></i>
                                                  </a>
                                                  <a class="btn btn-action btn-delete btn-sm" href="#">
                                                      <i class="fas fa-trash"></i>
                                                  </a>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>1</td>
                                                <td>CP</td>
                                                <td>สินค้าอุปโภคบริโภค</td>
                                                <td>Consumer Products</td>
                                                <td>
                                                  <a class="btn btn-action btn-edit btn-sm"
                                                      href="">
                                                      <i class="fas fa-pencil-alt"></i>
                                                  </a>
                                                  <a class="btn btn-action btn-delete btn-sm" href="#">
                                                      <i class="fas fa-trash"></i>
                                                  </a>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>1</td>
                                                <td>ADT</td>
                                                <td>การเกษตรและเทคโนโลยีชีวภาพ</td>
                                                <td>Agriculture and Biotechnology</td>
                                                <td>
                                                  <a class="btn btn-action btn-edit btn-sm"
                                                      href="">
                                                      <i class="fas fa-pencil-alt"></i>
                                                  </a>
                                                  <a class="btn btn-action btn-delete btn-sm" href="#">
                                                      <i class="fas fa-trash"></i>
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