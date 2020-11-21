@include('menu')
<a class="create-button" href="{{ url('vehicles/create') }}">Create</a>
<table width="100%">
    <tr>
        <th>Name</th>
        <th>Brand</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($vehicles as $vehicle)
    <tr>
        <td>{{$vehicle->name}}</td>
        <td>{{$vehicle->brand}}</td>
        <td>{{$vehicle->price}}</td>
        <td>{{$vehicle->quantity}}</td>
        <td><a class="edit" href="{{ url('vehicles') }}/edit/{{ $vehicle->id }}">edit</a></td>
        <td><a class="delete" href="{{ url('vehicles') }}/delete/{{ $vehicle->id }}">delete</a></td>
    </tr>
    @endforeach
</table>