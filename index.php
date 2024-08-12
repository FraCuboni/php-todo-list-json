<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- BOOTSTRAP -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- LINK -->
    <link rel="stylesheet" href="css/style.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- VUE -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>
    <div id="app">
        <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
            <div class="text-center">
                <!-- Titolo -->
                <h1 class="mb-4">ToDoList</h1>

                <!-- ToDoList -->
                <div class="col-12 mx-auto mb-4">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="mr-3">A list item</span>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="mr-3">A second list item</span>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="mr-3">A third list item</span>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </li>
                    </ul>
                </div>

                <!-- inserisci ToDo -->
                <div class="input-group col-12 mx-auto mb-4">
                    <input type="text" class="form-control" placeholder="Task you need to add" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">add</button>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </div>

</body>

</html>