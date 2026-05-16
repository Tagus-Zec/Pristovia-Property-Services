<!DOCTYPE html>
<html>
<head>
    <title>Admin - Contacts</title>
</head>
<body>

<h1>Messages Contact</h1>

@if(isset($contacts) && count($contacts))
    @foreach($contacts as $contact)
        <div style="border:1px solid #ccc; padding:10px; margin-bottom:10px;">
            <h3>{{ $contact->name }}</h3>
            <p>{{ $contact->email }}</p>
            <p>{{ $contact->message }}</p>
            <small>{{ $contact->created_at }}</small>
        </div>
    @endforeach
@else
    <p>Aucun message pour le moment.</p>
@endif

</body>
</html>