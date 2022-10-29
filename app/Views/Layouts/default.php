<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection("title") ?> - TaskApp</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/945067ef7d.js" crossorigin="anonymous"></script>    
</head>
<body>
    <!-- Navigation BAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?= site_url("/home/index") ?>">Home</a>
        
        <?php if(current_user()):?>
        <!-- Dropdown -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">      
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?= site_url("/tasks/index") ?>" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tasks
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?= site_url("/tasks/index") ?>">Tasks</a>
                        <a class="dropdown-item" href="<?= site_url("/tasks/new") ?>">Create Task</a>                        
                    </div>
                </li>
                <!-- End of Dropdown -->
                <?php if(current_user()->is_admin):?>
                    <li class="nav-item"><a href="<?= site_url("/admin/users")?>" class="nav-link">Users</a></li>
                <?php endif;?>
            </ul>
            
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown"><a class="nav-link" href="<?=site_url("/logout") ?>">Logout</a></li>
            </ul>
        </div>   
        <?php else:?>  
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto"> 
                    <li class="nav-item dropdown"><a class="nav-link" href="<?=site_url("/signup") ?>">Register</a></li>
                    <li class="nav-item dropdown"><a class="nav-link" href="<?=site_url("/login") ?>">Login</a></li>
                </ul>
            </div>   
        <?php endif;?>
    </nav>


    <!--Mensagens de aviso ou sucesso -->
    <?php if(session()->has('warning')):?>
        <div class="alert alert-danger" role="alert">
            <button class='alert-danger alert-button close'style="border-radius:100%; border: 0px; position:relative; float:right;"><i class="fa-sharp fa-solid fa-xmark"></i></button>
                <?= session('warning') ?>
            <!--<button><i class="fa-sharp fa-solid fa-xmark"></i></button>-->
        </div>
    <?php endif ?>
    
    <?php if(session()->has('info')):?>
        <div class="alert alert-success" role="alert">
            <button class='alert-success alert-button close' style="border-radius:100%; border: 0px; position:relative; float:right;"><i class="fa-sharp fa-solid fa-xmark"></i></button>            
                <?= session('info') ?>
        </div>
    <?php endif ?>

    <?php if(session()->has('error')):?>
        <div class="alert alert-success" role="alert">
            <button class='alert-success alert-button close'style="border-radius:100%; border: 0px; position:relative; float:right;"><i class="fa-sharp fa-solid fa-xmark"></i></button>
                    <?= session('error') ?>
            <!--<button><i class="fa-sharp fa-solid fa-xmark"></i></button>-->
        </div>
    <?php endif ?>

    <!-- Content Section -->
    <?= $this->renderSection("content") ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script>
        
        
        
        $(document).ready(function($){
            
            
            $(".close").click(function(event){
                $(".alert").fadeOut(2000);
            });


        });
    </script>


    


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>