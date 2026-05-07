<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Painel do Gestor - Estacionamento</title>
    <style>
        
        body { 
            font-family: Arial, sans-serif; 
            background: #f4f4f4; 
            padding: 1.25em; 
            font-size: 100%; 
        }
        
        .container { 
            width: 100%;
            max-width: 50em; 
            margin: auto; 
            background: white; 
            padding: 1.25em; 
            border-radius: 0.5em; 
            box-shadow: 0 0 10px rgba(0,0,0,0.1); 
        }
        
        
        h1 { font-size: 1.5em; }

        table { width: 100%; border-collapse: collapse; margin-top: 1.25em; }
        th, td { border: 1px solid #ddd; padding: 0.625em; text-align: left; }
        th { background-color: #007bff; color: white; }
        
        .livre { color: green; font-weight: bold; }
        .ocupada { color: red; font-weight: bold; }
        .manutencao { color: orange; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gestão de Vagas - Admin</h1>
        <p>Visão geral do pátio para o gerente do estacionamento.</p>

        @if(session('sucesso'))
                <div style="background: #d4edda; color: #155724; padding: 1em; border-radius: 0.25em; margin-bottom: 1em;">
                    {{ session('sucesso') }}
                </div>
            @endif

            <a href="{{ route('admin.vagas.create') }}" style="display: inline-block; background: #007bff; color: white; padding: 0.6em 1em; text-decoration: none; border-radius: 0.25em;">+ Nova Vaga</a>

        <table>
            <thead>
                <tr>
                    <th>ID da Vaga</th>
                    <th>Identificação</th>
                    <th>Status Atual</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vagas as $vaga)
                <tr>
                    <td>{{ $vaga->id }}</td>
                    <td>{{ $vaga->identificacao }}</td>
                    <td class="{{ $vaga->status }}">{{ ucfirst($vaga->status) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>