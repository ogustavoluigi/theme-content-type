<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <h3>Filtros</h3>
    <div>
        @foreach($listGroups as $listGroup)
            <h4>{{$listGroup->name}}</h4>
            @foreach($listGroup->lists as $listGroupList)
                <div class="form-check">
                    <input class="form-check-input check-branche" type="checkbox" value="{{$listGroupList->slug}}" id="flexCheck{{$listGroupList->name}}" {{$listGroupList->id == $list->id || (!is_null($filters) && in_array($listGroupList->slug, $filters))?"checked":""}}>
                    <label class="form-check-label" for="flexCheck{{$listGroupList->name}}">
                        {{$listGroupList->name}}
                        <span class="badge bg-light text-dark">({{$listGroupList->contents($listGroupList)->count()}} Jobs)</span>
                    </label>
                </div>
            @endforeach
        @endforeach
    </div>
    <br>
    <h3>Tarefas</h3>
    <div>
        <ul>
            @foreach($contents as $indexContent => $content)
            <li>
                <h4>{{$content->title}}</h4>
            </li>
            @endforeach
        </ul>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('.check-branche').change(function(){
            let url = "{{route('index')}}";
            let filters = []
            $('.check-branche:checked').each(function(index, item){ filters.push($(item).val()); });
            filters = filters.join('/');
            window.location.replace(`${url}/${filters}`);
        });
    </script>
</body>
</html>