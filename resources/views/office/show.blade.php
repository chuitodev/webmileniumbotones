@extends('layouts.volt')

@section('title', 'Sucursal')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <h2 class="h4">{{ $office }}</h2>
        <p class="mb-0">Registros totales de respuestas de satisfacción.</p>
    </div>

    <div>
        <a href="{{ route('office.exportCSV', $office) }}" onclick="exportTasks(event.target);" class="btn btn-gray-800 d-inline-flex align-items-center" aria-haspopup="true" aria-expanded="false">
            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
            Exportar a CSV
        </a>
    </div>
</div>

<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">#</th>
                        <th class="border-0">Fecha</th>
                        <th class="border-0">Hora</th>
                        <th class="border-0 rounded-end">Respuesta</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Item -->
                    @foreach ($logs as $log)
                        <tr>
                            <td>{{ $log->id }}</td>
                            <td>{{ $log->created_at->format('d M, Y') }}</td>
                            <td>{{ $log->created_at->format('h:m a') }}</td>
                            @if ($log->answer == 'si')
                            <td class="text-success">
                            @endif

                            @if ($log->answer == 'no')
                            <td class="text-danger">
                            @endif
                                <div class="d-flex align-items-center">
                                    <span class="fw-bold">{{ $log->answer}}</span>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    <!-- End of Item -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function exportTasks(_this) {
        let _url = $(_this).data('href');
        window.location.href = _url;
    }
</script>

@endsection
