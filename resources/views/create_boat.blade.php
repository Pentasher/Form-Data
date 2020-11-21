<div class="create-form">
    <h1 class="create-txt">Create</h1>
    <form action="{{ url('boats') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="name" value="{{ $boat->name ?? '' }}"><br>
        <input type="number" name="price" placeholder="price" value="{{ $boat->price ?? '' }}"><br>
        <input type="text" name="brand" placeholder="brand" value="{{ $boat->brand ?? '' }}"><br>
        <input class="submit" type="submit" value="Submit">
    </form>
</div>
@include('menu')