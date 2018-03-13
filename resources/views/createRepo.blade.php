@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@if(Session::has('success'))
    <div class="alert alert-info">
        {{ Session::get('success') }}
    </div>
@endif
<form method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    Nom du dossier
    <br />
    <input type="text" name="name" />
    <br /><br />
    <input type="submit" value="Créer" />
</form>