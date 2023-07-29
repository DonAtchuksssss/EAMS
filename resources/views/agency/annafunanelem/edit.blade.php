@extends('agency.annafunanelem.layout')
<nav class="fa-solid">
  <a href="{{ url('/Evacuation/annafunanelem/') }}">
    <i class="fa-solid fa-angle-left" style="color: black;font-size: 45px;padding:5px"></i>
  </a>
</nav>
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Edit</div>
  <div class="card-body">

    <form action="{{ url('Evacuation/annafunanelem/' .$evac[0]->id) }}" method="post">
      {!! csrf_field() !!}
      @method("PATCH")
   
      <label style="width: 100%; text-align:center">Evacuation Type</label>
      <select name="brand" class="form-control" required style="width: 30%; margin-left:auto; margin-right:auto;">
        <option value="{{$evac[0]->brand}}">{{$evac[0]->brand}}</option>
        <option value="Available">Available</option>
        <option value="Unavailable">Unavailable</option>
      </select>
      <label style="width: 100%; text-align:center">Capacity</label>
      <input type="text" name="capacity" id="name" value="{{$evac[0]->capacity}}" class="form-control" required style="width: 30%; margin-left:auto; margin-right:auto;"></br>
      </br>
      <input type="hidden" name="id" id="id" value="{{$evac[0]->id}}" id="id" />
      <label>First Name</label></br>
      <input type="text" name="fname" id="name" value="{{$evac[0]->fname}}" class="form-control" required></br>
      <label>Last Name</label></br>
      <input type="text" name="lname" id="address" value="{{$evac[0]->lname}}" class="form-control" required></br>
      <label>Member</label></br>
      <input type="text" name="member" id="address" value="{{$evac[0]->member}}" class="form-control"></br>
      <label>Address</label></br>
      <select name="address" class="form-control" required style="width: 30%;" >
        <option value="{{$evac[0]->address}}" style="background-color: aqua;">{{$evac[0]->address}}</option>
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
      <input type="text" name="room" value="{{$evac[0]->room}}" class="form-control" required style="width: 30%;"></br>
      <label>Date Entered</label></br>
      <input type="date" name="date_entered" value="{{$evac[0]->date_entered}}" class="form-control" required style="width: 30%;"></br>
      <label>Date Leave</label></br>
      <input type="date" name="date_leave" value="{{$evac[0]->date_leave}}" class="form-control" required style="width: 30%;"></br>
      <input type="hidden" name="Evacuation" id="mobile" value="{{$evac[0]->Evacuation}}" class="form-control"></br>
      <input type="submit" value="Update"  class="btn btn-primary" style="width:100px; margin-left:auto; margin-right:auto; display:block">
    </form>

  </div>
</div>

@stop