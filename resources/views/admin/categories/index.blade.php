<h2>Categories List</h2>
<a href="/admin/categories/create"><button>Add New Category</button></a>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Status</th>
        <th>Created At</th>
        <th>Action</th>
    </tr>
    <tbody>
        <?php foreach ($categories as $category):?>
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->status}}</td>
            <td>{{$category->created_at}}</td>
            <td><a href="{{route('admin.categories.edit', $category->id)}}"><button>Edit</button></a>
            <form method="POST" action="/admin/categories/{{$category->id}}"> 
                <input type="hidden" name='_token' value="{{csrf_token()}}">
                <input type="hidden" name='_method' value="DELETE">
            <button type="submit">Delete</button>
            </form>
        </td>
        </tr>

        <?php endforeach;?>
    </tbody>



</table>