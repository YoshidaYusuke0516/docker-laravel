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
                <th>{{ $recode->name }}</th>
                <div>
                  <a href="/index/detail/{{ $recode->id }}">詳細</a>
                  <a href="/index/edit/{{ $recode->id }}">編集</a>
                </div>
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