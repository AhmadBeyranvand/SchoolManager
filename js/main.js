$('.fa-date').persianDatepicker({
    format:  'YYYY/MM/DD',
});

$('.table').DataTable( {
    language: {
        "decimal":        "",
        "emptyTable":     "هیچ دانش‌آموز مرتبطی وجود ندارد",
        "info":           "در حال نمایش  شماره _START_ تا _END_    -------⤌    از <strong>_TOTAL_</strong> دانش آموز",
        "infoEmpty":      "در حال نمایش 0 تا 0 از 0 دانش آموز",
        "infoFiltered":   "(فیلتر شده از _MAX_ دانش آموز)",
        "infoPostFix":    "",
        "thousands":      ",",
        "lengthMenu":     "نمایش _MENU_ دانش‌آموز",
        "loadingRecords": "در حال بارگذاری...",
        "processing":     "",
        "search":         "جست‌و‌جو:",
        "zeroRecords":    "هیچ دانش آموز مرتبطی وجود ندارد",
        "paginate": {
            "first":      "اولین",
            "last":       "آخرین",
            "next":       "بعدی",
            "previous":   "قبلی"
        },
        "aria": {
            "orderable":  "چینش به ترتیب این ستون",
            "orderableReverse": "چینش برعکس"
        }
    }
} );