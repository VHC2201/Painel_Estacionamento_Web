<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar Vaga</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 1.25em; font-size: 100%; }
        .container { width: 100%; max-width: 40em; margin: auto; background: white; padding: 1.25em; border-radius: 0.5em; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1 { font-size: 1.5em; }
        .form-group { margin-bottom: 1em; }
        label { display: block; font-weight: bold; margin-bottom: 0.5em; }
        input, select { width: 100%; padding: 0.625em; border: 1px solid #ccc; border-radius: 0.25em; box-sizing: border-box; }
        button { background: #28a745; color: white; border: none; padding: 0.8em 1.5em; cursor: pointer; border-radius: 0.25em; font-size: 1em; width: 100%; margin-top: 1em; }
        button:hover { background: #218838; }
        .btn-voltar { display: block; text-align: center; margin-top: 1em; color: #007bff; text-decoration: none; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Adicionar Nova Vaga</h1>
        
        <form action="{{ route('admin.vagas.store') }}" method="POST">
            @csrf 

            <div class="form-group">
                <label for="identificacao">Identificação da Vaga (ex: A1, B2)</label>
                <input type="text" name="identificacao" id="identificacao" required placeholder="Digite o nome/número da vaga">
            </div>

            <div class="form-group">
                <label for="status">Status Inicial</label>
                <select name="status" id="status" required>
                    <option value="livre">Livre</option>
                    <option value="ocupada">Ocupada</option>
                    <option value="manutencao">Em Manutenção</option>
                </select>
            </div>

            <button type="submit">Salvar Vaga</button>
        </form>

        <a href="{{ route('admin.vagas.index') }}" class="btn-voltar">Voltar para a Lista</a>
    </div>
</body>
</html>