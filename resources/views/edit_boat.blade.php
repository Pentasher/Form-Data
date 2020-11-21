<div class="create-form">
    <h1 class="create-txt">Edit Data</h1>
    <form action="{{ url('boats') }}/update/{{ $boat->id }}" method="put">
        @csrf
        <input type="text" name="name" placeholder="name" value="{{ $boat->name ?? '' }}"><br>
        <input type="text" name="price" placeholder="price" value="{{ $boat->price ?? '' }}"><br>
        <input type="text" name="brand" placeholder="brand" value="{{ $boat->brand ?? '' }}"><br>
        <input class="submit" type="submit" value="Submit">
    </form>
</div>
@include('menu')