@include('menu')
<a class="create-button" href="{{ url('toys/create') }}">Create</a>
<table width="100%">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($toys as $toy)
    <tr>
        <td>{{ $toy->name }}</td>
        <td>{{ $toy->price }}</td>
        <td><a class="edit" href="{{ url('toys') }}/edit/{{ $toy->id }}">edit</a></td>
        <td><a class="delete" href="{{ url('toys') }}/delete/{{ $toy->id }}">delete</a></td 
    </tr>
    @endforeach
</table>