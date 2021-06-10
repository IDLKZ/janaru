<div class="table-responsive">
    <table class="table" id="categories-table">
        <thead>
            <tr>
                <th>{{__("admin.title_ru")}}</th>
        <th>{{__("admin.title_kz")}}</th>
        <th>{{__("admin.subtitle_ru")}}</th>
        <th>{{__("admin.subtitle_kz")}}</th>
        <th>{{__("admin.img")}}</th>
                <th colspan="3">{{__("admin.action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->title_ru }}</td>
            <td>{{ $category->title_kz }}</td>
            <td>{{ $category->subtitle_ru }}</td>
            <td>{{ $category->subtitle_kz }}</td>
            <td><img src="{{ $category->img }}" width="100px"></td>
                <td width="120">
                    {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('categories.show', [$category->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('categories.edit', [$category->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm(".__("admin.sure").")"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{$categories->links()}}
    </div>
</div>
