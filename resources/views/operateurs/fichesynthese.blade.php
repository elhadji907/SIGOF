<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>{{ $title }}</title>
    <style>
        @page {
            margin: 0cm 0cm;
        }

        .invoice-box {
            max-width: 1000px;
            margin: auto;
            /* padding: 30px; */
            font-size: 12px;
            line-height: 18px;
            color: color: rgb(0, 0, 0);
            ;
        }

        /** RTL **/
        .rtl {
            imputation: rtl;
        }

        .invoice-box table tr.heading td {
            background: rgb(255, 255, 255);
            border: 1px solid #000000;
            border-collapse: collapse;
            font-weight: bold;
        }


        .invoice-box table tr.total td {
            /* border-top: 2px solid #eee;
            border-bottom: 1px solid #eee;
            border-left: 1px solid #eee;
            border-right: 1px solid #eee; */
            /* background: #eee;
            font-weight: normal; */
        }

        /* .invoice-box table tr.item td {
            border: 1px solid #000000;
        } */

        table {
            /* border-left: 0px solid rgb(0, 0, 0);
            border-right: 0;
            border-top: 0px solid rgb(0, 0, 0);
            border-bottom: 0; */
            width: 100%;
            /* border-spacing: 0px; */
            border-collapse: collapse;
        }

        table td,
        table th {
            /* border-left: 0;
            border-right: 0px solid rgb(0, 0, 0);
            border-top: 0;
            border-bottom: 0px solid rgb(0, 0, 0); */
            border: 1px solid;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;

            /** Extra personal styles **/
            background-color: #ffffff;
            color: rgb(0, 0, 0);
            text-align: center;
            line-height: 1.5cm;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//db.onlinewebfonts.com/c/dd79278a2e4c4a2090b763931f2ada53?family=ArialW02-Regular" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <h6 valign="top" style="text-align: center;">
        <b>REPUBLIQUE DU SENEGAL<br></b>
        Un Peuple - Un But - Une Foi<br>
        <b>********<br>
            MINISTERE DE LA FORMATION PROFESSIONNELLE<br>
            ********<br>
            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('assets/img/logo-onfp.jpg'))) }}"
                style="width: 100%; max-width: 300px" />
        </b>
    </h6>
    <h4 style="text-align: center;">FICHE DE SYNTHESE DU DOSSIER D'AGREMENT
        {{ 'DU ' . $commission?->date?->format('d/m/Y') }}</h4>
    @foreach ($commission?->operateurs as $operateur)
        <div class="invoice-box">
            <table class="table table-responsive">
                {{-- <thead>
                    <tr class="heading">
                        <td colspan="1" width="20%">{{ __("Dénomination de l'opérateur") }}</td>
                        <td colspan="6">{{ $operateur?->user?->operateur }}
                            @if (!empty($operateur?->user?->username))
                                {{ '(' . $operateur?->user?->username . ')' }}
                            @endif
                        </td>
                        <td colspan="1" width="10%">{{ __('VISITE DE CONFORMITE') }}</td>
                    </tr>
                </thead> --}}
                <tbody>
                    <tr class="item">
                        <td>{{ __("Dénomination de l'opérateur") }}</td>
                        <td colspan="6">{{ $operateur?->user?->operateur }}
                            @if (!empty($operateur?->user?->username))
                                {{ '(' . $operateur?->user?->username . ')' }}
                            @endif
                        </td>
                        <td colspan="1" width="10%" style="text-align: center;">{{ __('VISITE DE CONFORMITE') }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endforeach
</body>

</html>
