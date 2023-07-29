@extends('agency.ugacnorte.layout')
<nav class="fa-solid" >
      <a href="{{ url('/agency/Evacuation') }}">
        <i class="fa-solid fa-angle-left"style="color: black;font-size: 45px;padding:5px"></i>
      </a>
    </nav>
@section('content')

    <div class="row" style="margin:20px;">
       
            <div class="card">
                <div class="card-header">
                    <h2>Ugac Norte Multi-Purpose Hall</h2>
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <a href="{{ url('Evacuation/ugacnorte/create') }}" class="btn btn-success btn-sm" title="Add New Evacuees">
                        <i class="fa-solid fa-plus" style="padding: 3px; width:50px"></i>
                        </a>
                        <a href="{{ url('Evacuation/ugacnorte/archive') }}" class="btn btn-secondary btn-sm" title="Archive">
                        <i class="fa fa-box-archive" style="padding: 3px;"></i>
                </a>
                        <br/>
                        <br/>
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

                                        <a href="{{ url('Evacuation/ugacnorte/' . $item->id . '/edit') }}" title="Edit Evacuees"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true" style="width:50px; padding:3px"></i></button></a>

                                        <form method="POST" action="{{ url('Evacuation/ugacnorte' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Archive Evacuees"><i class="fa fa-trash-o" aria-hidden="true" style="width:50px; padding:3px"></i></button>
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