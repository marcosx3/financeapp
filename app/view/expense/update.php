<div class="container d-flex justify-content-center mt-5">
        <h1>Atualizar Despesa</h1>
    </div>

    <div class="container w-50 mt-5">
        <form action="{{ route('expense.update', $expense->id) }}" method="post">
          
            <div class="mb-3">
                <label for="name_expense" class="form-label">Nome</label>
                <input type="text" name="expense_name" class="form-control" value="{{ $expense->expense_name }}">
            </div>
            <div class="mb-3">
                <label for="expense_value" class="form-label">Valor</label>
                <input type="number" name="expense_value" class="form-control" step="0.01"
                    value="{{ $expense->expense_value }}">
            </div>

            <div class="mb-3">
                <label for="expense_type" class="form-label">Tipo de Despesa </label>
                <input type="text" name="expense_type" class="form-control" value="{{ $expense->expense_type }}">
            </div>

            <div class="mb-3">
                <label for="clients" class="form-label">Cliente </label>
                <select name="clients" class="form-select">
                    @foreach ($clients as $client)
                        <option value="{{ $client->id }}"> {{ $client->name }} </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Periodo </label>
                <input type="date" name="expense_month" class="form-control" value="{{ $expense->expense_month }}">
            </div>
            <div class="mb-3">
                <label for="repeat" class="form-label">Repetir nos proximos meses?</label>
                <input type="text" name="repeat" id="repeat" class="form-control" required placeholder="0">
            </div>

            <button type="submit" class="btn btn-outline-dark">Atualizar</button>
        </form>
    </div>