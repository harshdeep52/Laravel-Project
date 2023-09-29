<x-header componentName="fileupload" />
<!-- <h4>FileUploadEx</h4> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>File Upload </h2>
  <form action="uploadFile" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 mt-3">
      <label for="email">Select File:</label>
      <input type="file" class="form-control" id="sel_file"  name="sel_file">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
