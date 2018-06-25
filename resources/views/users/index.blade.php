@extends('layouts.app')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>{{include('../resources/assets/js/users/access_rights.js')}}</script>

@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
            <th>Username</th>
            <th>E-mail</th>
            <th>Access Rights</th>
            <th>More</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="user_data-name">{{$user->name}}</td>
                    <td class="user_data-email">{{$user->email}}</td>
                    <td class="user_data-access_rights">{{\App\Enums\AccessRights::NAMES[$user->access_rights]}}</td>
                    <td>
                        <button user-id="{{$user->id}}" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                            Change access rights
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">
                    <ul class="pagination">
                        {{$users->links()}}
                    </ul>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
@include('users.partials.access_rights')
@endsection
