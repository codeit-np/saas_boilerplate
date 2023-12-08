<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="{{ route('subscribe.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input id="name" class="form-control" type="text" name="name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" type="text" name="email">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" type="password" name="password">
                    </div>

                    <div class="form-group">
                        <label for="tenant">Tenant (Tenant Company Name Goes Here)</label>
                        <input id="tenant" class="form-control" type="text" name="tenant">
                    </div>

                    <label for="Domain">Domain</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" name="domain" aria-label="Domain"
                            aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">@localhost.com</span>
                    </div>
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

</html>
