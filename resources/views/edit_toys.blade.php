<div class="create-form">
  <h1 class="create-txt">Edit Data</h1>
    <form action="{{ url('toys') }}/update/{{ $toys->id }}" method="put">
      <input type="text"  name="name" placeholder="name" value="{{ $toys->name ?? '' }}"><br>
      <input type="text"  name="price" placeholder="price" value="{{ $toys->price ?? '' }}"><br>
      <input class="submit" type="submit" value="Submit">
    </form> 
</div>
@include('menu')