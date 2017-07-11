<?php
/**
 * Part of pokemon project.
 *
 * @copyright  Copyright (C) 2017 ${ORGANIZATION}.
 * @license    __LICENSE__
 */

?>

@extends('_global.html')
@section('content')
<div class="container">

    <h1>Hello Task</h1>

    <form action="<?php echo $router->route('task')?>" method="post" class="form-horizontal">
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control" value="">
        </div>
        <div class="form-group">
            <label for="">Content</label>
            <br>
            <textarea name="content" class="form-control" rows="7" cols="50"></textarea>
        </div>
    </form>
</div>
@stop
