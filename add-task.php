<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task | TO-DO-LIST</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="task-add.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="main">
    <div class="container-fluid">
        <h1 id="m-header" class="mt-4 mb-4">TODO RPG</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="cont1">
                    <img src="img/pfp.png" width="260px" height="240px" alt="Profile Picture">
                    <div class="info">
                        <span class="mb-4">Username: Totem</span>
                        <span class="mb-4">Level: 17</span>
                        <span class="mb-4">Class: Warrior</span>
                    </div>
                </div>
                <h3 id="header" class="mt-5 mb-4">General Stats:</h3>
                <div class="progress-container">
                    <span><i class="fa-solid fa-dumbbell me-2"></i> Physical</span>
                    <div class="progress">
                        <div class="progress-bar physical"></div>
                    </div>
                </div>
            
                <div class="progress-container">
                    <span><i class="fa-solid fa-brain me-2"></i> Intellect</span>
                    <div class="progress">
                        <div class="progress-bar intelect"></div>
                    </div>
                </div>
            
                <div class="progress-container">
                    <span><i class="fa-solid fa-heart me-2"></i> Happiness</span>
                    <div class="progress">
                        <div class="progress-bar happiness"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="task-form">
                    <h3 class="mb-4">Add Task</h3>
                    <form action="" method="post">
                        <div class="mb-4">
                            <label for="task-name" class="form-label">Task Name</label>
                            <input type="text" id="task-name" class="form-control" placeholder="Enter Task Name">
                        </div>
                        <div class="mb-4">
                            <label for="task-details" class="form-label">Task Details</label>
                            <input type="text" id="task-details" class="form-control" placeholder="Enter Task Details">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <div class="d-flex justify-content-around">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="category" id="physical" value="physical">
                                    <label class="form-check-label" for="physical">
                                        <i class="fa-solid fa-dumbbell me-2"></i> Physical
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="category" id="intellect" value="intellect">
                                    <label class="form-check-label" for="intellect">
                                        <i class="fa-solid fa-brain me-2"></i> Intellect
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="category" id="happiness" value="happiness">
                                    <label class="form-check-label" for="happiness">
                                        <i class="fa-solid fa-heart me-2"></i> Happiness
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around mt-4">
                            <input type="submit" value="Add Task" class="btn btn-success">
                            <input type="reset" value="Cancel" class="btn btn-danger">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/f28e48d922.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
