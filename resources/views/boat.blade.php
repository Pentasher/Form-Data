@include('menu')
<a class="create-button" href="{{ url('boats/create') }}">Create</a>

<table width="100%">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Brand</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach ($boats as $boat)
        <tr>
            <td>{{ $boat->name }}</td>
            <td>{{ $boat->price }}</td>
            <td>{{ $boat->brand }}</td>
            <td><a class="edit" href="{{ url('boats') }}/edit/{{ $boat->id }}">Edit</a></td>
            <td><a class="delete" href="{{ url('boats') }}/delete/{{ $boat->id }}">Delete</a></td>
        </tr>
    @endforeach
</table>