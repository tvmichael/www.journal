<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Журнал</title>
    <link rel="shortcut icon" href="<?php echo base_url();?>resources/images/teacher.png" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>resources/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Teacher -->
    <link href="<?php echo base_url();?>resources/css/teacher.css" rel="stylesheet">
</head>
<body>
<!-- HEADER ------------------------------------------------------------------------- -->

<header id="header-journal" data-url="<?php echo base_url('Teacher/ajax_get_data')?>">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <span class="navbar-brand"><?php echo $navbar_text; ?></span>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-journal" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbar-journal">
                <?php if ($navbar_menu == 'journal') { ?>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Виберіть групу<span class="caret"></span>
                        </a>
                        <ul id="list-teacher-group" class="dropdown-menu">
                            <?php
                            foreach ($navbar_list as $row){
                                echo "<li></b><a href='#'";
                                echo "data-id-teacher='",$row['id_teacher'], "' data-id-group='", $row['id_group'], "' data-id-subject='", $row['id_subject'], "'";
                                echo "title='", $row['groups_fullname'], ' | ', $row['subject_fullname'],  "'>";
                                echo "<b>", $row['groups_shortname'], "</b>";
                                echo "<span class='h-select-subject'> ", $row['subject_shortname'], "</span>";
                                echo "</a></li>";
                            }
                            ?>
                        </ul>
                    </li>
                </ul>
                <?php }; ?>
                <?php if ($navbar_menu == 'settings') { ?>
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?php echo base_url('teacher');?>">Відкрити журнал</a>
                        </li>
                    </ul>
                <?php }; ?>

                <ul class="nav navbar-nav navbar-right">
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
            </div><!-- /.navbar-collapse -->

        </div>
    </nav>
</header>