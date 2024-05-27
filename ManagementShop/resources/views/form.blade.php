<form method="Post" action="/checkcheck">
    <input type="text" name="username" placeholder="Nhập tên">
    <input type="hidden" name="_method" value="delete">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <button type="submit">Submit</button>
</form>
