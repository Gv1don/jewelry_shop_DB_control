@extends('header')

@section('content')
<nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <div>
        <a class="navbar-brand" href="#">Jewerly shop</a>
    </div>
    <form action="{{ route('create') }}" method="GET">
        @csrf
        <button name="type" value="buyer" type="submit" class="btn btn-primary">Создать запись</button>
    </form>
    <div>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav">
            <form class="nav-item">
                @csrf
                <a class="nav-link active" aria-current="page" href="#">Orders</a>
            </form>
            <form class="nav-item">
                @csrf
                <a class="nav-link active" aria-current="page" href="#">Buyers</a>
            </form>
            <form class="nav-item">
                @csrf
                <a class="nav-link active" aria-current="page" href="#">Products</a>
            </form>
            <form class="nav-item">
                @csrf
                <a class="nav-link active" aria-current="page" href="#">Types</a>
            </form>
        </ul>
        </div>
    </div>
  </div>
</nav>

    <main>
        @switch($type)
            @case('types')
                @include('types')
                @break
            @case('products')
                @include('products')
                @break
            @case('orders')
                @include('orders')
                @break
            @case('buyers')
                @include('buyers')
                @break
        @endswitch
    </main>
@endsection