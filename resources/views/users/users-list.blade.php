@extends("layouts.master")

@section("content")

    <style>

        .user-data {
            margin-top: 20px;
            padding: 100px;
        }

        .form {
            display: inline;
            margin-bottom: 20px;

        }

        .buttons {
            margin-bottom: 20px;
        }

        .btn {
            font-size: 15px;
        }

        .d-flex {
            margin-top: 20px;
        }
    </style>

<div class="user-data m-b-30">
    <div class="buttons">
        <form class="form" action="#" method="get">
            <button type="submit" class="btn btn-success">Üye Ekle</button>
        </form>
        <form class="form" action="#" method="get">
            <button type="submit" class="btn btn-primary">Üyelik İsteklerini İncele</button>
        </form>
        <form class="form" action="#" method="get">
            <button type="submit" class="btn btn-danger">Üye Listesini İndir</button>
        </form>
        <form class="form" action="#" method="get">
            <button type="submit" class="btn btn-warning">Üye Listesini Yükle</button>
        </form>
    </div>
        <table class="table table-borderless table-data3">
            <thead>
            <tr>
                <th>ID</th>
                <th>Adı Soyadı</th>
                <th>Firma Adı</th>
                <th>Rolü</th>
                <th>Detay</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->company_name}}</td>
                    <td>{{$user->role->role_name}}</td>
                    <td class="process"><a href="{{route("edit.users", $user->id)}}">detay</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {{ $users->onEachSide(5)->links() }}
         </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="copyright">
                <p>Copyright © 2020 <a href="https://huseyindas.com">huseyindas.com</a>. Tüm hakları saklıdır.</p>
            </div>
        </div>
    </div>
    </div>



@endsection
