<!DOCTYPE html>
<html>
<head>
    <title>Create Category</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Create Category</h1>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="category_name">Name</label>
                <select class="form-control" id="category_name" name="category_name" required>
                    <option value="Running Shoes">Running Shoes</option>
                    <option value="Casual Shoes">Casual Shoes</option>
                    <option value="Sports Shoes">Sports Shoes</option>
                    <option value="Formal Shoes">Formal Shoes</option>
                    <option value="Sandals">Sandals</option>
                    <option value="Boots">Boots</option>
                    <option value="Sneakers">Sneakers</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Category</button>
        </form>
    </div>
</body>
</html>