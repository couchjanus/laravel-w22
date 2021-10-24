<h2>Edit Category</h2>
<a href="/admin/categories"><button>Go To list</button></a>

<form method='POST' action="/admin/categories/{{$category->id}}">
    <input type="hidden" name='_token' value="{{csrf_token()}}">
    <input type="hidden" name='_method' value="PUT">
    <p>
        <lable>
        Name:
        </lable>
        <input name='name' value="{{$category->name}}">
    </p>
    <p>
        <lable>
            Status: 
        </lable>
        <input type="checkbox" name="status" <?php echo ($category->status==1)?'checked':''?>>
    </p>
    <p><input type="submit" value="Update Category"></p>
</form>