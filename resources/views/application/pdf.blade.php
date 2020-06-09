<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$application->name}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    
    <div class="container-fluid">
        <h1 class="text-center">Application</h1>
        <hr>
        <div class="row">
            <div class="col-4 border border-dark">
                <div>WApp4U</div>
                <div>Thor Park 8040</div>
                <div>3600 Genk</div>
                
                <div>Phone: 089/00 00 00</div>
            </div>
            <div class="col-10">
                <img class="float-right" src="../public/assets/img/logo.png" alt="logo">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-6 border border-dark text-left">
                <div>{{$application->applicationType}}:</div>
                <div class="mb-2">{{$application->applicationDescription}}</div>
                <div>Total of {{$application->pageCount}} pages:</div>
                <div>{{$application->pageName}}</div>
            </div>
            <div class="col-4 float-right border border-dark text-right">
                <div>{{$application->name}}</div>
                <div>
                    @php
                        $ldate = date('d-m-Y');
                        echo $ldate;
                    @endphp
                </div>
                <div>{{$application->email}}</div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-12 border border-dark">
                <div>Additional Message: {{$application->message}}</div>
            </div>
        </div>
        <br><br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Components</th>
                    <th scope="col">Fee</th>
                    <th scope="col">Min hours</th>
                    <th scope="col">Max hours </th>
                </tr>
            </thead>
            <tbody>
                
                @php
                    $amountFee = 0;
                    $amountMin = 0;
                    $amountMax = 0;
                @endphp

                @if ($application->adminBoolean)
                <tr>
                    <th scope="row">{{$component->get(0)->name}}</th>
                    <td>€{{$component->get(0)->fee}}</td>
                    <td>{{$component->get(0)->minHours}}h</td>
                    <td>{{$component->get(0)->maxHours}}h</td>
                </tr>
                    @php
                        $amountFee += $component->get(0)->fee;
                        $amountMin += $component->get(0)->minHours;
                        $amountMax += $component->get(0)->maxHours;
                    @endphp
                @endif

                @if ($application->calendarBoolean)
                <tr>
                    <th scope="row">{{$component->get(1)->name}}</th>
                    <td>€{{$component->get(1)->fee}}</td>
                    <td>{{$component->get(1)->minHours}}h</td>
                    <td>{{$component->get(1)->maxHours}}h</td>
                </tr>
                    @php
                        $amountFee += $component->get(1)->fee;
                        $amountMin += $component->get(1)->minHours;
                        $amountMax += $component->get(1)->maxHours;
                    @endphp
                @endif

                @if ($application->cartBoolean)
                <tr>
                    <th scope="row">{{$component->get(2)->name}}</th>
                    <td>€{{$component->get(2)->fee}}</td>
                    <td>{{$component->get(2)->minHours}}h</td>
                    <td>{{$component->get(2)->maxHours}}h</td>
                </tr>
                    @php
                        $amountFee += $component->get(2)->fee;
                        $amountMin += $component->get(2)->minHours;
                        $amountMax += $component->get(2)->maxHours;
                    @endphp
                @endif

                @if ($application->chatboxBoolean)
                <tr>
                    <th scope="row">{{$component->get(3)->name}}</th>
                    <td>€{{$component->get(3)->fee}}</td>
                    <td>{{$component->get(3)->minHours}}h</td>
                    <td>{{$component->get(3)->maxHours}}h</td>
                </tr>
                    @php
                        $amountFee += $component->get(3)->fee;
                        $amountMin += $component->get(3)->minHours;
                        $amountMax += $component->get(3)->maxHours;
                    @endphp
                @endif

                @if ($application->databaseBoolean)
                <tr>
                    <th scope="row">{{$component->get(4)->name}}</th>
                    <td>€{{$component->get(4)->fee}}</td>
                    <td>{{$component->get(4)->minHours}}h</td>
                    <td>{{$component->get(4)->maxHours}}h</td>
                </tr>
                    @php
                        $amountFee += $component->get(4)->fee;
                        $amountMin += $component->get(4)->minHours;
                        $amountMax += $component->get(4)->maxHours;
                    @endphp
                @endif

                @if ($application->geolocationBoolean)
                <tr>
                    <th scope="row">{{$component->get(5)->name}}</th>
                    <td>€{{$component->get(5)->fee}}</td>
                    <td>{{$component->get(5)->minHours}}h</td>
                    <td>{{$component->get(5)->maxHours}}h</td>
                </tr>
                    @php
                        $amountFee += $component->get(5)->fee;
                        $amountMin += $component->get(5)->minHours;
                        $amountMax += $component->get(5)->maxHours;
                    @endphp
                @endif

                @if ($application->multilanguageBoolean)
                <tr>
                    <th scope="row">{{$component->get(6)->name}}</th>
                    <td>€{{$component->get(6)->fee}}</td>
                    <td>{{$component->get(6)->minHours}}h</td>
                    <td>{{$component->get(6)->maxHours}}h</td>
                </tr>
                    @php
                        $amountFee += $component->get(6)->fee;
                        $amountMin += $component->get(6)->minHours;
                        $amountMax += $component->get(6)->maxHours;
                    @endphp
                @endif

                @if ($application->loginBoolean)
                <tr>
                    <th scope="row">{{$component->get(7)->name}}</th>
                    <td>€{{$component->get(7)->fee}}</td>
                    <td>{{$component->get(7)->minHours}}h</td>
                    <td>{{$component->get(7)->maxHours}}h</td>
                </tr>
                    @php
                        $amountFee += $component->get(7)->fee;
                        $amountMin += $component->get(7)->minHours;
                        $amountMax += $component->get(7)->maxHours;
                    @endphp
                @endif

                @if ($application->mediaBoolean)
                <tr>
                    <th scope="row">{{$component->get(8)->name}}</th>
                    <td>€{{$component->get(8)->fee}}</td>
                    <td>{{$component->get(8)->minHours}}h</td>
                    <td>{{$component->get(8)->maxHours}}h</td>
                </tr>
                    @php
                        $amountFee += $component->get(8)->fee;
                        $amountMin += $component->get(8)->minHours;
                        $amountMax += $component->get(8)->maxHours;
                    @endphp
                @endif

                @if ($application->notificationBoolean)
                <tr>
                    <th scope="row">{{$component->get(9)->name}}</th>
                    <td>€{{$component->get(9)->fee}}</td>
                    <td>{{$component->get(9)->minHours}}h</td>
                    <td>{{$component->get(9)->maxHours}}h</td>
                </tr>
                    @php
                        $amountFee += $component->get(9)->fee;
                        $amountMin += $component->get(9)->minHours;
                        $amountMax += $component->get(9)->maxHours;
                    @endphp
                @endif

                @if ($application->paymentBoolean)
                <tr>
                    <th scope="row">{{$component->get(10)->name}}</th>
                    <td>€{{$component->get(10)->fee}}</td>
                    <td>{{$component->get(10)->minHours}}h</td>
                    <td>{{$component->get(10)->maxHours}}h</td>
                </tr>
                    @php
                        $amountFee += $component->get(10)->fee;
                        $amountMin += $component->get(10)->minHours;
                        $amountMax += $component->get(10)->maxHours;
                    @endphp
                @endif

                @if ($application->statsBoolean)
                <tr>
                    <th scope="row">{{$component->get(11)->name}}</th>
                    <td>€{{$component->get(11)->fee}}</td>
                    <td>{{$component->get(11)->minHours}}h</td>
                    <td>{{$component->get(11)->maxHours}}h</td>
                </tr>
                    @php
                        $amountFee += $component->get(11)->fee;
                        $amountMin += $component->get(11)->minHours;
                        $amountMax += $component->get(11)->maxHours;
                    @endphp
                @endif

                @if ($application->supportBoolean)
                <tr>
                    <th scope="row">{{$component->get(12)->name}}</th>
                    <td>€{{$component->get(12)->fee}}</td>
                    <td>{{$component->get(12)->minHours}}h</td>
                    <td>{{$component->get(12)->maxHours}}h</td>
                </tr>
                    @php
                        $amountFee += $component->get(12)->fee;
                        $amountMin += $component->get(12)->minHours;
                        $amountMax += $component->get(12)->maxHours;
                    @endphp
                @endif

                @if ($application->fileBoolean)
                <tr>
                    <th scope="row">{{$component->get(13)->name}}</th>
                    <td>€{{$component->get(13)->fee}}</td>
                    <td>{{$component->get(13)->minHours}}h</td>
                    <td>{{$component->get(13)->maxHours}}h</td>
                </tr>
                    @php
                        $amountFee += $component->get(13)->fee;
                        $amountMin += $component->get(13)->minHours;
                        $amountMax += $component->get(13)->maxHours;
                    @endphp
                @endif

                @if ($application->userBoolean)
                <tr>
                    <th scope="row">{{$component->get(14)->name}}</th>
                    <td>€{{$component->get(14)->fee}}h</td>
                    <td>{{$component->get(14)->minHours}}h</td>
                    <td>{{$component->get(14)->maxHours}}h</td>
                </tr>
                    @php
                        $amountFee += $component->get(14)->fee;
                        $amountMin += $component->get(14)->minHours;
                        $amountMax += $component->get(14)->maxHours;
                    @endphp
                @endif
                
                
                <hr>
                <tr>
                    <th>
                        @php
                            echo "€" . $amountFee;
                        @endphp
                    </th>
                    <th>
                        @php
                            echo $amountMin . "h";
                        @endphp
                    </th>
                    <th>
                        @php
                            echo $amountMax . "h";
                        @endphp
                    </th>
                </tr>
                <tr>
                    <th scope="row">Hourly Wage (€40)</th>
                    <td></td>
                    <th>
                        @php
                            $priceMin = 40*$amountMin;
                            echo "€" . $priceMin;
                        @endphp
                    </th>
                    <th>
                        @php
                            $priceMax = 40*$amountMax;
                            echo "€" . $priceMax;
                        @endphp
                    </th>
                </tr>
                
            </tbody>
        </table>

        <div class="row">
            <div class="col-12 border border-dark text-right">
                <div class="bold">
                    @php
                        $totalMin = $priceMin + $amountFee;
                        $totalMax = $priceMax + $amountFee;
                        echo "Total Price: €" . $totalMin . " - " . $totalMax;
                    @endphp
                </div>
                
            </div>
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>