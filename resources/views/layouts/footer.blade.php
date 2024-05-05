<footer class="main-footer">
    @php
    $currentYear = date('Y');
    @endphp
    <div class="text">
        ระบบคลังข้อมูลหน่วยตรวจสอบและรับรองของประเทศ &copy; {{ $currentYear }}-{{ $currentYear + 1 }}. All rights reserved.
    </div>
    <div class="float-right d-none d-sm-inline">
        กรมวิทยาศาสตร์บริการ (วศ.) 75/7 ถนนพระรามที่6 แขวงทุ่งพญาไท เขตราชเทวี กรุงเทพฯ 10400
    </div>
</footer>