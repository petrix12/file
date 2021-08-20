<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card">
                    {{-- <div class="card-header">{{ __('Subir archivos') }}</div> --}}
                    <p class="text-xl m-2 text-gray-600">Subir archivos</p>
                    <form action="{{ route('user.files.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="files[]" multiple class="form-control" required>
                        <button type="submit" class="my-4 btn btn-secondary float-right">
                            Subir
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>