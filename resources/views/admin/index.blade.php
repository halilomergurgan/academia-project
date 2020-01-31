@extends('admin.template')

@section('content')
    <div class="row-fluid">
        <div class="widget-box">
            <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
                <h5>Site Analytics</h5>
            </div>
            <div class="widget-content">
                <div class="row-fluid">
                    <div class="span12">
                        <ul class="site-stats">
                            <li class="bg_lh" style="background: #27a9e3;"><i class=""></i>
                                <strong>{{$count['news']}}</strong>
                                <small>Total News</small>
                            </li>
                            <li class="bg_lh" style="background: #27a9e3;"><i class=""></i>
                                <strong>{{$count['slider']}}</strong>
                                <small>Total Slider</small>
                            </li>
                            <li class="bg_lh" style="background: #27a9e3;"><i class=""></i>
                                <strong>{{$count['courses']}}</strong>
                                <small>Total Course</small>
                            </li>
                            <li class="bg_lh" style="background: #27a9e3;"><i class=""></i>
                                <strong>{{$count['articles']}}</strong>
                                <small>Total Article</small>
                            </li>
                            <li class="bg_lh" style="background: #27a9e3;"><i class=""></i>
                                <strong>{{$count['magazines']}}</strong>
                                <small>Total Magazine</small>
                            </li>
                            <li class="bg_lh" style="background: #27a9e3;"><i class=""></i>
                                <strong>{{$count['teachers']}}</strong>
                                <small>Total Teacher</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h3 style="text-align: center;">Calendar</h3>

    <div id='calendar'></div>

@endsection

@section('css')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
@endsection

@section('js')
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script>
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                events : [
                        @foreach($tasks as $task)
                    {
                        title : '{{ $task->name }}',
                        start : '{{ $task->task_date }}',
                        url : '{{ route('tasks.edit', $task->id) }}',

                    },
                    @endforeach
                ]
            })
        });
    </script>
@endsection
