<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista Estudiantes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                    <div class="mb-4">
                        <a href="{{ route('students.create') }}" class="bg-cyan-500 dark:bg-cyan-700 hover:bg-cyan-600 dark:hover:bg-cyan-800 text-white font-bold py-2 px-4 rounded">Crear Estudiante</a>
                    </div>
                <!-- crea la misma tabla anterior con los datos ID, name, age pero con estilos Tailwing css -->
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Edad
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($students as $student)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{$student->id}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{$student->name}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{$student->age}}</div>
                            </td>
                            <!-- Agrega un enlace para editar y eliminar el estudiante -->
                            <td class="border px-4 py-2 text-center">
                                <div class="flex justify-center">
                                    <a href="{{ route('students.edit', $student->id) }}" class="bg-violet-500 dark:bg-violet-700 hover:bg-violet-600 dark:hover:bg-violet-800 text-white font-bold py-2 px-4 rounded mr-2">Editar</a>
                                    <button type="button" onclick="confirmDelete('{{$student->id}}')" class="bg-pink-400 dark:bg-pink-600 hover:bg-pink-500 dark:hover:bg-pink-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
function confirmDelete(id) {
    alertify.confirm("¿Confirm delete record?",
    function(){
        let form = document.createElement('form');
        form.method = 'POST';
        form.action = '/students/' + id;
        form.innerHTML = '@csrf @method("DELETE")';
        document.body.appendChild(form);

        // Enviar el formulario de manera asíncrona
        fetch(form.action, {
            method: form.method,
            body: new FormData(form)
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            // Mostrar la alerta verde cuando la solicitud se complete con éxito
            alertify.success('Ok');
            // Redirigir a la página de índice de estudiantes
            window.location.href = '/students';
        })
        .catch(error => {
            console.error('There has been a problem with your fetch operation:', error);
        });
    },
    function(){
        alertify.error('Cancel');
    });
}
</script>