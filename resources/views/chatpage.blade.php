
@extends('chatfrndlayout')

@section('content')

<div class="leftcontent">
    @if (Session::get('user'))
    <div class="dd1">
       <button type="button"  class="btn  dropdown-toggle ddbtn1" data-toggle="dropdown">
       <b> Check who is online!!!</b>
       </button>
       <div class="dropdown-menu">

           <a class="dropdown-item" href=""
           data-toggle="" data-target="">

                   </a>

           </div>
     </div>
     @endif
</div>
<div class="rightcontent">
    <button type="button" class="">
    @foreach($fnd as $item)
    {{$item->name}}
</button>
@endforeach

</div>


@stop
