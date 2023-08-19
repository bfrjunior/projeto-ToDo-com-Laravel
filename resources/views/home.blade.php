<x-layout>
    <x-slot:btn>
        <a href="{{ route('task.create') }}" class="btn btn-primary">
            Criar Tarefa
        </a>
        <a href="{{ route('logout') }}" class="btn btn-primary">
            Sair
        </a>
    </x-slot:btn>
    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do dia </h2>
            <div class="graph_header_line"></div>
            <div class="graph_hearde-date">
                <a href="{{ route('home', ['date' => $date_prev_button]) }}">
                    <img src="/assets/images/icon-prev.png"></img>
                </a>
                {{ $date_as_string }}
                <a href="{{ route('home', ['date' => $date_next_button]) }}">
                    <img src="/assets/images/icon-next.png"></img>
                </a>
            </div>
        </div>
        <div class="graph-header-subtitle">
            Tarefas: <b>{{ $tasks_count - $undone_tasks_count }}/{{ $tasks_count }}</b>
        </div>
        <div class="graph-placeholder">
        </div>
        <div class="task-left-footer">
            <img src="/assets/images/icon-info.png" alt="">
            Restam {{ $undone_tasks_count }} tarefas para serem realizadas.
        </div>
    </section>
    <section class="list">
        <div class="list_header">
            <select class="list_header_select" onchange="changeTaskStatusFilter(this)">
                <option value="all_task">Todas as tarefas</option>
                <option value="task_pending">Tarefas Pendentes</option>
                <option value="task_done">Tarefas Realizadas</option>

            </select>
        </div>
        <script>
            function changeTaskStatusFilter(element) {
                showAllTasks();

                if (element.value == 'task_pending') {
                    document.querySelectorAll('.task_done').forEach(function(e) {
                        e.style.display = 'none';
                    });
                } else if (element.value == 'task_done') {
                    document.querySelectorAll('.task_peding').forEach(function(e) {
                        e.style.display = 'none';
                    });
                }
            }

            function showAllTasks() {
                document.querySelectorAll('.task').forEach(function(e) {
                    e.style.display = "flex";
                });
            }
        </script>
        <div class="task_list">
            @foreach ($tasks as $task)
                <x-task :data=$task />
            @endforeach


        </div>
    </section>
    <script>
        async function taskUpdate(element) {
            let status = element.checked;
            let taskId = element.dataset.id;
            let url = '{{ route('task.update') }}';
            let rawResult = await fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'accept': 'application/json'
                },
                body: JSON.stringify({
                    status,
                    taskId,
                    _token: '{{ csrf_token() }}'
                })

            });

            let result = await rawResult.json();
            if (result.success) {
                alert('Task Atualizada com Sucesso!');
            } else {
                element.checked = !status;
            }
        }
    </script>

</x-layout>
