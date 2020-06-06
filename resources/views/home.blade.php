@extends('layouts.app')

@section('content')
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="./js/jQueryEdge.js"></script>
    </head>
<style>
    #tbl_div div {
        display:none;
    }
</style>

<div class="container-fluid" style="width: 70%;">
    <h1>Data Overview Belgium <span class="badge badge-secondary">18</span></h1>
    <label for="exampleFormControlSelect1">Provincie</label>

    <div class="form-group" style="width: 20%;">
    <select onchange="change_tbl(this.value)" class="form-control" id="myDropdown">
        <label for="exampleFormControlSelect1">Provincie</label>
        <option value="">Provincie</option>
        <option value="tb1">Antwerpen</option>
        <option value="tb2">Oost-Vlaanderen</option>
        <option value="tb3">West-Vlaanderen</option>
        <option value="tb4">Limburg</option>
        <option value="tb5">Vlaams Brabant</option>
        <option value="tb6">Brussel</option>
        <option value="tb7">Waals Brabant</option>
        <option value="tb8">Luik</option>
        <option value="tb9">Namen</option>
        <option value="tb10">Henegouwen</option>
        <option value="tb11">Luxemburg</option>
    </select>
    </div>
    <div id="tbl_div">
        <div id="tb1">
            <table id="tb1"class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Materiaal</th>
                    <th scope="col">Aanbod</th>
                    <th scope="col">Prijs</th>
                    <th scope="col">Totaal</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">Chirurgische Maskers</th>
                    <td>1 058 956</td>
                    <td>€0.5</td>
                    <th>4 012 547</th>
                </tr>
                <tr>
                    <th scope="row">Tyvecken</th>
                    <td>239 224</td>
                    <td>€15.6</td>
                    <th>439 256</th>
                </tr>
                <tr>
                    <th scope="row">Spat Maskers</th>
                    <td>55 000</td>
                    <td>€1.5</td>
                    <th>172 398</th>
                </tr>
                <tr>
                    <th scope="row">Handschoenen Kort</th>
                    <td>125 159</td>
                    <td>€0.01</td>
                    <th>8 654 951</th>
                </tr>
                <tr>
                    <th scope="row">Handschoenen Lang</th>
                    <td>125 159</td>
                    <td>€0.03</td>
                    <th>5 984 736</th>
                </tr>
                <tr>
                    <th scope="row">Ontsmettings alcohol +70% (1L)</th>
                    <td>824 697</td>
                    <td>€12.7</td>
                    <th>1 524 396</th>
                </tr>
                <tr>
                    <th scope="row">Ontsmettings Alcohol +90% (1L)</th>
                    <td>522 333</td>
                    <td>€14.9</td>
                    <th>856 375</th>
                </tr>
                <tr>
                    <th scope="row">Ontsmettings Handgel +40% (0.5L)</th>
                    <td>999 325</td>
                    <td>€8.6</td>
                    <th>1 285 349</th>
                </tr>
                <tr>
                    <th scope="row">Ontsmettings Handgel +50$ (0.5L)</th>
                    <td>741 852</td>
                    <td>€9.8</td>
                    <th>1 637 251</th>
                </tr>
                <tr>
                    <th scope="row">Immonium 20% (5L)</th>
                    <td>359 000</td>
                    <td>€80</td>
                    <th>521 657</th>
                </tr>
                <tr>
                    <th scope="row">Immonium 50% (5L)</th>
                    <td>257 679</td>
                    <td>€95.8</td>
                    <th>324 587</th>
                </tr>
                <tr>
                    <th scope="row">Immonium 75% (5L)</th>
                    <td>157 316</td>
                    <td>€101.5</td>
                    <th>254 369</th>
                </tr>
                <tr>
                    <th scope="row">Immonium 100%</th>
                    <td>10 247</td>
                    <td>€122.5</td>
                    <th>120 325</th>
                </tr>
                <tr>
                    <th scope="row">Beademings Mondmasker 100%</th>
                    <td>81 352</td>
                    <td>€0.7</td>
                    <th>198 325</th>
                </tr>
                <tr>
                    <th scope="row">Beademings Neusbril</th>
                    <td>96 849</td>
                    <td>€0.5</td>
                    <th>287 369</th>
                </tr>
                <tr>
                    <th scope="row">Beschermings Schort</th>
                    <td>285 349</td>
                    <td>€1.2</td>
                    <th>857 245</th>
                </tr>
                <tr>
                    <th scope="row">Brancard Beschermings Dekens</th>
                    <td>25 951</td>
                    <td>€3.4</td>
                    <th>75 341</th>
                </tr>
                </tbody>
            </table>
        </div>
        <div id="tb2">

            <table id="tb2"class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">LOL</th>
                    <th scope="col">Aanbod</th>
                    <th scope="col">Prijs</th>
                    <th scope="col">Totaal</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">Chirurgische Maskers</th>
                    <td>1 058 956</td>
                    <td>€0.5</td>
                    <th>4 012 547</th>
                </tr>
                <tr>
                    <th scope="row">Tyvecken</th>
                    <td>239 224</td>
                    <td>€15.6</td>
                    <th>439 256</th>
                </tr>
                <tr>
                    <th scope="row">Spat Maskers</th>
                    <td>55 000</td>
                    <td>€1.5</td>
                    <th>172 398</th>
                </tr>
                <tr>
                    <th scope="row">Handschoenen Kort</th>
                    <td>125 159</td>
                    <td>€0.01</td>
                    <th>8 654 951</th>
                </tr>
                <tr>
                    <th scope="row">Handschoenen Lang</th>
                    <td>125 159</td>
                    <td>€0.03</td>
                    <th>5 984 736</th>
                </tr>
                <tr>
                    <th scope="row">Ontsmettings alcohol +70% (1L)</th>
                    <td>824 697</td>
                    <td>€12.7</td>
                    <th>1 524 396</th>
                </tr>
                <tr>
                    <th scope="row">Ontsmettings Alcohol +90% (1L)</th>
                    <td>522 333</td>
                    <td>€14.9</td>
                    <th>856 375</th>
                </tr>
                <tr>
                    <th scope="row">Ontsmettings Handgel +40% (0.5L)</th>
                    <td>999 325</td>
                    <td>€8.6</td>
                    <th>1 285 349</th>
                </tr>
                <tr>
                    <th scope="row">Ontsmettings Handgel +50$ (0.5L)</th>
                    <td>741 852</td>
                    <td>€9.8</td>
                    <th>1 637 251</th>
                </tr>
                <tr>
                    <th scope="row">Immonium 20% (5L)</th>
                    <td>359 000</td>
                    <td>€80</td>
                    <th>521 657</th>
                </tr>
                <tr>
                    <th scope="row">Immonium 50% (5L)</th>
                    <td>257 679</td>
                    <td>€95.8</td>
                    <th>324 587</th>
                </tr>
                <tr>
                    <th scope="row">Immonium 75% (5L)</th>
                    <td>157 316</td>
                    <td>€101.5</td>
                    <th>254 369</th>
                </tr>
                <tr>
                    <th scope="row">Immonium 100%</th>
                    <td>10 247</td>
                    <td>€122.5</td>
                    <th>120 325</th>
                </tr>
                <tr>
                    <th scope="row">Beademings Mondmasker 100%</th>
                    <td>81 352</td>
                    <td>€0.7</td>
                    <th>198 325</th>
                </tr>
                <tr>
                    <th scope="row">Beademings Neusbril</th>
                    <td>96 849</td>
                    <td>€0.5</td>
                    <th>287 369</th>
                </tr>
                <tr>
                    <th scope="row">Beschermings Schort</th>
                    <td>285 349</td>
                    <td>€1.2</td>
                    <th>857 245</th>
                </tr>
                <tr>
                    <th scope="row">Brancard Beschermings Dekens</th>
                    <td>25 951</td>
                    <td>€3.4</td>
                    <th>75 341</th>
                </tr>
                </tbody>
            </table>
        </div>
    </div>


    </div>



    <script>
        function change_tbl(dhi) {
            if (dhi == '') {
                return;
            }
            $('#tbl_div > div').css('display', 'none');
            $('#' + dhi).css('display', 'block');
        }
    </script>


    </div>
@endsection
