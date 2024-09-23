@extends('layouts.app')
@section('contenido')
<div class="bg-white p-6 rounded-lg shadow-xl md:w-4/12">
<form action="{{route('login.store')}}" method="POST">
    @csrf
    @if (session('mensaje'))
        <p class="bg-red-500 text-sm my-3 text-white text-center p-2 rounded-lg">{{session('mensaje')}}</p>
    @endif
    <div class="mb-5">
        <label for="email" class="mb-2 block uppercase font-bold text-sm">Correo electrónico</label>
        <input type="text" name="email" id="email" class="border p-1 rounded-lg w-full @error('email')
            border-red-500
        @enderror">
        @error('email')
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-5">
        <label for="password" class="mb-2 block uppercase font-bold text-sm">Password</label>
        <input type="password" name="password" id="password" class="border p-1 rounded-lg w-full @error('password')
            border-red-500
        @enderror">
        @error('password')
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
        @enderror
    </div>
    <input type="submit" value="Iniciar sesión" class="py-2 px-4 border uppercase bg-green-700 text-white font-bold rounded-lg">
</form>
        
    
</div>
@endsection