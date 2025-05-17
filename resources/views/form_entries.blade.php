<html>
<h2>Form Entries</h2>

@foreach ($entries as $entry)
    <div style="margin-bottom: 15px;">
        <strong>Username:</strong> {{ $entry->username }}<br>
        <strong>Email:</strong> {{ $entry->email }}<br>
        <strong>Phone Number:</strong> {{ $entry->phone }}<br>
        <strong>Password:</strong> {{ $entry->password }}<br>
        <strong>Gender:</strong> {{ $entry->gender }}<br>
        <em>Submitted at: {{ $entry->created_at }}</em>
    </div>
@endforeach
</html>