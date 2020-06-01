<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{{ $title ?? ''  }}</title>
    </head>
    <body>
        <h3>Timesheet - {{ $date }} - {{ $name }}</h3>

        @foreach($dayData as $day)

            <div>{{ $day->day }} - {{ $day->date }} |   
                @if($day->data)
                    @isset($day->data->start)
                        {{$day->data->start}} - {{$day->data->end}} | 
                        Break 20: {{$day->data->break_20 ? 'Y' : 'N'}} | Break 30: {{$day->data->break_30 ? 'Y' : 'N'}}
                    @endisset
                    @empty($day->data->start)
                        Non Work Day
                    @endempty
                @endisset
            </div>
            <div>
               
                @isset($day->data->reason)
                    @if (!empty ( $day->data->reason))
                        <div>Reason: {{$day->data->reason}}</div>
                    @endif
                @endempty

                @isset($day->data->sites)
                    @foreach($day->data->sites as $site)
                        {{$site->title}}: {{$site->timeSpent}}
                    @endforeach
                @endisset
            </div>
            <hr>

        @endforeach

    </body>
</html>