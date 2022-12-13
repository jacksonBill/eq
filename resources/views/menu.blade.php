@extends('layout.index')
@section('menu')
    <ul class="nav flex-column flex-nowrap overflow-hidden">
        @foreach($rootCategories as $rootCategory)
            <li class="nav-item">
                <a class="nav-link collapsed text-truncate" href="#submenu{{$loop->iteration}}" data-toggle="collapse"
                   data-target="#submenu{{$loop->iteration}}">
                        <span class="d-none d-sm-inline">
                            {{ $rootCategory->name }} {{$rootCategory->count()}}
                        </span>
                </a>
                <div class="collapse" id="submenu{{$loop->iteration}}" aria-expanded="false">
                    @if($rootCategory->groupsCat->count() > 0)
                        @include('submenu', ['categories' => $rootCategory->groupsCat, 'inc' => 1])
                    @endif
                </div>
            </li>
        @endforeach
    </ul>
@endsection
