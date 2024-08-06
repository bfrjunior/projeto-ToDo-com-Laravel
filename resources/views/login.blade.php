<x-layout page="Todo: Login">
    <section id="task_section">
        <h1>Autenticação</h1>
        @if ($errors->any())
            <ul class="alert alert-error">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form method="POST" action="{{ route('user.login_action') }}">
            @csrf

            <x-form.text_input name="email" label="Seu Email" type="email" required="required" placeholder="Seu Email" />
            <x-form.text_input name="password" label="Sua Senha" type="password" required="required"
                placeholder="Sua Senha" />
            <x-form.form_button resetTXt="Limpar" submitTxt="Login" />

        </form>
        <form action="register">
            <button class="btn" type="submit" action="register"
                style="width: 100px; height: 55px;padding: 4px 8px;margin-left:10px;">Cadastrar</button>
        </form>
    </section>
</x-layout>
