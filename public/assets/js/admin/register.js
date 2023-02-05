// Class Definition
var history = function () {

    var table = $('#tbl-data');
    var grid;
    // get data
    grid = table.DataTable({
        responsive: true,
        scrollX: true,
        processing: true,
        serverSide: true,
        ajax: {
            url: table.attr('target'),
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: function (d) {
                d.dates = $('#sdates').val();
            }
        },
        columns: [
            {
                data: "created_at",
                class: "dt-nowrap",
                render: function (data) {
                    return moment(data).format('DD MMM YYYY  h:mm:ss a ');
                }
            },
            {
                data: 'name',
                class: "dt-nowrap"
            },
            {
                data: 'no_hp',
                class: "dt-nowrap"
            },
            {
                data: "address",
                class: "dt-nowrap"
            },
            {
                data: "service",
                class: "dt-nowrap"
            },
            {
                data: "list_tools",
                class: "dt-nowrap"
            },
            // {
            //     data: "booking_date",
            //     class: "dt-nowrap",
            //     render: function (data) {
            //         return moment(data).format('DD MMM YYYY  h:mm a ');
            //     }
            // },
        ],
        order: [[0, "desc"]],
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print'
        ]

    });

    new $.fn.DataTable.FixedColumns(grid, {
        leftColumns: 0,
        rightColumns: 1,
        heightMatch: 'auto'
    });

    $('input[name="dates"]').daterangepicker({
        autoUpdateInput: false,
        locale: {
            cancelLabel: 'Clear'
        }
    });

    $('input[name="dates"]').on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('YYYY/MM/DD') + ' - ' + picker.endDate.format('YYYY/MM/DD'));
    });

    $('input[name="dates"]').on('cancel.daterangepicker', function (ev, picker) {
        $(this).val('');
    });


    $('#btn-search-date').click(function () {
        grid.ajax.reload();
    })
}();



// Class Initialization
jQuery(document).ready(function () {
    setTimeout(function () {
        history;
    }, 100)
});