<h2>Create New Category</h2>
<a href="/admin/categories"><button>Go To list</button></a>

<form method='POST' action="/admin/categories">
    <input type="hidden" name='_token' value="{{csrf_token()}}">
    <p>
        <lable>
        Name:
        </lable>
        <input name='name'>
    </p>
    <p>
        <lable>
            Status: 
        </lable>
        <input type="checkbox" name="status">
    </p>
    <p><input type="submit" value="Save Category"></p>
</form>