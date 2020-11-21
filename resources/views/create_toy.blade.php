<div class="create-form">
    <h1 class="create-txt">Create</h1>
    <form action="{{ url('toys') }}" method="post">
        @csrf
      <input type="text"  name="name" placeholder="name" value="{{ $toys->name ?? '' }}"><br>
      <input type="number"  name="price" placeholder="price" value="{{ $toys->price ?? '' }}"><br>
      <input class="submit" type="submit" value="Submit">
    </form> 
</div>
@include('menu')