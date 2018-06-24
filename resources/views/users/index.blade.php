@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
            <th>Username</th>
            <th>E-mail</th>
            <th>Access Rights</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{\App\Enums\AccessRights::NAMES[$user->access_rights]}}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination">
                        {{$users->links()}}
                    </ul>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
@endsection
