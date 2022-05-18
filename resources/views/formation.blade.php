{{-- @foreach ($formations as $item)
    {{$item->nom}}
    <br>
@endforeach --}}

@forelse ($formations as $item)
{{$item->nom}}
<br>
@empty

@endforelse

<div style="width: 10%">{{ $formations->links("") }}</div>
