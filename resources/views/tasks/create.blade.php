<x-layout page="Todo: Login">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>

    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar Tarefa</h1>
        <form>

            <x-form.text_input name="title" label="Título da task" placeholder="Digite o titulo da tarefa" />
            <x-form.text_input name="due_date" label="Data de Realização" type="date" required="required" />
            <x-form.select_input name="category" label="categoria">
                <option>Valor qualquer</option>
            </x-form.select_input>
            <x-form.textarea name="description" placeholder="Digite a descrição da tarefa" />

            <x-form.form_button resetTXt="Resetar" submitTxt="Criar Tarefa" />
        </form>
    </section>
</x-layout>
