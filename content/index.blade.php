<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(session()->has('success'))
    <x-form id-name="contents" channels="job-contents">
        <input name="name" value="{{session()->get('entry')['name']}}">
        <button>Find Jobs</button>
    </x-form>
    <h1>Olá {{session()->get('entry')['name']}}</h1>
    @php($contents = session()->get('responses')['job-contents']['contents'])
    @foreach($contents as $content)
    <div>
        <h2>{{$content['title']}}</h2>
        <div>{!!$content['data_fields']["stellenbeschreibung"]!!}</div>
    </div>
    @endforeach
    @else
    <x-form id-name="contents" channels="job-contents">
        <input name="name">
        <button>Find Jobs</button>
    </x-form>
    @endif
</body>
</html>