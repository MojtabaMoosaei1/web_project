

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
            @foreach ($quizzes  as $quize)


            <tr class="table-panel-tr">
                <td>{{ $quize->id}}</td>
                <td>{{ $quize->title}}</td>
                <td>{{ $quize->question_count}}</td>
                <td>{{ $quize->score}}</td>
                <td>{{ $quize->time_limit}}</td>



                <td>
                    <div class="button-container">
                        <button class="start-btn edit-btn">ویرایش</button>
                        <form action="{{ url('Dashboard/deleted') }}" method="GET" >
                            {{-- @csrf --}}
                            <input type="hidden" name="quiz_id" value="{{ $quize->id }}">
                            <button type="submit" class="start-btn delete-btn">حذف</button>
                        </form>
                    </div>
                </td>


            </tr>
            @endforeach


        </table>
    </div>
</div>
