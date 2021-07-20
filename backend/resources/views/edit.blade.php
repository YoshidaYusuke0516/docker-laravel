<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Edit Page</title>
</head>
<body>
  <div>
  {!! Form::open() !!}
    <div>
      ID:<th>{{$value->id}}</th>
    </div>
    <div>
      名前:{!! Form::text('name', $value->name) !!}
    </div>
    <div>
      メール:{!! Form::text('email', $value->email) !!}
    </div>
    <div>
        {!! Form::submit('編集') !!}
    </div>
　{!! Form::close() !!}
  </div>
</body>
</html>