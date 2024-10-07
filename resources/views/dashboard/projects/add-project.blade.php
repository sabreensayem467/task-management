@extends('dashboard.master2')
@section('title','add project')
@section('content')
<h5>Create New Project</h5>

<div class="right">
    <a href="javascript:void(0);" class="icon act-suggest"><i class="icon-check"></i></a>
    <a href="javascript:void(0);" class="icon"><i class="icon-more"></i></a>
</div>
</div>
<div class="app-content style-2">

<br>
<form   method ="POST" action="{{route('store-project')}}">
    @csrf
    <label for="name">Project Name:</label><br>
    <input type="text" id="name" name="name" ><br>
    <label for="description">Description</label><br>
    <input type="text" id="description" name="description" ><br><br>
    <label for="num_team">Team</label><br>
    <input type="number" id="num_team" name="num_team" ><br><br>
    <label for="leader">Leader</label><br>
    <input type="text" id="leader" name="leader" ><br><br>
    <label for="date">DATE</label><br>
    <input type="date" id="date" name="date"><br><br>
    <label for="myfile">Select a file</label><br>
    <input type="file" id="myfile" name="attachment"><br><br>
    <input type="submit" value="Submit">
  </form>
</div>
@endsection