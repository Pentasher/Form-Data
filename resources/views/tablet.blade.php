@include('menu')
<a class="create-button" href="{{ url('tablets') }}/create">Create</a>
<table width="100%">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Brand</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach ($tablets as $tablet)
        <tr>
            <td>{{ $tablet->name }}</td>
            <td>{{ $tablet->price }}</td>
            <td>{{ $tablet->brand }}</td>
            <td><a class="edit" href="{{ url('tablets') }}/edit/{{ $tablet->id }}">Edit</a></td>
            <td><a class="delete" href="{{ url('tablets') }}/delete/{{ $tablet->id }}">Delete</a></td>
        </tr>
    @endforeach
</table>