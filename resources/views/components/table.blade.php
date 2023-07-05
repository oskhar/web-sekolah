<link rel="stylesheet" href="{{ asset('css/components/table.css') }}">
<table>
    <thead>
        <tr>
            @foreach($data->first()->toArray() as $column => $value)
                <td>{{ $column }}</td>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach($data as $row)
            <tr>
                @foreach($row->toArray() as $value)
                    <td>{{ $value }}</td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>