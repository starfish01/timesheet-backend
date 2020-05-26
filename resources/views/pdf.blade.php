<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{{ $title ?? ''  }}</title>
    </head>
    <body>
    <h1>Timesheet - {{ $date }} - {{ $name }}</h1>
        <table>
        <thead>
            <tr>
            <th>Day</th>
            <th>Date</th>
            <th>Email</th>
            <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dayData as $day)
            <tr>
                <td>{{ $day['day'] }}</td>
                <td>{{ $day['date'] }}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </body>
</html>