<!DOCTYPE html>
<head>
    <title>Choisir une Classe et un Module</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
            color: #333;
        }
        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Choisir une Classe et un Module :</h2>
        <form action="{{ route('Classe.') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="classe">Classe:</label>
                <select id="classe" class="form-control" required>
                    <option value="">Sélectionnez une classe</option>
                    @foreach ($classes as $classe)
                        <option value="{{ $classe->classe }}">{{ $classe->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="module">Module:</label>
                <select id="module" class="form-control" required>
                    <option value="">Sélectionnez un module</option>
                    <!-- Ajoutez ici les options de module dynamiquement -->
                    @foreach ($modules as $module)
                        <option value="{{ $module->id }}">{{ $module->nom }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
</body>
</html>
