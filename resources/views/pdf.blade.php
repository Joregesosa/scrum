<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reporte</title>

</head>
<style>
    .tabla {
        width: 100%;
        margin-top: 8px;
    }

    th,
    td {
        text-align: center;
        border: 1px solid black;
    }

    .tbh {
        width: 12%;
    }

    .year {
        width: 17%;
    }

    .usuario {
        width: 40%
    }

    .usuario,
    .usuario th,
    .usuario td {
        text-align: center;
        border: 1px solid black;
        border-collapse: collapse;
    }

    .usuario .tbh {
        width: 30%;
        text-align: left;
        padding: 2px 8px;
    }

    .usuario {}

    .float {
        float: left;
    }
</style>

<body>

    <header>
        {{-- <div>
            <div class="float">
                <img src="/storage/assets/brujula.png" alt="">
            </div>
            <div class="">
                <h1 cla>Mi Brújula de Vida</h1>
            </div>
        </div> --}}
        <table class="usuario">
            <tr>
                <th class="tbh">Nombre:</th>
                <th>{{ $brujula['usuario']['nombre'] }}</th>
            </tr>
            <tr>
                <th class="tbh">Curso:</th>
                <th>{{ $brujula['usuario']['curso'] }}</th>
            </tr>
            <tr>
                <th class="tbh">Pais:</th>
                <th>{{ $brujula['usuario']['pais'] }}</th>
            </tr>
        </table>

    </header>


    <section>


        <table class="tabla">
            <tr>
                <th class="tbh">ESPIRITUAL</th>

                @foreach ($brujula['years'] as $year)
                    <th class="year">{{ $year }}</th>
                @endforeach

            </tr>
            <tr>
                <td>Proceso de Conversion</td>

                @foreach ($brujula['years'] as $year)
                    <td class="year">{{ $brujula['metas']['espiritual'][$year]['Coversion'] }}</td>
                @endforeach


            </tr>
            <tr>
                <td>ser un Discipulo</td>
                @foreach ($brujula['years'] as $year)
                    <td class="year">{{ $brujula['metas']['espiritual'][$year]['Discipulo'] }}</td>
                @endforeach
            </tr>

        </table>

        <table class="tabla">
            <tr>
                <th class="tbh">FAMILIAR</th>

                @foreach ($brujula['years'] as $year)
                    <th class="year">{{ $year }}</th>
                @endforeach

            </tr>
            <tr>
                <td>Esposo / Novio</td>

                @foreach ($brujula['years'] as $year)
                    <td class="year">{{ $brujula['metas']['familiar'][$year]['Pareja'] }}</td>
                @endforeach

            </tr>
            <tr>
                <td>Padre</td>
                @foreach ($brujula['years'] as $year)
                    <td class="year">{{ $brujula['metas']['familiar'][$year]['Padre'] }}</td>
                @endforeach
            </tr>
            <tr>
                <td>Hijo</td>
                @foreach ($brujula['years'] as $year)
                    <td class="year">{{ $brujula['metas']['familiar'][$year]['Hijo'] }}</td>
                @endforeach
            </tr>

        </table>

        <table class="tabla">
            <tr>
                <th class="tbh">INTELECTUAL</th>

                @foreach ($brujula['years'] as $year)
                    <th class="year">{{ $year }}</th>
                @endforeach

            </tr>
            <tr>
                <td>Educación Formal</td>

                @foreach ($brujula['years'] as $year)
                    <td class="year">{{ $brujula['metas']['intelectual'][$year]['Formal'] }}</td>
                @endforeach

            </tr>
            <tr>
                <td>Auto educación</td>
                @foreach ($brujula['years'] as $year)
                    <td class="year">{{ $brujula['metas']['intelectual'][$year]['Auto'] }}</td>
                @endforeach
            </tr>

        </table>

        <table class="tabla">
            <tr>
                <th class="tbh">LABORAL</th>

                @foreach ($brujula['years'] as $year)
                    <th class="year">{{ $year }}</th>
                @endforeach

            </tr>
            <tr>
                <td>Empleado</td>

                @foreach ($brujula['years'] as $year)
                    <td class="year">{{ $brujula['metas']['laboral'][$year]['Empleado'] }}</td>
                @endforeach

            </tr>
            <tr>
                <td>Emprendimiento</td>
                @foreach ($brujula['years'] as $year)
                    <td class="year">{{ $brujula['metas']['laboral'][$year]['Emprendedor'] }}</td>
                @endforeach
            </tr>

        </table>

        <table class="tabla">
            <tr>
                <th class="tbh">FISICO</th>

                @foreach ($brujula['years'] as $year)
                    <th class="year">{{ $year }}</th>
                @endforeach

            </tr>
            <tr>
                <td>Ejercicios</td>

                @foreach ($brujula['years'] as $year)
                    <td class="year">{{ $brujula['metas']['fisico'][$year]['Fisico'] }}</td>
                @endforeach

            </tr>
            <tr>
                <td>Hobbies</td>
                @foreach ($brujula['years'] as $year)
                    <td class="year">{{ $brujula['metas']['fisico'][$year]['Hobbies'] }}</td>
                @endforeach
            </tr>

        </table>



    </section>


</body>

</html>
