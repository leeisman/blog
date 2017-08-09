<ul class="topnav" id="myTopnav">

    @if($lang =='en')
        <li>
            <a href="/">
                <img src="../images/gif_tw.gif" alt="中文(繁體)" title="中文(繁體)">
                繁體中文
            </a>
        </li>
    @endif

    @if($lang !='en')
        <li>
            <a href="/en">
                <img src="../images/gif_us.gif" alt="中文(繁體)" title="中文(繁體)">
                English
            </a>
        </li>
    @endif


    @foreach($menu as $key=>$row)
        <li class="{{$row['class']}}">
            <a id="{{$key}}"
               href="{{$row['url']}}">
                {{$row['name']}}
            </a>
        </li>
    @endforeach


    <li class="icon">
        <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
    </li>
</ul>
