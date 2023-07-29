@extends('agency.centro09.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Add New Evacuees</div>
  <div class="card-body">

      <form action="{{ url('Evacuation/centro09') }}" method="post">
        {!! csrf_field() !!}
        <input type="hidden" name="loc_id" value="17" id="name" class="form-control"></br>
        <label>First Name</label></br>
        <input type="text" name="fname"  class="form-control"required></br>
        <label>Last Name</label></br>
        <input type="text" name="lname" class="form-control"required></br>
        <label>Member</label></br>
      <input type="text" name="member" id="address" class="form-control"></br>
      <label>Address</label></br>
      <select name="address" class="form-control" required style="width: 30%;">
        <option style="background-color: aqua;">Choose a Barangay</option>
        <option value="Annafunan">Annafunan</option>
        <option value="Atulayan">Atulayan</option>
        <option value="Bagay">Bagay</option>
        <option value="Buntun">Buntun</option>
        <option value="Caggay">Caggay</option>
        <option value="Capatan">Capatan</option>
        <option value="Carig">Carig</option>
        <option value="Caritan">Caritan</option>
        <option value="Cataggaman">Cataggaman</option>
        <option value="Centro 01">Centro 01</option>
        <option value="Centro 02">Centro 02</option>
        <option value="Centro 03">Centro 03</option>
        <option value="Centro 04">Centro 04</option>
        <option value="Centro 05">Centro 05</option>
        <option value="Centro 06">Centro 06</option>
        <option value="Centro 07">Centro 07</option>
        <option value="Centro 08">Centro 08</option>
        <option value="Centro 09">Centro 09</option>
        <option value="Centro 10">Centro 10</option>
        <option value="Centro 11">Centro 11</option>
        <option value="Centro 12">Centro 12</option>
        <option value="Dadda">Dadda</option>
        <option value="Gosi">Gosi</option>
        <option value="Larion">Larion</option>
        <option value="Leonarda">Leonarda</option>
        <option value="Libag">Libag</option>
        <option value="Linao">Linao</option>
        <option value="Namabbalan">Namabbalan</option>
        <option value="Pallua">Pallua</option>
        <option value="Pengue">Pengue</option>
        <option value="Reyes">Reyes</option>
        <option value="San Gabriel">San Gabriel</option>
        <option value="Tagga">Tagga</option>
        <option value="Tanza">Tanza</option>
        <option value="Ugac">Ugac</option>
      </select></br>
      <label>Room No.</label></br>
      <input type="text" name="room" class="form-control" required style="width: 30%;"></br>
        <label>Date Entered</label></br>
        <input type="date" name="date_entered" class="form-control"required style="width: 30%;"></br>
        <label>Date Leave</label></br>
        <input type="date" name="date_leave" class="form-control"required style="width: 30%;"></br>
        <input type="hidden" name="evacuation" id="mobile" value="Centro 09 Multi-Purpose Hall"class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-primary"style="width:100px; padding:10px; margin-left:auto; margin-right:auto; display:block"></br>
    </form>

  </div>
</div>

@stop
