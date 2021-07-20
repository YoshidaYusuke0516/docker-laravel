<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Add Page</title>
</head>
<body>
  <div>
  {!! Form::open() !!}
    <div>
        名前:{!! Form::text('name', null) !!}
    </div>
    <div>
        メール:{!! Form::text('email', null) !!}
    </div>
    <div>
        パスワード:{!! Form::text('password', null) !!}
    </div>
    <div>
        {!! Form::submit('登録') !!}
    </div>
　{!! Form::close() !!}
  </div>
</body>
</html>