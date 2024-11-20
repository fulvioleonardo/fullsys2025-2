<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="application/pdf; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Artículos Vendidos</title>

        @include('report::commons.styles')
    </head>
    <body>
        @include('report::commons.header')

        <div>
            <p align="left" class="title"><strong>Artículos Vendidos</strong></p>
        </div>

        @include('report::co-items-sold.partials.filters')

        @if($records->count() > 0)
            <div class="">
                <div class="">
                    <table class="">
                        <thead>
                            <tr>
                                <th>Tipo</th>
                                <th>Código</th>
                                <th>Artículo</th>
                                <th>Cantidad</th>
                                <th>Costo</th>
                                <th>Neto</th>
                                <th>Utilidad</th>
                                <th>Impuesto</th>
                                <th>Descuento</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $total = 0;
                                $total_tax = 0;
                                $total_utility = 0;
                                $total_quantity = 0;
                                $total_net_value = 0;
                                $total_cost = 0;
                                $total_discount = 0;
                            @endphp
                            @foreach($records as $value)
                                @php
                                    $row = $value->getDataReportSoldItems();
                                    $total += $row['total'] ?? 0;
                                    $total_tax += $row['total_tax'] ?? 0;
                                    $total_utility += $row['utility'] ?? 0;
                                    $total_quantity += $row['quantity'] ?? 0;
                                    $total_net_value += $row['net_value'] ?? 0;
                                    $total_cost += $row['cost'] ?? 0;
                                    $total_discount += $row['discount'] ?? 0;
                                @endphp
                                <tr>
                                    <td class="celda">{{ $row['type_name'] }}</td>
                                    <td class="celda">{{ $row['internal_id'] }}</td>
                                    <td class="celda">{{ $row['name'] }}</td>
                                    <td class="celda">{{ $row['quantity'] }}</td>
                                    <td class="celda">{{ $row['cost'] }}</td>
                                    <td class="celda">{{ $row['net_value'] }}</td>
                                    <td class="celda">{{ $row['utility'] }}</td>
                                    <td class="celda">{{ $row['total_tax'] }}</td>
                                    <td class="celda">{{ $row['discount'] ?? 0 }}</td>
                                    <td class="celda">{{ $row['total'] }}</td>
                                </tr>
                            @endforEach
                            <tr>
                                <td colspan="3" class="celda text-right-td">TOTALES </td>
                                <td class="celda">{{ $total_quantity }}</td>
                                <td class="celda">{{ number_format($total_cost, 2) }}</td>
                                <td class="celda">{{ number_format($total_net_value, 2) }}</td>
                                <td class="celda">{{ number_format($total_utility, 2) }}</td>
                                <td class="celda">{{ number_format($total_tax, 2) }}</td>
                                <td class="celda">{{ number_format($total_discount, 2) }}</td>
                                <td class="celda">{{ number_format($total, 2) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div class="callout callout-info">
                <p><strong>No se encontraron registros.</strong></p>
            </div>
        @endif
    </body>
</html>
