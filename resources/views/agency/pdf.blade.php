<!doctype html>
<html>

<head>


    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/datatables/datatables.css">
    <style>
        .table-striped tbody tr:nth-child(even) td,
        .table-striped tbody tr:nth-child(even) th {
            background-color: #E5E4E2;
        }

        th {
            text-align: center;

        }

        td {
            text-align: center;

        }

        table,
        th,
        td {
            font-size: 12px;
            padding: 8px;

        }
    </style>
</head>

<body>

    <div class="panel-heading">
        <h2 style="text-align: center;">Evacuees List</h2>
    </div>
    <table style="width: 100%; margin-left:auto; margin-right:auto;">
        <tr style="background-color:lightgray">
            <th>Number Individuals</th>
            <th>Number of Families</th>
        </tr>
        <tr>
            <td>{{ $count}} </td>
            <td>{{ $counts}} </td>
        </tr>
    </table>
    <table style="width:100%" class="datatable table table-striped table-bordered" style="border: 1px solid lightgray;">
        <thead>
            <tr style="background-color: #93C572;">
                <th>#</th>
                <th>Name</th>
                <th>Member</th>
                <th>Address</th>
                <th>Evacuation</th>
                <th>Room</th>
                <th>Date Entered</th>
                <th>Date Leave</th>
            </tr>
        </thead>
        <tbody>
            @foreach($evac as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->fname}} {{ $item->lname }}</td>
                <td>{{ $item->member }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->Evacuation }}</td>
                <td>{{ $item->room }}</td>
                <td>{{ $item->date_entered }}</td>
                <td>{{ $item->date_leave}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
    <script src="js/datatables/datatables.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.datatable').dataTable({
                "sPaginationType": "bs_four_button"
            });
            $('.datatable').each(function() {
                var datatable = $(this);
                // SEARCH - Add the placeholder for Search and Turn this into in-line form control
                var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
                search_input.attr('placeholder', 'Search');
                search_input.addClass('form-control input-sm');
                // LENGTH - Inline-Form control
                var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
                length_sel.addClass('form-control input-sm');
            });
        });
    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
    <script src="js/datatables/datatables.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.datatable').dataTable({
                "sPaginationType": "bs_four_button"
            });
            $('.datatable').each(function() {
                var datatable = $(this);
                // SEARCH - Add the placeholder for Search and Turn this into in-line form control
                var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
                search_input.attr('placeholder', 'Search');
                search_input.addClass('form-control input-sm');
                // LENGTH - Inline-Form control
                var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
                length_sel.addClass('form-control input-sm');
            });
        });
    </script>

</body>

</html>