<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>List TOP Page</title>
</head>
<body>
  <div>
  @foreach($value as $recode)
            <tr>
                <th>{{$recode->id}}</th>
                <div><a href="/index/detail/{{ $recode->id }}">{{ $recode->name }}</a>
                <hr>
            </tr>
  @endforeach
  </div>
  <div>
    <a href="{{ url('/hello') }}"> Laravel </a>
  </div>
  <div>
    <a href="/index/add">投稿</a>
  </div>
</body>
</html>