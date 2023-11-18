@extends('layout.app')

@section('titulo')
@endsection

@section('contenido')

<div class="flex justify-center my-10">
    <div class="md:w-3/12 bg-yellow p-6  border   rounded-lg mt-5">
        <form  action="{{route('register')}}" method="POST" novalidate>
            @csrf
            <div class="text-left mb-5 ">
                <h1 class="text-center text-indigo-400 text-2xl font-bold">REGISTRAR USUARIO</h1>
                <br><label for="name" class="mb-2 block uppercase text-indigo-400 font-bold">Nombre</label>
                <input type="text" placeholder="Ingrese su nombre" name="name" id="name" class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror " value="{{ old('name') }}">
                @error('name')
                    <p class="bg-red-600 text-white text-center rounded-lg">{{ $message }}</p>
                @enderror
            </div>
            <div class="text-left mb-5">
                <label for="identification" class="mb-2 block uppercase text-indigo-400 font-bold">Identificacion</label>
                <input type="number" placeholder="Ingrese la identificacion" name="identification" id="identification" class="border p-3 w-full rounded-lg">
                @error('identification')
                    <p class="bg-red-600 text-white text-center rounded-lg">{{ $message }}</p>
                @enderror
            </div>
            <div class="text-left mb-5">
                <label for="address" class="mb-2 block uppercase text-indigo-400 font-bold">Direccion</label>
                <input type="text" placeholder="Ingrese su direccion" name="address" id="address" class="border p-3 w-full rounded-lg">
                @error('address')
                    <p class="bg-red-600 text-white text-center rounded-lg">{{ $message }}</p>
                @enderror
            </div>
            <div class="text-left mb-5">
                <label for="phone" class="mb-2 block uppercase text-indigo-400 font-bold">Teléfono</label>
                <input type="number" placeholder="Ingrese su Telefono" name="phone" id="phone" class="border p-3 w-full rounded-lg">
                @error('phone')
                    <p class="bg-red-600 text-white text-center rounded-lg">{{ $message }}</p>
                @enderror
            </div>
            <input type="submit" value="Guardar" class="bg-indigo-200 hover:bg-indigo-400 transition-color cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        </form>
    </div>
</div>


@endsection
