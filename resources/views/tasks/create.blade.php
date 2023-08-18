<x-layout page="Todo: Login">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>

    </x-slot:btn>

    <section id="task_section">
        <h1>Criar Tarefa</h1>
        <form method="POST" action="{{ route('task.create_action') }}">
            @csrf
            <x-form.text_input name="title" label="Título da task" placeholder="Digite o titulo da tarefa" />
            <x-form.text_input name="due_date" label="Data de Realização" type="date" required="required" />
            <x-form.select_input name="category_id" label="Categoria">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </x-form.select_input>
            <x-form.textarea label="Descrição da tarefa" name="description"
                placeholder="Digite a descrição da tarefa" />

            <x-form.form_button resetTXt="Resetar" submitTxt="Criar Tarefa" />
        </form>
    </section>
</x-layout>
