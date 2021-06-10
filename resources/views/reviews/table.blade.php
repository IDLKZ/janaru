<div class="table-responsive">
    <table class="table" id="reviews-table">
        <thead>
            <tr>
                <th>{{__("admin.img")}}</th>
        <th>{{__("admin.course_id")}}</th>
        <th>{{__("admin.author")}}</th>
        <th>{{__("admin.title")}}</th>
        <th>{{__("admin.description")}}</th>
                <th colspan="3">{{__("admin.action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($reviews as $review)
            <tr>
                <td><img src="{{ $review->img }}" width="100px"> </td>
            <td>{{ LaravelLocalization::getCurrentLocale() == "ru" ? $review->course->title_ru :  $review->course->title_kz }}</td>
            <td>{{ $review->author }}</td>
            <td>{{ $review->title }}</td>
            <td>{{ $review->description }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['reviews.destroy', $review->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('reviews.show', [$review->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('reviews.edit', [$review->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm(" . __("admin.sure") .")"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
