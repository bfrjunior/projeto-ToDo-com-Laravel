<x-layout page="Todo: Login">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>

    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar Tarefa</h1>
        <form>
            <div class="inputArea">
                <label for="title">Titulo da Task</label>
                <input id="title" name="title" placeholder="Digite o título da tarefa" required>
            </div>
            <div class="inputArea">
                <label for="due_date">Data de Realização</label>
                <input name="due_date" id="due_date" type="date" placeholder="" required>
            </div>
            <div class="inputArea">
                <label for="category">Categoria</label>
                <select id="category" name="category" required>
                    <option selected disable value="">Selecione a categoria</option>
                    <option>Valor qualquer</option>
                </select>
            </div>
            <div class="inputArea">
                <label for="title">Descrição da tarefa</label>
                <textarea name="description" placeholder="Digite uma descrição para sua tarefa"></textarea>
            </div>
        </form>
    </section>
</x-layout>
