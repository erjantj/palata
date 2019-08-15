<ul class="links">
    @foreach($items as $menu_item)
        <li><a href="{{ $menu_item->url }}" class="hvr-forward">{{ $menu_item->title }}</a></li>
    @endforeach
</ul>