@foreach($menus_items as $item)
    @php
        if(request()->getHost() == "localhost"){
            $segment = config('titles.localHost');
        }else{
            $segment = config('titles.siteUrl');
        }
    @endphp
    <li><a class="nav-link scrollto {{ $item->checkMen($item->men_link) }}" href="{{ $segment.$item->men_link }}">{{ $item->men_name }}</a></li>
@endforeach

