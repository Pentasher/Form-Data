@include('menu')
<a class="create-button" href="{{ url('cars/create') }}">Create</a>
<table width="100%">
    <tr>
        <th>Name</th>
        <th>Brand</th>
        <th>Price</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach ($cars as $car)
        <tr>
            <td>{{ $car->name }}</td>
            <td>{{ $car->brand }}</td>
            <td>{{ $car->price }}</td>
            <td><a class="edit" href="{{ url('cars') }}/edit/{{ $car->id }}">edit</a></td>
            <td><a class="delete" href="{{ url('cars') }}/delete/{{ $car->id }}">delete</a></td 
        </tr>
    @endforeach
</table>

