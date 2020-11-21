<div class="create-form">
    <h1 class="create-txt">Edit Data</h1> 
    <form action="{{ url('vehicles') }}/update/{{ $vehicles->id }}" method="put">
    @csrf
        <input type="text" name="name" placeholder="name" value="{{ $vehicles->name ?? '' }}"><br>
        <input type="text" name="brand" placeholder="brand" value="{{ $vehicles->brand ?? '' }}"><br>
        <input type="text" name="price" placeholder="price" value="{{ $vehicles->price ?? '' }}"><br>
        <input type="text" name="quantity" placeholder="quantity" value="{{ $vehicles->quantity ?? '' }}"><br>
        <input class="submit" type="submit" value="Submit">
    </form>
</div>
@include('menu')