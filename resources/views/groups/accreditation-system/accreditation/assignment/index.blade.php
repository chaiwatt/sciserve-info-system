@extends('layouts.dashboard')

@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/loading.css?v=1.0') }}">
@endpush
<div>
    @include('layouts.partial.loading')
    <div>
        @if ($errors->any())
            <div class="alert alert-danger m-4">
                <ul>
                    @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container-fluid">
            <div class="title-header">
                <div>
                    <h3 class="m-0">หน่วยตรวจสอบ</h3>
                </div>
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="{{route('home')}}">หน้าหลัก</a>
                        </li>
                        <li class="breadcrumb-item active">หน่วยตรวจสอบ</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            @if ($permission->show)
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">รายการ</h3>
                            @if ($permission->create)
                            <a class="btn btn-header" href="{{route('groups.accreditation-system.accreditation.list.create')}}">
                                <i class="fas fa-plus">
                                </i>
                                เพิ่มหน่วยตรวจสอบ
                            </a>
                            @endif
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-sm-12 " id="table_container">
                                    <div class="table-responsive">
                                        <table class="table table-borderless text-nowrap dataTable dtr-inline">
                                            <thead class="border-bottom">
                                                <tr>
                                                    <th>หน่วยตรวจสอบ</th>
                                                    <th>ประเภท</th>
                                                    <th>ลูกค้า</th>
                                                    <th>สถานะ</th>
                                                    <th class="text-end" style="width: 120px">เพิ่มเติม</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($unitTests as $unitTest)
                                                <tr>
                                                    <td>{{$unitTest->name}}</td>
                                                    <td>{{$unitTest->accreditationType->name}}</td>
                                                    <td>{{$unitTest->user->name}} {{$unitTest->user->lastname}}</td>
                                                    <td><span class="badge text-bg-success">มอบหมายแล้ว</span></td>
                                                    <td> 
                                                        <a class="btn btn-action btn-links btn-sm"
                                                            href="">
                                                            <i class="fas fa-link"></i>
                                                        </a>
                                                        <a class="btn btn-action btn-links btn-sm"
                                                            href="">
                                                            <i class="fas fa-users"></i>
                                                        </a>
                                                        <a class="btn btn-action btn-edit btn-sm"
                                                            href="">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <a class="btn btn-action btn-delete btn-sm"
                                                            data-confirm='ลบบทบาท "" หรือไม่?' href="#"
                                                            data-id=""
                                                            data-delete-route=""
                                                            data-message="บทบาท">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

</div>

@push('scripts')

<script type="module" src="{{ asset('assets/js/helpers/salary-system/salary/calculation/index.js?v=1') }}">
</script>
<script src="{{asset('assets/js/helpers/helper.js?v=1')}}"></script>


@endpush
@endsection
