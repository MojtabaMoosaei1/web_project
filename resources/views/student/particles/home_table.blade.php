
<div id="HomeTable" class='table-home' style="background-color: #eeeeee;" >
    <div class="panel">
        <table class=" table-panel">
            <tr style="color: #333333;">
                <th>ردیف </th>
                <th>موضوع</th>
                <th>تعداد سوالات</th>
                <th>نمرات</th>
                <th>زمان پاسخگویی</th>
                <th></th>
            </tr>

            @foreach ($quizzes as $quize )

            <tr class="table-panel-tr">
                <td>{{$quize->id}}</td>
                <td>{{$quize->title}}</td>
                <td>{{$quize->question_count}}</td>
                <td>{{$quize->score}}</td>
                <td>{{$quize->time_limit}}</td>
                <td>
                    <a href="{{ url('Panel/show_examp' , ['id' => $quize->id]) }}" class="start-btn" >
                        <i class="fa fa-external-link"></i>  شروع
                    </a>
                </td>
            </tr>
            @endforeach

        </table>
    </div>
</div>
