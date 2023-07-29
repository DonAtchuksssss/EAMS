@extends('agency.bagay.layout')
<nav class="fa-solid">
    <a href="{{ url('/Evacuation/bagay') }}">
        <i class="fa-solid fa-angle-left" style="color: black;font-size: 45px;padding:5px"></i>
    </a>
</nav>
@section('content')

<div class="row" style="margin:20px;">

    <div class="card">
        <div class="card-header">
            <h2>Bagay Elementary School ( Archive )</h2>
        </div>

        <div class="card-body">

            <div class="table-responsive">
                <br />

                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Member</th>
                            <th>Address</th>
                            <th>Room No.</th>
                            <th>Date Entered</th>
                            <th>Date Leave</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($evac as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->fname}} {{ $item->lname }}</td>
                            <td>{{ $item->member }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->room }}</td>
                            <td>{{ $item->date_entered }}</td>
                            <td>{{ $item->date_leave}}</td>
                            <td>

                                <form method="POST" action="{{ url('Evacuation/bagay/restore' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-success btn-sm" title="Restore"><i class="fa fa-trash-can-arrow-up" aria-hidden="true" style="width:50px; padding:3px"></i> </button>
                                </form>
                                <form method="POST" action="{{ url('Evacuation/bagay/forceDelete' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash-o" aria-hidden="true" style="width:50px; padding:3px"></i> </button>
                                </form>

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

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
@endsection