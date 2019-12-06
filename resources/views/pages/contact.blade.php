@extends('layouts.master')
@section('title')
    Contact
    
@endsection
<ul>
    
    @foreach ($frontEnd as $front )
   <li> {{$front}} </li>
    @endforeach
</ul>
<ul>
    @foreach ($backend as $back )
   <li> {{$back}} </li>
    @endforeach
</ul>   
    
