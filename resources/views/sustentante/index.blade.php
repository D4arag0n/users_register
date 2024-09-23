@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@section('contenido')
<div class="bg-white p-6 rounded-lg shadow-xl w-full">
    <table id="users-table" class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
        <thead>
            <tr class="bg-gray-800 text-white text-left">
                <th class="py-3 px-6">ID</th>
                <th class="py-3 px-6">CURP</th>
                <th class="py-3 px-6">Creado</th>
                <th class="py-3 px-6">Acciones</th>
            </tr>
        </thead>
    </table>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('sustentante.data') }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'curp', name: 'curp' },
                { data: 'created_at', name: 'created_at' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });
</script>   
</div>

@endsection