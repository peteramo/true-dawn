<!-- Vendor JS Files -->
<script src="/adm/vendor/apexcharts/apexcharts.min.js"></script>
<script src="/adm/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/adm/vendor/chart.js/chart.umd.js"></script>
<script src="/adm/vendor/echarts/echarts.min.js"></script>
<script src="/adm/vendor/quill/quill.min.js"></script>
<script src="/adm/vendor/simple-datatables/simple-datatables.js"></script>
<script src="/adm/vendor/tinymce/tinymce.min.js"></script>
<script src="/adm/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="/adm/js/main.js"></script>
<script>
    function showTime(){
        var date = new Date();
        var h = date.getHours(); // 0 - 23
        var m = date.getMinutes(); // 0 - 59
        var s = date.getSeconds(); // 0 - 59
        var session = "AM";

        if(h == 0){
            h = 12;
        }

        if(h > 12){
            h = h - 12;
            session = "PM";
        }

        h = (h < 10) ? "0" + h : h;
        m = (m < 10) ? "0" + m : m;
        s = (s < 10) ? "0" + s : s;

        var time = h + ":" + m + ":" + s + " " + session;
        document.getElementById("MyClockDisplay").innerText = time;
        document.getElementById("MyClockDisplay").textContent = time;

        setTimeout(showTime, 1000);

    }

    showTime();
</script>
@yield('scripts')
