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
                    <h3 class="m-0">การทดสอบ API</h3>
                </div>
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="{{route('home')}}">หน้าหลัก</a>
                        </li>
                        <li class="breadcrumb-item active">การทดสอบ API</li>
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
                            <h4 class="card-title">API Request</h3>
                        </div>
                        <div>
                            <div class="card card-body border-0">
                                <div class="row mt-2">
                                    <div class="col-sm-6 ">
                                        <form action="{{route('groups.accreditation-system.setting.general.external-api')}}" method="GET">
                                            @csrf
                                            <p>ตัวอย่างที่ 1 การสืบค้นเอกสาร NQI กลุ่มผลิตภัณฑ์อาหาร ID = 5</p>
                                            <p>End point: https://www.dss.go.th/info/api/dropdown/products?lang=th</p>
                                            <button type="submit" name="submit1" class="btn btn-primary">ส่ง request</button>
                                        </form>
                                        <form class="mt-4" action="{{route('groups.accreditation-system.setting.general.external-api')}}" method="GET">
                                            @csrf
                                            <p>ตัวอย่างที่ 2 การสืบค้นเอกสาร NQI กลุ่มผลิตภัณฑ์กระดาษและอาหาร ID = 1,5</p>
                                            <p>End point: https://www.dss.go.th/info/api/dropdown/products?lang=th</p>
                                            <button type="submit" name="submit2" class="btn btn-primary">ส่ง request</button>
                                        </form>
                                        <form class="mt-4" action="{{route('groups.accreditation-system.setting.general.external-api')}}" method="GET">
                                            @csrf
                                            <p>ตัวอย่างที่ 3 การแสดงรายละเอียดผลิตภัณฑ์น้ำอัดลม ID = 228</p>
                                            <p>End point: https://www.dss.go.th/info/product-standard/228</p>
                                            <button type="submit" name="submit3" class="btn btn-primary">ส่ง request</button>
                                        </form>
                                        <form class="mt-4" action="{{route('groups.accreditation-system.setting.general.external-api')}}" method="GET">
                                            @csrf
                                            <p>ตัวอย่างที่ 4 สืบค้นเอกสารฉบับเต็ม สำหรับตัวอย่างสำนักพิมพ์ AACC</p>
                                            <p>End point: https://www.dss.go.th/info/document-list</p>
                                            <button type="submit" name="submit4" class="btn btn-primary">ส่ง request</button>
                                        </form>
                                        <form class="mt-4" action="{{route('groups.accreditation-system.setting.general.external-api')}}" method="GET">
                                            @csrf
                                            <p>ตัวอย่างที่ 5 สืบค้นเอกสารฉบับเต็ม สำหรับตัวอย่างสำนักพิมพ์ AACC ประเภทเอกสาร Standard document และปี 2001</p>
                                            <p>End point: https://www.dss.go.th/info/document-list</p>
                                            <button type="submit" name="submit5" class="btn btn-primary">ส่ง request</button>
                                        </form>                           
                                    </div>
                                    <div class="col-sm-6 ">
                                        <img src="{{asset('code.png')}}">
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-sm-12 ">
                                            ref: <a href="https://www.dss.go.th/info/search/nqi" target="_blank">ระบบห้องสมุดอัจฉริยะ</a>
                                        </div>       
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
