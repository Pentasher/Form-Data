<div class="create-form">
    <h1 class="create-txt">Edit Data</h1>
    <form form action="{{ url('tablets') }}/update/{{ $tablet->id }}" method="put">
        @csrf
        <input type="text" name="name" value="{{ $tablet->name ?? '' }}"><br>
        <input type="text" name="price" value="{{ $tablet->price ?? '' }}"><br>
        <input type="text" name="brand" value="{{ $tablet->brand ?? '' }}"><br>
        <input class="submit" type="submit" value="Submit">
    </form>
</div>
@include('menu')