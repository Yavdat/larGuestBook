<div class="messages">
    @foreach($messages as $item)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">

                    <span>{{$item->name}}</span>

                    <span class="pull-right label label-info">{{$item->updated_at}}</span>

                </h3>
            </div>
            <div class="panel-body">
                {{$item->message}}
                <hr>
                <div class="pull-right">
                    <a href="#" class="btn btn-info">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>
                    <button class="btn btn-danger">
                        <i class="glyphicon glyphicon-trash"></i>
                    </button>
                </div>
            </div>
        </div>
    @endforeach
    <div class="text-center">
        {!!$messages->render()!!}
    </div>
</div>