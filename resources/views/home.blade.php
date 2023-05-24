<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trains</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="bg-dark">

    <main>
        <div class="container mt-5">
            <div class="row">
                @foreach ($trains as $train)
                    <div class="col-4 p-2">
                        <div class="card">
                            <div class="card-body">
                                <h5>
                                    Agenzia: {{ $train['agency'] }}
                                </h5>

                                <p>
                                    Stazione di partenza: {{ $train['departure_station'] }}
                                </p>

                                <p>
                                    Stazione di arrivo: {{ $train['arrival_station'] }}
                                </p>

                                <p>
                                    Orario di partenza: <span class="text-warning">{{ $train['departure_time'] }}</span>
                                </p>

                                <p>
                                    Orario di arrivo: <span class="text-warning">{{ $train['arrival_time'] }}</span>
                                </p>

                                <p>
                                    Codice Treno: <span class="fw-bold">{{ $train['train_code'] }}</span>
                                </p>

                                <p>
                                    Numero Carrozze: <span class="fw-bold">
                                        {{ $train['coach_number'] }} </span>
                                </p>

                                <p>
                                    Stato:
                                    @if ($train['in_time'] == true)
                                        <span class="text-success">&checkmark; In arrivo</span>
                                    @endif
                                    @if ($train['deleted'] == true)
                                        <span class="text-danger">&cross; Cancellato</span>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </main>

</body>

</html>
