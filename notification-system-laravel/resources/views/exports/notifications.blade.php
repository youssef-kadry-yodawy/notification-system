<table>
    <thead>
    <tr>
        <th>Recepient Name</th>
        <th>Channel</th>
        <th>Channel Type</th>
        <th>Notification Body</th>
        <th>Send At</th>
    </tr>
    </thead>
    <tbody>
    @foreach($notifications as $notification)
        <tr>
            <td>{{ $notification->recepient_name }}</td>
            <td>{{ $notification->channel }}</td>
            <td>{{ $notification->channel_type }}</td>
            <td>{{ $notification->notification_body }}</td>
            <td>{{ $notification->send_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>