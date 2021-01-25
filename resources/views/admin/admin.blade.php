@extends('admin.layouts.app')
@section('sec')
<div class="row">
    <div class="col-md-12">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#homesettings" data-toggle="tab" aria-expanded="true">
                    
                    <span>Home page</span></a></li>
                {{-- <li class=""><a href="#gallery" data-toggle="tab" aria-expanded="false">
                    
                    <span>Gallery</span></a></li>
                
                <li class=""><a href="#lookup_manager" data-toggle="tab" aria-expanded="false">Lookup Manager</a></li>
                <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">Settings</a></li>  --}}
            </ul>
            <div class="tab-content">
                {{-- begin home settings --}}
                <div class="tab-pane active" id="homesettings">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    {{-- <li class="active"><a href="#slideHome" data-toggle="tab" aria-expanded="true"><i class="fab fa-500px"></i><span>Slide</a></li> --}}
                                    {{-- <li class=""><a href="#introHome" data-toggle="tab" aria-expanded="false">Intro Home</a></li> --}}
                                    <li class="active"><a href="#product" data-toggle="tab" aria-expanded="false">Product</a></li>
                                    {{-- <li class=""><a href="#aboutHome" data-toggle="tab" aria-expanded="false">About</a></li>  --}}
                                    
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="product">
                                        <div class="pull-left" style="padding-bottom:10px;">
                                            {{-- <button id="addBtnMeal" href="" class="btn btn-sm btn-primary fa fa-plus">Add
                                                Meal</button> --}}
                                             <a href="" class="btn btn-sm btn-danger" data-toggle="modal"
                                                data-target="#add-product-modal">
                                                <i class="fa fa-plus"> Add product</i>
                                            </a>
                                    
                                            
                                            <a href="" class="btn btn-sm btn-danger" data-toggle="modal"
                                                data-target="#delete-category" style="background-color:#15065a;    margin-left: 175px;">
                                                <i class="fa fa-trash"> Delete Category</i>
                                            </a>

                                            <a href="" class="btn btn-sm btn-primary" data-toggle="modal"
                                            data-target="#add-category-modal">
                                            <i class="fa fa-plus">Add Categorye</i>
                                            </a>

                                            
                                        </div>
                                        <div class="dataTables_wrapper dt-bootstrap4 p-4">
                                            <table id="productTable" width="100%"
                                                class="table table-bordered table-striped dataTable display">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name Product</th>
                                                        <th>price </th>
                                                        <th>Photo</th>
                                                        <th>Description</th>
                                                        <th>quantity</th>
                                                        <th>category</th>
                                                        <th>Control</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach (App\Product::all() as $item)
                                                        <tr>
                                                            <td>{{$item->id}}</td>
                                                            <td>{{$item->name}}</td>
                                                            <td>{{$item->price}}</td>
                                                            <td><img class="table-img" src="{{asset($item->image)}}" alt=""></td>
                                                            <td>{{$item->description}}</td>
                                                            <td>{{$item->quantity}}</td>
                                                            <td>{{$item->category()->first() ? $item->category()->first()->name : ""}}</td>
                                                            <td>
                                                                <a href="" class="btn btn-danger">Delete</a>
                                                                <a href="#edit-product-modal" data-toggle="tab" aria-expanded="false">Edit</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    

                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end home settigs --}}
                

                <div class="modal fade" id="add-product-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                aria-hidden="true">
               <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                   <div class="modal-content">
                       <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLongTitle">Add Product</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           </button>
                       </div>
                       <form action="{{route('store')}}" method="POST"  enctype="multipart/form-data" >

                       {{-- <form action="{{url('/store') }}" method="POST"  enctype="multipart/form-data" > --}}
                           @csrf
                           
                           <div class="modal-body">
                               <div class="form-group">
                                   <label  class="form-control-label">Product Name</label>
                                   <input name="name"  required type="text" class="form-control" >
                               </div>
                              <div class="form-group">
                                        <label class="form-control-label">price </label>
                                        <input name="price" required type="number" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Quantity</label>
                                        <input name="Quantity" type="text" class="form-control">
                                    </div>
                                    
                               <div class="form-group">
                                <label  class="form-control-label">Descreption</label>
                                <input name="desc"  required type="text" class="form-control" >
                               </div>
                               <div class="form-group">
                                <label  class="form-control-label">category:</label>
                                    <select  class="custom-select" id="category" name="category">
                                        
                                        @foreach(\App\Category::all() as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                          
                            </div>
                            
                             <div class="form-group row">
                                   <div class="col-md-12 col-12 d-inline-block">
                                       <label  class="form-control-label">Attach Photo:</label>
                                       <input type="file" name="photo" accept="image/*" class="form-control"></div>
                                    </div>
                                </div>
                             <div class="modal-footer">
                               <button type="button" class="btn bg-white btn-sm" data-dismiss="modal">Cancel
                               </button>
                               <button class="btn btn-sm btn-brand btn-danger fa fa-save"  type="submit" title="Send"><i
                                           class="la la-send" id=""></i>
                                   Save
                               </button>
                           </div>
                       </form>
                       
                   </div>

               </div>
            </div>


            
            <div class="modal fade" id="delete-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
           <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLongTitle">Delete Category</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       </button>
                   </div>
                   <form action="{{route('category-delete') }}" method="POST"  enctype="multipart/form-data" >
                       @csrf
                       
      
                       <div class="form-group">
                        <label  class="form-control-label">category:</label>
                            <select  class="custom-select" id="category" name="category">
                                
                                @foreach(\App\Category::all() as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                                  
                    </div>
                        
                   
                       <div class="modal-footer">
                           <button type="button" class="btn bg-white btn-sm" data-dismiss="modal">Cancel
                           </button>
                           <button class="btn btn-sm btn-brand btn-danger fa fa-save"  type="submit" title="Send"><i
                                       class="la la-send" ></i>
                               delete
                           </button>
                       </div>
                   </form>

                   
               </div>

           </div>
        </div>

        <div class="modal fade" id="add-category-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
       <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLongTitle">add category</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   </button>
               </div>
               <form action="{{route('storeCategory') }}" method="POST"  >
                   @csrf
               
                   <div class="modal-footer">
                    <input type='text' name='category' id='category' />
                       <button type="button" class="btn bg-white btn-sm" data-dismiss="modal">Cancel
                       </button>
                       <button class="btn btn-sm btn-brand btn-danger fa fa-save"  type="submit" title="Send"><i
                                   class="la la-send" ></i>
                                   
                                    
                           Add category
                       </button>
                   </div>
               </form>

               
           </div>

       </div>
    </div>
        

            <div class="modal fade" id="edit-product-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                aria-hidden="true">
               <div class="modal-dialog modal-sm modal-dialog-centered" role="document">

                   <div class="modal-content">
                       <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLongTitle">Edit Product</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           </button>
                       </div>
                       <form action="{{ url('/update') }}" method="POST"  enctype="multipart/form-data" >
                           @csrf
                           <input type="hidden" id="product_id" name="id">
                           <div class="modal-body">
                            <div class="form-group">
                                <label  class="form-control-label">Product Name</label>
                                <input name="name"  required type="text" class="form-control" >
                            </div>
                           <div class="form-group">
                                     <label class="form-control-label">price </label>
                                     <input name="price" required type="number" class="form-control">
                                 </div>
                                 <div class="form-group">
                                     <label class="form-control-label">Quantity</label>
                                     <input name="Quantity" type="text" class="form-control">
                                 </div>
                                 
                            <div class="form-group">
                             <label  class="form-control-label">Descreption</label>
                             <input name="desc"  required type="text" class="form-control" >
                            </div>
                            <div class="form-group">
                             <label  class="form-control-label">category:</label>
                                 <select  class="custom-select" id="category" name="category">
                                     
                                     @foreach(\App\Category::all() as $category)
                                     <option value="{{$category->id}}">{{$category->name}}</option>
                                     @endforeach
                                 </select>
                                       
                         </div>
                         
                          <div class="form-group row">
                                <div class="col-md-12 col-12 d-inline-block">
                                    <label  class="form-control-label">Attach Photo:</label>
                                    <input type="file" name="photo" accept="image/*" class="form-control"></div>
                                 </div>
                             </div>
                          <div class="modal-footer">
                            <button type="button" class="btn bg-white btn-sm" data-dismiss="modal">Cancel
                            </button>
                            <button class="btn btn-sm btn-brand btn-danger fa fa-save"  type="submit" title="Send"><i
                                        class="la la-send" id=""></i>
                                Save
                            </button>
                        </div>
                       </form>
                   </div>

               </div>
           </div>


                 {{-- begin store fields  --}}
                <div class="tab-pane" id="store_field">

                    <ul class="nav nav-tabs margin-top" style="display:none;">
                        <li class="active"><a href="#view_store_field" data-toggle="tab" aria-expanded="true"></a></li>
                        <li class=""><a href="#edit_add_store_field" data-toggle="tab" aria-expanded="true"></a></li>
                    </ul>

                    <div class="tab-content">
                       
                        <div class="tab-pane" id="edit_add_store_field" style="padding-left: 1%;">

                            <div class="panel panel-default" style="width:50%">
                                <div class="panel-heading">
                                    Tab settings
                                </div>

                                <div class="panel-body">
                                    <div class="btn-group flexed" role="group" aria-label="...">
                                        <button type="button" id="save_tab_button" class="btn btn-success fa fa-save"> Save Tab</button>
                                        <button type="button" id="cancel_tab_btn"
                                            class="btn btn-default cancel-btn fa fa-undo"> Cancel</button>
                                        <button type="button" data-myval="0" id="delete_tab"
                                            class="btn btn-danger border-0 side-float fa fa-trash">
                                            Delete</button>
                                    </div>

                                    <ul class="nav nav-tabs margin-top">
                                        <li class="active"><a href="#tabsettings" data-toggle="tab"
                                                aria-expanded="true">Tab Settings</a></li>
                                        <li class=""><a href="#tabgroup" data-toggle="tab"
                                                aria-expanded="false">Groups</a></li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tabsettings">
                                            <div id="edit_add_store_field_attributes"></div>
                                            <div class="form-group">
                                                <label for="label">Group Name</label>
                                                <input class="form-control" formcontrolname="label" id="label_group"
                                                    name="label" dir="ltr">
                                            </div>

                                            <div class="group-photos form-group">
                                                <label>Group Icon (64px * 64px)</label>
                                                <img class="img-preview" id="img_group_icon">
                                                <div class="btn-group">
                                                    <button type="button" id="upload_group_icon_btn"
                                                        class="btn btn-primary "><i class="fa fa-plus"></i>
                                                        Browse</button>
                                                    <input type="file" id="upload_group_icon" style="display:none;">
                                                    <button type="button" id="cancel_img_group_icon" class="btn btn-primary">X</button>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="group-photos form-group">
                                                <label>Group Background (825px * 67px)</label>
                                                <img class="img-preview" id="img_group_background">
                                                <div class="btn-group">
                                                    <button type="button" id="upload_group_background_btn"
                                                        class="btn btn-primary "><i class="fa fa-plus"></i>
                                                        Browse</button>
                                                    <input type="file" id="upload_group_background"
                                                        style="display:none;">
                                                    <button type="button" id="cancel_img_group_background" class="btn btn-primary">X</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="tabgroup">

                                            <button type="button" class="btn btn-primary" id="add_group_store_field_btn" style="margin-bottom:10px;">Add
                                                Group</button>
                                            <!-- <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <span>test</span>
                                                    <button class="btn btn-warning btn-sm pull-right fa fa-edit"
                                                        style="margin-bottom: 10px;"></button>
                                                </div>
                                            </div> -->
                                            <div id="groups_tab"></div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 {{-- end store fields  --}}


                 {{-- begin translation  --}}
                <div class="tab-pane" id="translation">
                    <div class="row">
                        <div class="col-md-12">
                            <button id="addTranslation" type="button" class="btn btn-primary"><i class="fa fa-plus"></i>
                                Add Translation </button>
                            <div class="clearfix" style="padding-bottom:20px;"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">

                            <input type="hidden" id="code_translation">
                            <div class="box box-solid">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Group</h3>
                                    <div class="box-tools">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="box-body no-padding">
                                    <div class="has-feedback">
                                        <input type="text" class="form-control input-sm" placeholder="Search.."
                                            style="width: 100%;" id="searchLanguageGroup">
                                        <span class="fa fa-search form-control-feedback"></span>
                                    </div>

                                    <select id="selectGroup" size="25" style="width: 100%;">
                                        <option value="*"> * </option>
                                        {{-- @foreach($groups as $group)
                                        <option value="{{$group->group}}"> {{$group->group}} </option>
                                        @endforeach --}}
                                    </select>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /. box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Translation</h3>

                                </div>
                                <!-- /.box-header -->
                                <div class="box-body no-padding">

                                    <div class="table-responsive mailbox-messages">
                                        <table id="tableTranslation" class="datatable table table-hover table-striped"
                                            style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Group</th>
                                                    <th>Key</th>
                                                    <th>Translation</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                <!--
                  <tr>
                    <td><div class="icheckbox_flat-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></td>
                    <td class="mailbox-star"><a href="#"><i class="fa text-yellow fa-star"></i></a></td>
                    <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                    <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                    <td class="mailbox-date">15 days ago</td>
                  </tr>
                   -->
                                            </tbody>
                                        </table>
                                        <!-- /.table -->
                                    </div>
                                    <!-- /.mail-box-messages -->
                                </div>
                                <!-- /.box-body -->

                            </div>
                            <!-- /. box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                 {{-- end translation  --}}

                 

                {{-- begin setting  --}}
                <div class="tab-pane" id="settings">
                    <div class="form-horizontal">
                        {{-- <form action="{{route('api.setting.update')}}" method="POST"  enctype="appliction/json" >
                           @csrf
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">About</label>

                            <div class="col-sm-10">
                                <textarea rows="4" name="about" class="form-control" >{{$setting->about}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" value="{{$setting->email}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Mobile Phone</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="mob" value="{{$setting->mob}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputExperience" class="col-sm-2 control-label">Address</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" rows="2" name="address">{{$setting->address}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputSkills" class="col-sm-2 control-label">Open-Hour1 days</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="open_hour_d1" value="{{$setting->open_hour_d1}}">
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="inputSkills" class="col-sm-2 control-label">Open-Hour1 time</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="open_hour_t1" value="{{$setting->open_hour_t1}}">
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="inputSkills" class="col-sm-2 control-label">Open-Hour2 days</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="open_hour_d2" value="{{$setting->open_hour_d2}}">
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="inputSkills" class="col-sm-2 control-label">Open-Hour2 time</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="open_hour_t2" value="{{$setting->open_hour_t2}}">
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="inputSkills" class="col-sm-2 control-label">Facebook</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="facebook" value="{{$setting->facebook}}">
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="inputSkills" class="col-sm-2 control-label">Twitter</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="twitter" value="{{$setting->twitter}}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="inputSkills" class="col-sm-2 control-label">instagram</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="instagram" value="{{$setting->instagram}}">
                            </div>
                        </div>
    
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-warning fa fa-save">Update</button>
                            </div>
                        </div>
                        </form> --}}
                    </div>
                </div>
                {{-- end setting --}}
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection
