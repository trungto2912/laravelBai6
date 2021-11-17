@extends('admin_layout')
@section('admin_content')
  <div class="row">
  
   <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Thêm danh mục sản phẩm
                        </header>
                        <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                        ?>
                           
                        <div class="panel-body">
                            <div class="position-center">
                             
                            <form role="form" action="{{URL::to('/save-category-product')}}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label >Tên danh mục</label>
                                    <input name="name" type="text" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label >slug</label>
                                    <input name="slug" type="text" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label >Mô tả danh mục</label>
                                    <textarea name="desc" class="form-control" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label >Từ khóa danh mục</label>
                                    <textarea name="keywords" class="form-control" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Hiển thị</label>
                                    <select name="status" class="form_control input-sm m-bot15">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển thị</option>
 
                                    </select>
                                </div>
                               
                               
                                
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>
@endsection