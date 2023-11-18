@extends('layout.app')

@section('titulo')

@endsection

@section('contenido')
    <div class="flex justify-center my-10">

        <div class="md:w-3/12 bg-yellow p-6  border   rounded-lg mt-5">

        <form action="{{ route('usuarios.actualizar', $usuario->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <h1 class="text-center text-indigo-400 text-2xl font-bold">ACTUALIZAR USUARIO</h1><br>
                <label for="name" class="mb-2 block uppercase text-indigo-400 font-bold">NOMBRE</label>
                <input type="text" id="name" name="name" value="{{ old('name', $usuario->name) }}"
                    class="border p-3 w-full rounded-lg">
                @error('name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="identification" class="mb-2 block uppercase text-indigo-400 font-bold">IDENTIFICACION</label>
                <input type="number" id="identification" name="identification" value="{{ old('identification', $usuario->identification) }}"
                    class="border p-3 w-full rounded-lg">
                @error('cedula')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="address" class="mb-2 block uppercase text-indigo-400 font-bold">DIRECCION</label>
                <input type="text" id="address" name="address" value="{{ old('address', $usuario->address) }}"
                    class="border p-3 w-full rounded-lg">
                @error('address')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="phone" class="mb-2 block uppercase text-indigo-400 font-bold">TELÉFONO</label>
                <input type="text" id="phone" name="phone"
                    value="{{ old('phone', $usuario->phone) }}"
                    class="border p-3 w-full rounded-lg">
                @error('phone')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-5 ">
                <div class="flex items-center">
                    <button type="submit" class="bg-indigo-200 hover:bg-indigo-400 transition-color cursor-pointer uppercase font-bold  p-2 text-white rounded-lg mx-10 my-5">Guardar</button>
                </div>
                <div class="flex items-center">
                    <a href="{{ route('pdf', [$usuario->id]) }}">
                        <button type="button" class="bg-indigo-200 hover:bg-indigo-400 transition-color cursor-pointer uppercase font-bold  p-2 text-white rounded-lg">Cargar PDF</button>
                    </a>
                </div>
            </div>
        </form>
        </div>
    </div>
@endsection
