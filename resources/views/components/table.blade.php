<link rel="stylesheet" href="{{ asset('css/components/table.css') }}">
<table>
    <thead>
        <tr>
            @foreach($data->first()->toArray() as $column => $value)
                <td>{{ $column }}</td>
            @endforeach
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $row)
            <tr>
                @foreach($row->toArray() as $value)
                    <td>{{ $value }}</td>
                @endforeach
                <td><a href="{{ url()->current() }}/{{ $namaTabel }}/{{ $row->getKey() }}">Edit</a></td>
            </tr>
        @endforeach
    </tbody>
</table>