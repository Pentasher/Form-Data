<div class="create-form">
    <h1 class="create-txt">Create</h1>
    <form action="{{ url('tablets') }}" method="post">
        @csrf
        <input type="text" name="name" value="{{ $tablet->name ?? '' }}"><br>
        <input type="number" name="price" value="{{ $tablet->price ?? '' }}"><br>
        <input type="text" name="brand" value="{{ $tablet->brand ?? '' }}"><br>
        <input class="submit" type="submit" value="Submit">
    </form>
</div>
@include('menu')