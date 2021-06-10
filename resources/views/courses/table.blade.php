<div class="table-responsive">
    <table class="table" id="courses-table">
        <thead>
            <tr>
                <th>{{__("admin.category_id")}}</th>
                <th>{{__("admin.title_ru")}}</th>
                <th>{{__("admin.title_kz")}}</th>
                <th>{{__("admin.img")}}</th>
                <th colspan="3">{{__("admin.action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($courses as $course)
            <tr>
                <td>{{  LaravelLocalization::getCurrentLocale() == "ru" ? $course->category->title_ru : $course->category->title_kz }}</td>
                <td>{{ $course->title_ru }}</td>
                <td>{{ $course->title_kz }}</td>
                <td><img src="{{ $course->img }}" width="100px"></td>
                <th colspan="3">{{__("admin.action")}}</th>
                <td width="120">
                    {!! Form::open(['route' => ['courses.destroy', $course->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('courses.show', [$course->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('courses.edit', [$course->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm(" . __("admin.sure"). ")"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{$courses->links()}}
    </div>
</div>
