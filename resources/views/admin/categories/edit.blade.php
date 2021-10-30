<h2>Edit Category</h2>
<a href="/admin/categories"><button>Go To list</button></a>

<form method='POST' action="/admin/categories/{{$category->id}}">
    @csrf
    @method("PUT")
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
        <input type="checkbox" name="status" @if($category->status==1) 'checked' @endif>
    </p>
    <p><input type="submit" value="Update Category"></p>
</form>