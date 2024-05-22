
<div id="UserTable" class='table-home' style="background-color: #eeeeee;" >
    <div class="panel">
        <table class=" table-panel ">

            <tr style="color: #760707;">
                <th></th>
                <th></th>
                <th>ردیف</th>
                <th>نام</th>
                <th>ایمیل</th>
                <th>شماره موبایل</th>
                <th></th>
            </tr>
            
            @foreach ($users as $user )
                <tr class="table-panel-tr">
                    <td></td>
                    <td></td>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}} </td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone_number}}</td>
                    <td></td>
                </tr>

                @endforeach

        </table>
    </div>
</div>
