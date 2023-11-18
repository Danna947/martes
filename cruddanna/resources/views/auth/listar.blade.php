@extends('layout.app')

@section('titulo')

@endsection

@section('contenido')

<div class="container mx-auto mt-5 p-5">
        <h1 class="text-3xl text-center my-10 text-indigo-400  font-bold mb-6">USUARIOS</h1>

        <div class="overflow-x-auto my-10">
            <table class="table-auto w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-indigo-400">
                        <th class="py-3 px-4 border-b border-gray-300 text-gray-700 ">NAME</th>
                        <th class="py-3 px-4 border-b border-gray-300 text-gray-700">IDENTIFICATION</th>
                        <th class="py-3 px-4 border-b border-gray-300 text-gray-700">ADDRESS</th>
                        <th class="py-3 px-4 border-b border-gray-300 text-gray-700">PHONE</th>
                        <th class="py-3 px-4 border-b border-gray-300 text-gray-700">ADMIN</th>
                        <th class="py-3 px-4 border-b border-gray-300 text-gray-700">ADMIN</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="{{ $loop->even ? 'bg-gray-100' : 'bg-white' }}">
                            <td class="py-3 px-4 border-b border-gray-300 text-center">{{ $user->name }}</td>
                            <td class="py-3 px-4 border-b border-gray-300 text-center">{{ $user->identification }}</td>
                            <td class="py-3 px-4 border-b border-gray-300 text-center">{{ $user->address }}</td>
                            <td class="py-3 px-4 border-b border-gray-300 text-center">{{ $user->phone }}</td>
                            <td><div class="text-center"><a href="{{ route('editar', $user->id) }}" class="bg-indigo-200 hover:bg-indigo-400 transition-color cursor-pointer uppercase font-bold  p-2 text-white rounded-lg">Actualizar</a></div></td>
                            <td></div><form action="{{ route('eliminar', $user->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <div class="text-center" ><button type="submit" class="bg-indigo-200 hover:bg-indigo-400 transition-color cursor-pointer uppercase font-bold  p-2 text-white rounded-lg">Eliminar</button></div>
                                </form></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
@endsection
