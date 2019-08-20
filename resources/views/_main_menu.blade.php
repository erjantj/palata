<ul class="nav navbar-nav pull-right">
    @foreach($items as $menu_item)
    	<li>
    	@if(substr(url()->current(), 0, strlen(url($menu_item->link()))) === url($menu_item->link()))
            <a href="{{ $menu_item->url }}" class="active">{{ $menu_item->title }}</a>
        @else
        	<a href="{{ $menu_item->url }}">{{ $menu_item->title }}</a>
        @endif
        </li>
    @endforeach
</ul>
