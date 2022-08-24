<table>
    <thead>
    <tr>
        <th><strong>N°</strong></th>
        <th><strong>Nombres</strong></th>
        <th><strong>Apellidos</strong></th>
        <th><strong>Documento</strong></th>
        <th><strong>Teléfono</strong></th>
        <th><strong>Dirección</strong></th>
        <th><strong>Email</strong></th>
        <th><strong>N° de compra</strong></th>
        <th><strong>Tipo de operación</strong></th>
        <th><strong>Tarjeta marca</strong></th>
        <th><strong>Tarjeta</strong></th>
        <th><strong>Taller - Categoría - Fecha taller</strong></th>
        <th><strong>Fecha de compra</strong></th>
    </tr>
    </thead>
    <tbody>
    @foreach($records as $record)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $record->user_name }}</td>
            <td>{{ $record->user_lastname }}</td>
            <td>{{ $record->user_document }}</td>
            <td>{{ $record->user_telephone }}</td>
            <td>{{ $record->user_address }}</td>
            <td>{{ $record->user_email }}</td>
            <td>{{ $record->purchase_number }}</td>
            <td>{{ $record->operationType }}</td>
            <td>{{ $record->effectiveBrand }}</td>
            <td>{{ $record->card }}</td>
            <td>
                <ul>
                @foreach ($record->detail as $item)
                    <li>{{ $item['name'] }} - {{ $item['category'] }} - {{ \Carbon\Carbon::parse($item['event_date'])->format('d/m/Y') }}</li>
                @endforeach
                </ul>
            </td>
            <td>{!! \Carbon\Carbon::parse($record->transaction_date)->format('d/m/Y H:i:s') !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>