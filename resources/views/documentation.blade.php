<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      </head>
        <body>
          <div class="container">
            <div class="row">
              <table class="table">
                <tr>
                  <th>Id</th>
                  <th>Method</th>
                  <th>Endpoint</th>
                  <th>Description</th>
                </tr>

                @foreach($documentation as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  @if($item->method === 'GET')
                    <td class="info">{{$item->method}}</td>
                  @elseif($item->method === 'POST')
                    <td class="success">{{$item->method}}</td>
                  @elseif($item->method === 'PUT')
                    <td class="warning">{{$item->method}}</td>
                  @elseif($item->method === 'DELETE')
                    <td class="danger">{{$item->method}}</td>
                  @endif
                  <td>{{$item->endpoint}}</td>
                  <td>{{$item->description}}</td>
                </tr>
                @endforeach

              </table>
            </div>
          </div>
        </body>
</html>
