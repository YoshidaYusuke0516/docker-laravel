<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>List TOP Page</title>
</head>
<body>
  <div>
            <tr>
                <th>{{$value->id}}</th>
                <hr>
                <th>{{$value->name}}</th>
                <hr>
                <th>{{$value->email}}</th>
                <hr>
                <th>{{$value->created_at}}</th>
            </tr>
  </div>
</body>
</html>