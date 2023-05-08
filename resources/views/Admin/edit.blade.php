<htm>
    <head></head>
    <body>
   当前时间是： {{ date('Y-m-d H:i:s',time())  }}

   @if(count($errors)>0)
       <div style="width: 100%;background: gray;color: white;font-size: 25px;">
           @foreach($errors->all() as $error)
               {{$error}}<br/>
           @endforeach
       </div>
   @endif

   <form method="post" action="{{ url('admin/member/update') }}" enctype="multipart/form-data">
       {{--<input type="hidden" name="_token" value="<?php echo csrf_token()?>"/>--}}
       {{--@csrf--}}
       {{ csrf_field() }}
       <input type="hidden" class="form-control" name="id" id="id" value="{{ $member->id }}">
       <div class="form-group">
           <label for="name">姓名</label>
           <input type="text" class="form-control" name="name" id="name" value="{{ $member->name }}">
       </div>
       <div class="form-group">
           <label for="name">年龄</label>
           <input type="text" class="form-control" name="age" id="age" value="{{ $member->age }}">
       </div>
       <div class="form-group">
           <label for="name">邮箱</label>
           <input type="text" class="form-control" name="email" id="email" value="{{ $member->email }}">
       </div>
       <div class="form-group">
           <label for="name">头像</label>
           <input type="file" class="form-control" name="photo" id="file" >
       </div>
       <button type="submit" class="btn">提交</button>
   </form>
    </body>
</htm>
