<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Статистика</title>
    <link rel="shortcut icon" href="<?php echo base_url();?>resources/images/statistics.jpg" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>resources/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Teacher -->
    <link href="<?php echo base_url();?>resources/css/teacher.css" rel="stylesheet">
</head>
<body>

<!-- HEADER ------------------------------------------------------------------------- -->
<header>
    <nav class="navbar navbar-default navbar-top">
        <div class="container-fluid">

            <div class="navbar-header">
                <span class="navbar-brand"><?php echo $navbar_brand; ?></span>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-journal" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbar-journal">

                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url('inspector');?>">Головна</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle"
                           data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">
                            Викладачі
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url('inspector/teacher');?>">Навантаження викладачів</a></li>
                            <li><a href="<?php echo base_url('inspector/teacher');?>">Список викладачів</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle"
                           data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">
                            Студенти
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url('inspector/students');?>">Навантаження викладачів</a></li>
                            <li><a href="<?php echo base_url('inspector/students');?>">Список викладачів</a></li>
                        </ul>
                    </li>
                </ul>




                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo base_url('teacher/message');?>"><span class="glyphicon glyphicon-envelope"></span></a>
                    </li>
                    <li><a href="<?php echo base_url('teacher/settings')?>">
                            <span class="glyphicon glyphicon-user"></span>
                            <?php echo $_SESSION['name'], ' ', $_SESSION['surname'] ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('login/logout')?>">
                            <span class="glyphicon glyphicon-log-out"></span>
                            Вихід
                        </a>
                    </li>
                </ul>
            </div><!-- navbar-collapse -->

        </div>
    </nav>
</header>
