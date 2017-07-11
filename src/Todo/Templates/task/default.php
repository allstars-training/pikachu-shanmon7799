<?php
/**
 * Part of pokemon project.
 *
 * @copyright  Copyright (C) 2017 ${ORGANIZATION}.
 * @license    __LICENSE__
 */

$this->extend('_global.html')
?>

<?php $this->block('content')?>
<div class="container">
<h1>Hello Task</h1>

<form action="<?php echo $router->route('task')?>" method="post" class="form-horizontal">
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" value="">
        </div>
        <div class="form-group">
            <label for="">Content</label>
            <br>
            <textarea name="content" rows="7" cols="30"></textarea>
        </div>
</form>
</div>
<?php $this->endblock() ?>
