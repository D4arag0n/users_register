@extends('layouts.app')

@section('contenido')

<div class="bg-white p-6 rounded-lg shadow-xl md:w-6/12">
    <form action="{{ route('afiliado.store') }}" method="post">
        @csrf
        @if (session('mensaje'))
            <p class="bg-red-500 my-2 p-2 text-white font-bold text-sm text-center rounded-lg">{{session('mensaje')}}</p>
        @endif
        <div class="mb-5">
            <label for="curp" class="mb-2 block uppercase font-bold">Ingresa tu curp</label>
            <input type="text" name="curp" id="curp" class="border p-1 rounded-lg w-full @error('curp')
                border-red-500
            @enderror">
            @error('curp')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
            <label for="password" class="mb-2 block uppercase font-bold">contraseña</label>
            <input type="text" name="password" id="password" class="border p-1 rounded-lg w-full @error('password')
                border-red-500
            @enderror">
            @error('password')
                <p class="bg-red-500 my-2 text-white rounded-lg text-sm p-2 text-center">{{ $message }}</p>
            @enderror
        </div>
        <input type="submit" value="regitrate" class="py-2 px-4 border uppercase bg-green-700 text-white font-bold rounded-lg">
        <a href="#" class="font-bold text-red-900">Consulta tu <span class="uppercase">curp</span></a>
    </form>
</div>
    
@endsection