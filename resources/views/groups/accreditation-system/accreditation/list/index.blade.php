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
                                                    <th>ผู้เชี่ยวชาญ</th>
                                                    <th>การทดสอบ</th>
                                                    <th class="text-end" style="width: 120px">สถานะ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($unitTests as $unitTest)
                                                <tr>
                                                    <td>{{$unitTest->name}}</td>
                                                    <td>{{$unitTest->accreditationType->name}}</td>
                                                    <td>{{$unitTest->user->name}} {{$unitTest->user->lastname}}</td>
                                                    <td>
                                                        <span>{{$unitTest->accreditationExpert->name}}</span> 
                                                        <ul>
                                                            @foreach ($unitTest->accreditationExpertUsers as $accreditationExpertUser)
                                                                <li>{{$accreditationExpertUser->user->name}} {{$accreditationExpertUser->user->lastname}}</li>
                                                            @endforeach
                                                        </ul>                                           
                                                    </td>
                                                    <td>
                                                        <span>{{$unitTest->accreditationCriteria->name}}</span> 
                                                        <ul>
                                                            @foreach ($unitTest->materialProperties as $materialProperty)
                                                                <li>{{$materialProperty->name}}</li>
                                                            @endforeach
                                                        </ul>
                                                    </td>
                                                    <td></td>
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
{{-- <div class="modal-footer justify-content-between">
    {{-- <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
    <button type="button" class="btn btn-primary" id="bntUpdateReportField">ต่อไป</button>
</div>
</div>
</div>
</div>
</div> --}}
@push('scripts')

<script type="module" src="{{ asset('assets/js/helpers/salary-system/salary/calculation/index.js?v=1') }}">
</script>
<script src="{{asset('assets/js/helpers/helper.js?v=1')}}"></script>


@endpush
@endsection
