@extends('layouts.dashboard')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger m-4">
        <ul>
            @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div>
    <div>
        <div class="container-fluid">
            <div class="title-header">
                <div>
                    <h3 class="m-0">เพิ่มหน่วยตรวจสอบ</h3>
                </div>
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active">เพิ่มหน่วยตรวจสอบ</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 rounded-4">
                        {{-- <div class="py-3 px-4">
                            <h4 class="m-0">ข้อมูลหน่วยตรวจสอบ</h4>
                        </div> --}}
                        <form action="{{route('groups.accreditation-system.accreditation.list.store')}}" method="POST">
                            @csrf
                            <!-- Display validation errors -->
                            <div class="card-body">
                                    <div class="row gy-3">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>ชื่อหน่วยตรวจสอบ <span class="fw-bold text-danger">*</span></label>
                                            <input type="text" name="name" value="{{old('name')}}"
                                                class="form-control @error('name') is-invalid @enderror">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>ประเภทบริการ</label>
                                            <select name="accreditation_type"
                                                class="form-control select2"
                                                style="width: 100%;">

                                                @foreach ($accreditationTypes as $accreditationType)
                                                <option value="{{$accreditationType->id}}">{{$accreditationType->name}}</option>
                                                @endforeach
                                             
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>ลูกค้า</label>
                                            <select name="user"
                                                class="form-control select2"
                                                style="width: 100%;">

                                                @foreach ($users as $user)
                                                <option value="{{$user->id}}">{{$user->name}} {{$user->lastname}}</option>
                                                @endforeach
                                             
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>รายละเอียด <span class="fw-bold text-danger">*</span></label>
            

                                                <textarea name="description" class="form-control @error('lastname') is-invalid @enderror" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>


                                    
                                    
                                </div>
                            </div>
        
                            <div class="card-footer card-create">
                                <a href="" type="button" class="btn btn-outline-secondary">ยกเลิก</a>
                                <button type="submit" class="btn btn-primary">บันทึก</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script src="{{asset('assets/js/helpers/helper.js?v=1')}}"></script>
<script>
    $(function () {
        $('.select2').select2()
        $('#birth_date,#start_work_date,#visa_expire_date,#work_permit_expire_date').datetimepicker({
            format: 'L'
        });
    });
    const avatar = document.getElementById('avatar-input');
    const avatarPreview = document.getElementById('avatar-preview');
    avatar.onchange = (event) => {
        avatarPreview.src = URL.createObjectURL(event.target.files[0]);
        avatarPreview.style = 'width: 100%; height: 100%; object-fit: cover;'
    }
  
</script>
@endpush
@endsection
