<style>
    .news{
        border: 1px solid rgb(17, 85, 210);
        border-radius: 5px;
        margin: 5px;
    }
    .pagination {
  list-style: none;
  padding-left: 0;
  text-align: center;
}

.pagination li {
  display: inline-block;
}

.pagination li+li {
  margin-left: 1rem;
}

.pagination a {
  text-decoration: none;
  padding: 0.2rem 0.4rem;
  color: rgb(0, 0, 50);
  border: 1px solid rgb(22, 113, 211);
  border-radius: 20px;
}
.pagination a.active {
  background-color: #4CAF50;
  color: white;
}
</style>

@extends('app')
@section('content')
<center>
  <strong>Latest news</strong>
</center>

<br>
<div class="row">
<div>
<marquee behavior="" direction="">
@foreach ($latestnews as $lnws)

    <img src="images/news/{{ $lnws['photo'] }}" width="50" height="50" style="border-radius: 50%" alt="">
{{ $lnws['title'] }}
{{ $lnws['description'] }}
@endforeach
</marquee>
</div>
<div>
   <!-- The form -->
<form class="example" action="action_page.php">
    <input type="text" placeholder="Search.." name="search">
  </form>
</div>
</div>
@forelse ( $news as $nws )
<div class="news">
    {{ $nws['title'] }}<br>
    <img src="images/news/{{ $nws['photo'] }}" width="100" height="100" style="border-radius: 50%" alt="">
    {{ $nws['description'] }}<br>
    {!! $nws['detail'] !!}<br>
    {{ $nws['post_date'] }}

</div>
@empty
No data found
@endforelse
<div class="pgn">
 {{ $news->links() }}
</div>

@endsection

