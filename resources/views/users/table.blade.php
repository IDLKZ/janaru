<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
        <th>{{__("admin.img")}}</th>
        <th>{{__("admin.is_admin")}}</th>
        <th>{{__("admin.name")}}</th>
        <th>{{__("admin.surname")}}</th>
        <th>{{__("admin.middlename")}}</th>
        <th>{{__("admin.email")}}</th>
        <th>{{__("admin.phone")}}</th>
        <th>{{__("admin.work")}}</th>
        <th>{{__("admin.birthday")}}</th>
        <th>{{__("admin.city")}}</th>
        <th>{{__("admin.email_verified")}}</th>
                <th colspan="3">{{__("admin.action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
            <td>
                <img src="{{$user->img}}" width="100%">
            </td>
            <td>{{ $user->is_admin == 1 ? __("admin.admin") : __("admin.user") }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->surname }}</td>
            <td>{{ $user->middlename }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->work }}</td>
            <td>{{ $user->birthday }}</td>
            <td>{{ $user->city }}</td>
            <td>{{  $user->email_verified == 1 ? __("admin.confirmed") : __("admin.not_confirmed") }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.show', [$user->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('users.edit', [$user->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm(". __("admin.sure") .")"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
