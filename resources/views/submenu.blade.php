<ul class="flex-column pl-2 nav">
{{--    {{$inc += 1}}--}}
    @foreach($categories as $category)

        <li class="nav-item">
            <a class="nav-link  text-truncate collapsed py-1" href="#submenu{{$inc}}sub{{$loop->iteration}}"
               data-toggle="collapse" data-target="#submenu{{$inc}}sub{{$loop->iteration}}">
                <span>{{ $category->name }}</span>
            </a>
        </li>
        @if($category->groupsCat->count() > 0)
            <div class="collapse" id="submenu{{$inc}}sub{{$loop->iteration}}" aria-expanded="false">
                @include('submenu', ['categories' => $category->groupsCat, 'inc' => $inc+=1])
            </div>
        @endif
    @endforeach
</ul>
