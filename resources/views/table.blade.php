@extends('layout.template')

@section('content')
<div class="container mt-4">
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Position</th>
            </tr>
        </thead>
        <tbody>
            <!-- Goalkeeper -->
            <tr>
                <td>1</td>
                <td>Marc-André ter Stegen</td>
                <td>Goalkeeper</td>
            </tr>

            <!-- Defenders -->
            <tr>
                <td>2</td>
                <td>Ronald Araujo</td>
                <td>Defender</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Andreas Christensen</td>
                <td>Defender</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Jules Koundé</td>
                <td>Defender</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Iñigo Martínez</td>
                <td>Defender</td>
            </tr>

            <!-- Midfielders -->
            <tr>
                <td>6</td>
                <td>Frenkie de Jong</td>
                <td>Midfielder</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Gavi</td>
                <td>Midfielder</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Pedri</td>
                <td>Midfielder</td>
            </tr>

            <!-- Forwards -->
            <tr>
                <td>9</td>
                <td>Robert Lewandowski</td>
                <td>Forward</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Raphinha</td>
                <td>Forward</td>
            </tr>
            <tr>
                <td>11</td>
                <td>Ferran Torres</td>
                <td>Forward</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
