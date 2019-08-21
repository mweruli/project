@extends('layouts.adminlayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Products</a> <a href="#" class="current">Add Products</a> </div>
    <h1>Products</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Add Products</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{url('/admin/add-product')}}" name="add_product" id="add_product" novalidate="novalidate"> {{csrf_field()}}
              <div class="control-group">
                <label class="control-label">Under Category</label>
                <div class="controls">
                  <select name="category_id" style="width: 220px;">
                   <?php echo $categories_dropdown;  ?>
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Products Name</label>
                <div class="controls">
                  <input type="text" name="product_name" id="product_name">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Products Code</label>
                <div class="controls">
                  <input type="text" name="product_code" id="product_code">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Products color</label>
                <div class="controls">
                  <input type="text" name="product_color" id="product_color">
                </div>
              </div>
              
              
              <div class="control-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <input type="text" name="description" id="description">
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label">URL</label>
                <div class="controls">
                  <input type="text" name="url" id="url">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Add Category" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection