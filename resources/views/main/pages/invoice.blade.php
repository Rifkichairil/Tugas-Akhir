<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $resep->Title }}</title>

    <style>
        .text-center{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="page">

        <h1 class="text-center" style="padding-top: 10px">{{ $resep->Title }}</h1>
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>Bahan Masakan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="">
                        <ul>
                            @foreach (explode('--', $resep->Ingredients) as $ing)
                            <li>{{ $ing }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>Langkah Pembuatan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="">
                        <ol>
                            @foreach (explode('--', $resep->Steps) as $step)
                            <li>{{ $step }}</li>
                            @endforeach
                        </ol>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
