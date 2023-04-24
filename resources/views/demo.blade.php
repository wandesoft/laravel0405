<html>
<head></head>
{{--<body>Demo Ce Shi {{$year or 'default'}} 年{{$month or 'default'}} 月 {{$day or 'default'}}日</body>--}}



{{--<body>member {{ $member[0]->name }}--}}



titel <a href="{{ isset($title)?$title:''}}">百度</a> @{{ $title }}</br>


时间  {{ date('Y-m-d H:i:s',($time || '')) }} </br> md5 {{ md5($time || '') }} </br>



<table border="1">
    <tr>
        <td>ID</td>
        <td>姓名</td>
        <td>年龄</td>
        <td>邮箱</td>
    </tr>
    @foreach ($member as $m)
        @if ($m->id > 8)
        <tr>
            <td>{{ $m->id }}</td>
            <td>{{ $m->name }}</td>
            <td>{{ $m->age }}</td>
            <td>{{ $m->email }}</td>
        </tr>
        @else
            <tr>
                <td colspan="4">没有更多</td>
            </tr>
        @endif
    @endforeach
</table>
</body>
</html>
