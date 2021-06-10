<div class="table-responsive">
    <table class="table" id="videos-table">
        <thead>
            <tr>
                <th>{{__("admin.course_id")}}</th>
                <th>{{__("admin.title_ru")}}</th>
                <th>{{__("admin.title_kz")}}</th>

                <th>{{__("admin.img")}}</th>
                <th>{{__("admin.link")}}</th>
                <th colspan="3">{{__("admin.action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($videos as $video)
            <tr>
                <td>{{ LaravelLocalization::getCurrentLocale() == "ru" ?  $video->course->title_ru : $video->course->title_kz }}</td>
            <td>{{ $video->title_ru }}</td>
            <td>{{ $video->title_kz }}</td>
            <td><img src="{{ $video->img }}" width="100px"></td>
                <td>{{ $video->link }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['videos.destroy', $video->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('videos.show', [$video->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('videos.edit', [$video->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
