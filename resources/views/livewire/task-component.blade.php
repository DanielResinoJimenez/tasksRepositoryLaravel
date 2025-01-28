<div class="p-8 bg-gray-900 text-white">
    <div class="max-w-4xl mx-auto">
        <!-- Tabla -->
        <div class="overflow-x-auto">
            <button class="bg-blue-800 text-white font-bold px-4 py-2 rounded-md hover:bg-blue-700" wire:click="openCreateModal">
                Nuevo
            </button>
            <table class="min-w-full divide-y divide-gray-700">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-400 uppercase">Titulo</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-400 uppercase">Descripcion</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-400 uppercase">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-800">
                    @foreach($tasks as $task)
                    <tr>
                        <td class="px-6 py-4">{{$task->title}}</td>
                        <td class="px-6 py-4 text-gray-400">{{$task->description}}</td>
                        <td class="px-6 py-4 text-gray-400">
                            <button class="bg-green-800 text-white px-4 py-2 rounded-md hover:bg-green-700" wire:click="openCreateModal({{ $task }})">Editar</button>
                            <button class="bg-red-800 text-white px-4 py-2 rounded-md hover:bg-red-700" wire:click="deleteTask({{ $task }})">Borrar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    @if($modal)
    <div class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center">
        <div class="bg-white rounded-2xl shadow-lg p-8 w-96">
            <h2 class="text-xl font-bold mb-6 text-gray-800">Crear nueva tarea</h2>
            <form>
                <!-- Título -->
                <div class="mb-4">
                    <label for="titulo" class="block text-sm font-medium text-gray-700 mb-2">Título</label>
                    <input autofocus wire:model="title" type="text" id="titulo" name="titulo" class="w-full px-4 py-2 rounded-md border border-gray-300 bg-gray-800 text-white placeholder-gray-400 focus:ring focus:ring-blue-500 focus:outline-none">
                </div>
                <!-- Descripción -->
                <div class="mb-6">
                    <label for="descripcion" class="block text-sm font-medium text-gray-700 mb-2">Descripción</label>
                    <textarea wire:model="description" id="descripcion" name="descripcion" rows="3" class="w-full px-4 py-2 rounded-md border border-gray-300 bg-gray-800 text-white placeholder-gray-400 focus:ring focus:ring-blue-500 focus:outline-none"></textarea>
                </div>
                <!-- Botones -->
                <div class="flex justify-between items-center">
                    <button type="submit" class="px-6 py-2 bg-black text-white rounded-full font-medium hover:bg-gray-800 focus:outline-none" wire:click.prevent="createorUpdateTask">
                        {{ isset($miTarea->id) ? 'Actualizar' : 'Crear' }} tarea
                    </button>
                    <button type="button" class="px-6 py-2 bg-white text-black border border-gray-300 rounded-full font-medium hover:bg-gray-100 focus:outline-none" wire:click="closeCreateModal">
                        Cancelar
                    </button>
                </div>
            </form>
        </div>
    </div>
    @endif
</div>