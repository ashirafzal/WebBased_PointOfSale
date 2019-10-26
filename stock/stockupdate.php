<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/light.css" id="theme">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stock</title>
    <style>
        #container2{
            height: 160vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 1rem;
        }
    </style>
</head>
<script>
        function toggle()
        {
            if(document.getElementById('theme').href = "../css/light.css")
            {
                document.getElementById('theme').href = "../css/dark.css";
            }
            else 
            {
                document.getElementById('theme').href = "../css/light.css";
            }
        }

        function toggle2()
        {
            if(document.getElementById('theme').href = "../css/dark.css")
            {
                document.getElementById('theme').href = "../css/light.css";
            }
            else 
            {
                document.getElementById('theme').href = "../css/dark.css";
            }
        }
</script>
<body>
        <button id="switch" class="" onclick="toggle()"></button>
        <button id="switch2" class="" onclick="toggle2()"></button>
        <div class="container" id="container2">
                <form method="post" class="needs-validation" novalidate>
                    <div class="form-group">
                        <label for="inputEmail">Stock name</label>
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Stock name" required>
                        <div class="invalid-feedback">Please enter a stock name.</div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Stock Quantity / Weight</label>
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Stock Quantity / Weight" required>
                        <div class="invalid-feedback">Please enter a stock quantity / weight.</div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Stock Company</label>
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Stock Company" required>
                        <div class="invalid-feedback">Please enter a stock company.</div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Stock Category</label>
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Stock Category" required>
                        <div class="invalid-feedback">Please enter a stock category.</div>
                    </div>
                    <button type="submit" name="register" class="btn btn-primary btn-block">CREATE STOCK</button>
                    <button type="submit" name="update" class="btn btn-primary btn-block">UPDATE STOCK</button>
                    <button type="submit" name="delete" class="btn btn-primary btn-block">DELETE STOCK</button>
                </form>
                <br><br>
                <div class="table-responsive text-nowrap">
                    <!--Table-->
                    <table  id="table1" class="table table-bordered">
                    <!--Table head-->
                    <thead>
                        <tr>
                        <th>STOCK ID</th>
                        <th>STOCK NAME</th>
                        <th>STOCK QUANTITY / WEIGHT</th>
                        <th>STOCK COMPANY</th>
                        <th>STOCK CATEGORY</th>
                        <th>STOCK TIME</th>
                        <th>STOCK DATE</th>
                        </tr>
                    </thead>
                    <!--Table head-->
                    <!--Table body-->
                    <tbody>
                            <tr>
                            <td>1</td>
                            <td>Tappal Tea</td>
                            <td>0</td>
                            <td>Supreme</td>
                            <td>Food Item</td>
                            <td>03:03:50 pm</td>
                            <td>28/10/2019</td>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>Tappal Tea</td>
                            <td>0</td>
                            <td>Supreme</td>
                            <td>Food Item</td>
                            <td>03:03:50 pm</td>
                            <td>28/10/2019</td>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>Tappal Tea</td>
                            <td>0</td>
                            <td>Supreme</td>
                            <td>Food Item</td>
                            <td>03:03:50 pm</td>
                            <td>28/10/2019</td>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>Tappal Tea</td>
                            <td>0</td>
                            <td>Supreme</td>
                            <td>Food Item</td>
                            <td>03:03:50 pm</td>
                            <td>28/10/2019</td>
                            </tr>
                    </tbody>
                    <!--Table body-->
                    </table>
                    <!--Table-->
                </div>
            </div>
            <!-- JS files: jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="../login/login.js"></script>
</body>
</html>