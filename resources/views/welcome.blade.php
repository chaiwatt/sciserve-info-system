@extends('layouts.landing')
@section('content')
<div class="row row-landing">
    <div class="col-lg-12 p-0 mb-4">
        {{-- @if (count($announcements->where('status',1)) != 0) --}}
        <div class="card card-primary card-outline border-0">
            <div class="card-header">
                <h3 class="card-title m-0 px-lg-4 py-lg-3 d-flex gap-3 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                        <mask id="mask0_1_3699" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="48" height="48">
                          <rect width="48" height="48" fill="#D9D9D9"/>
                        </mask>
                        <g mask="url(#mask0_1_3699)">
                          <path d="M44.25 26.05H39.15C38.5583 26.05 38.0604 25.8471 37.6563 25.4413C37.2521 25.0354 37.05 24.5521 37.05 23.9913C37.05 23.4304 37.2521 22.95 37.6563 22.55C38.0604 22.15 38.5583 21.95 39.15 21.95H44.25C44.8083 21.95 45.2896 22.1529 45.6938 22.5588C46.0979 22.9646 46.3 23.448 46.3 24.0088C46.3 24.5696 46.0979 25.05 45.6938 25.45C45.2896 25.85 44.8083 26.05 44.25 26.05ZM34.55 33.95C34.9167 33.5167 35.3804 33.2584 35.9413 33.175C36.5022 33.0917 37.0051 33.2167 37.45 33.55L41.55 36.6C41.9833 36.9334 42.25 37.3805 42.35 37.9413C42.45 38.5022 42.3167 39.0051 41.95 39.45C41.6167 39.9167 41.1696 40.2 40.6087 40.3C40.0478 40.4 39.5283 40.2667 39.05 39.9L34.95 36.85C34.5167 36.5167 34.25 36.0613 34.15 35.4837C34.05 34.9062 34.1833 34.395 34.55 33.95ZM41.55 11.4L37.6 14.4C37.1551 14.7334 36.6522 14.8584 36.0913 14.775C35.5304 14.6917 35.0667 14.4334 34.7 14C34.3333 13.5667 34.1917 13.0584 34.275 12.475C34.3583 11.8917 34.6333 11.4334 35.1 11.1L39.1 8.05002C39.5449 7.71669 40.0478 7.60002 40.6087 7.70002C41.1696 7.80002 41.6167 8.06669 41.95 8.50002C42.3167 8.96669 42.45 9.48335 42.35 10.05C42.25 10.6167 41.9833 11.0667 41.55 11.4ZM8.20001 31.25H5.85001C4.65835 31.1167 3.66876 30.5979 2.88126 29.6938C2.09376 28.7896 1.70001 27.7417 1.70001 26.55V21.45C1.70001 20.1584 2.16876 19.0438 3.10626 18.1063C4.04376 17.1688 5.15835 16.7 6.45001 16.7H14.6L22.7 11.9C23.5 11.4334 24.2917 11.4156 25.075 11.8468C25.8583 12.278 26.25 12.9624 26.25 13.9V34.1C26.25 35.0376 25.8583 35.722 25.075 36.1532C24.2917 36.5844 23.5 36.5667 22.7 36.1L14.6 31.25H13.15V36.8C13.15 37.4917 12.9138 38.0729 12.4413 38.5438C11.9687 39.0146 11.3854 39.25 10.6913 39.25C9.9971 39.25 9.40835 39.0146 8.92501 38.5438C8.44168 38.0729 8.20001 37.4917 8.20001 36.8V31.25ZM28.25 31.95V16C29.5167 16.9 30.525 18.05 31.275 19.45C32.025 20.85 32.4 22.3667 32.4 24C32.4 25.6334 32.025 27.15 31.275 28.55C30.525 29.95 29.5167 31.0834 28.25 31.95Z" fill="#FE872B"/>
                        </g>
                      </svg>
                    ข่าวประกาศ</h3>
            </div>
            <div class="card-body d-flex p-2 p-lg-5 overflow-auto" style="gap: 32px">

                {{-- @php
                    $countAnnounce = 0;
                @endphp
                @foreach ($announcements->where('status',1) as $announcement)
                <div class="d-flex flex-column" style="gap: 20px; flex: 0 0 364px;">
                    <div>
                        <img src="{{ asset('image_test.jpg') }}" class="object-fit-cover rounded" style="width: 100%; height: 180px" alt="annoucement-image">
                    </div>
                    <div>
                        <p class="text-muted" style="margin-bottom: 12px">
                        {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',
                            $announcement->created_at)->format('d/m/Y')}}
                            </p>
                        <strong class="annoucement-description">
                            {{$announcement->title}}
                        </strong>
                    </div>
                    <div class="text-end">
                        <a href="{{route('post-announcement',['id' => $announcement->id])}}" class="text-primary" style="padding: 8px 14px;">อ่านเพิ่มเติม</a>
                    </div>
                </div>
                @php
                    $countAnnounce++;
                @endphp
                @if (count($announcements->where('status',1)) != $countAnnounce)
                    <div class="divider-y"></div>
                @endif

                @endforeach --}}
            </div>
        </div>
        {{-- @endif --}}
    </div>

    <section class="d-flex flex-column align-items-center" style="gap: 80px; margin: 80px 0 ;">
        <h3>ติดต่อเรา</h3>
        <div class="d-flex flex-column flex-lg-row" style="gap: 80px">
            <div class="text-center" style="width: 250px">
                <p class="text-muted mb-3">โทรศัพท์</p>
                <p class="m-0 fw-semibold">โทรศัพท์ 0 2201 7000 <br>โทรสาร 0 2201 7466</p>
            </div>
            <div class="text-center" style="width: 250px">
                <p class="text-muted mb-3">ที่อยู่</p>
                <p class="m-0 fw-semibold">กรมวิทยาศาสตร์บริการ (วศ.)<br>75/7 ถนนพระรามที่6 แขวงทุ่งพญาไท เขตราชเทวี กรุงเทพฯ 10400</p>
            </div>
            <div class="text-center" style="width: 350px">
                <p class="text-muted mb-3">อีเมล์</p>
                <p class="m-0 fw-semibold">ติดต่อสอบถาม : pr@dss.go.th,
                    <br>รับส่งหนังสืออิเล็กทรอนิกส์ : saraban@dss.go.th</p>
            </div>
        </div>
        <div class="d-flex gap-4">
            <a href="#" class="btn p-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                    <path d="M0 8C0 3.58172 3.58172 0 8 0H40C44.4183 0 48 3.58172 48 8V40C48 44.4183 44.4183 48 40 48H8C3.58172 48 0 44.4183 0 40V8Z" fill="#D0D5DD"/>
                    <path d="M36 24C36 17.3726 30.6273 12 24 12C17.3726 12 12 17.3726 12 24C12 29.6275 15.8745 34.3498 21.1012 35.6467V27.6672H18.6268V24H21.1012V22.4198C21.1012 18.3355 22.9497 16.4424 26.9596 16.4424C27.72 16.4424 29.0318 16.5917 29.5684 16.7405V20.0645C29.2852 20.0347 28.7932 20.0198 28.1822 20.0198C26.2147 20.0198 25.4544 20.7653 25.4544 22.703V24H29.374L28.7006 27.6672H25.4544V35.9122C31.3963 35.1946 36.0004 30.1354 36.0004 24H36Z" fill="#101828"/>
                </svg>
            </a>
            <a href="#" class="btn p-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                    <rect width="48" height="48" rx="8" fill="#D0D5DD"/>
                    <path d="M20.2726 15.0629C19.315 15.1081 18.661 15.2609 18.0893 15.4856C17.4977 15.7162 16.9962 16.0256 16.4972 16.5263C15.9983 17.0271 15.691 17.529 15.462 18.1215C15.2405 18.6945 15.0903 19.3489 15.048 20.3071C15.0057 21.2652 14.9964 21.5732 15.0011 24.0173C15.0057 26.4613 15.0165 26.7677 15.063 27.7278C15.1087 28.6852 15.261 29.339 15.4856 29.9108C15.7166 30.5025 16.0256 31.0038 16.5266 31.5029C17.0275 32.0021 17.529 32.3086 18.123 32.5379C18.6954 32.7592 19.3501 32.91 20.308 32.9519C21.266 32.9939 21.5743 33.0036 24.0177 32.9989C26.461 32.9942 26.7686 32.9834 27.7285 32.9379C28.6885 32.8924 29.3388 32.739 29.9109 32.5154C30.5025 32.284 31.0042 31.9754 31.503 31.4743C32.0018 30.9732 32.3088 30.471 32.5376 29.8781C32.7594 29.3057 32.91 28.651 32.9516 27.6938C32.9936 26.7331 33.0035 26.4264 32.9988 23.9827C32.9941 21.539 32.9831 21.2326 32.9376 20.2729C32.892 19.3131 32.7396 18.6613 32.5151 18.0891C32.2838 17.4975 31.9751 16.9965 31.4744 16.497C30.9736 15.9975 30.471 15.6906 29.8783 15.4624C29.3055 15.2408 28.6512 15.0898 27.6933 15.0484C26.7353 15.007 26.427 14.9963 23.9827 15.001C21.5385 15.0057 21.2325 15.0161 20.2726 15.0629ZM20.3777 31.3328C19.5002 31.2947 19.0237 31.1489 18.7062 31.0268C18.2857 30.8648 17.9862 30.669 17.6698 30.3556C17.3533 30.0422 17.1589 29.7416 16.9948 29.3221C16.8715 29.0045 16.723 28.5286 16.6819 27.6511C16.6373 26.7027 16.6279 26.4179 16.6227 24.0151C16.6175 21.6123 16.6266 21.3279 16.6682 20.3791C16.7057 19.5023 16.8524 19.0253 16.9742 18.708C17.1362 18.2869 17.3314 17.988 17.6455 17.6717C17.9596 17.3554 18.2593 17.1607 18.6792 16.9965C18.9964 16.8727 19.4723 16.7254 20.3494 16.6837C21.2986 16.6387 21.583 16.6297 23.9854 16.6244C26.3879 16.6192 26.673 16.6282 27.6225 16.67C28.4993 16.7081 28.9765 16.8534 29.2935 16.976C29.7141 17.138 30.0135 17.3326 30.3297 17.6472C30.646 17.9619 30.8409 18.2605 31.0051 18.6813C31.1291 18.9976 31.2764 19.4733 31.3178 20.351C31.3629 21.3001 31.3732 21.5847 31.3775 23.987C31.3818 26.3893 31.3734 26.6746 31.3318 27.623C31.2935 28.5005 31.148 28.9772 31.0258 29.2951C30.8638 29.7154 30.6685 30.0151 30.3542 30.3311C30.0399 30.6472 29.7406 30.842 29.3205 31.0061C29.0037 31.1298 28.5272 31.2774 27.6508 31.3192C26.7016 31.3638 26.4172 31.3732 24.0139 31.3784C21.6105 31.3836 21.327 31.3739 20.3779 31.3328M27.7147 19.1898C27.715 19.4034 27.7787 19.6122 27.8977 19.7896C28.0167 19.967 28.1856 20.1051 28.3831 20.1865C28.5806 20.2679 28.7978 20.2889 29.0073 20.2469C29.2167 20.2048 29.409 20.1016 29.5598 19.9503C29.7105 19.799 29.8131 19.6063 29.8543 19.3967C29.8956 19.1871 29.8738 18.97 29.7917 18.7728C29.7096 18.5756 29.5708 18.4072 29.393 18.2889C29.2151 18.1705 29.0062 18.1076 28.7925 18.108C28.5062 18.1086 28.2317 18.2229 28.0296 18.4257C27.8275 18.6286 27.7142 18.9034 27.7147 19.1898ZM19.3789 24.009C19.3839 26.5614 21.4568 28.6258 24.0087 28.621C26.5605 28.6161 28.6264 26.5434 28.6215 23.991C28.6167 21.4386 26.5432 19.3736 23.991 19.3786C21.4388 19.3837 19.374 21.4569 19.3789 24.009ZM20.9999 24.0057C20.9988 23.4124 21.1736 22.832 21.5022 22.338C21.8309 21.844 22.2987 21.4585 22.8464 21.2304C23.3942 21.0022 23.9973 20.9416 24.5795 21.0562C25.1617 21.1708 25.6968 21.4555 26.1172 21.8742C26.5376 22.293 26.8244 22.827 26.9413 23.4087C27.0582 23.9904 27 24.5937 26.774 25.1424C26.548 25.691 26.1644 26.1603 25.6717 26.491C25.179 26.8216 24.5993 26.9987 24.006 26.9999C23.612 27.0007 23.2217 26.9239 22.8574 26.7739C22.4931 26.6238 22.1619 26.4035 21.8827 26.1255C21.6036 25.8474 21.382 25.5171 21.2305 25.1534C21.079 24.7897 21.0007 24.3997 20.9999 24.0057Z" fill="#101828"/>
                  </svg>
            </a>
            <a href="#" class="btn p-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                    <rect width="48" height="48" rx="8" fill="#D0D5DD"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.5942 12C31.5388 12 37.1885 16.5849 37.1885 22.2204H37.1896C37.1896 24.4762 36.3149 26.5066 34.4899 28.5087C31.8481 31.5495 25.9399 35.2538 24.5954 35.8204C23.287 36.3723 23.4399 35.5076 23.5 35.1677C23.5016 35.1586 23.5032 35.1499 23.5046 35.1416C23.5365 34.9528 23.6841 34.0639 23.6841 34.0639C23.7254 33.7416 23.7702 33.2435 23.6427 32.9247C23.5011 32.5741 22.9427 32.3923 22.5331 32.3038C16.4809 31.5035 11.9999 27.2727 11.9999 22.2204C11.9999 16.5849 17.6496 12 24.5942 12ZM19.9103 25.4749C20.0425 25.4749 20.1511 25.3675 20.1511 25.2341V24.3405C20.1511 24.2083 20.0425 24.0997 19.9103 24.0997H17.5057V19.7367C17.5057 19.6045 17.3971 19.4959 17.2649 19.4959H16.3713C16.2379 19.4959 16.1305 19.6033 16.1305 19.7367V25.2294V25.2341C16.1305 25.3675 16.2379 25.4749 16.3713 25.4749H19.9091H19.9103ZM32.9978 25.4749H29.46C29.3266 25.4749 29.2192 25.3675 29.2192 25.2341V25.2305V19.7438V19.7379C29.2192 19.6045 29.3266 19.4971 29.46 19.4971H32.9978C33.13 19.4971 33.2386 19.6057 33.2386 19.7379V20.6315C33.2386 20.7649 33.1312 20.8723 32.9978 20.8723H30.5932V21.8001H32.9978C33.13 21.8001 33.2386 21.9087 33.2386 22.0409V22.9345C33.2386 23.0679 33.1312 23.1754 32.9978 23.1754H30.5932V24.1032H32.9978C33.13 24.1032 33.2386 24.2118 33.2386 24.344V25.2376C33.2386 25.371 33.1312 25.4784 32.9978 25.4784V25.4749ZM21.1475 19.4971H22.0399C22.1729 19.4971 22.2807 19.6049 22.2807 19.7379V25.2341C22.2807 25.3671 22.1729 25.4749 22.0399 25.4749H21.1475C21.0145 25.4749 20.9067 25.3671 20.9067 25.2341V19.7379C20.9067 19.6049 21.0145 19.4971 21.1475 19.4971ZM28.1202 19.4971H27.2266C27.0932 19.4971 26.9858 19.6045 26.9858 19.7379V23.0018L24.4714 19.6057C24.4699 19.6036 24.4684 19.6015 24.4667 19.5994C24.4652 19.5973 24.4636 19.5953 24.462 19.5933C24.4588 19.5891 24.4555 19.585 24.4526 19.5809L24.4514 19.5797C24.449 19.5773 24.4467 19.5747 24.4443 19.5721L24.4443 19.572C24.4419 19.5694 24.4396 19.5667 24.4372 19.5644C24.4366 19.5638 24.4357 19.5632 24.4349 19.5626C24.434 19.562 24.4331 19.5614 24.4325 19.5608C24.4301 19.559 24.4281 19.5573 24.426 19.5555C24.4239 19.5537 24.4219 19.552 24.4195 19.5502C24.4183 19.5496 24.4171 19.5487 24.416 19.5478C24.4153 19.5473 24.4146 19.5468 24.4139 19.5463C24.4134 19.546 24.4129 19.5457 24.4124 19.5455C24.4089 19.5419 24.4042 19.5396 24.3994 19.5372C24.3988 19.5369 24.3982 19.5365 24.3976 19.5361C24.397 19.5357 24.3965 19.5353 24.3959 19.5348C24.3947 19.534 24.3935 19.5331 24.3924 19.5325L24.3859 19.5289L24.3794 19.5254L24.3723 19.5219C24.3676 19.5195 24.3628 19.5171 24.3581 19.516C24.3571 19.516 24.356 19.5155 24.3548 19.515L24.3548 19.515C24.3538 19.5145 24.3526 19.514 24.3513 19.5137C24.3509 19.5136 24.3504 19.5136 24.3499 19.5136C24.3475 19.513 24.3451 19.5121 24.3428 19.5112L24.3428 19.5112C24.3404 19.5103 24.338 19.5095 24.3357 19.5089C24.3333 19.5089 24.3298 19.5077 24.3274 19.5065C24.3243 19.5065 24.3211 19.5055 24.318 19.5044L24.3133 19.503C24.3097 19.503 24.3062 19.503 24.3026 19.5018C24.3003 19.5018 24.2982 19.5015 24.2962 19.5012L24.2961 19.5012C24.2941 19.5009 24.292 19.5006 24.2897 19.5006H24.2767H24.2684H23.3807C23.2485 19.5006 23.1399 19.608 23.1399 19.7414V25.2376C23.1399 25.3698 23.2473 25.4784 23.3807 25.4784H24.2743C24.4077 25.4784 24.5151 25.371 24.5151 25.2376V21.9737L27.033 25.3745C27.0507 25.3993 27.072 25.4194 27.0956 25.4348C27.0956 25.4348 27.0963 25.4351 27.097 25.4356C27.0975 25.4361 27.098 25.4366 27.098 25.4371C27.1008 25.4393 27.1037 25.441 27.1068 25.4428C27.1089 25.444 27.111 25.4452 27.1133 25.4466L27.1204 25.4501C27.1222 25.4513 27.1242 25.4522 27.1263 25.453C27.1284 25.4539 27.1304 25.4548 27.1322 25.456C27.1351 25.4579 27.1387 25.459 27.1418 25.46L27.144 25.4607C27.1452 25.4607 27.1464 25.4613 27.1475 25.4619C27.1487 25.4625 27.1499 25.4631 27.1511 25.4631C27.1541 25.4643 27.1569 25.4652 27.1596 25.466C27.1622 25.4667 27.1648 25.4672 27.1676 25.4678H27.1711C27.1912 25.4725 27.2125 25.4761 27.2337 25.4761H28.1214C28.2536 25.4761 28.3622 25.3686 28.3622 25.2353V19.7391C28.3622 19.6068 28.2548 19.4982 28.1214 19.4982L28.1202 19.4971Z" fill="#101828"/>
                  </svg>
            </a>
            <a href="#" class="btn p-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                    <rect width="48" height="48" rx="8" fill="#D0D5DD"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M34.5303 15.2237C35.6698 15.5308 36.5685 16.434 36.8726 17.5811C37.4266 19.6615 37.4266 24 37.4266 24C37.4266 24 37.4266 28.34 36.8726 30.4189C36.5685 31.566 35.6698 32.4693 34.5303 32.7764C32.4649 33.3334 24.1793 33.3334 24.1793 33.3334C24.1793 33.3334 15.8952 33.3334 13.8283 32.7764C12.6887 32.4693 11.79 31.566 11.4859 30.4189C10.932 28.3385 10.932 24 10.932 24C10.932 24 10.932 19.66 11.4859 17.5811C11.79 16.434 12.6887 15.5308 13.8283 15.2237C15.8937 14.6667 24.1793 14.6667 24.1793 14.6667C24.1793 14.6667 32.4634 14.6667 34.5303 15.2237ZM28.3944 24L21.4697 27.9396V20.0604L28.3944 24Z" fill="#101828"/>
                  </svg>
            </a>
        </div>
    </section>
    <!-- /.col-md-6 -->
</div>
@endsection