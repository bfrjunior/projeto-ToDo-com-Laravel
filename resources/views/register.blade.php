<x-layout page="Todo: Login">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>

    </x-slot:btn>

    <section id="task_section">
        <h1>Registrar-se</h1>
        <form method="POST" action="{{ route('user.register_action') }}">
            @csrf
            <x-form.text_input name="name" label="Seu Nome" placeholder="Seu Nome" />
            <x-form.text_input name="email" label="Seu Email" type="email" required="required"
                placeholder="Seu Email" />
            <x-form.text_input name="password" label="Sua Senha" type="password" required="required"
                placeholder="Sua Senha" />
            <x-form.text_input name="password_confirmation" label="Confirme sua senha" type="password"
                required="required" placeholder="Confirme sua senha" />

            <x-form.form_button resetTXt="Limpar" submitTxt="Registrar-se" />
        </form>
    </section>
</x-layout>
