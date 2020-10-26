<div>@foreach($data as $item)
<li>{{$item->name}}</li>
@endforeach

</div>
<div class="pagenumber">
    <br><br>
    {{$data->links()}}
    <br><br>
</div>
<style>
    .pagenumber
    {
        display: inline-block;
        padding: 10px;
    }
</style>
