<div class="menu_block">
    <nav>
        <ul class="sf-menu">
            @foreach($menu as $key=>$row)
                <li class="{{$row['class']}}">
                    <a id="{{$key}}"
                       href="{{$row['url']}}">
                        {{$row['name']}}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
    <div class="clear"></div>
</div>
