<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MAMT</title>

        <!-- Fonts -->
      
        <!-- Styles -->
      

        <style>
           @import url(https://fonts.googleapis.com/css?family=Roboto);

            body {
            background-color: steelblue;
            color: #fff;
            font-family: 'Muli', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
            margin: 0;
            }

            a {
            text-decoration: none;
            color: rgb(237, 248, 252);
            }

        </style>
    </head>
    <body class="antialiased">
        <div class="">
            <br><br>
            <h2>About MAMT Project</h2>
            <p>MAMT : Multi Auth with Multi Tables
            This project has three different users with their different Models, Tables, Gaurds, and Providers respectively.
            <ul>
                <li>
                <a href="{{ route('superadmin.login') }}">Super Admin Login </a>  <br><small> admin@admin.com : password  </small>
                </li>
                <li>
                    <a href="{{ route('company.login') }}">Company Login </a>  <br><small> company@company.com : password  </small>
                </li>
                <li>
                    <a href="{{ route('employee.login') }}">Employee Login </a> <br><small> employee@employee.com : password  </small>
                </li>
            </ul>    
            </p>


            <ul>
            <li>
            <strong><a href="https://github.com/RishikantSri/mamt/commit/7fb48d90a2e1d7bcb6825b30ef751a21defe2945">MAMT: Laravel 9 Initial Installation </a></strong>
            </li>
            <li>
            <strong><a href="https://github.com/RishikantSri/mamt/commit/92c4cf80310c8fd562bb22d52b1a7d213d8c2b7b">MAMT : Models, Migration, Factory, Seederd base classe created using command</a></strong>
            </li>
            <li>
            <strong><a href="https://github.com/RishikantSri/MAMT/commit/8b98e09bc9addc8ad7c1fcc4202e8900a6ab4681">MAMT : Storing data to database</a></strong>
            </li>
            <li>
            <strong><a href="https://github.com/RishikantSri/mamt/commit/83af8825e6ab0a4a6d17a9e489d7d43b521ed76c">MAMT : Migration files are updated and migrated </a></strong>
            </li>
            <li>
            <strong><a href="https://github.com/RishikantSri/mamt/commit/f2094c88f86d872a0c9cf9927443073caec245ed">MAMT : Models are updated</a></strong>
            </li>
            <li>
            <strong><a href="https://github.com/RishikantSri/mamt/commit/76a8a61a89277cd889f398b31abfdade93830516">MAMT : Factory, seeder updated. Ran Seeder</a></strong>
            </li>
            <li>
            <strong><a href="https://github.com/RishikantSri/mamt/commit/2527327f442644ad24dd1aae0c8c649bef292811">MAMT: Company migration updated </a></strong>
            </li>
            <li>
            <strong><a href="https://github.com/RishikantSri/mamt/commit/5f6a14c0b12443e31b4e700971635e343f3a8d57">MAMT: Providers and Gaurds are added Config/Auth.php </a></strong>
            </li>
            <li>
            <strong><a href="https://github.com/RishikantSri/mamt/commit/bb68e2105d31c82aa5bf5c9366f55e4c83bfa6e0">MAMT: Middleware added, routes added with groups </a></strong>
            </li>
            <li>
            <strong><a href="https://github.com/RishikantSri/mamt/commit/c56deaa03b4f2e20ef5cb3d147bf1c75a19c583b">MAMT: Super Admin Login functionality, View, Routes  </a></strong>
            </li>
            <li>
            <strong><a href="https://github.com/RishikantSri/mamt/commit/c56deaa03b4f2e20ef5cb3d147bf1c75a19c583b">MAMT: Company and Employee Login functionality, View, Routes </a></strong>
            </li>
            <li>
            <strong><a href="https://github.com/RishikantSri/mamt/commit/4f5a134af30cb95446b55367ec729a7b2fd3d221">MAMT: New Company Registration in Super Admin Dashboard </a></strong>
            </li>
            <li>
            <strong><a href="">MAMT: New Employee Registration in Company Dashboard </a></strong>
            </li>
            </ul>
            
        </div>
    </body>
</html>
