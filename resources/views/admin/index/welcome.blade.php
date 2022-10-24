<style>
    .welcome {
        color: var(--dark);
        padding: 1rem;
    }
    
    .welcome .content .table1,
    .footer {
        text-align: center;
    }

    .welcome .content .table {
        color: var(--dark);
    }
    .welcome .content .table1 .table1Title {
        text-align: left;
    }
</style>
@extends('admin.index.index')
@section('content')
<div class="welcome">
    <div class="header">
        <div class="row mt-5 ml-1">
            <h5>歡迎使用XX後台系統</h5>
        </div>
        <div class="row mt-3 ml-1">
            <p>登錄次數：99</p>
        </div>
        <div class="row mt-1 ml-1">
            <p>上次登錄IP：192.168.0.0.1 上次登錄時間：1970-12-31 12:00:00</p>
        </div>
    </div>
    <div class="content">
        <table class="table table1 table-bordered">
            <thead class="thead-light">
                <tr>
                    <th class="table1Title" colspan="7" scope="row">統計資訊</th>
                </tr>
                <tr>
                    <th>統計</th>
                    <th>資訊庫</th>
                    <th>圖片庫</th>
                    <th>產品庫</th>
                    <th>用戶</th>
                    <th>管理員</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>總數</td>
                    <td>92</td>
                    <td>9</td>
                    <td>0</td>
                    <td>8</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>今日</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>昨日</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>本週</td>
                    <td>2</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>本月</td>
                    <td>2</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th colspan="2" scope="row">服務器信息</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th width="30%">服務器計算機名</th>
                    <td><span>http://127.0.0.1/</span></td>
                </tr>
                <tr>
                    <td>服務器IP地址</td>
                    <td>192.168.1.1</td>
                </tr>
                <tr>
                    <td>服務器域名</td>
                    <td>www.h-ui.net</td>
                </tr>
                <tr>
                    <td>服務器端口 </td>
                    <td>80</td>
                </tr>
                <tr>
                    <td>服務器IIS版本 </td>
                    <td>Microsoft-IIS/6.0</td>
                </tr>
                <tr>
                    <td>本文件所在文件夾 </td>
                    <td>D:\WebSite\HanXiPuTai.com\XinYiCMS.Web\</td>
                </tr>
                <tr>
                    <td>服務器操作系統 </td>
                    <td>Microsoft Windows NT 5.2.3790 Service Pack 2</td>
                </tr>
                <tr>
                    <td>系統所在文件夾 </td>
                    <td>C:\WINDOWS\system32</td>
                </tr>
                <tr>
                    <td>服務器腳本超時時間 </td>
                    <td>30000秒</td>
                </tr>
                <tr>
                    <td>服務器的語言種類 </td>
                    <td>Chinese (People's Republic of China)</td>
                </tr>
                <tr>
                    <td>.NET Framework 版本 </td>
                    <td>2.050727.3655</td>
                </tr>
                <tr>
                    <td>服務器當前時間 </td>
                    <td>2014-6-14 12:06:23</td>
                </tr>
                <tr>
                    <td>服務器IE版本 </td>
                    <td>6.0000</td>
                </tr>
                <tr>
                    <td>服務器上次啟動到現在已運行 </td>
                    <td>7210分鐘</td>
                </tr>
                <tr>
                    <td>邏輯驅動器 </td>
                    <td>C:\D:\</td>
                </tr>
                <tr>
                    <td>CPU 總數 </td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>CPU 類型 </td>
                    <td>x86 Family 6 Model 42 Stepping 1, GenuineIntel</td>
                </tr>
                <tr>
                    <td>虛擬內存 </td>
                    <td>52480M</td>
                </tr>
                <tr>
                    <td>當前程序佔用內存 </td>
                    <td>3.29M</td>
                </tr>
                <tr>
                    <td>Asp.net所佔內存 </td>
                    <td>51.46M</td>
                </tr>
                <tr>
                    <td>當前Session數量 </td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>當前SessionID </td>
                    <td>gznhpwmp34004345jz2q3l45</td>
                </tr>
                <tr>
                    <td>當前系統用戶名 </td>
                    <td>NETWORK SERVICE</td>
                </tr>
            </tbody>
        </table>
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
@endsection
