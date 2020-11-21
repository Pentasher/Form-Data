<div class="create-form">
  <h1 class="create-txt">Edit Data</h1>
    <form action="{{ url('cars') }}/update/{{ $cars->id }}" method="put">
        @csrf
      <input type="text"  name="name" placeholder="name" value="{{ $cars->name ?? '' }}"><br>
      <input type="text"  name="brand" placeholder="brand" value="{{ $cars->brand ?? '' }}"><br>
      <input type="text"  name="price" placeholder="price" value="{{ $cars->price ?? '' }}"><br>
      <input class="submit" type="submit" value="Submit">
    </form> 
</div>
@include('menu')