<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- font awesome --}}
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"
        integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous">
    </script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .header {
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .header .headerRight {
            margin-left: auto;
        }

        .subHeader {
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .subHeader .totalManager {
            margin-left: auto;
        }

        .content .table,
        .footer {
            text-align: center;
        }

        .content .table {
            /*自動斷行*/
            word-wrap: break-word;
            table-layout: fixed;
        }

        .content .table tr td {
            vertical-align: middle;
        }

        .content a {
            color: inherit;
        }

        .pagination {
            justify-content: center;
        }

        .pagination .page-item .page-link {
            color: inherit;
        }

        .pagination .page-item.active .page-link {
            color: var(--light);
            background-color: var(--dark);
            border-color: var(--dark);
        }

        .pagination .page-item .page-link:active,
        .pagination .page-item .page-link:focus {
            box-shadow: none;
        }
    </style>
    <title>管理員列表</title>
</head>

<body>
    <div class="container">
        <div class="header mt-5">
            <div class="hraderLeft">
                <span>日期範圍：</span>
                <input type="date">
                <span>-</span>
                <input type="date">
            </div>
            <div class="headerRight">
                <input type="text" placeholder="輸入關鍵字">
                <button type="submit" class="btn btn-dark">搜尋</button>
            </div>
        </div>
        <div class="subHeader mt-4">
            <div>
                <button type="submit" class="btn btn-danger">批量刪除</button>
                <button type="submit" class="btn btn-success ml-3">新增管理員</button>
            </div>
            <div class="totalManager">
                <span>一頁顯示</span>
                <select id="count" name="count" onChange="newFunction(value)">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                </select>
                <span>筆</span>
                <span>共有筆數：{{ $data->total() }}筆</span>
            </div>

        </div>
        <div class="content mt-5">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th width="40px"><input type="checkbox" name="" value=""></th>
                        <th width="50px">ID</th>
                        <th width="165px">管理員</th>
                        <th width="80px">手機</th>
                        <th width="150px">信箱</th>
                        <th width="40px">權限</th>
                        <th width="100px">新增時間</th>
                        <th width="60px">啟用狀態</th>
                        <th width="60px">操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $value)
                        <tr>
                            <td><input type="checkbox" value="{{ $value->id }}" name=""></td>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->username }}</td>
                            <td>{{ $value->mobile }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->role_id }}</td>
                            <td>{{ $value->created_at }}</td>
                            <td class="status">
                                @if ($value->status == '2')
                                    <span><i class="far fa-check-circle text-success"></i></span>
                                @else
                                    <span><i class="fas fa-ban text-danger"></i></span>
                                @endif
                            </td>
                            <td>
                                <a target="iframe-welcome" href="#"><i class="fas fa-edit"></i></a>
                                <a target="iframe-welcome" href="#"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="pagination">
            <div class="my-5">
                {{ $data->links() }}
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <p>
                    Copyright &copy; XXXXXX by Winho<br>
                    XXXX股份有限公司<br>
                </p>
            </div>
        </footer>
    </div>
</body>
<script>
    function newFunction(newVal) {
        window.location.href = '/admin/manager/index/value=' + newVal;
    }
</script>

</html>
