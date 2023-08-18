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
    </section>
</x-layout>
