<?php

/**
 * Created by PhpStorm.
 * User: Pragmadim
 * Date: 20.03.2020
 * Time: 17:15
 */
?>

<style>
    .forms {
        margin: 0px 0px 15px 15px;
        width: 300px;
        
    }

</style>

<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Почта</title>
</head>
<body>
<h1 style="text-align: center"> Wizart Mail </h1>

<div class="forms" id="calendar">
    <input class="form-control" type="date" placeholder="Укажите дату">
</div>

<div class="forms" id="track">
    <input class="form-control" type="text" placeholder="Трек-номер">
</div>

<div class="forms" id="money">
    <input class="form-control" type="number" step="0.01" placeholder="Сумма">
</div>

<div class="forms" id="comment">
    <textarea class="form-control" rows="3" placeholder="Комментарий"></textarea>
</div>

<div>
    <input class="btn btn-primary" style="margin: 0px 0px 5px 15px" type="submit" value="Добавить">
</div>

<div style="margin-top: 30px">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Дата отправки</th>
            <th scope="col">Трек-номер</th>
            <th scope="col">Сумма</th>
            <th scope="col">Комментарий</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Значение</td>
        </tr>

        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

