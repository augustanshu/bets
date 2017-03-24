@extends('layouts.master')
@section('title','MyBets')

@section('main')
<form id="fm-odd" method="post" action="/admin/ajax" style="display:flex;flex-direction:row;justify-content:center">
{!!csrf_field()!!}
<input type="text" class="league-input" name="league">
<h5 id="output2">W</h5><input type="text" class="odd-input" name="w1"><h5>-</h5><input class="odd-input" name="w2">
<!--<h5>D</h5><input type="text" class="odd-input" name="d1"><h5>-</h5><input class="odd-input" name="d2">
<h5>L</h5><input type="text" class="odd-input" name="l1"><h5>-</h5><input class="odd-input" name="l2">-->
<button class="btn btn-sm btn-danger btn-search" type="submit">check</button>
</form>
@endsection

<style>
h5{
	margin-right:5px;
	margin-left:5px;
}
.league-input{
	width:160px;
}
.odd-input{
	width:60px;
}
input:nth-child(2n+1)
{
		margin-right:10px;
}
.btn-search{
	margin-left:10px;
}
</style>