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
                <th>{{$recode->name}}</th>
                <hr>
            </tr>
  @endforeach
  </div>
</body>
</html>