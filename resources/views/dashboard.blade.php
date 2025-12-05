<x-layouts.layout>
    <div class="p-8">
        <h1 class="text-3xl font-bold mb-8">Dashboard</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="card bg-base-100 shadow-xl">
                <div class="card-body items-center text-center">
                    <h2 class="card-title text-2xl">Gestión de Alumnos</h2>
                    <p>Administra los alumnos del instituto</p>
                    <div class="card-actions mt-4">
                        <a href="{{ route('alumnos.index') }}" class="btn btn-primary">Ver alumnos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.layout>
