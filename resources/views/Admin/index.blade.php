<htm>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/page.css') }}"/>
        <script>
            $('#showmsg').fadeOut(1000);
        </script>
    </head>
    <body>


   当前时间是： {{ date('Y-m-d H:i:s',time())  }}


   @if(Session::has('msg'))
       <div id="showmsg" style="border: 1px solid red;background: gray;width: 100%;" class="alert alert-info"> {{Session::get('msg')}}
       </div>
   @endif
    <div>
        <table border="1px">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Img</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($members as $member)
                <tr>
                    <td>{{$member->name}}</td>
                    <td>{{$member->age}}</td>
                    <td>{{$member->email}}</td>
                    <td><img style="height: 30px;width: 30px" src="{{ $member->face }}"></td>
                    <td><a href="{{ url('admin/member/'.$member->id.'/edit') }}">编辑</a></td>
                    @method('DELETE')
                    <td><a href="{{url('admin/member/'.$member->id)}}">删除</a></td>
                </tr>
                @endforeach


            <tr class="pagination"><td colspan="9">总记录{{ $members->total() }} 当前页{{ $members->currentPage() }} {{$members->render()}}</td></tr>


            </tbody>
        </table>
        </div>
    </body>
</htm>
